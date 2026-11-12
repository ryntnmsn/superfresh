import { createApp } from 'vue';
import App from './App.vue';
import Quill from 'quill';
import 'quill/dist/quill.snow.css';

const appElement = document.getElementById('app');

if (appElement) {
    createApp(App).mount(appElement);
}

const pageSections = document.querySelectorAll('main > section');
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

document.querySelectorAll('main > section:not(:first-child) img').forEach((image) => {
    image.loading = 'lazy';
});

if (!prefersReducedMotion && 'IntersectionObserver' in window) {
    const sectionObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.dataset.reveal = 'visible';
                observer.unobserve(entry.target);
            }
        });
    }, {
        rootMargin: '0px 0px -8% 0px',
        threshold: 0.1,
    });

    pageSections.forEach((section) => {
        section.dataset.reveal = 'pending';
        sectionObserver.observe(section);
    });
}

document.querySelectorAll('[data-quill-editor]').forEach((editorElement) => {
    const quill = new Quill(editorElement, {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ header: [1, 2, 3, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                ['blockquote', 'link'],
                ['clean'],
            ],
        },
    });

    const initialContent = editorElement.dataset.content ?? '';

    if (initialContent) {
        quill.setContents(quill.clipboard.convert({ html: initialContent }));
    }

    editorElement.closest('form').addEventListener('submit', () => {
        document.getElementById(editorElement.dataset.input).value = quill.getSemanticHTML();
    });
});

document.querySelectorAll('input[type="file"][data-preview-target]').forEach((imageInput) => {
    const preview = document.getElementById(imageInput.dataset.previewTarget);
    let previewUrl;

    imageInput.addEventListener('change', () => {
        const image = imageInput.files?.[0];

        if (!image || !image.type.startsWith('image/')) {
            return;
        }

        if (previewUrl) {
            URL.revokeObjectURL(previewUrl);
        }

        previewUrl = URL.createObjectURL(image);
        preview.src = previewUrl;
        preview.hidden = false;
    });
});

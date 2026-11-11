import { createApp } from 'vue';
import App from './App.vue';
import Quill from 'quill';
import 'quill/dist/quill.snow.css';

const appElement = document.getElementById('app');

if (appElement) {
    createApp(App).mount(appElement);
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

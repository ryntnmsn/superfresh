import { createApp } from 'vue';
import App from './App.vue';
import Quill from 'quill';
import 'quill/dist/quill.snow.css';

const cookieConsentName = 'sf_cookie_consent';
const cookieConsentBanner = document.getElementById('cookie-consent');

function getCookie(name) {
    const cookie = document.cookie
        .split('; ')
        .find((entry) => entry.startsWith(`${name}=`));

    return cookie ? decodeURIComponent(cookie.split('=').slice(1).join('=')) : null;
}

function loadGoogleTagManager() {
    if (document.getElementById('google-tag-manager')) {
        return;
    }

    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });

    const tagManagerScript = document.createElement('script');
    tagManagerScript.id = 'google-tag-manager';
    tagManagerScript.async = true;
    tagManagerScript.src = 'https://www.googletagmanager.com/gtm.js?id=GTM-TBTS34FH';
    document.head.append(tagManagerScript);
}

if (cookieConsentBanner) {
    const consentChoice = getCookie(cookieConsentName);

    if (consentChoice === 'accepted') {
        loadGoogleTagManager();
    } else if (!['accepted', 'rejected'].includes(consentChoice)) {
        cookieConsentBanner.classList.remove('hidden');
        cookieConsentBanner.setAttribute('aria-hidden', 'false');
    }

    cookieConsentBanner.querySelectorAll('[data-cookie-consent]').forEach((button) => {
        button.addEventListener('click', () => {
            const choice = button.dataset.cookieConsent;
            const secureAttribute = window.location.protocol === 'https:' ? '; Secure' : '';

            document.cookie = `${cookieConsentName}=${choice}; Max-Age=31536000; Path=/; SameSite=Lax${secureAttribute}`;
            cookieConsentBanner.classList.add('hidden');
            cookieConsentBanner.setAttribute('aria-hidden', 'true');

            if (choice === 'accepted') {
                loadGoogleTagManager();
            }
        });
    });

    document.querySelectorAll('[data-open-cookie-consent]').forEach((button) => {
        button.addEventListener('click', () => {
            cookieConsentBanner.classList.remove('hidden');
            cookieConsentBanner.setAttribute('aria-hidden', 'false');
            cookieConsentBanner.querySelector('[data-cookie-consent="rejected"]')?.focus();
        });
    });
}

const newsletterPopup = document.getElementById('newsletter-popup');

if (newsletterPopup instanceof HTMLDialogElement) {
    const dismissalKey = 'sf_newsletter_popup_dismissed';
    const hasSubscribed = Boolean(document.getElementById('newsletter-subscription-success'));
    const hasErrors = newsletterPopup.dataset.hasErrors === 'true';

    const wasDismissed = () => {
        try {
            return window.sessionStorage.getItem(dismissalKey) === 'true';
        } catch {
            return false;
        }
    };

    const rememberDismissal = () => {
        try {
            window.sessionStorage.setItem(dismissalKey, 'true');
        } catch {
            // The popup can still be dismissed for the current page if storage is unavailable.
        }
    };

    newsletterPopup.addEventListener('close', rememberDismissal);
    newsletterPopup.querySelector('[data-newsletter-dismiss]')?.addEventListener('click', () => newsletterPopup.close());

    if (hasSubscribed) {
        rememberDismissal();
        newsletterPopup.showModal();
    } else if (hasErrors) {
        newsletterPopup.showModal();
    } else if (!wasDismissed()) {
        window.setTimeout(() => {
            if (!wasDismissed() && !newsletterPopup.open) {
                newsletterPopup.showModal();
            }
        }, 10000);
    }
}

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

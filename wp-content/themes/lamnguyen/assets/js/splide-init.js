(() => {
    'use strict';

    const parseOptions = (value) => {
        if (!value) {
            return {};
        }

        try {
            return JSON.parse(value);
        } catch (error) {
            return {};
        }
    };

    const mountSplide = () => {
        if (typeof window.Splide === 'undefined') {
            return;
        }

        const extensions = window.splide && window.splide.Extensions ? window.splide.Extensions : {};

        document.querySelectorAll('.splide').forEach((element) => {
            const options = parseOptions(element.dataset.splide);
            const instance = new window.Splide(element, options);
            instance.mount(extensions);
        });
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', mountSplide);
    } else {
        mountSplide();
    }
})();
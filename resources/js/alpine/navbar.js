document.addEventListener('alpine:init', () => {
    Alpine.data('navbar', () => ({
        open: false,
        scrolled: false,
        init() {
            this.scrolled = window.scrollY > 10;
            window.addEventListener('scroll', () => {
                this.scrolled = window.scrollY > 10;
            });
        },
        toggle() {
            this.open = !this.open;
        }
    }));
});

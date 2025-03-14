document.addEventListener('alpine:init', () => {
    Alpine.data('faq', () => ({
        activeIndex: null,
        toggle(index) {
            this.activeIndex = this.activeIndex === index ? null : index;
        },
        isOpen(index) {
            return this.activeIndex === index;
        }
    }));
});

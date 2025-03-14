document.addEventListener('alpine:init', () => {
    Alpine.data('testimonials', () => ({
        current: 0,
        items: [],
        init() {
            this.items = Array.from(this.$el.querySelectorAll('.testimonial-item'));
            this.startAutoplay();
        },
        next() {
            this.current = (this.current + 1) % this.items.length;
        },
        prev() {
            this.current = (this.current - 1 + this.items.length) % this.items.length;
        },
        goto(index) {
            this.current = index;
        },
        startAutoplay() {
            setInterval(() => {
                this.next();
            }, 5000);
        }
    }));
});

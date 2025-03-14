document.addEventListener('alpine:init', () => {
    Alpine.data('counter', (target) => ({
        current: 0,
        target: target,
        init() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.animate();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            
            observer.observe(this.$el);
        },
        animate() {
            const duration = 2000;
            const step = this.target / (duration / 16);
            const startTime = performance.now();
            
            const updateCounter = (currentTime) => {
                const elapsedTime = currentTime - startTime;
                
                if (elapsedTime < duration) {
                    this.current = Math.min(Math.floor(step * elapsedTime), this.target);
                    requestAnimationFrame(updateCounter);
                } else {
                    this.current = this.target;
                }
            };
            
            requestAnimationFrame(updateCounter);
        }
    }));
});

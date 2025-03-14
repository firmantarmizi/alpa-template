export default () => ({
    activeTab: -1,
    
    toggle(index) {
        this.activeTab = this.activeTab === index ? -1 : index;
    },
    
    isOpen(index) {
        return this.activeTab === index;
    }
});

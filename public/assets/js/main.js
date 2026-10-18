// public/js/main.js
document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const menuBtn = document.getElementById('menu-btn');
    const closeBtn = document.getElementById('close-sidebar');

    function toggleSidebar() {
        if (sidebar) {
            sidebar.classList.toggle('-translate-x-full');
        }
    }

    if (menuBtn) menuBtn.addEventListener('click', toggleSidebar);
    if (closeBtn) closeBtn.addEventListener('click', toggleSidebar);
    
    // Interaktivitas Chart
    const chartArea = document.getElementById('revenue-chart');
    if (chartArea) {
        chartArea.addEventListener('mouseenter', () => {
            chartArea.style.opacity = '0.8';
        });
        chartArea.addEventListener('mouseleave', () => {
            chartArea.style.opacity = '1';
        });
    }
});
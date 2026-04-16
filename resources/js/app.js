document.addEventListener('DOMContentLoaded', () => {
    const shell = document.getElementById('admin-shell');
    const toggle = document.getElementById('menu-toggle');
    const overlay = document.getElementById('admin-overlay');

    if (!shell || !toggle || !overlay) {
        return;
    }

    const closeSidebar = () => shell.classList.remove('sidebar-open');

    toggle.addEventListener('click', () => {
        shell.classList.toggle('sidebar-open');
    });

    overlay.addEventListener('click', closeSidebar);

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            closeSidebar();
        }
    });
});

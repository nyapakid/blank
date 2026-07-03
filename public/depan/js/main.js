// Fungsi utama untuk perpindahan halaman (routing dinamis) tanpa reload
function switchPage(pageId) {
    // Scroll ke bagian teratas halaman agar tampilan rapi
    window.scrollTo({ top: 0, behavior: 'smooth' });

    // Menutup collapse menu bootstrap pada mobile setelah diklik
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.getElementById('navbarContent');
    if (navbarCollapse.classList.contains('show')) {
        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
        if (bsCollapse) {
            bsCollapse.hide();
        }
    }
}
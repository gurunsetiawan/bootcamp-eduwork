// Contoh: auto-pause video saat modal promo ditutup (kalau nanti ada video)
document.addEventListener('hidden.bs.modal', function (event) {
    if (event.target.id === 'promoModal') {
        const videos = event.target.querySelectorAll('video');
        videos.forEach(v => { try { v.pause(); } catch (e) {} });
    }
});

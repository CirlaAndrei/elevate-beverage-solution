// Scroll-triggered reveal
const revealEls = document.querySelectorAll('.reveal');
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            revealObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.12 });

revealEls.forEach(el => revealObserver.observe(el));
// ── TESTIMONIALS SLIDER ──────────────────────────────────────
const track       = document.getElementById('testimonialsTrack');
const prevBtn     = document.getElementById('testimonialsPrev');
const nextBtn     = document.getElementById('testimonialsNext');
const dotsWrap    = document.getElementById('testimonialsDots');

if (track) {
    const cards      = Array.from(track.children);
    const cardWidth  = () => cards[0].offsetWidth + 24; // card + gap
    let current      = 0;
    let isDragging   = false;
    let startX       = 0;
    let startScroll  = 0;

    // Build dots
    cards.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.classList.add('testimonials__dot');
        dot.setAttribute('aria-label', `Go to testimonial ${i + 1}`);
        if (i === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goTo(i));
        dotsWrap.appendChild(dot);
    });

    const dots = Array.from(dotsWrap.children);

    function goTo(index) {
        current = Math.max(0, Math.min(index, cards.length - 1));
        track.style.transform = `translateX(-${current * cardWidth()}px)`;
        dots.forEach((d, i) => d.classList.toggle('active', i === current));
    }

    prevBtn.addEventListener('click', () => goTo(current - 1));
    nextBtn.addEventListener('click', () => goTo(current + 1));

    // Drag support
    track.addEventListener('mousedown', e => {
        isDragging = true;
        startX     = e.pageX;
        startScroll = current * cardWidth();
        track.style.transition = 'none';
    });

    window.addEventListener('mousemove', e => {
        if (!isDragging) return;
        const diff = startX - e.pageX;
        track.style.transform = `translateX(-${startScroll + diff}px)`;
    });

    window.addEventListener('mouseup', e => {
        if (!isDragging) return;
        isDragging = false;
        track.style.transition = '';
        const diff = startX - e.pageX;
        if (diff > 60)       goTo(current + 1);
        else if (diff < -60) goTo(current - 1);
        else                 goTo(current);
    });

    // Touch support
    track.addEventListener('touchstart', e => {
        startX      = e.touches[0].pageX;
        startScroll = current * cardWidth();
        track.style.transition = 'none';
    }, { passive: true });

    track.addEventListener('touchend', e => {
        track.style.transition = '';
        const diff = startX - e.changedTouches[0].pageX;
        if (diff > 40)       goTo(current + 1);
        else if (diff < -40) goTo(current - 1);
        else                 goTo(current);
    });

    // Auto-advance every 6 seconds
    let autoplay = setInterval(() => {
        goTo(current === cards.length - 1 ? 0 : current + 1);
    }, 6000);

    // Pause autoplay on interaction
    [prevBtn, nextBtn, track].forEach(el => {
        el.addEventListener('mousedown', () => clearInterval(autoplay));
        el.addEventListener('touchstart', () => clearInterval(autoplay), { passive: true });
    });

    // Recalculate on resize
    window.addEventListener('resize', () => goTo(current));
}

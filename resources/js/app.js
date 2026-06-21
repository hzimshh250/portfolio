/**
 * DEV_PORTFOLIO :: VANILLA JS RUNTIME
 * =====================================
 * No frameworks. Pure JavaScript.
 */

/* ─────────────────────────────────────────────────────────
   1. LIVE CLOCK
───────────────────────────────────────────────────────── */
(function initClock() {
    const el = document.getElementById('hero-clock');
    if (!el) return;

    function tick() {
        const now = new Date();
        const h = String(now.getHours()).padStart(2, '0');
        const m = String(now.getMinutes()).padStart(2, '0');
        const s = String(now.getSeconds()).padStart(2, '0');
        el.textContent = `${h}:${m}:${s}`;
    }

    tick();
    setInterval(tick, 1000);
})();


/* ─────────────────────────────────────────────────────────
   2. INTERSECTION OBSERVER — Scroll Fade-In
───────────────────────────────────────────────────────── */
(function initScrollAnimations() {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );

    document.querySelectorAll('.fade-in').forEach((el) => observer.observe(el));
})();


/* ─────────────────────────────────────────────────────────
   3. MEMORY ALLOCATION BAR — Animated on scroll
───────────────────────────────────────────────────────── */
(function initMemoryBar() {
    const bar = document.getElementById('mem-bar');
    const pct = document.getElementById('mem-pct');
    if (!bar || !pct) return;

    const target = parseFloat(bar.style.getPropertyValue('--target-w') || '87%');
    let started = false;

    const observer = new IntersectionObserver(
        (entries) => {
            if (entries[0].isIntersecting && !started) {
                started = true;
                let current = 0;
                const duration = 2000;
                const startTime = performance.now();

                function animate(now) {
                    const elapsed = now - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    current = eased * target;
                    bar.style.width = `${current}%`;
                    pct.textContent = `${Math.round(current)}%`;
                    if (progress < 1) requestAnimationFrame(animate);
                }

                requestAnimationFrame(animate);
            }
        },
        { threshold: 0.5 }
    );

    observer.observe(bar.closest('section') || bar);
})();


/* ─────────────────────────────────────────────────────────
   4. ACTIVE NAV LINK on Scroll
───────────────────────────────────────────────────────── */
(function initActiveNav() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    navLinks.forEach((link) => {
                        link.style.color = '';
                        if (link.getAttribute('href') === `#${entry.target.id}`) {
                            link.style.color = '#ec4899';
                        }
                    });
                }
            });
        },
        { threshold: 0.4 }
    );

    sections.forEach((s) => observer.observe(s));
})();


/* ─────────────────────────────────────────────────────────
   5. CONTACT FORM — Real Laravel Mail submission
───────────────────────────────────────────────────────── */
(function initContactForm() {
    const form = document.getElementById('contact-form');
    if (!form) return;

    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || '';

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const btn     = document.getElementById('form-submit');
        const name    = document.getElementById('form-name').value.trim();
        const email   = document.getElementById('form-email').value.trim();
        const message = document.getElementById('form-message').value.trim();

        if (!name || !email || !message) {
            setBtn(btn, '// ALL_FIELDS_REQUIRED', '#f59e0b', false);
            setTimeout(() => resetBtn(btn), 3000);
            return;
        }

        setBtn(btn, '// TRANSMITTING...', '', true);

        try {
            const res = await fetch('/contact', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept':       'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({ name, email, message }),
            });

            if (res.ok) {
                setBtn(btn, '// MESSAGE_SENT ✓', '#22c55e', false);
                form.reset();
                setTimeout(() => resetBtn(btn), 4000);
            } else {
                const data = await res.json().catch(() => ({}));
                const firstError = data?.errors
                    ? Object.values(data.errors)[0]?.[0]
                    : 'TRANSMISSION_FAILED';
                setBtn(btn, `// ${firstError.toUpperCase()}`, '#ef4444', false);
                setTimeout(() => resetBtn(btn), 4000);
            }
        } catch {
            setBtn(btn, '// CONNECTION_ERROR', '#ef4444', false);
            setTimeout(() => resetBtn(btn), 4000);
        }
    });

    function setBtn(btn, text, color, disabled) {
        btn.textContent = text;
        btn.disabled    = disabled;
        btn.style.opacity     = disabled ? '0.6' : '1';
        btn.style.color       = color || '';
        btn.style.borderColor = color || '';
    }

    function resetBtn(btn) {
        btn.textContent = 'TRANSMIT_MESSAGE //';
        btn.disabled    = false;
        btn.style.opacity     = '';
        btn.style.color       = '';
        btn.style.borderColor = '';
    }
})();



/* ─────────────────────────────────────────────────────────
   6. TERMINAL GLITCH on Hero Name — hover + touch + mobile auto-play
───────────────────────────────────────────────────────── */
(function initGlitch() {
    const hero = document.querySelector('#hero h1');
    if (!hero) return;

    const chars = '!@#$%^&*<>?/\\|[]{}~`';
    let glitchInterval = null;

    function runGlitch() {
        if (glitchInterval) return;
        let count = 0;
        const spans = hero.querySelectorAll('span');
        const originals = Array.from(spans).map((s) => s.textContent);

        glitchInterval = setInterval(() => {
            spans.forEach((span, i) => {
                if (Math.random() > 0.7) {
                    span.textContent = span.textContent
                        .split('')
                        .map((c) => (c !== ' ' && Math.random() > 0.6 ? chars[Math.floor(Math.random() * chars.length)] : c))
                        .join('');
                } else {
                    span.textContent = originals[i];
                }
            });

            count++;
            if (count > 10) {
                clearInterval(glitchInterval);
                glitchInterval = null;
                spans.forEach((span, i) => { span.textContent = originals[i]; });
            }
        }, 60);
    }

    // Desktop: trigger on hover
    hero.addEventListener('mouseenter', runGlitch);

    // Mobile/touch: trigger on tap
    hero.addEventListener('touchstart', (e) => {
        e.preventDefault();
        runGlitch();
    }, { passive: false });

    // Mobile auto-play: run once on load, then repeat every 6s
    const isTouchDevice = () => window.matchMedia('(hover: none)').matches;
    if (isTouchDevice()) {
        setTimeout(runGlitch, 1200);
        setInterval(() => { if (!glitchInterval) runGlitch(); }, 6000);
    }
})();



/* ─────────────────────────────────────────────────────────
   7. PROJECT MODAL SYSTEM
───────────────────────────────────────────────────────── */
(function initProjectModal() {

    const modal      = document.getElementById('project-modal');
    const panel      = document.getElementById('modal-panel');
    const backdrop   = document.getElementById('modal-backdrop');
    const btnClose   = document.getElementById('modal-close');
    const elTitle    = document.getElementById('modal-title');
    const elYear     = document.getElementById('modal-year');
    const elRole     = document.getElementById('modal-role');
    const elDetails  = document.getElementById('modal-details');
    const elChall    = document.getElementById('modal-challenges');
    const elTags     = document.getElementById('modal-tags');
    const mainImg    = document.getElementById('gallery-main-img');
    const emptyMsg   = document.getElementById('gallery-empty');
    const thumbsWrap = document.getElementById('gallery-thumbs');
    const btnPrev    = document.getElementById('gallery-prev');
    const btnNext    = document.getElementById('gallery-next');
    const counter    = document.getElementById('gallery-counter');

    const btnLive    = document.getElementById('modal-live-btn');
    const elRestrict = document.getElementById('modal-restricted');

    if (!modal) return;

    const projects = window.PORTFOLIO_PROJECTS || [];
    let currentGallery = [];
    let currentIdx     = 0;

    /* ── Open Modal ─────────────────────────────── */
    function openModal(projectId) {
        const project = projects.find((p) => p.id === projectId);
        if (!project) return;

        // Populate text fields
        elTitle.textContent   = project.title   || '';
        elYear.textContent    = project.year    || '';
        elRole.textContent    = project.role    || '—';
        elDetails.textContent = project.details || project.description || '';
        elChall.textContent   = project.challenges || '—';

        // Tech tags
        elTags.innerHTML = (project.tags || [])
            .map((t) => `<span class="inline-flex items-center gap-1 px-2.5 py-1 border border-zinc-800 text-zinc-400 text-[10px] tracking-widest uppercase">${t}</span>`)
            .join('');

        // Live link — show button if a real URL is set (not null, not placeholder)
        const liveUrl = project.live;
        const isRealUrl = liveUrl && !liveUrl.includes('YOUR_LIVE_URL_HERE');

        if (isRealUrl) {
            btnLive.href = liveUrl;
            btnLive.classList.remove('hidden');
            elRestrict.classList.add('hidden');
        } else {
            btnLive.href = '#';
            btnLive.classList.add('hidden');
            elRestrict.classList.remove('hidden');
        }

        // Gallery
        currentGallery = project.gallery || [];
        currentIdx     = 0;
        renderGallery();

        // Show modal
        modal.style.removeProperty('display');
        document.body.classList.add('modal-active');
        requestAnimationFrame(() => {
            requestAnimationFrame(() => modal.classList.add('modal-open'));
        });

        // Focus management
        btnClose.focus();
    }

    /* ── Close Modal ────────────────────────────── */
    function closeModal() {
        modal.classList.remove('modal-open');
        document.body.classList.remove('modal-active');

        modal.addEventListener('transitionend', () => {
            modal.style.display = 'none';
        }, { once: true });
    }

    /* ── Render Gallery ─────────────────────────── */
    function renderGallery() {
        thumbsWrap.innerHTML = '';

        if (currentGallery.length === 0) {
            mainImg.classList.add('hidden');
            emptyMsg.classList.remove('hidden');
            thumbsWrap.classList.add('hidden');
            btnPrev.classList.add('hidden');
            btnNext.classList.add('hidden');
            counter.classList.add('hidden');
            return;
        }

        emptyMsg.classList.add('hidden');
        mainImg.classList.remove('hidden');
        thumbsWrap.classList.remove('hidden');
        counter.classList.remove('hidden');

        // Build thumbnails
        currentGallery.forEach((src, i) => {
            const img = document.createElement('img');
            img.src       = src;
            img.alt       = `Screenshot ${i + 1}`;
            img.className = `gallery-thumb${i === currentIdx ? ' active' : ''}`;
            img.addEventListener('click', () => goTo(i));
            thumbsWrap.appendChild(img);
        });

        // Show/hide nav arrows
        if (currentGallery.length > 1) {
            btnPrev.classList.remove('hidden');
            btnNext.classList.remove('hidden');
        } else {
            btnPrev.classList.add('hidden');
            btnNext.classList.add('hidden');
        }

        goTo(currentIdx, false);
    }

    /* ── Navigate Gallery ───────────────────────── */
    function goTo(idx, animate = true) {
        currentIdx = (idx + currentGallery.length) % currentGallery.length;

        // Update main image
        if (animate) {
            mainImg.style.opacity = '0';
            setTimeout(() => {
                mainImg.src = currentGallery[currentIdx];
                mainImg.style.opacity = '1';
            }, 150);
        } else {
            mainImg.src = currentGallery[currentIdx];
        }

        mainImg.style.transition = 'opacity 0.15s ease';

        // Update counter
        counter.textContent = `${currentIdx + 1} / ${currentGallery.length}`;

        // Update active thumb
        thumbsWrap.querySelectorAll('.gallery-thumb').forEach((t, i) => {
            t.classList.toggle('active', i === currentIdx);
        });
    }

    /* ── Event Listeners ────────────────────────── */

    // Card clicks
    document.querySelectorAll('[data-modal]').forEach((card) => {
        card.addEventListener('click', () => openModal(card.dataset.modal));
        card.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                openModal(card.dataset.modal);
            }
        });
    });

    // Close button
    btnClose.addEventListener('click', closeModal);

    // Backdrop click
    backdrop.addEventListener('click', closeModal);

    // Arrow buttons
    btnPrev.addEventListener('click', () => goTo(currentIdx - 1));
    btnNext.addEventListener('click', () => goTo(currentIdx + 1));

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!modal.classList.contains('modal-open')) return;

        if (e.key === 'Escape')      closeModal();
        if (e.key === 'ArrowLeft')   goTo(currentIdx - 1);
        if (e.key === 'ArrowRight')  goTo(currentIdx + 1);
    });

    // Swipe support (touch)
    let touchStartX = 0;
    panel.addEventListener('touchstart', (e) => { touchStartX = e.touches[0].clientX; }, { passive: true });
    panel.addEventListener('touchend', (e) => {
        const dx = e.changedTouches[0].clientX - touchStartX;
        if (Math.abs(dx) > 50) goTo(currentIdx + (dx < 0 ? 1 : -1));
    }, { passive: true });

})();

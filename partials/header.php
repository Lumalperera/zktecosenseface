<header class="sticky top-0 z-40 border-b border-slate-200/80 bg-white/92 backdrop-blur-xl">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8">
        <a href="#top" class="flex items-center gap-3" aria-label="Technolabs home">
            <span class="brand-mark" aria-hidden="true">
                <span class="brand-face">
                    <span></span>
                </span>
            </span>
            <span class="leading-tight">
                <span class="block text-base font800 text-navy">Technolabs</span>
                <span class="hidden text-xs font-semibold uppercase tracking-[0.18em] text-primary sm:block">Biometric Solutions</span>
            </span>
        </a>

        <nav class="hidden items-center gap-6 text-sm font-semibold text-slate-600 lg:flex" aria-label="Primary navigation">
            <a href="#senseface" class="nav-link">SenseFace</a>
            <a href="#benefits" class="nav-link">Benefits</a>
            <a href="#industries" class="nav-link">Industries</a>
            <a href="#process" class="nav-link">Process</a>
            <a href="#hrms" class="nav-link">HRMS</a>
            <a href="#solutions" class="nav-link">Solutions</a>
            <a href="#faq" class="nav-link">FAQ</a>
            <a href="#contact" class="nav-link">Contact</a>
        </nav>

        <div class="hidden items-center gap-3 lg:flex">
            <a href="<?= e($whatsappUrl); ?>" target="_blank" rel="noopener" class="btn btn-primary">WhatsApp Inquiry</a>
        </div>

        <button class="mobile-menu-toggle inline-flex h-11 w-11 items-center justify-center rounded-lg border border-slate-200 text-navy lg:hidden" type="button" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open navigation</span>
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
    </div>

    <div id="mobile-menu" class="hidden border-t border-slate-200 bg-white px-4 py-4 lg:hidden">
        <nav class="grid gap-3 text-sm font-semibold text-slate-700" aria-label="Mobile navigation">
            <a href="#senseface" class="mobile-nav-link">SenseFace</a>
            <a href="#benefits" class="mobile-nav-link">Benefits</a>
            <a href="#industries" class="mobile-nav-link">Industries</a>
            <a href="#process" class="mobile-nav-link">Process</a>
            <a href="#hrms" class="mobile-nav-link">HRMS</a>
            <a href="#solutions" class="mobile-nav-link">Solutions</a>
            <a href="#faq" class="mobile-nav-link">FAQ</a>
            <a href="#contact" class="mobile-nav-link">Contact</a>
            <a href="<?= e($whatsappUrl); ?>" target="_blank" rel="noopener" class="btn btn-primary mt-2 justify-center">WhatsApp Inquiry</a>
        </nav>
    </div>
</header>

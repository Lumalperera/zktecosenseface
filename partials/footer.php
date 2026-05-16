<footer class="bg-navy text-blue-100">
    <div class="mx-auto grid max-w-7xl gap-8 px-4 py-10 sm:px-6 lg:grid-cols-[1.1fr_0.9fr_0.9fr] lg:px-8">
        <div>
            <img src="assets/images/Technolabs_logo.png" alt="Technolabs" class="footer-logo" loading="lazy">
            <p class="mt-4 max-w-md text-sm leading-7 text-blue-100/80">
                Technolabs is the premier ZKTeco solution provider in Sri Lanka for biometric attendance, access control, and HRMS-ready workforce solutions.
            </p>
        </div>
        <div>
            <h2 class="text-sm font800 uppercase tracking-[0.18em] text-white">Quick Links</h2>
            <div class="mt-4 grid gap-2 text-sm">
                <a href="#senseface" class="footer-link">SenseFace Series</a>
                <a href="#industries" class="footer-link">Industries</a>
                <a href="#solutions" class="footer-link">Solutions</a>
                <a href="#contact" class="footer-link">Contact</a>
            </div>
        </div>
        <div>
            <h2 class="text-sm font800 uppercase tracking-[0.18em] text-white">Inquiries</h2>
            <div class="mt-4 flex flex-wrap gap-3">
                <a href="<?= e($whatsappUrl); ?>" target="_blank" rel="noopener" class="btn btn-primary">WhatsApp</a>
                <a href="tel:<?= e($phoneNumber); ?>" class="btn btn-outline-dark">Call <?= e($phoneNumber); ?></a>
            </div>
        </div>
    </div>
    <div class="border-t border-white/10 px-4 py-5 text-center text-xs leading-6 text-blue-100/70">
        &copy; <?= date('Y'); ?> Technolabs. Product names are used for solution promotion and identification.
        <span class="mx-2 hidden text-blue-100/35 sm:inline">|</span>
        <span class="block sm:inline">Powered by <a href="https://brandingodigital.com/" target="_blank" rel="noopener" class="footer-powered-link">Brandingo Digital Solutions</a></span>
    </div>
</footer>

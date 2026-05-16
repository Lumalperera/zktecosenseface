<section id="top" class="relative overflow-hidden bg-navy">
    <div class="hero-grid-pattern" aria-hidden="true"></div>
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <?php foreach ($heroSlides as $index => $slide): ?>
                <article class="swiper-slide">
                    <div class="mx-auto grid min-h-[680px] max-w-7xl items-center gap-10 px-4 py-16 sm:px-6 lg:grid-cols-[1.02fr_0.98fr] lg:px-8 lg:py-20">
                        <div class="hero-copy relative z-10 max-w-3xl">
                            <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-blue-100">
                                ZKTeco SenseFace Series
                            </span>
                            <?php if ($index === 0): ?>
                                <h1 class="mt-6 text-4xl font800 leading-tight text-white sm:text-5xl lg:text-6xl">
                                    <?= e($slide['title']); ?>
                                </h1>
                            <?php else: ?>
                                <h2 class="mt-6 text-4xl font800 leading-tight text-white sm:text-5xl lg:text-6xl">
                                    <?= e($slide['title']); ?>
                                </h2>
                            <?php endif; ?>
                            <p class="mt-6 max-w-2xl text-lg leading-8 text-blue-100">
                                <?= e($slide['description']); ?>
                            </p>
                            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                                <a href="<?= e($whatsappUrl); ?>" target="_blank" rel="noopener" class="btn btn-primary btn-lg">WhatsApp Inquiry</a>
                                <button class="btn btn-light btn-lg" type="button" data-modal-target="quotation-modal">Request Quotation</button>
                            </div>
                            <div class="mt-8 grid max-w-2xl grid-cols-2 gap-3 text-sm text-blue-50 sm:grid-cols-4">
                                <span class="hero-mini-stat">Attendance</span>
                                <span class="hero-mini-stat">Access Control</span>
                                <span class="hero-mini-stat">HRMS Ready</span>
                                <span class="hero-mini-stat">Support</span>
                            </div>
                        </div>

                        <div class="relative z-10">
                            <div class="scan-card">
                                <div class="scan-card-inner">
                                    <!-- Replace this local placeholder with official or authorized ZKTeco product imagery. Do not hotlink external product images. -->
                                    <img src="<?= e($slide['image']); ?>" alt="<?= e($slide['title']); ?>" class="product-float h-full w-full object-contain" loading="<?= $index === 0 ? 'eager' : 'lazy'; ?>">
                                    <div class="image-fallback">
                                        <span>SenseFace Series</span>
                                        <small>Replace with local product image</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="hero-controls mx-auto max-w-7xl px-4 pb-8 sm:px-6 lg:px-8">
            <div class="swiper-pagination"></div>
            <div class="flex gap-2">
                <button class="hero-prev" type="button" aria-label="Previous hero slide">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m15 18-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <button class="hero-next" type="button" aria-label="Next hero slide">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m9 18 6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="border-y border-slate-200 bg-white">
    <div class="mx-auto grid max-w-7xl gap-4 px-4 py-5 sm:grid-cols-2 sm:px-6 lg:grid-cols-4 lg:px-8">
        <?php
        $valuePoints = ['Face Recognition', 'Fingerprint & Card Options', 'Access Control Ready', 'HRMS Integration Support'];
        foreach ($valuePoints as $point):
        ?>
            <div class="value-point">
                <span class="value-dot" aria-hidden="true"></span>
                <span><?= e($point); ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</section>

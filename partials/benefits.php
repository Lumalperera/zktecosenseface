<?php
$benefits = [
    ['title' => 'Contactless Employee Attendance', 'description' => 'Reduce touch-based clocking and modernize staff entry with face recognition attendance workflows.'],
    ['title' => 'Faster Verification', 'description' => 'Help employees clock in quickly during peak entry times, shift changes, and branch operations.'],
    ['title' => 'Anti-Spoofing Protection', 'description' => 'Selected face terminals may support liveness and anti-spoofing features depending on the exact model.'],
    ['title' => 'Multi-Authentication Support', 'description' => 'Plan face, fingerprint, card, and PIN options where supported by the chosen device configuration.'],
    ['title' => 'Access Control Compatibility', 'description' => 'Connect attendance planning with door access, locks, controllers, and secure areas where required.'],
    ['title' => 'Attendance Report Accuracy', 'description' => 'Improve attendance records, reduce manual corrections, and support payroll preparation.'],
    ['title' => 'Better Workforce Visibility', 'description' => 'Give management clearer attendance, late arrival, early departure, and branch-level insights.'],
    ['title' => 'Scalable for Multiple Branches', 'description' => 'Start with one site and plan future expansion across departments, doors, and branches.'],
];
?>
<section id="benefits" class="benefit-section section-pad bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="section-heading benefit-heading">
            <span class="eyebrow">Product Benefits</span>
            <h2>Biometric attendance designed for practical company operations.</h2>
            <p>Technolabs is the premier ZKTeco solution provider in Sri Lanka, helping organizations move beyond basic device buying into complete attendance, access, and reporting solutions.</p>
        </div>

        <div class="benefit-grid mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            <?php foreach ($benefits as $index => $benefit): ?>
                <article class="benefit-card" data-benefit-card style="--benefit-index: <?= e((string) $index); ?>">
                    <span class="benefit-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M12 3 5 6v5c0 4.55 2.9 8.84 7 10 4.1-1.16 7-5.45 7-10V6l-7-3Z" stroke="currentColor" stroke-width="1.8"/><path d="m8.5 12 2.2 2.2 4.8-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    <h3><?= e($benefit['title']); ?></h3>
                    <p><?= e($benefit['description']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="senseface" class="senseface-section section-pad bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-end">
            <div class="section-heading section-heading-left">
                <span class="eyebrow">SenseFace Series Overview</span>
                <h2>ZKTeco SenseFace biometric attendance systems for Sri Lanka.</h2>
                <p>SenseFace models may support combinations of face, fingerprint, card authentication, video intercom, access control, and software compatibility for Sri Lankan workplaces depending on the specific model and configuration.</p>
            </div>
            <div class="rounded-lg border border-blue-100 bg-skysoft p-5 text-sm leading-7 text-slate-700">
                Technolabs can help compare employee count, entry points, shift structure, HRMS needs, and access control requirements before recommending a ZKTeco device for offices, factories, schools, hotels, and multi-branch teams in Sri Lanka.
            </div>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            <?php foreach ($sensefaceProducts as $product): ?>
                <article class="product-card reveal-card">
                    <div class="product-image">
                        <!-- Replace this local placeholder with official or authorized ZKTeco product imagery. Do not hotlink external product images. -->
                        <img src="<?= e($product['image']); ?>" alt="<?= e($product['name']); ?>" loading="lazy">
                        <div class="image-fallback">
                            <span><?= e($product['name']); ?></span>
                            <small>Local product image</small>
                        </div>
                    </div>
                    <div class="p-5">
                        <span class="text-xs font800 uppercase tracking-[0.16em] text-primary"><?= e($product['category']); ?></span>
                        <h3 class="mt-3 text-xl font800 text-navy"><?= e($product['name']); ?></h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600"><?= e($product['description']); ?></p>
                        <ul class="mt-5 grid gap-2 text-sm text-slate-700">
                            <?php foreach ($product['features'] as $feature): ?>
                                <li class="feature-line"><?= e($feature); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?= e(whatsappProductUrl($whatsappNumber, $product['name'])); ?>" target="_blank" rel="noopener" class="btn btn-primary mt-6 w-full justify-center">Inquire on WhatsApp</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

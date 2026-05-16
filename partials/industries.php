<section id="industries" class="industry-section section-pad bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="section-heading industry-heading">
            <span class="eyebrow">Use Cases by Industry</span>
            <h2>Attendance solutions for many types of organizations.</h2>
            <p>From compact SMEs to complex multi-branch teams, biometric attendance can be planned around real operational needs.</p>
        </div>

        <div class="industry-grid-wrap mt-12">
            <span class="industry-scan-line" aria-hidden="true"></span>
            <div class="industry-grid grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($industries as $index => $industry): ?>
                <article class="industry-card industry-animate" data-industry-card style="--industry-index: <?= e((string) $index); ?>">
                    <span class="industry-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M4 20V8l8-4 8 4v12" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 20v-7h6v7M7 10h.01M12 10h.01M17 10h.01" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                    </span>
                    <h3><?= e($industry['name']); ?></h3>
                    <p><?= e($industry['description']); ?></p>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

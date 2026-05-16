<section id="faq" class="section-pad bg-white">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="section-heading">
            <span class="eyebrow">FAQ</span>
            <h2>Questions companies usually ask before choosing biometric attendance.</h2>
            <p>These answers keep the planning realistic while leaving room for the exact model and workflow your organization needs.</p>
        </div>

        <div class="mt-10 divide-y divide-slate-200 rounded-lg border border-slate-200 bg-white shadow-soft">
            <?php foreach ($faqs as $index => $faq): ?>
                <details class="faq-item" <?= $index === 0 ? 'open' : ''; ?>>
                    <summary>
                        <span><?= e($faq['question']); ?></span>
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m6 9 6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </summary>
                    <p><?= e($faq['answer']); ?></p>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

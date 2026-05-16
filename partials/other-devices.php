<section id="solutions" class="solutions-section section-pad bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="section-heading solutions-heading">
            <span class="eyebrow">Complete Solution Areas</span>
            <h2>Plan the biometric attendance solution your company actually needs.</h2>
            <p>Instead of choosing hardware first, Technolabs helps define the attendance, access control, HRMS, and reporting workflow before recommending devices.</p>
        </div>

        <div class="solution-pillars mt-10 grid gap-4 md:grid-cols-3">
            <div class="solution-pillar">
                <span>01</span>
                <h3>Understand the workflow</h3>
                <p>Employee count, shifts, entry points, branches, HR process, and reporting needs.</p>
            </div>
            <div class="solution-pillar">
                <span>02</span>
                <h3>Match the right devices</h3>
                <p>SenseFace, fingerprint terminals, access control hardware, readers, locks, or controllers.</p>
            </div>
            <div class="solution-pillar">
                <span>03</span>
                <h3>Support daily operations</h3>
                <p>Enrollment, configuration, admin training, reports, and future expansion planning.</p>
            </div>
        </div>

        <div class="solutions-grid mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            <?php foreach ($solutionPackages as $solution): ?>
                <article class="solution-card" data-solution-card>
                    <div class="solution-card-top">
                        <span class="solution-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M5 12.5 10 17 19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 3 5 6v5c0 4.55 2.9 8.84 7 10 4.1-1.16 7-5.45 7-10V6l-7-3Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <h3><?= e($solution['title']); ?></h3>
                    </div>

                    <p class="solution-summary"><?= e($solution['summary']); ?></p>

                    <div class="solution-fit">
                        <span>Best for</span>
                        <p><?= e($solution['best_for']); ?></p>
                    </div>

                    <div class="solution-list-block">
                        <span>Technolabs can provide</span>
                        <ul>
                            <?php foreach ($solution['includes'] as $item): ?>
                                <li><?= e($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="solution-outcomes">
                        <?php foreach ($solution['outcomes'] as $outcome): ?>
                            <span><?= e($outcome); ?></span>
                        <?php endforeach; ?>
                    </div>

                    <a href="<?= e(whatsappSolutionUrl($whatsappNumber, $solution['title'])); ?>" target="_blank" rel="noopener" class="btn btn-outline solution-cta">Discuss This Solution</a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

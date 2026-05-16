<?php
$comparisonRows = [
    ['series' => 'SenseFace 2A', 'best' => 'Small offices and branch attendance', 'auth' => 'Face, with selected card or fingerprint options by model', 'access' => 'Basic access workflows on supported configurations', 'software' => 'Attendance software and export workflows', 'use' => 'SMEs, reception points, and compact teams'],
    ['series' => 'SenseFace 3 Series', 'best' => 'Growing companies needing flexible verification', 'auth' => 'Face plus optional multi-authentication depending on model', 'access' => 'Suitable for selected access control use cases', 'software' => 'HRMS-ready planning through supported attendance software', 'use' => 'Offices, institutes, and service teams'],
    ['series' => 'SenseFace 4 Series', 'best' => 'Busy workplaces and shift-based teams', 'auth' => 'Face and hybrid options on selected models', 'access' => 'Can be planned with door access requirements', 'software' => 'Reporting, exports, and integration-ready workflows', 'use' => 'Factories, hotels, and larger offices'],
    ['series' => 'SenseFace 7 Series', 'best' => 'Advanced sites and enterprise-style deployments', 'auth' => 'Advanced face recognition with model-specific options', 'access' => 'Useful for more demanding access control planning', 'software' => 'Multi-site reporting and software workflow planning', 'use' => 'Corporate, multi-door, and multi-branch setups'],
];
$comparisonBannerImage = 'assets/images/comparison/senseface-series-left-clean.png';
$comparisonSeries = ['SenseFace 2A', '3 Series', '4 Series', '7 Series'];
?>
<section class="comparison-section section-pad bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="section-heading comparison-heading">
            <span class="eyebrow">Model Comparison</span>
            <h2>Compare SenseFace series at a planning level.</h2>
            <p>Specifications may vary by exact model, firmware, region, and selected software. This table is intended as a practical consultation guide.</p>
        </div>

        <div class="comparison-shell mt-10">
            <div class="comparison-rail" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="comparison-table-wrap overflow-x-auto">
            <table class="min-w-[980px] w-full text-left text-sm">
                <thead class="bg-navy text-white">
                    <tr>
                        <th scope="col" class="px-5 py-4 font800">Series</th>
                        <th scope="col" class="px-5 py-4 font800">Best For</th>
                        <th scope="col" class="px-5 py-4 font800">Authentication</th>
                        <th scope="col" class="px-5 py-4 font800">Access Control</th>
                        <th scope="col" class="px-5 py-4 font800">Software Integration</th>
                        <th scope="col" class="px-5 py-4 font800">Recommended Use</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                    <?php foreach ($comparisonRows as $row): ?>
                        <tr class="comparison-row align-top">
                            <td class="series-cell px-5 py-4 font800 text-navy" data-label="Series">
                                <span><?= e($row['series']); ?></span>
                            </td>
                            <td class="px-5 py-4" data-label="Best For"><?= e($row['best']); ?></td>
                            <td class="px-5 py-4" data-label="Authentication"><?= e($row['auth']); ?></td>
                            <td class="px-5 py-4" data-label="Access Control"><?= e($row['access']); ?></td>
                            <td class="px-5 py-4" data-label="Software Integration"><?= e($row['software']); ?></td>
                            <td class="px-5 py-4" data-label="Recommended Use"><?= e($row['use']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>

        <div class="comparison-banner mt-10">
            <img src="<?= e($comparisonBannerImage); ?>" alt="ZKTeco SenseFace biometric device series" loading="lazy">
            <div class="comparison-banner-copy">
                <h3>Power Up</h3>
                <p class="comparison-banner-title">with ZKTeco SenseFace Series</p>
                <span class="comparison-banner-rule" aria-hidden="true"></span>
                <p class="comparison-banner-text">Face recognition, attendance, access control, and HRMS-ready solutions for modern businesses.</p>
                <div class="comparison-banner-actions">
                    <button class="btn btn-primary btn-lg" type="button" data-modal-target="quotation-modal">
                        <span>Get a Free Quote</span>
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 12h14m-6-6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <a class="btn btn-outline btn-lg comparison-whatsapp" href="<?= e($whatsappUrl); ?>" target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path fill="currentColor" d="M12.04 2.02a9.84 9.84 0 0 0-8.45 14.9L2.38 21.4l4.6-1.17a9.82 9.82 0 1 0 5.06-18.2Zm5.75 14.18c-.24.69-1.4 1.31-1.96 1.36-.52.05-1.18.08-1.9-.12-.44-.14-1-.32-1.73-.63-3.04-1.31-5.02-4.38-5.18-4.58-.15-.2-1.23-1.64-1.23-3.13 0-1.49.78-2.22 1.06-2.52.27-.3.6-.38.8-.38h.57c.18 0 .43-.07.67.51.25.6.84 2.06.91 2.21.08.15.13.33.03.53-.1.2-.15.33-.3.51-.15.18-.31.4-.45.54-.15.15-.31.31-.13.61.18.3.79 1.3 1.7 2.1 1.17 1.04 2.15 1.36 2.45 1.51.31.15.49.13.67-.08.2-.23.77-.9.98-1.2.2-.31.4-.26.68-.16.28.1 1.77.84 2.07.99.31.15.51.23.59.36.08.13.08.74-.16 1.43Z"/>
                        </svg>
                        <span>WhatsApp Now</span>
                    </a>
                </div>
                <ul class="comparison-banner-series" aria-label="SenseFace series featured in this comparison">
                    <?php foreach ($comparisonSeries as $series): ?>
                        <li><?= e($series); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

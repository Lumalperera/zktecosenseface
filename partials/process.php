<?php
$processSteps = [
    'Requirement discussion',
    'Site/device recommendation',
    'Quotation',
    'Installation & configuration',
    'Employee enrollment',
    'HRMS / attendance software setup',
    'Training & handover',
    'Support & future expansion',
];
?>
<section id="process" class="section-pad bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="section-heading">
            <span class="eyebrow">Installation Process</span>
            <h2>A clear path from consultation to daily attendance reporting.</h2>
            <p>Technolabs approaches biometric projects as a complete workplace solution, from site discussion to support and expansion.</p>
        </div>

        <div class="timeline mt-12">
            <?php foreach ($processSteps as $index => $step): ?>
                <article class="timeline-item reveal-card">
                    <span class="timeline-number"><?= e((string) ($index + 1)); ?></span>
                    <h3><?= e($step); ?></h3>
                    <p><?= e(getProcessDescription($index)); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
function getProcessDescription(int $index): string
{
    $descriptions = [
        'Understand employee count, departments, shifts, access points, and reporting expectations.',
        'Recommend suitable SenseFace or ZKTeco devices based on the physical site and business need.',
        'Prepare a practical quotation for devices, installation, configuration, and optional software needs.',
        'Configure devices, network settings, users, access rules, and attendance policies.',
        'Enroll employees using the selected verification methods and internal attendance policy.',
        'Set up attendance software, exports, reporting fields, and HRMS-ready workflow options.',
        'Train admin users on device operation, attendance checks, and basic troubleshooting.',
        'Support future users, new branches, extra doors, and broader workforce reporting needs.',
    ];

    return $descriptions[$index] ?? '';
}
?>

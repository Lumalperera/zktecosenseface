<?php
$reasons = [
    'Premier ZKTeco solution provider in Sri Lanka',
    'Complete solution approach',
    'Device recommendation support',
    'Installation guidance',
    'HRMS/attendance workflow understanding',
    'Support for multiple sectors',
    'Scalable product structure',
    'Professional consultation',
];
?>
<section class="section-pad bg-navy text-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 sm:px-6 lg:grid-cols-[0.8fr_1.2fr] lg:items-center lg:px-8">
        <div>
            <span class="eyebrow eyebrow-light">Why Choose Technolabs</span>
            <h2 class="mt-4 text-3xl font800 leading-tight sm:text-4xl">Sri Lanka's premier ZKTeco solution partner for biometric attendance.</h2>
            <p class="mt-5 text-base leading-8 text-blue-100/85">Technolabs helps Sri Lankan companies match ZKTeco hardware, installation planning, access control, attendance software, and HRMS-ready reporting to the way their teams actually work.</p>
        </div>
        <div class="grid gap-4 sm:grid-cols-2">
            <?php foreach ($reasons as $reason): ?>
                <div class="why-item reveal-card">
                    <span aria-hidden="true"></span>
                    <p><?= e($reason); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

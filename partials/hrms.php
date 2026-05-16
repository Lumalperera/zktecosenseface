<?php
$hrmsFeatures = [
    'Attendance data syncing',
    'Employee records',
    'Shift management',
    'Late/early reports',
    'Monthly attendance reports',
    'Payroll support',
    'Multi-branch reporting',
    'Admin dashboard possibilities',
];
?>
<section id="hrms" class="section-pad bg-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 sm:px-6 lg:grid-cols-[0.9fr_1.1fr] lg:items-center lg:px-8">
        <div class="section-heading section-heading-left">
            <span class="eyebrow">HRMS Integration</span>
            <h2>Connect ZKTeco attendance hardware with Sri Lankan business workflows.</h2>
            <p>Biometric attendance is most valuable when records are easy for HR, payroll, operations, and management teams to use across local branches, shifts, and departments.</p>
            <div class="mt-7 flex flex-col gap-3 sm:flex-row">
                <button class="btn btn-primary" type="button" data-modal-target="consultation-modal">Book Free Consultation</button>
                <a href="tel:<?= e($phoneNumber); ?>" class="btn btn-outline">Call Now</a>
            </div>
        </div>

        <div class="hrms-panel reveal-card">
            <div class="grid gap-4 sm:grid-cols-2">
                <?php foreach ($hrmsFeatures as $feature): ?>
                    <div class="hrms-feature">
                        <span aria-hidden="true"></span>
                        <p><?= e($feature); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-6 rounded-lg bg-white p-5 text-sm leading-7 text-slate-600 shadow-sm">
                Integration methods depend on your attendance software, HRMS platform, network structure, and reporting requirements. Technolabs can help Sri Lankan businesses define a practical data flow before deployment.
            </div>
        </div>
    </div>
</section>

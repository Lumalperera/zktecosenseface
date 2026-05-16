<?php
$modalForms = [
    [
        'id' => 'quotation-modal',
        'title' => 'Request Quotation',
        'subtitle' => 'Share your requirements and Technolabs will prepare the next step for your biometric attendance solution.',
        'type' => 'Request Quotation',
        'button' => 'Submit Quotation Request',
    ],
    [
        'id' => 'consultation-modal',
        'title' => 'Book Free Consultation',
        'subtitle' => 'Tell us about your workplace, employees, and attendance workflow so we can guide the right setup.',
        'type' => 'Book Free Consultation',
        'button' => 'Submit Consultation Request',
    ],
];
?>
<?php foreach ($modalForms as $modal): ?>
    <div id="<?= e($modal['id']); ?>" class="modal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="<?= e($modal['id']); ?>-title">
        <div class="modal-backdrop" data-modal-close></div>
        <div class="modal-panel" role="document">
            <button class="modal-close" type="button" data-modal-close aria-label="Close modal">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6 6l12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            </button>
            <div class="pr-10">
                <span class="eyebrow"><?= e($modal['type']); ?></span>
                <h2 id="<?= e($modal['id']); ?>-title" class="mt-3 text-2xl font800 text-navy"><?= e($modal['title']); ?></h2>
                <p class="mt-2 text-sm leading-6 text-slate-600"><?= e($modal['subtitle']); ?></p>
            </div>

            <form class="lead-form mt-6" method="post" action="" data-form>
                <input type="hidden" name="form_type" value="<?= e($modal['type']); ?>">
                <div class="form-grid">
                    <label>
                        <span>Full Name</span>
                        <input type="text" name="full_name" required autocomplete="name">
                    </label>
                    <label>
                        <span>Company Name</span>
                        <input type="text" name="company_name" required autocomplete="organization">
                    </label>
                    <label>
                        <span>Phone Number</span>
                        <input type="tel" name="phone" required autocomplete="tel">
                    </label>
                    <label>
                        <span>Email Address</span>
                        <input type="email" name="email" required autocomplete="email">
                    </label>
                    <label>
                        <span>Industry / Business Type</span>
                        <input type="text" name="industry" required>
                    </label>
                    <label>
                        <span>Number of Employees</span>
                        <input type="number" name="employees" min="1" required>
                    </label>
                    <label class="sm:col-span-2">
                        <span>Required Solution</span>
                        <select name="solution" required>
                            <option value="">Select a solution</option>
                            <option>Face Recognition Attendance</option>
                            <option>Fingerprint Attendance</option>
                            <option>Access Control</option>
                            <option>HRMS Integration</option>
                            <option>Complete Biometric Solution</option>
                            <option>Not Sure / Need Advice</option>
                        </select>
                    </label>
                    <label class="sm:col-span-2">
                        <span>Message / Requirement</span>
                        <textarea name="message" rows="4" required></textarea>
                    </label>
                </div>
                <!-- PHP mail handling can be added here later. Validate and sanitize all inputs before sending or storing messages. -->
                <button class="btn btn-primary mt-5 w-full justify-center" type="submit"><?= e($modal['button']); ?></button>
                <p class="form-success hidden" role="status">Thank you. Technolabs will contact you shortly.</p>
            </form>
        </div>
    </div>
<?php endforeach; ?>

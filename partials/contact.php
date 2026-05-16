<section id="contact" class="section-pad bg-slate-50">
    <div class="mx-auto grid max-w-7xl gap-8 px-4 sm:px-6 lg:grid-cols-[0.9fr_1.1fr] lg:px-8">
        <div class="section-heading section-heading-left">
            <span class="eyebrow">Contact Technolabs</span>
            <h2>Start your ZKTeco biometric attendance project in Sri Lanka.</h2>
            <p>Share your company size, industry, employee count, access control needs, and any HRMS expectations. Technolabs, the premier ZKTeco solution provider in Sri Lanka, will help guide the next step.</p>
            <div class="mt-7 grid gap-3 sm:grid-cols-2">
                <a href="<?= e($whatsappUrl); ?>" target="_blank" rel="noopener" class="btn btn-primary justify-center">WhatsApp Inquiry</a>
                <a href="tel:<?= e($phoneNumber); ?>" class="btn btn-outline justify-center">Call Now</a>
                <button class="btn btn-light-alt justify-center" type="button" data-modal-target="quotation-modal">Request Quotation</button>
                <button class="btn btn-light-alt justify-center" type="button" data-modal-target="consultation-modal">Book Free Consultation</button>
            </div>
        </div>

        <div class="contact-card reveal-card">
            <h3 class="text-2xl font800 text-navy">Send an inquiry</h3>
            <p class="mt-2 text-sm text-slate-500">Front-end ready form. PHP mail handling can be connected later.</p>
            <form class="lead-form mt-6" method="post" action="" data-form>
                <input type="hidden" name="form_type" value="Contact Inquiry">
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
                <button class="btn btn-primary mt-5 w-full justify-center" type="submit">Submit Inquiry</button>
                <p class="form-success hidden" role="status">Thank you. Technolabs will contact you shortly.</p>
            </form>
        </div>
    </div>
</section>

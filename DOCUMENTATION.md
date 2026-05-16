# Documentation

## Product Arrays

Product content is stored in PHP arrays inside the `data/` folder.

- `data/senseface-products.php` controls the SenseFace Series cards.
- `data/solutions.php` controls the solution-focused cards such as contactless attendance, HRMS integration, access control, factory shifts, and multi-branch management.

Each array returns structured data that partials render with `foreach`.

## Add a New SenseFace Device

Open `data/senseface-products.php` and add another item:

```php
[
    'name' => 'SenseFace Example',
    'category' => 'Face Recognition Terminal',
    'description' => 'Short business-focused description.',
    'image' => 'assets/images/products/senseface-example.webp',
    'features' => [
        'Feature one',
        'Feature two',
        'Feature three',
    ],
],
```

Then place the product image in:

```text
assets/images/products/senseface-example.webp
```

## Add Another Solution Area

Open `data/solutions.php` and add another solution item:

```php
'title' => 'Solution Name',
'summary' => 'Short practical description of the business workflow.',
'best_for' => 'Ideal customer or workplace type',
'includes' => [
    'Device or workflow item one',
    'Setup item two',
    'Support item three',
],
'outcomes' => [
    'Business outcome one',
    'Business outcome two',
    'Business outcome three',
],
```

The `partials/other-devices.php` file renders these solution cards automatically. The filename is kept for project continuity, but the section now presents solution areas instead of product categories.

## Edit Hero Slider Content

Hero slides are defined near the top of `index.php` in `$heroSlides`.

Each slide includes:

- `title`
- `description`
- `image`

Hero images should be placed in:

```text
assets/images/hero/
```

## CTA Links

The main CTAs use these values in `index.php`:

```php
$phoneNumber = '0741002401';
$whatsappNumber = '94741002401';
$whatsappText = 'Hello Technolabs, I am interested in ZKTeco SenseFace biometric attendance solutions.';
```

The WhatsApp URL is generated with:

```php
$whatsappUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode($whatsappText);
```

Product inquiry links use the `whatsappProductUrl()` helper in `index.php`.

## Forms

There are three front-end forms:

- Contact section inquiry form in `partials/contact.php`
- Request Quotation modal in `partials/modals.php`
- Book Free Consultation modal in `partials/modals.php`

Each form includes:

- Full Name
- Company Name
- Phone Number
- Email Address
- Industry / Business Type
- Number of Employees
- Required Solution dropdown
- Message / Requirement

Current form behavior is handled in:

```text
assets/js/main.js
```

On submit, JavaScript prevents default submission and displays:

```text
Thank you. Technolabs will contact you shortly.
```

## Connect PHP Mail Later

The forms are PHP-ready but do not send email yet.

Recommended next steps:

1. Change each form `action` to a secure handler such as `contact-handler.php`.
2. Validate all fields server-side.
3. Sanitize user input.
4. Add spam protection such as a honeypot field or CAPTCHA.
5. Send mail using a trusted SMTP library such as PHPMailer.
6. Store leads in a CRM or database if required.

Do not claim that messages are sent until real server-side handling is connected and tested.

## Recommended Image Sizes

Use optimized `.webp` images where possible.

- Hero images: 1200 x 900 px or larger
- Product card images: 900 x 700 px
- Device card images: 800 x 600 px
- Open Graph image: 1200 x 630 px

## Recommended Hero Image Dimensions

Hero images should work well inside a right-side product display area:

```text
1200 x 900 px
```

Use transparent-background product renders when available. Keep the product centered with enough breathing room around the edges.

## Responsible Product Image Usage

Product images should be downloaded only from official or authorized ZKTeco sources and placed into the correct local folders.

Do not hotlink images directly from ZKTeco or third-party websites.

Confirm that you have permission to use any product images, diagrams, brand assets, or specification materials before publishing the website.

The current hero slider uses locally saved images sourced from official ZKTeco product pages:

- SenseFace 2A: `https://zkteco.com/en/HybridBiometric4ZM/SenseFace_2A`
- SenseFace 3 Series: `https://www.zkteco.com/en/SenseFaceSeries/SenseFace_3_Series`
- SenseFace 4 Series: `https://www.zkteco.com/en/HybridBiometric4ZM/SenseFace_4_Series`
- SenseFace 7 Series: `https://zkteco.com/en/HybridBiometric4ZM/SenseFace_7_Series`

## Animation Files

- `assets/js/main.js` handles Swiper, mobile navigation, modals, forms, and image fallback behavior.
- `assets/js/animations.js` handles GSAP hero entrance, card reveal, section reveal, and subtle product floating animation.

Animations are intentionally restrained for a premium B2B technology feel.

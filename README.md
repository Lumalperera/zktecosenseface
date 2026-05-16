# zktecosenseface.com

Modern PHP landing page for promoting ZKTeco SenseFace Series and complete biometric attendance solutions by Technolabs.

## Project Overview

This website positions Technolabs as a B2B biometric solution provider for companies that need face recognition attendance, fingerprint attendance, access control, HRMS-ready workflows, installation guidance, support, and consultation.

The page is built as a scalable PHP landing page using reusable partials and PHP data arrays for products, industries, and FAQs.

## Tech Stack

- PHP
- Tailwind CSS CDN
- Vanilla JavaScript
- GSAP + ScrollTrigger
- Swiper.js
- Local placeholder image paths

## Folder Structure

```text
/assets
  /images
    /hero
    /products
    /icons
    /backgrounds
    /og
  /js
    main.js
    animations.js
  /css
    custom.css
/partials
  header.php
  footer.php
  hero.php
  benefits.php
  comparison.php
  industries.php
  process.php
  hrms.php
  other-devices.php
  why-technolabs.php
  faq.php
  contact.php
  modals.php
/data
  senseface-products.php
  solutions.php
  industries.php
  faqs.php
index.php
README.md
DOCUMENTATION.md
```

## How to Run Locally

From the project folder:

```bash
php -S localhost:8000
```

Open:

```text
http://localhost:8000
```

## How to Replace Images

Place local images in the matching folders:

- Hero images: `assets/images/hero/`
- Product images: `assets/images/products/`
- Open Graph image: `assets/images/og/zkteco-senseface-og.webp`

Current hero images:

```text
assets/images/hero/senseface-hero-01.webp
assets/images/hero/senseface-hero-02.webp
assets/images/hero/senseface-hero-03.webp
assets/images/hero/senseface-hero-04.webp
```

Example replacement paths:

```text
assets/images/hero/senseface-hero-01.webp
assets/images/products/senseface-series.webp
assets/images/products/access-control.webp
```

Do not hotlink images from ZKTeco or other websites. Use official or authorized product images saved locally.

## How to Update Phone Number

Edit these values near the top of `index.php`:

```php
$phoneNumber = '0741002401';
$whatsappNumber = '94741002401';
```

The WhatsApp CTA link is generated automatically from `$whatsappNumber`.

## How to Update Products

Edit:

```text
data/senseface-products.php
data/solutions.php
```

Cards are rendered dynamically with `foreach` loops, so new products or solution areas will appear automatically when added to the arrays.

## How to Deploy on PHP Hosting

1. Upload all files and folders to your PHP hosting public directory.
2. Make sure `index.php` is in the web root.
3. Upload local product and hero images into the correct `assets/images/` folders.
4. Confirm CDN access for Tailwind, Swiper, and GSAP.
5. Connect real form handling when ready.

Current forms are front-end ready and show a success message. They do not send email yet.

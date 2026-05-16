<?php
$sensefaceProducts = require __DIR__ . '/data/senseface-products.php';
$solutionPackages = require __DIR__ . '/data/solutions.php';
$industries = require __DIR__ . '/data/industries.php';
$faqs = require __DIR__ . '/data/faqs.php';

$siteName = 'zktecosenseface.com';
$brandName = 'Technolabs';
$phoneNumber = '0741002401';
$whatsappNumber = '94741002401';
$whatsappText = 'Hello Technolabs, I am interested in ZKTeco SenseFace biometric attendance solutions.';
$whatsappUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode($whatsappText);
$siteUrl = 'https://zktecosenseface.com/';
$pageTitle = 'ZKTeco SenseFace Biometric Attendance Sri Lanka | Technolabs';
$pageDescription = 'Technolabs is the premier ZKTeco solution provider in Sri Lanka for SenseFace biometric attendance, face recognition access control, HRMS-ready attendance software, installation, and support.';
$pageKeywords = 'ZKTeco Sri Lanka, ZKTeco SenseFace Sri Lanka, biometric attendance Sri Lanka, face recognition attendance system Sri Lanka, access control Sri Lanka, HRMS attendance Sri Lanka, fingerprint attendance Sri Lanka, Technolabs ZKTeco, biometric attendance Colombo, employee attendance system Sri Lanka';

$assetVersion = (string) max(
    filemtime(__DIR__ . '/assets/css/custom.css'),
    filemtime(__DIR__ . '/assets/js/main.js'),
    filemtime(__DIR__ . '/assets/js/animations.js')
);

$heroSlides = [
    [
        'title' => 'SenseFace 2A for Modern Workplaces',
        'description' => 'Technolabs is the premier ZKTeco solution provider in Sri Lanka for compact, contactless SenseFace biometric attendance systems.',
        'image' => 'assets/images/TL/TL/senseface2A.png',
    ],
    [
        'title' => 'SenseFace 3 Series for Attendance & Access',
        'description' => 'Connect biometric devices with attendance software, HRMS workflows, access control, and management reports.',
        'image' => 'assets/images/TL/TL/SenseFace-3A-008.png',
    ],
    [
        'title' => 'SenseFace 4 Series for Busy Sites',
        'description' => 'Deploy reliable biometric attendance systems across offices, factories, schools, hotels, and shift-based workplaces.',
        'image' => 'assets/images/TL/TL/SenseFace-4A-007.png',
    ],
    [
        'title' => 'SenseFace 7 Series for Advanced Control',
        'description' => 'Reduce manual attendance errors, prevent buddy punching, and manage employee movement with advanced biometric verification.',
        'image' => 'assets/images/TL/TL/SenseFace-7A-02.png',
    ],
];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function whatsappProductUrl(string $whatsappNumber, string $productName): string
{
    return 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode('Hello Technolabs, I need more details about ' . $productName . ' for a biometric attendance solution.');
}

function whatsappSolutionUrl(string $whatsappNumber, string $solutionName): string
{
    return 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode('Hello Technolabs, I need consultation for ' . $solutionName . '.');
}

$absoluteAsset = function (string $path) use ($siteUrl): string {
    return $siteUrl . ltrim($path, '/');
};

$faqSchemaItems = array_map(function (array $faq): array {
    return [
        '@type' => 'Question',
        'name' => $faq['question'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $faq['answer'],
        ],
    ];
}, $faqs);

$productSchemaItems = array_map(function (array $product) use ($siteUrl, $absoluteAsset): array {
    return [
        '@type' => 'Product',
        '@id' => $siteUrl . '#product-' . strtolower(str_replace([' ', '&'], ['-', 'and'], $product['name'])),
        'name' => 'ZKTeco ' . $product['name'],
        'brand' => [
            '@type' => 'Brand',
            'name' => 'ZKTeco',
        ],
        'image' => $absoluteAsset($product['image']),
        'description' => $product['description'],
        'category' => 'Biometric attendance and access control terminal',
        'areaServed' => [
            '@type' => 'Country',
            'name' => 'Sri Lanka',
        ],
        'offers' => [
            '@type' => 'Offer',
            'url' => $siteUrl . '#contact',
            'priceCurrency' => 'LKR',
            'availability' => 'https://schema.org/InStock',
            'seller' => [
                '@id' => $siteUrl . '#technolabs',
            ],
        ],
    ];
}, $sensefaceProducts);

$structuredData = [
    '@context' => 'https://schema.org',
    '@graph' => array_merge([
        [
            '@type' => 'WebSite',
            '@id' => $siteUrl . '#website',
            'url' => $siteUrl,
            'name' => $siteName,
            'publisher' => [
                '@id' => $siteUrl . '#technolabs',
            ],
            'inLanguage' => 'en-LK',
        ],
        [
            '@type' => 'WebPage',
            '@id' => $siteUrl . '#webpage',
            'url' => $siteUrl,
            'name' => $pageTitle,
            'description' => $pageDescription,
            'isPartOf' => [
                '@id' => $siteUrl . '#website',
            ],
            'about' => [
                '@id' => $siteUrl . '#zkteco-senseface-service',
            ],
            'primaryImageOfPage' => [
                '@type' => 'ImageObject',
                'url' => $absoluteAsset('assets/images/TL/TL/senseface2A.png'),
            ],
            'inLanguage' => 'en-LK',
        ],
        [
            '@type' => ['LocalBusiness', 'ProfessionalService'],
            '@id' => $siteUrl . '#technolabs',
            'name' => 'Technolabs',
            'url' => $siteUrl,
            'logo' => $absoluteAsset('assets/images/Technolabs_logo.png'),
            'image' => $absoluteAsset('assets/images/TL/TL/senseface2A.png'),
            'telephone' => '+94' . ltrim($phoneNumber, '0'),
            'description' => 'Technolabs is the premier ZKTeco solution provider in Sri Lanka for biometric attendance, face recognition terminals, access control, HRMS-ready reporting, installation, and support.',
            'priceRange' => 'Contact for quotation',
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => 'LK',
            ],
            'areaServed' => [
                ['@type' => 'Country', 'name' => 'Sri Lanka'],
                ['@type' => 'City', 'name' => 'Colombo'],
                ['@type' => 'City', 'name' => 'Kandy'],
                ['@type' => 'City', 'name' => 'Galle'],
                ['@type' => 'City', 'name' => 'Kurunegala'],
                ['@type' => 'City', 'name' => 'Negombo'],
            ],
            'knowsAbout' => [
                'ZKTeco SenseFace biometric attendance',
                'Face recognition attendance systems',
                'Fingerprint attendance systems',
                'Access control systems',
                'HRMS attendance integration',
                'Employee attendance reporting',
            ],
        ],
        [
            '@type' => 'Service',
            '@id' => $siteUrl . '#zkteco-senseface-service',
            'name' => 'ZKTeco SenseFace Biometric Attendance Solutions in Sri Lanka',
            'serviceType' => 'Biometric attendance, face recognition access control, and HRMS-ready attendance solution',
            'provider' => [
                '@id' => $siteUrl . '#technolabs',
            ],
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Sri Lanka',
            ],
            'audience' => [
                '@type' => 'BusinessAudience',
                'audienceType' => 'Offices, factories, schools, hotels, retail chains, warehouses, corporate branches, and Sri Lankan organizations',
            ],
            'description' => 'Technolabs supplies and supports ZKTeco SenseFace biometric attendance systems in Sri Lanka, including device recommendation, installation guidance, access control planning, attendance software workflows, and HRMS-ready reporting.',
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'ZKTeco SenseFace and Biometric Attendance Services',
                'itemListElement' => [
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Face recognition attendance systems']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Access control installation planning']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'HRMS attendance integration support']],
                    ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'ZKTeco device recommendation and support']],
                ],
            ],
        ],
        [
            '@type' => 'FAQPage',
            '@id' => $siteUrl . '#faq-schema',
            'mainEntity' => $faqSchemaItems,
        ],
    ], $productSchemaItems),
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitle); ?></title>
    <meta name="description" content="<?= e($pageDescription); ?>">
    <meta name="keywords" content="<?= e($pageKeywords); ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="Technolabs">
    <meta name="geo.region" content="LK">
    <meta name="geo.placename" content="Sri Lanka">
    <meta name="distribution" content="Sri Lanka">
    <meta property="og:title" content="<?= e($pageTitle); ?>">
    <meta property="og:description" content="<?= e($pageDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= e($siteUrl); ?>">
    <meta property="og:image" content="<?= e($absoluteAsset('assets/images/TL/TL/senseface2A.png')); ?>">
    <meta property="og:site_name" content="Technolabs">
    <meta property="og:locale" content="en_LK">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($pageTitle); ?>">
    <meta name="twitter:description" content="<?= e($pageDescription); ?>">
    <meta name="twitter:image" content="<?= e($absoluteAsset('assets/images/TL/TL/senseface2A.png')); ?>">
    <link rel="canonical" href="<?= e($siteUrl); ?>">
    <link rel="alternate" href="<?= e($siteUrl); ?>" hreflang="en-lk">
    <link rel="icon" href="assets/images/TL/TL/Technolabs_Favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://cdn.tailwindcss.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#071426',
                        ink: '#0b1f3a',
                        primary: '#1262d6',
                        skysoft: '#eaf3ff',
                    },
                    boxShadow: {
                        soft: '0 24px 70px rgba(8, 25, 55, 0.12)',
                    },
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'Segoe UI', 'Arial', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/custom.css?v=<?= e($assetVersion); ?>">
    <script type="application/ld+json">
<?= json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>
</head>
<body class="bg-white text-slate-700 antialiased">
    <?php include __DIR__ . '/partials/header.php'; ?>

    <main id="main-content">
        <?php include __DIR__ . '/partials/hero.php'; ?>
        <?php include __DIR__ . '/partials/benefits.php'; ?>
        <?php include __DIR__ . '/partials/comparison.php'; ?>
        <?php include __DIR__ . '/partials/industries.php'; ?>
        <?php include __DIR__ . '/partials/process.php'; ?>
        <?php include __DIR__ . '/partials/hrms.php'; ?>
        <?php include __DIR__ . '/partials/other-devices.php'; ?>
        <?php include __DIR__ . '/partials/why-technolabs.php'; ?>
        <?php include __DIR__ . '/partials/faq.php'; ?>
        <?php include __DIR__ . '/partials/contact.php'; ?>
    </main>

    <?php include __DIR__ . '/partials/footer.php'; ?>
    <?php include __DIR__ . '/partials/modals.php'; ?>

    <a class="floating-whatsapp" href="<?= e($whatsappUrl); ?>" target="_blank" rel="noopener" aria-label="Open WhatsApp inquiry">
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <path fill="currentColor" d="M12.04 2.02a9.84 9.84 0 0 0-8.45 14.9L2.38 21.4l4.6-1.17a9.82 9.82 0 1 0 5.06-18.2Zm5.75 14.18c-.24.69-1.4 1.31-1.96 1.36-.52.05-1.18.08-1.9-.12-.44-.14-1-.32-1.73-.63-3.04-1.31-5.02-4.38-5.18-4.58-.15-.2-1.23-1.64-1.23-3.13 0-1.49.78-2.22 1.06-2.52.27-.3.6-.38.8-.38h.57c.18 0 .43-.07.67.51.25.6.84 2.06.91 2.21.08.15.13.33.03.53-.1.2-.15.33-.3.51-.15.18-.31.4-.45.54-.15.15-.31.31-.13.61.18.3.79 1.3 1.7 2.1 1.17 1.04 2.15 1.36 2.45 1.51.31.15.49.13.67-.08.2-.23.77-.9.98-1.2.2-.31.4-.26.68-.16.28.1 1.77.84 2.07.99.31.15.51.23.59.36.08.13.08.74-.16 1.43Z"/>
        </svg>
        <span>WhatsApp</span>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="assets/js/main.js?v=<?= e($assetVersion); ?>"></script>
    <script src="assets/js/animations.js?v=<?= e($assetVersion); ?>"></script>
</body>
</html>

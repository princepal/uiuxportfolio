<?php
  // Meta Data
  $metaTitle = 'Chandigarh, India-based SaaS product designer | Contact Me';
  $metaDescription = 'Book a discovery call via Calendly to discuss your SaaS company and the challenges it encounters. Simplify your product. Retain more customers. Hire me now!';
  $metaKeywords = 'SaaS Product Designer, b2b b2c companies, UI UX designer India, Branding Consultant, Enterprise UI/UX Designer Consultant India';
  $metaImage = isset($metaImage) ? $metaImage : "assets/images/prince-pal-singh.jpeg";
  // Include header file
  include 'header.php'; 
?>
<!-- contact-section start -->
<section class="contact-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="contact-left-txt">
                    <h1 class="mb-4">Book Discovery Call</h1>
                    <h3 class="mb-3">Simplify your product. Retain more customers.</h3>
                    <p>Schedule a call to discuss your SaaS company and the challenges it encounters.</p>
                    <p>Or feel free to reach out to me at <a href="mailto: palprince@gmail.com" target="_blank">palprince@gmail.com</a></p>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="contact-form-wrapper calendly-inline-widget" data-url="https://calendly.com/princepal/30min-1?hide_event_type_details=1&amp;hide_gdpr_banner=1" style="min-width: 320px; height: 700px;"></div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->

<!-- Start Brand Area -->
<div id="clients" class="brand-area section section-spacing">
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h3 class="mb-0">Trusted by many other tech and SaaS companies</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="clients-logos">
                    <div class="single-image">
                        <img src="<?= $base_url ?>assets/images/accenture-logo.png" alt="Brand Logo Images" />
                    </div>
                    <div class="single-image">
                        <img src="<?= $base_url ?>assets/images/finvasia-logo.png" alt="Brand Logo Images" />
                    </div>
                    <div class="single-image">
                        <img src="<?= $base_url ?>assets/images/icici-bank-logo.png" alt="Brand Logo Images" />
                    </div>
                    <div class="single-image">
                        <img src="<?= $base_url ?>assets/images/gemalto-logo.png" alt="Brand Logo Images" />
                    </div>
                    <div class="single-image">
                        <img src="<?= $base_url ?>assets/images/teledentix-logo.png" alt="Brand Logo Images" />
                    </div>
                    <div class="single-image">
                        <img src="<?= $base_url ?>assets/images/juniper-logo.png" alt="Brand Logo Images" />
                    </div>
                    <div class="single-image">
                        <img src="<?= $base_url ?>assets/images/packt-logo.png" alt="Brand Logo Images" />
                    </div>
                    <div class="single-image">
                        <img src="<?= $base_url ?>assets/images/vdc-logo.png" alt="Brand Logo Images" />
                    </div>
                    <div class="single-image">
                        <img src="<?= $base_url ?>assets/images/dental-com-logo.png" alt="Brand Logo Images" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Brand Area -->

<!-- Start Great Achievements -->
<div class="great-achievements section-spacing">
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h3 class="mb-0">I've great achievements to show</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="achievement-grid">
                    <p class="h4">15+</p>
                    <p class="mb-0">Years experience delivering UX and design services</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="achievement-grid">
                    <p class="h4">30+</p>
                    <p class="mb-0">SaaS products successfully redesigned or launched</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="achievement-grid">
                    <p class="h4">600k+</p>
                    <p class="mb-0">Users have interacted my designs</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="achievement-grid">
                    <p class="h4">$300M</p>
                    <p class="mb-0">Raised by my clients</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Great Achievements -->

<?php include 'footer.php';?>

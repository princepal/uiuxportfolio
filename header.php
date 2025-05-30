<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google tag (gtag.js) -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-45ZN84X744"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-45ZN84X744');
  </script> -->

  <?php $base_url = "https://princepaluiux.com/"; ?>
  <script> var base_url = "<?=$base_url?>"; </script>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="title" content="<?php if (isset($metaTitle)) { echo $metaTitle; } ?>">
  <meta name="description" content="<?php if (isset($metaDescription)) { echo $metaDescription; } ?>">
  <meta name="keywords" content="<?php if (isset($metaKeywords)) { echo $metaKeywords; } ?>">
  <meta name="og:title" content="<?php if (isset($metaTitle)) { echo $metaTitle; } ?>">
  <meta name="og:description" content="<?php if (isset($metaDescription)) { echo $metaDescription; } ?>">
  <meta property="og:image" content="<?= $base_url . $metaImage ?>" data-addsearch="no_crop" />
  <!-- <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" /> -->

  <!--====== Title ======-->
  <title><?php if (isset($metaTitle)) { echo $metaTitle; } ?></title>

  <!--====== Favicon Icon ======-->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= $base_url ?>assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $base_url ?>assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $base_url ?>assets/images/favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="144x144" href="<?= $base_url ?>assets/images/favicon/android-icon-144x144.png">
  <link rel="manifest" href="<?= $base_url ?>assets/images/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?= $base_url ?>assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/bootstrap.min.css?v=2.0" />

  <!--====== fontawesome Icons ======-->
  <link rel="stylesheet" href="<?= $base_url ?>assets/fontawesome-free-6.6.0-web/css/all.min.css?v=2.0" />

  <!--====== Custom css ======-->
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css?v=2.0" />
  
  <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "h8ixocn737");
  </script>

</head>

<body>
  <!-- NAVBAR NINE PART START -->
  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?= $base_url ?>">
              <img id="logo" src="<?= $base_url ?>assets/images/white-logo.svg" alt="Logo" width="50" height="30" />
            </a>
            <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="page-scroll menu-item active homemenu" data-tab="#hero-area" href="#hero-area">Home</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll menu-item" data-tab="#projects" href="<?= $base_url ?>#projects">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll menu-item" data-tab="#services" href="<?= $base_url ?>#services">Services</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll menu-item" data-tab="#blogs" href="<?= $base_url ?>#blogs">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll menu-item" data-tab="#contact" href="<?= $base_url ?>#contact">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll menu-item" id="me" data-tab="#me" href="<?= $base_url ?>me">Me</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll menu-item" data-tab="#dr" target="_blank" href="https://princepaluiux.com/resume.pdf">Resume</a>
                </li>
              </ul>
            </div>
            <div class="align-items-center d-flex navbar-btn">
              <button class="theme-mode me-4" title="Theme Mode" type="button" id="dark-mode-toggle">
                <i class="fa-solid fa-moon"></i>
                <i class="fa-solid fa-sun"></i>
              </button>
              <button type="button" title="Hamburger" class="menu-bar"><i class="fa-solid fa-bars"></i></button>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- NAVBAR NINE PART ENDS -->

  <!-- SIDEBAR PART START -->
  <div class="sidebar-left">
    <div class="sidebar-close">
      <button type="button" title="close" class="close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="sidebar-content">
      <div class="sidebar-logo d-none d-lg-block">
        <a href="<?= $base_url ?>"><img src="<?= $base_url ?>assets/images/logo.svg" alt="Logo" width="50" height="30" /></a>
      </div>
      <p class="text d-none d-lg-block">I help SaaS companies design intuitive products that always keep users engaged.</p>
      <div class="sidebar-menu">
        <h5 class="menu-title d-none d-lg-block">Quick Links</h5>
        <ul>
          <li class="d-block d-lg-none"><a class="side-menu page-scroll active" data-tab="#hero-area" href="#hero-area">Home</a></li>
          <li class="d-block d-lg-none"><a class="side-menu page-scroll" data-tab="#projects" href="<?= $base_url ?>#projects"><span>Projects</span></a></li>
          <li class="d-block d-lg-none"><a class="side-menu page-scroll" data-tab="#services" href="<?= $base_url ?>#services"><span>Services</span></a></li>
          <li class="d-block d-lg-none"><a class="side-menu page-scroll" data-tab="#blogs" href="<?= $base_url ?>#blogs"><span>Blog</span></a></li>
          <li class="d-block d-lg-none"><a class="side-menu page-scroll" data-tab="#contact" href="<?= $base_url ?>#contact"><span>Contact</span></a></li>
          <li class="d-block d-lg-none"><a class="side-menu page-scroll" data-tab="#me" id="me" href="<?= $base_url ?>me"><span>Me</span></a></li>
          <li class="d-block d-lg-none"><a class="side-menu page-scroll" data-tab="#dr" target="_blank" href="https://princepaluiux.com/resume.pdf"><span>Resume</span></a></li>
          <li class="d-none d-lg-block"><a class="side-menu page-scroll" data-tab="#bookshelf" href="<?= $base_url ?>#bookshelf"><span>Bookshelf</span></a></li>
          <li class="d-none d-lg-block"><a class="side-menu page-scroll" data-tab="#expertise" href="<?= $base_url ?>#expertise"><span>Expertise</span></a></li>
          <li class="d-none d-lg-block"><a class="side-menu page-scroll" data-tab="#process" href="<?= $base_url ?>me#process"><span>Process</span></a></li>
          <li class="d-none d-lg-block"><a class="side-menu page-scroll" data-tab="#testimonials" href="<?= $base_url ?>#testimonials"><span>Testimonials</span></a></li>
        </ul>
      </div>
      <div class="sidebar-social align-items-center justify-content-center">
        <h5 class="social-title">Follow Me On</h5>
        <ul>
          <li>
            <a class="social-nav-link" href="https://www.upwork.com/freelancers/~012a1837c0a9babd99" target="_blank" rel="noopener" aria-label="Read more"><i class="fa-brands fa-upwork"></i></a>
          </li>
          <li>
            <a class="social-nav-link" href="https://www.behance.net/princepal" target="_blank" rel="noopener" aria-label="Read more"><i class="fa-brands fa-behance"></i></a>
          </li>
          <li>
            <a class="social-nav-link" href="https://www.linkedin.com/in/princepal/" target="_blank" rel="noopener" aria-label="Read more"><i class="fa-brands fa-linkedin-in"></i></a>
          </li>
          <li>
            <a class="social-nav-link" href="https://dribbble.com/think360studio" target="_blank" rel="noopener" aria-label="Read more"><i class="fa-brands fa-dribbble"></i></a>
          </li>
          <li>
            <a class="social-nav-link" href="https://princepaluiux.contra.com/" target="_blank" rel="noopener" aria-label="Read more">
              <svg width="22" height="22" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.0145 13.1884H27.6957C27.8985 13.1884 28 13.1884 28 12.9855V12.5797C28 12.4783 28 12.3768 27.7971 12.3768C21.8116 10.7536 17.1449 6.18841 15.6232 0.202899L15.2174 0H14.913C14.8116 0 14.7101 0.101449 14.7101 0.304348V12.9855C14.7101 13.087 14.7101 13.1884 14.913 13.1884H15.0145ZM15.0145 28H15.4203L15.6232 27.7971C17.2464 21.8116 21.8116 17.1449 27.7971 15.6232L28 15.3188V15.0145C28 14.913 27.8985 14.7101 27.6957 14.7101H15.0145L14.8116 15.0145V27.6957C14.8116 27.8985 14.8116 28 15.0145 28ZM12.6812 28H12.9855C13.087 28 13.1884 27.8985 13.1884 27.6957V15.0145C13.1884 14.913 13.1884 14.7101 12.9855 14.7101H0.304348C0.101449 14.7101 0 14.913 0 15.0145V15.4203C0 15.5217 0 15.6232 0.202899 15.6232C6.18841 17.1449 10.8551 21.8116 12.3768 27.7971L12.6812 28ZM0.304348 13.1884H12.9855C13.087 13.1884 13.1884 13.1884 13.1884 12.9855V0.304348C13.1884 0.101449 13.1884 0 12.9855 0H12.5797C12.4783 0 12.3768 0 12.3768 0.202899C10.7536 6.08696 6.08696 10.8551 0.202899 12.3768L0 12.6812V12.9855C0 13.087 0.101449 13.1884 0.304348 13.1884Z" fill="currentcolor" />
              </svg>
            </a>
          </li>
          <li>
            <a class="social-nav-link" href="https://princepaluiux.substack.com/" target="_blank" rel="noopener" aria-label="Read more">
              <svg width="16" height="18" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H25V3.43815H0V0ZM0 12.5409H25V28L12.4974 21.1207L0 28V12.5409ZM0 6.27044H25V9.70859H0V6.27044Z" fill="currentcolor" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="overlay-left"></div>
  <!-- SIDEBAR PART ENDS -->
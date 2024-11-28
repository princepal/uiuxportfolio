<!DOCTYPE html>
<html lang="en">

<head>
  <?php $base_url = "https://princepaluiux.com/"; ?>
  <script> var base_url = "<?=$base_url?>"; </script>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="title" content="404 | SaaS Product Designer for B2B Companies">
  <meta name="description" content="Freelance SaaS Product Designer for B2B, B2C Companies Enterprise Companies. I design websites and apps that your customers will love and will help you grow.">
  <meta name="keywords" content="SaaS Product Designer, b2b b2c companies, UI UX designer India, Branding Consultant, Enterprise UI/UX Designer Consultant India">
  <meta name="og:title" content="404 | SaaS Product Designer for B2B Companies">
  <meta name="og:description" content="Freelance SaaS Product Designer for B2B, B2C Companies Enterprise Companies. I design websites and apps that your customers will love and will help you grow.">
  <meta property="og:image" content="<?= $base_url ?>assets/images/prince-pal-singh.jpeg" data-addsearch="no_crop" />
  <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />

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
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/bootstrap.min.css" />

  <!--====== Line Icons css ======-->
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/lineicons.css" />

  <!--====== Tiny Slider css ======-->
  <!-- <link rel="stylesheet" href="<?= $base_url ?>assets/css/tiny-slider.css" /> -->

  <!--====== fontawesome Icons ======-->
  <link rel="stylesheet" href="<?= $base_url ?>assets/fontawesome-free-6.6.0-web/css/all.min.css" />

  <!--====== gLightBox css ======-->
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/glightbox.min.css" />

  <!--====== Custom css ======-->
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css" />

    <style type="text/css">
    	.not-found {
    		width: 100%;
    		max-width: 580px;
		    display: flex;
		    flex-direction: column;
		    align-items: center;
		    justify-content: center;
		    text-align: center;
		    height: 100vh;
		    margin: 0 auto;
		    padding: 15px;
		}
		.not-found h1 {
			font-size: 14vh;
			line-height: 1;
			margin-bottom: 10px;
		}
    	.not-found h2 {
    		line-height: normal;
    		margin-bottom: 18px;
    	}
    </style>

</head>
<body>
    <?php
        $url = $_SERVER["REQUEST_URI"];
        $url = trim($url, '/');
    ?>
    <div class="not-found">
        <?php
            if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
                $refuri = parse_url($_SERVER['HTTP_REFERER']);
                if (isset($refuri['host']) && $refuri['host'] == "localhost") {
                    echo "You should email me and tell me I have a dead link on this site.";
                } else {
                    echo "You should email someone over at " . htmlspecialchars($refuri['host']) . " and let them know they have a dead link to this site.";
                }
            } else {
                echo "
                <h1>404</h1>
                <h5 class='mb-5 mt-3 lh-base'>Sorry, \"$url\" Page Does Not Exist.</h5>
                <a class='btn btn-gradient' href='/'>Back to Home</a>
                ";
            }
        ?>
    </div>
</body>
</html>
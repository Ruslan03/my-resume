<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v2.2.1
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7">
            <h2 class="portfolio-title"><?php echo $detail['title'] ?></h2>
            <div class="owl-carousel portfolio-details-carousel">
              <?php foreach ($detail['images'] as $img): ?>
              <img src="<?php echo base_url(str_replace('../', '', $img)) ?>" class="img-fluid" alt="">
              <?php endforeach ?>
            </div>
          </div>

          <div class="col-lg-5 portfolio-info">
            <h3>Project information</h3>
            <table class="table table-borderless table-sm mb-0">
              <tbody>
                <tr>
                  <th>Category</th>
                  <td width="5px">:</td>
                  <td><?php echo $detail['category'] ?></td>
                </tr>
                <tr>
                  <th>Client</th>
                  <td width="5px">:</td>
                  <td><?php echo $detail['client'] ?></td>
                </tr>
                <tr>
                  <th>Project Year</th>
                  <td width="5px">:</td>
                  <td><?php echo $detail['year'] ?></td>
                </tr>
                <tr>
                  <th>Project Sector</th>
                  <td width="5px">:</td>
                  <td><?php echo $detail['sector'] ?></td>
                </tr>
                <tr>
                  <th>Project URL</th>
                  <td width="5px">:</td>
                  <td>
                    <?php
                      if (empty($detail['url'])) {
                        echo '-';
                      }else{
                        echo '<a href="'.$detail['url'].'" target="_blank">'.$detail['url'].'</a>';
                      }
                    ?>
                  </td>
                </tr>
              </tbody>
            </table>
            <p>
              <?php echo $detail['description'] ?>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/typed.js/typed.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap-4 Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>Admin/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>Admin/node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>Admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>Admin/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html" style="color: black; font-size: 40px;">Resep_Kita</a>
      </div>
      
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link" href="index.html"><span class="menu-title">Dashboard</span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_daging'; ?>"><span class="menu-title">Daging</span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_kripik'; ?>"><span class="menu-title">Kripik</span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_hot'; ?>"><span class="menu-title">Makanana Hot</span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_cake' ?>"><span class="menu-title">Resep Cake</span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_Daerah' ?>"><span class="menu-title">Makanan Daerah</span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/Admin_ringan' ?>"><span class="menu-title">Makanan Ringan</span></a></li>
        </ul>
      </nav>

                <?php
               $data['query']= isset($query) ? $query : [];
                $this->load->view($content,$data); ?>

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>Admin/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>Admin/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>Admin/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url(); ?>Admin/node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>Admin/js/dashboard.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="<?php echo base_url(); ?>Admin/js/maps.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
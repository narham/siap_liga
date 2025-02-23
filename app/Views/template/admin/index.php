<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Bootstrap Simple Admin Template</title>
    <link href="<?= base_url(); ?>/assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/css/master.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar komponen -->
        <?= $this->include('template/admin/sidebar'); ?>
        <!-- end sidebar -->
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <?= $this->include('template/admin/navbar'); ?>
            <!-- end of navbar navigation -->
            <!-- cKOnten -->
            <?= $this->renderSection('page'); ?>
        </div>
    </div>
    <!-- JS -->

    <!-- js tambahan -->

    <!-- end of JS tambahan -->
    <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/dashboard-charts.js"></script>
    <script src="<?= base_url(); ?>/assets/js/script.js"></script>
</body>

</html>
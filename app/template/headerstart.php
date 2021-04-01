<!doctype html>
<html lang="<?= $_SESSION['App_Language']; ?>">
<head>
  <!-- Start Meta -->
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Mohamed Salah">
  <!-- End Meta -->

  <!-- Start Title -->
  <title><?= $page_title; ?></title>
  <!-- End Title -->

  <!-- Start CSS -->
  <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css">
  <?= $_SESSION['App_Language'] == 'ar' ? '<link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap-rtl.min.css">' : ''; ?>
  <link rel="stylesheet" href="/assets/vendors/datatables/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/vendors/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="/assets/css/dashboard.css">
  <!-- End CSS -->

  <!-- Start favicon -->
  <link rel="icon" href="/assets/img/favicon/favicon.ico">
  <!-- End favicon -->

  <!-- Start Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
  <!-- End Fonts -->


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Family Trip Bali</title>

  <!-- STYLE -->
  <?= $this->include('admin/layout/style') ?>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- NAVBAR -->
  <?= $this->include('admin/layout/navbar') ?>

  <!-- SIDEBAR -->
  <?= $this->include('admin/layout/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <?= $this->renderSection('content') ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- FOOTER -->
  <?= $this->include('admin/layout/footer') ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

  <!-- PLUGIN -->
  <?= $this->include('admin/layout/plugin') ?>

</body>
</html>

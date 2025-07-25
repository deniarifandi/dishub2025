<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?= esc($title ?? 'Dashboard') ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/adminlte.css" />

  <!-- Fonts & Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" media="print" onload="this.media='all'" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />

  <!-- Plugins -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />

  <?= $this->renderSection('styles') ?>
</head>
<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">

  <div class="app-wrapper">
    <?= $this->include('layouts/navbar') ?>
    <?= $this->include('layouts/sidebar') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('layouts/footer') ?>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/adminlte.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const sidebarWrapper = document.querySelector('.sidebar-wrapper');
      if (sidebarWrapper && window.OverlayScrollbars) {
        OverlayScrollbars(sidebarWrapper, {
          scrollbars: {
            theme: 'os-theme-light',
            autoHide: 'leave',
            clickScroll: true
          }
        });
      }
    });
  </script>

  <?= $this->renderSection('scripts') ?>
</body>
</html>

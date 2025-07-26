<?= $this->extend('layouts/main') ?>

      <?= $this->section('content-top') ?>
      
   

      <?= $this->endSection() ?>

      <?= $this->section('content-header') ?>
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-8"><h3 class="mb-0">Dasboard</h3></div>
              <div class="col-sm-4">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Fixed Layout</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
      <?= $this->endSection() ?>

      <?= $this->section('content-app') ?>
          <div class="app-content">
            <div class="container-fluid">
              <div class="row">

                <!-- Anggota -->
                <div class="col-md-3 col-sm-6 col-12">
                  <a href="<?= base_url(); ?>anggota" class="text-decoration-none">
                    <div class="info-box">
                      <span class="info-box-icon bg-soft-blue"><i class="fas fa-users"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Anggota</span>
                        <span class="info-box-number">1,410</span>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- Transaksi -->
                <div class="col-md-3 col-sm-6 col-12">
                  <a href="<?= base_url(); ?>transaksi" class="text-decoration-none">
                    <div class="info-box">
                      <span class="info-box-icon bg-soft-teal"><i class="fas fa-exchange-alt"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Transaksi</span>
                        <span class="info-box-number">1,410</span>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- Tagihan -->
                <div class="col-md-3 col-sm-6 col-12">
                  <a href="<?= base_url(); ?>tagihan" class="text-decoration-none">
                    <div class="info-box">
                      <span class="info-box-icon bg-soft-yellow"><i class="fas fa-file-invoice-dollar"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Tagihan</span>
                        <span class="info-box-number">1,410</span>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>
      <?= $this->endSection() ?>

       <?= $this->section('content-bottom') ?>
         
        
      <?= $this->endSection() ?>
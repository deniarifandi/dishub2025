<?= $this->extend('layouts/main') ?>

      <?= $this->section('content-top') ?>
      <!--   <div class="app-content-top-area">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6"><div>App Content Top Area</div></div>
              <div class="col-md-6 text-end">
                <button type="submit" class="btn btn-primary" name="save" value="create">
                  Create Admin
                </button>
              </div>
            </div>
          </div>
        </div> -->
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
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                
                <!-- /.card -->
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
      <?= $this->endSection() ?>

       <?= $this->section('content-bottom') ?>
         
        
      <?= $this->endSection() ?>
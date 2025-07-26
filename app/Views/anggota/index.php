<?= $this->extend('layouts/main') ?>

      <?= $this->section('content-top') ?>
      
   

      <?= $this->endSection() ?>

      <?= $this->section('content-header') ?>
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-8"><h3 class="mb-0">Daftar Anggota</h3></div>
              <div class="col-sm-4">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Anggota</li>
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
                <div class="col-md-12 col-sm-12 col-12">
                   <div class="card shadow-sm border-0">
                    <div class="card-header bg-light">
                      <h5 class="mb-0">Data Anggota</h5>
                    </div>
                    <div class="card-body p-3">
                      <div class="table-responsive">
                        <table class="table table-hover table-bordered mb-0">
                          <thead class="table-light">
                            <tr>
                              <th>#</th>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Agus Santoso</td>
                              <td>agus@mail.com</td>
                              <td><span class="badge bg-success">Aktif</span></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Siti Aminah</td>
                              <td>siti@mail.com</td>
                              <td><span class="badge bg-secondary">Tidak Aktif</span></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Budi Hartono</td>
                              <td>budi@mail.com</td>
                              <td><span class="badge bg-success">Aktif</span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?= $this->endSection() ?>

       <?= $this->section('content-bottom') ?>
         
        
      <?= $this->endSection() ?>
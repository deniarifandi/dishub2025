<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
   
     <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!-- end::App Content Header -->

         <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-3">
                  <div class="card shadow-sm rounded-4 p-3" style="background-color:  #d3f9d8; border: 1px solid  #b2f2bb">
                  <div class="d-flex align-items-center">
                    <div class="icon bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px;">
                      <i class="bi bi-chat-dots fs-4"></i>
                    </div>
                    <div>
                      <p class="mb-1 text-muted small">Juru Parkir</p>
                      <h5 class="mb-0 fw-semibold">12</h5>
                    </div>
                  </div>
                </div>
              </div>
               <div class="col-sm-3">
                   <div class="card shadow-sm rounded-4 p-3" style="background-color:  #fff3bf; border: 1px solid  #ffec99">
                  <div class="d-flex align-items-center">
                    <div class="icon bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px;">
                      <i class="bi bi-chat-dots fs-4"></i>
                    </div>
                    <div>
                      <p class="mb-1 text-muted small">Messages</p>
                      <h5 class="mb-0 fw-semibold">12</h5>
                    </div>
                  </div>
                </div>
              </div>
               <div class="col-sm-3">
                   <div class="card shadow-sm rounded-4 p-3" style="background-color:  #ffdce0; border: 1px solid  #f5b9bd">
                  <div class="d-flex align-items-center">
                    <div class="icon bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px;">
                      <i class="bi bi-chat-dots fs-4"></i>
                    </div>
                    <div>
                      <p class="mb-1 text-muted small">Messages</p>
                      <h5 class="mb-0 fw-semibold">12</h5>
                    </div>
                  </div>
                </div>
              </div>
               <div class="col-sm-3">
                   <div class="card shadow-sm rounded-4 p-3" style="background-color:     #e5dbff; border: 1px solid  #d0bfff">
                  <div class="d-flex align-items-center">
                    <div class="icon bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px;">
                      <i class="bi bi-chat-dots fs-4"></i>
                    </div>
                    <div>
                      <p class="mb-1 text-muted small">Messages</p>
                      <h5 class="mb-0 fw-semibold">12</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end::Row -->
          </div>
          <!-- end::container-fluid -->
        </div>
        <!-- end::app-Content -->
      </main>
<?= $this->endSection() ?>
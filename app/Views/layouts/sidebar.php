 <aside class="app-sidebar shadow" data-bs-theme="dark" style="background: #091642;">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="<?= base_url();?>index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="<?= base_url();?>assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item">
                <a href="<?= base_url(); ?>" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
               <!--  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url();?>index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dashboard v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url();?>index2.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dashboard v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url();?>index3.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dashboard v3</p>
                    </a>
                  </li>
                </ul> -->
              </li>
              
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
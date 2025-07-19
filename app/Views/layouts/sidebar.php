<?php
 $menu = [
        [
            'label' => 'Dashboard',
            'icon' => 'bi bi-speedometer',
            'url'   => '/',
            
        ],
        [
            'label' => 'Theme Generate',
            'icon'  => 'bi bi-palette',
            'url'   => 'assets/generate/theme.html',
        ],
        [
            'label' => 'Forms',
            'icon' => 'bi bi-pencil-square',
            'url'  => '#',
            'children' => [
                // ['label' => 'General Elements', 'url' => 'assets/forms/general.html'],
            ]
        ]
    ];
?>


<aside class="app-sidebar bg-primary-subtle shadow" data-bs-theme="light">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="<?= base_url();?>assets/index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="<?= base_url();?>assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Sisparma v.4</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
                <ul class="nav sidebar-menu flex-column" id="navigation" data-lte-toggle="treeview">
<?php foreach ($menu as $item): ?>
  <li class="nav-item <?= isset($item['children']) ? 'menu-open' : '' ?>">
    <a href="<?= isset($item['url']) ? base_url($item['url']) : '#' ?>" class="nav-link <?= $item['active'] ?? false ? 'active' : '' ?>">
      <i class="nav-icon <?= esc($item['icon']) ?>"></i>
      <p>
        <?= esc($item['label']) ?>
        <?php if (isset($item['children'])): ?>
          <i class="nav-arrow bi bi-chevron-right"></i>
        <?php endif; ?>
      </p>
    </a>

    <?php if (isset($item['children'])): ?>
      <ul class="nav nav-treeview">
        <?php foreach ($item['children'] as $child): ?>
          <li class="nav-item">
            <a href="<?= base_url($child['url']) ?>" class="nav-link">
              <i class="nav-icon bi bi-circle"></i>
              <p><?= esc($child['label']) ?></p>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </li>
<?php endforeach; ?>
</ul>

            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
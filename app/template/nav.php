<!-- Start Nav -->
<div class="row">
  <div class="col-12 navbar text-light d-flex align-items-center justify-content-between">
    <div class="toggle">
      <!-- Collapse Sidebar -->
      <i class="fas fa-bars fa-rotate-90 collapse-sidebar" id="collapse-sidebar"></i>
    </div>
    <div class="links d-flex align-items-center">
      <!-- Dropdown Links -->
      <div class="dropdown">
        <a href="#" class="dropdown-toggle d-flex align-items-center" data-toggle="dropdown">
          <img class="img-fluid rounded-circle" src="/assets/img/users/admin.jpg" alt="Admin Profile">
          <span>Mohamed Salah</span>
        </a>
        <!-- Profile -->
        <div class="dropdown-menu text-light">
          <a class="dropdown-item" href="#">
            <i class="fas fa-user"></i>
            <?= $text_navbar_dropdown_profile; ?>
          </a>
          <!-- Change Password -->
          <a class="dropdown-item" href="#">
            <i class="fas fa-key"></i>
            <?= $text_navbar_dropdown_password; ?>
          </a>
          <!-- Settings -->
          <a class="dropdown-item" href="#">
            <i class="fas fa-cog"></i>
            <?= $text_navbar_dropdown_settings; ?>
          </a>
          <div class="dropdown-divider"></div>
          <!-- Logout -->
          <a class="dropdown-item" href="#">
            <i class="fas fa-sign-out-alt"></i>
            <?= $text_navbar_dropdown_logout; ?>
          </a>
        </div>
      </div>
      <!-- Change Language -->
      <a href="/language">
        <i class="fas fa-globe-americas"></i>
        <span><?= $text_navbar_change_language; ?></span>
      </a>
    </div>
  </div>
</div>
<!-- End Nav -->


<!-- Page Body Start-->
<div class="page-body-wrapper sidebar-icon">
  <!-- Page Sidebar Start-->
  <header class="main-nav">
    <div class="sidebar-user text-center">
      <a class="setting-primary" href="javascript:void(0)">
        <i data-feather="settings"></i>
      </a>
      <img class="img-90 rounded-circle" src="<?= site_url('assets/images/dashboard/1.png') ?>" alt="">
      <div class="badge-bottom"><span class="badge badge-primary">New</span>
      </div>
      <a href="user-profile.html">
        <h6 class="mt-3 f-14 f-w-600"><?= $this->session->userdata('nama_lengkap'); ?></h6>
      </a>
      <p class="mb-0 font-roboto"><?= $this->session->userdata('name_role'); ?></p>
      <ul>
        <li><span><span class="counter">19.8</span>k</span>
          <p>Follow</p>
        </li>
        <li><span>2 year</span>
          <p>Experince</p>
        </li>
        <li><span><span class="counter">95.2</span>k</span>
          <p>Follower </p>
        </li>
      </ul>
    </div>
    <nav>
      <div class="main-navbar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="mainnav">           
          <ul class="nav-menu custom-scrollbar">
            <li class="back-btn">
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
            
            <?= $menu ?>

          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </div>
    </nav>
  </header>
      <!-- Page Sidebar Ends-->
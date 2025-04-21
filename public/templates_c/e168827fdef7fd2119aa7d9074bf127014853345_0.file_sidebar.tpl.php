<?php
/* Smarty version 5.4.5, created on 2025-04-21 04:09:18
  from 'file:C:\laragon\www\medicore\views\./includes/sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6805c4ee74cd40_13068894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e168827fdef7fd2119aa7d9074bf127014853345' => 
    array (
      0 => 'C:\\laragon\\www\\medicore\\views\\./includes/sidebar.tpl',
      1 => 1745208368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6805c4ee74cd40_13068894 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views\\includes';
?><div class="col-xl-2 col-lg-3 d-none d-lg-block position-relative">
  <div class="sidebar">
      <div class="sidebar-logo">
          <img class="w-100" src="/assets/logo.png" alt="Logo" />
      </div>
      <div class="sidebar-items">
          <div>
              <a href="#"><img class="me-3" src="/assets/dashboard.png" alt="Logo" />Dashboard</a>
          </div>
          <div>
              <a href="/"><img class="me-3" src="/assets/patient.png" alt="Logo" />Patient Details</a>
          </div>
          <div>
              <a href="#"><img class="me-3" src="/assets/doctor.png" alt="Logo" />Doctor Details</a>
          </div>
          <div>
              <a href="#"><img class="me-3" src="/assets/payment.png" alt="Logo" />Payment Details</a>
          </div>
          <div>
              <a href="#"><img class="me-3" src="/assets/channeling.png" alt="Logo" />E-Channeling</a>
          </div>
      </div>
  </div>
</div>

<div class="d-lg-none p-2">
  <button class="btn btn-outline-primary" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
    <i class="bi bi-list"></i> Menu
  </button>
</div>

<!-- Mobile Sidebar -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title"><img class="w-100" src="/assets/logo.png" alt="Logo" /></h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="sidebar-items">
      <div><a class="text-white" href="#"><img class="me-2" src="/assets/dashboard.png" alt="" />Dashboard</a></div>
      <div><a class="text-white" href="/"><img class="me-2" src="/assets/patient.png" alt="" />Patient Details</a></div>
      <div><a class="text-white" href="#"><img class="me-2" src="/assets/doctor.png" alt="" />Doctor Details</a></div>
      <div><a class="text-white" href="#"><img class="me-2" src="/assets/payment.png" alt="" />Payment Details</a></div>
      <div><a class="text-white" href="#"><img class="me-2" src="/assets/channeling.png" alt="" />E-Channeling</a></div>
    </div>
  </div>
</div><?php }
}

<?php
/* Smarty version 5.4.5, created on 2025-04-21 04:10:57
  from 'file:../views/patients/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6805c55161cab6_99547091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f03a2686c7a326667cd20fe04463e981d5e65f50' => 
    array (
      0 => '../views/patients/show.tpl',
      1 => 1745208459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6805c55161cab6_99547091 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views\\patients';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3107954896805c551612ef1_79606677', "body");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../layout.tpl", $_smarty_current_dir);
}
/* {block "body"} */
class Block_3107954896805c551612ef1_79606677 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views\\patients';
?>

<h4>Patient Details</h4>
<div class="row">
  <!-- Patient Profile Card -->
  <div class="col-lg-8 col-12 mb-4">
    <div class="card p-4 border-0 shadow-sm">
      <div class="d-flex align-items-center">
        <img src="/<?php echo $_smarty_tpl->getValue('patient')['photo'];?>
" alt="Patient" class="rounded-circle me-4 shadow-sm" style="width: 100px; height: 100px; object-fit: cover;">
        <div>
          <h4 class="mb-1 fw-bold text-primary"><?php echo $_smarty_tpl->getValue('patient')['firstname'];?>
 <?php echo $_smarty_tpl->getValue('patient')['lastname'];?>
</h4>
          <p class="mb-1 text-muted"><i class="bi bi-telephone me-1"></i> <?php echo $_smarty_tpl->getValue('patient')['mobile'];?>
</p>
          <p class="mb-0 text-muted"><i class="bi bi-calendar3 me-1"></i> <?php echo $_smarty_tpl->getValue('patient')['date'];?>
</p>
        </div>
      </div>

      <hr class="my-4" />

      <div class="d-flex">
        <a href="/patients/<?php echo $_smarty_tpl->getValue('patient')['id'];?>
/edit" class="btn btn-outline-primary me-3 px-4">
          <i class="bi bi-pencil me-1"></i> Edit
        </a>
        <form method="post" action="/patients/<?php echo $_smarty_tpl->getValue('patient')['id'];?>
/delete">
          <button type="submit" class="btn btn-outline-danger px-4">
            <i class="bi bi-trash me-1"></i> Delete
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Sidebar Info -->
  <div class="col-lg-4 col-12">
    <!-- Department Info -->
    <div class="card p-4 mb-3 border-0 shadow-sm">
      <h6 class="text-uppercase text-muted mb-2">Department</h6>
      <p class="mb-0 fs-6">
        <i class="bi bi-building me-1 text-secondary"></i>
        <strong><?php echo $_smarty_tpl->getValue('patient')['name'];?>
</strong> <span class="text-muted">(<?php echo $_smarty_tpl->getValue('patient')['code'];?>
)</span>
      </p>
    </div>

    <!-- Doctor Info -->
    <div class="card p-4 border-0 shadow-sm">
      <h6 class="text-uppercase text-muted mb-3">Doctor</h6>
      <div class="d-flex align-items-center mb-3">
        <img src="/<?php echo $_smarty_tpl->getValue('patient')['dphoto'];?>
" alt="Doctor" class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
        <div>
          <p class="mb-1 fw-bold">Dr. <?php echo $_smarty_tpl->getValue('patient')['dfirstname'];?>
 <?php echo $_smarty_tpl->getValue('patient')['dlastname'];?>
</p>
          <p class="mb-0 text-muted"><?php echo $_smarty_tpl->getValue('patient')['speciality'];?>
</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
}
}
/* {/block "body"} */
}

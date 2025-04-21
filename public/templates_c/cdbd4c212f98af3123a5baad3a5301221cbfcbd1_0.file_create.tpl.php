<?php
/* Smarty version 5.4.5, created on 2025-04-21 04:11:16
  from 'file:../views/patients/create.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6805c564e2bf82_07423131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdbd4c212f98af3123a5baad3a5301221cbfcbd1' => 
    array (
      0 => '../views/patients/create.tpl',
      1 => 1745208397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6805c564e2bf82_07423131 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views\\patients';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1399551866805c564e1d322_26829366', "body");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../layout.tpl", $_smarty_current_dir);
}
/* {block "body"} */
class Block_1399551866805c564e1d322_26829366 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views\\patients';
?>

<div class="card p-3">
    <h5 class="fw-bold mb-3">Create new patient</h5>
    <form method="post" action="/patients/store" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group mb-3">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" class="form-control" required/>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group mb-3">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" class="form-control" required/>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="mobile">Mobile Phone</label>
            <input type="text" id="mobile" name="mobile" class="form-control" required />
        </div>

        <div class="form-group mb-3">
            <select class="form-select" name="doctor" required>
                <option selected hidden value="">Select a doctor</option>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('doctors'), 'doctor');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('doctor')->value) {
$foreach0DoElse = false;
?>
                    <option value="<?php echo $_smarty_tpl->getValue('doctor')['id'];?>
"><?php echo $_smarty_tpl->getValue('doctor')['firstname'];?>
 <?php echo $_smarty_tpl->getValue('doctor')['lastname'];?>
 - <?php echo $_smarty_tpl->getValue('doctor')['speciality'];?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <div class="form-group mb-3">
            <select class="form-select" name="departement" required>
                <option selected hidden value="">Select a departement</option>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('departements'), 'departement');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('departement')->value) {
$foreach1DoElse = false;
?>
                    <option value="<?php echo $_smarty_tpl->getValue('departement')['id'];?>
"><?php echo $_smarty_tpl->getValue('departement')['name'];?>
 (<?php echo $_smarty_tpl->getValue('departement')['code'];?>
)</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="date">Date</label>
            <input type="datetime-local" id="date" name="date" class="form-control" required/>
        </div>

        <div class="form-group mb-3">
            <label for="photo">Photo</label>
            <input type="file" id="photo" name="photo" class="form-control" accept="image/png, image/gif, image/jpeg, image/jpg" required/>
        </div>

        <button class="btn btn-success" type="submit">Create</button>
    </form>
</div>
<?php
}
}
/* {/block "body"} */
}

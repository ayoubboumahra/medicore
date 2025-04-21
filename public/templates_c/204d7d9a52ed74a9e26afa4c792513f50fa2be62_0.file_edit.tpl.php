<?php
/* Smarty version 5.4.5, created on 2025-04-21 04:11:02
  from 'file:../views/patients/edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6805c556c4efe0_18906333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '204d7d9a52ed74a9e26afa4c792513f50fa2be62' => 
    array (
      0 => '../views/patients/edit.tpl',
      1 => 1745208420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6805c556c4efe0_18906333 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views\\patients';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18982522606805c556c37e19_78903316', "body");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../layout.tpl", $_smarty_current_dir);
}
/* {block "body"} */
class Block_18982522606805c556c37e19_78903316 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views\\patients';
?>

<div class="card p-3">
    <h5 class="fw-bold mb-3">Edit the patient</h5>
    <form method="post" action="/patients/<?php echo $_smarty_tpl->getValue('patient')['id'];?>
/update" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group mb-3">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" class="form-control" value="<?php echo $_smarty_tpl->getValue('patient')['firstname'];?>
" required/>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group mb-3">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" class="form-control" value="<?php echo $_smarty_tpl->getValue('patient')['lastname'];?>
" required/>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="mobile">Mobile Phone</label>
            <input type="text" id="mobile" name="mobile" class="form-control" value="<?php echo $_smarty_tpl->getValue('patient')['mobile'];?>
" required />
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
" <?php $_prefixVariable1 = $_smarty_tpl->getValue('patient')['doctor_id'];
$_tmp_array = $_smarty_tpl->getValue('doctor') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['id'] = $_prefixVariable1;
$_smarty_tpl->assign('doctor', $_tmp_array, false, NULL);
if ($_prefixVariable1) {?> selected <?php }?>><?php echo $_smarty_tpl->getValue('doctor')['firstname'];?>
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
" <?php $_prefixVariable2 = $_smarty_tpl->getValue('patient')['departement_id'];
$_tmp_array = $_smarty_tpl->getValue('departement') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['id'] = $_prefixVariable2;
$_smarty_tpl->assign('departement', $_tmp_array, false, NULL);
if ($_prefixVariable2) {?> selected <?php }?>><?php echo $_smarty_tpl->getValue('departement')['name'];?>
 (<?php echo $_smarty_tpl->getValue('departement')['code'];?>
)</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="date">Date</label>
            <input type="datetime-local" id="date" name="date" class="form-control" value="<?php echo $_smarty_tpl->getValue('patient')['date'];?>
" required/>
        </div>

        <div class="form-group mb-3">
            <label for="photo">Photo</label>
            <input type="file" id="photo" name="photo" class="form-control" value="<?php echo $_smarty_tpl->getValue('patient')['photo'];?>
" accept="image/png, image/gif, image/jpeg, image/jpg"/>
        </div>

        <button class="btn btn-warning" type="submit">Update</button>
    </form>
</div>
<?php
}
}
/* {/block "body"} */
}

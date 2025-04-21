<?php
/* Smarty version 5.4.5, created on 2025-04-19 21:04:17
  from 'file:../views/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_68040fd14adf28_02427303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c512216d484fb8392e43abba2ada03e49d3125f0' => 
    array (
      0 => '../views/index.tpl',
      1 => 1745096652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68040fd14adf28_02427303 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_94899899368040fd1224713_23987422', "styles");
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_46314276668040fd1328756_03955563', "body");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "./layout.tpl", $_smarty_current_dir);
}
/* {block "styles"} */
class Block_94899899368040fd1224713_23987422 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views';
?>

<style>
table img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}


table {
  border-radius: 15px;
}

table img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}


td, th {
  text-align: center;
    vertical-align: middle;
    padding: 15px !important;
}
.table-name {
  font-weight: 500;
}

.available img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
}
</style>
<?php
}
}
/* {/block "styles"} */
/* {block "body"} */
class Block_46314276668040fd1328756_03955563 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views';
?>

  <div class="row">
    <div class="col-8">
      <table class="table table-bordered">
          <thead>
              <tr>
                  <th></th>
                  <th>Name</th>
                  <th>Mob</th>
                  <th>Date</th>
                  <th>Doctor</th>
                  <th>Departement</th>
              </tr>
          </thead>
          <tbody>
          <tr>
            <td><img src="https://placehold.co/400" alt=""></td>
            <td class="table-name">Andrew Richardson</td>
            <td>(555) 123-4567</td>
            <td>09/06/2023 10:00AM</td>
            <td class="table-name">Dr. Jennifer Roberts</td>
            <td>Pediatrics (A-9987)</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-4">
      <div class="card available">
        <div class="card-body">
          <div class="container">
            <h4 class="mb-3">Available Doctors</h4>
            <form class="mb-4">
              <div class="input-group mb-3">
                <span class="input-group-text bg-none" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Search here" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </form>
            <div class="row">
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('doctors'), 'doctor');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('doctor')->value) {
$foreach0DoElse = false;
?>
                <div class="col-4 text-center my-3">
                  <img class="mb-2" src="<?php echo $_smarty_tpl->getValue('doctor')['photo'];?>
" alt="Dr. <?php echo $_smarty_tpl->getValue('doctor')['firstname'];?>
 <?php echo $_smarty_tpl->getValue('doctor')['lastname'];?>
" />
                  <h6 style="color: #02A499">Dr. <?php echo $_smarty_tpl->getValue('doctor')['firstname'];?>
 <?php echo $_smarty_tpl->getValue('doctor')['lastname'];?>
</h6>
                  <p style="color: #8B8B8B; font-size: 12px"><?php echo $_smarty_tpl->getValue('doctor')['speciality'];?>
 (<?php echo $_smarty_tpl->getValue('doctor')['code'];?>
)</p>
                </div>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
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

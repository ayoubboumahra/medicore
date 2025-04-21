<?php
/* Smarty version 5.4.5, created on 2025-04-21 04:09:18
  from 'file:C:\laragon\www\medicore\views\patients\../layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6805c4ee544ac7_34817114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50e73659004eca790fdbdb11784eea703024ad53' => 
    array (
      0 => 'C:\\laragon\\www\\medicore\\views\\patients\\../layout.tpl',
      1 => 1745208496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./includes/sidebar.tpl' => 1,
    'file:./includes/header.tpl' => 1,
  ),
))) {
function content_6805c4ee544ac7_34817114 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1592709876805c4ee533bf4_25943283', "title");
?>
</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="/assets/styles/style.css" rel="stylesheet" />
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2408589836805c4ee53a6e8_98998721', "styles");
?>

</head>
<body>
    <div class="p-3">
        <div class="row">
            
                <?php $_smarty_tpl->renderSubTemplate("file:./includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            
                
            <div class="col-xl-10 col-lg-9">
                <?php $_smarty_tpl->renderSubTemplate("file:./includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php if ((true && ($_smarty_tpl->hasVariable('success') && null !== ($_smarty_tpl->getValue('success') ?? null)))) {?>
                    <div class="alert alert-success">
                        <?php echo $_smarty_tpl->getValue('success');?>

                    </div>
                <?php }?>
                <?php if ((true && ($_smarty_tpl->hasVariable('error') && null !== ($_smarty_tpl->getValue('error') ?? null)))) {?>
                    <div class="alert alert-danger">
                        <?php echo $_smarty_tpl->getValue('error');?>

                    </div>
                <?php }?>
                
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13080551726805c4ee5433a0_18944377', "body");
?>

            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_17539219706805c4ee544014_93568396', "scripts");
?>

</body>
</html><?php }
/* {block "title"} */
class Block_1592709876805c4ee533bf4_25943283 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views';
?>
Medicore<?php
}
}
/* {/block "title"} */
/* {block "styles"} */
class Block_2408589836805c4ee53a6e8_98998721 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views';
}
}
/* {/block "styles"} */
/* {block "body"} */
class Block_13080551726805c4ee5433a0_18944377 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views';
}
}
/* {/block "body"} */
/* {block "scripts"} */
class Block_17539219706805c4ee544014_93568396 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views';
}
}
/* {/block "scripts"} */
}

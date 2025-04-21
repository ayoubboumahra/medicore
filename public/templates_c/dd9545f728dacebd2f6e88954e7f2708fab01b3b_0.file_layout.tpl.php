<?php
/* Smarty version 5.4.5, created on 2025-04-19 21:30:07
  from 'file:C:\laragon\www\medicore\views\./layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_680415df02ce68_46993228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd9545f728dacebd2f6e88954e7f2708fab01b3b' => 
    array (
      0 => 'C:\\laragon\\www\\medicore\\views\\./layout.tpl',
      1 => 1745098204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_680415df02ce68_46993228 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1879673815680415df025e07_48418207', "title");
?>
</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        .sidebar {
            height: calc(100vh - 2rem);
            background-color: #02A499; 
            color: white;
            border-radius: 15px;
        }
        .sidebar-logo {
            padding: 20px 0px;
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar-items {
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
    </style>
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_142563233680415df02b888_34581776', "styles");
?>

</head>
<body>
    <div class="p-3">
        <div class="row">
            <div class="col-2">
                <div class="sidebar">
                    <div class="sidebar-logo">
                        Logo
                    </div>
                    <div class="sidebar-items">
                        <div>
                            <p>Dashboard</p>
                        </div>
                        <div>
                            <p>Patient Details</p>
                        </div>
                        <div>
                            <p>Doctor Details</p>
                        </div>
                        <div>
                            <p>Payment Details</p>
                        </div>
                        <div>
                            <p>E-Channeling</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <header class="mb-5 py-4">
                    <h2 class="fw-bold" style="color: #02A499;">Healthcare</h2>
                    <h2 class="fw-bold">Management System</h2>
                </header>
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_569746012680415df02c4f6_15650930', "body");
?>

            </div>
        </div>
    </div>
</body>
</html><?php }
/* {block "title"} */
class Block_1879673815680415df025e07_48418207 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views';
?>
Medicore<?php
}
}
/* {/block "title"} */
/* {block "styles"} */
class Block_142563233680415df02b888_34581776 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views';
}
}
/* {/block "styles"} */
/* {block "body"} */
class Block_569746012680415df02c4f6_15650930 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\medicore\\views';
}
}
/* {/block "body"} */
}

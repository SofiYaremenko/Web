<?php
/* Smarty version 3.1.33, created on 2019-04-12 08:19:36
  from 'C:\wamp64\www\Lab02\smarty\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb04a187ad973_77038075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15bac8cd736e99c58c8a2b7ed96a05a79d4a30ee' => 
    array (
      0 => 'C:\\wamp64\\www\\Lab02\\smarty\\templates\\main.tpl',
      1 => 1551436056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb04a187ad973_77038075 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <meta lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" />
    <title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</body>
</html><?php }
}

<?php
/* Smarty version 4.3.2, created on 2024-05-20 15:35:19
  from 'C:\xampp\htdocs\PBAW\7BD\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664b519764aa28_89718720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f3d745917f8e4fce82746b8708a2f08577c9992' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PBAW\\7BD\\app\\views\\templates\\main.tpl',
      1 => 1716212116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664b519764aa28_89718720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Aplikacja bazodanowa</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
</head>

<body style="margin: 20px;">

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
parcelList" class="pure-menu-heading pure-menu-link">Lista przesyłek</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList" class="pure-menu-heading pure-menu-link">Lista użytkowników</a>
<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
<?php } else { ?>	
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
<?php }?>
</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2088767102664b5197642420_34861507', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1599905649664b5197642c18_45281014', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_365182484664b519764a300_42871047', 'bottom');
?>


</body>

</html><?php }
/* {block 'top'} */
class Block_2088767102664b5197642420_34861507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_2088767102664b5197642420_34861507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_1599905649664b5197642c18_45281014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_1599905649664b5197642c18_45281014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_365182484664b519764a300_42871047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_365182484664b519764a300_42871047',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}

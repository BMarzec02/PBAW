<?php
/* Smarty version 4.3.4, created on 2024-06-16 21:40:39
  from 'C:\xampp1\htdocs\kurier\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666f3fb730e634_88606210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ba725c21ccc7cbc5db1036a051ddb232137eac2' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\kurier\\app\\views\\templates\\main.tpl',
      1 => 1718554023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f3fb730e634_88606210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Aplikacja kurierska</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"assets/css/main.css"),$_smarty_tpl ) );?>
" />
	<noscript><link rel="stylesheet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"assets/css/main.css"),$_smarty_tpl ) );?>
" /></noscript>
</head>
<body class="is-preload">
<div id="page-wrapper">
	<header id="header">
		<h1 id="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
info">OUTpost</a></h1>
		<nav id="nav">
			<ul>
				<?php if (core\RoleUtils::inRole("admin")) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
parcelList" class="pure-menu-heading pure-menu-link">Lista przesyłek</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
parcelOwn" class="pure-menu-heading pure-menu-link">Twoje przesyłki</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userList" class="pure-menu-heading pure-menu-link">Lista użytkowników</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
parcelAdd" class="pure-menu-heading pure-menu-link">Dodaj przesyłkę!</a></li>
				<?php }?>

				<?php if (core\RoleUtils::inRole("user") && !core\RoleUtils::inRole("admin")) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
parcelOwn" class="pure-menu-heading pure-menu-link">Twoje przesyłki</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
parcelAdd" class="pure-menu-heading pure-menu-link">Dodaj przesyłkę!</a></li>
				<?php }?>

				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
parcelTracking" class="pure-menu-heading pure-menu-link">Śledź przesyłkę!</a></li>

				<?php if (core\SessionUtils::load("id",true)) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="button secondary">Wyloguj</a></li>
				<?php } else { ?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login_show" class="button primary">Zaloguj się</a></li>
				<?php }?>
			</ul>
		</nav>
	</header>

	<div id="main">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207469319666f3fb730a9a1_21395501', 'main');
?>


		<!-- Wiadomości -->
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_771945371666f3fb730b021_03268378', 'messages');
?>

	</div>

	<footer id="footer">
		<ul class="icons">
			<li><a href="https://github.com/BMarzec02" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
		</ul>
		<ul class="copyright">
			<li>&copy; Autor: Bartłomiej Marzec</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</footer>

</div>
</body>
</html>
<?php }
/* {block 'main'} */
class Block_207469319666f3fb730a9a1_21395501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_207469319666f3fb730a9a1_21395501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php
}
}
/* {/block 'main'} */
/* {block 'messages'} */
class Block_771945371666f3fb730b021_03268378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_771945371666f3fb730b021_03268378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
				<div class="messages">
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
							<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>">
								<?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

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
}

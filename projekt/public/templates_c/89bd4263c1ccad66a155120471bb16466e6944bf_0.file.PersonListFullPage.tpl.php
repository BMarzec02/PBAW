<?php
/* Smarty version 4.3.2, created on 2024-05-06 22:34:08
  from 'C:\xampp\htdocs\PBAW\7. BD\app\views\PersonListFullPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66393ec00baed0_31384254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89bd4263c1ccad66a155120471bb16466e6944bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PBAW\\7. BD\\app\\views\\PersonListFullPage.tpl',
      1 => 1715022121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:PersonListTable.tpl' => 1,
  ),
),false)) {
function content_66393ec00baed0_31384254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181577879766393ec00b4eb5_31246841', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165285478166393ec00b8148_61238683', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_181577879766393ec00b4eb5_31246841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_181577879766393ec00b4eb5_31246841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personListPart','table'); return false;">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="nazwisko" name="sf_surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_165285478166393ec00b8148_61238683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_165285478166393ec00b8148_61238683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personNew">+ Nowa osoba</a>
</div>	

<div id="table">
<?php $_smarty_tpl->_subTemplateRender("file:PersonListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php
}
}
/* {/block 'bottom'} */
}

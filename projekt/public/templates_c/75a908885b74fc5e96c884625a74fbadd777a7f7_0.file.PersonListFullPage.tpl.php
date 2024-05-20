<?php
/* Smarty version 4.3.2, created on 2024-05-20 14:44:50
  from 'C:\xampp\htdocs\PBAW\7BD\app\views\PersonListFullPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664b45c2665256_48084526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75a908885b74fc5e96c884625a74fbadd777a7f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PBAW\\7BD\\app\\views\\PersonListFullPage.tpl',
      1 => 1716209088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:PersonListTable.tpl' => 1,
  ),
),false)) {
function content_664b45c2665256_48084526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2044982593664b45c265f976_49901993', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_836027815664b45c26625e8_04417492', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_2044982593664b45c265f976_49901993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_2044982593664b45c265f976_49901993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personListPart','table'); return false;">
	<legend>Wyszukaj przesyłkę</legend>
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
class Block_836027815664b45c26625e8_04417492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_836027815664b45c26625e8_04417492',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personNew">Dodaj presyłkę</a>
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

<?php
/* Smarty version 4.3.2, created on 2024-05-20 14:42:10
  from 'C:\xampp\htdocs\PBAW\7BD\app\views\PersonEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664b45223c4735_72238019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26496d2179ed8ad2c1c9ac8de8789712332f01ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PBAW\\7BD\\app\\views\\PersonEdit.tpl',
      1 => 1716208834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664b45223c4735_72238019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_432195983664b45223bf924_48480148', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_432195983664b45223bf924_48480148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_432195983664b45223bf924_48480148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dodaj przesyłkę</legend>
		<div class="pure-control-group">
            <label for="weight">Waga przesyłki [kg]: </label>
            <input id="weight" type="text" placeholder="waga" name="weight" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->weight;?>
">
        </div>

        <div class="pure-control-group">
            <label for="date">Data nadania</label>
            <input id="date" type="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->date;?>
">
        </div>

        <div class="pure-control-group">
            <label for="size">Rozmiar przesyłki</label>
            <input id="size" type="text" placeholder="S/M/L" name="size" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->size;?>
">
        </div>

        <div class="pure-control-group">
            <label for="name">Imię odbiorcy</label>
            <input id="name" type="text" placeholder="imię" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
        </div>

        <div class="pure-control-group">
            <label for="surname">Nazwisko odbiorcy</label>
            <input id="surname" type="text" placeholder="nazwisko" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
">
        </div>

        <div class="pure-control-group">
            <label for="address">Adres odbiorcy</label>
            <input id="address" type="text" placeholder="adres" name="address" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->address;?>
">
        </div>

        <div class="pure-control-group">
            <label for="phone_number">Numer tel. odbiorcy</label>
            <input id="phone_number" type="text" placeholder="numer tel" name="phone_number" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone_number;?>
">
        </div>

		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}

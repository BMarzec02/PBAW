<?php
/* Smarty version 4.3.2, created on 2024-05-20 14:47:48
  from 'C:\xampp\htdocs\PBAW\7BD\app\views\PersonListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664b4674513d76_19303622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f2ef114da47d015174547c3292c796847013537' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PBAW\\7BD\\app\\views\\PersonListTable.tpl',
      1 => 1716209116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664b4674513d76_19303622 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>id_przesyłki</th>
		<th>waga</th>
		<th>data nadania</th>
		<th>rozmiar</th>
		<th>imię odbiorcy</th>
		<th>nazwisko odbiorcy</th>
		<th>adres</th>
		<th>nr. telefonu odbiorcy</th>
		<th>status przesyłki</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parcel']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["id_parcel"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["weight"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["date"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["size"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["address"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["phone_number"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["status"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_parcel'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_parcel'];?>
','Czy na pewno usunąć?')">Usuń</a></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}

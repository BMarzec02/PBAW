<?php
/* Smarty version 4.3.4, created on 2024-06-11 00:37:50
  from 'C:\xampp\htdocs\kurier\app\views\UserList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6667803ee2cbf0_62741990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6166dea40f8882df0bfe2596e271bcb93e66c9f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kurier\\app\\views\\UserList.tpl',
      1 => 1718059001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6667803ee2cbf0_62741990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14818100396667803ee23f80_83278274', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_14818100396667803ee23f80_83278274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_14818100396667803ee23f80_83278274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table>
    <thead>
    <tr>
        <th>ID Użytkownika</th>
        <th>Login</th>
        <th>Rola</th>
        <th>adres e-mail</th>
        <th>Numer Telefonu</th>
        <th>Operacje</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["role"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["email"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["phone_number"];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" class="button primary small icon solid fa-edit">Edytuj</a>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userRemove/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" class="button small icon solid fa-trash">Usuń</a></td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php
}
}
/* {/block 'main'} */
}

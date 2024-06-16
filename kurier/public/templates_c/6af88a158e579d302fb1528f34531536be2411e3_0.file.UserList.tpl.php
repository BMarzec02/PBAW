<?php
/* Smarty version 4.3.4, created on 2024-06-16 21:51:22
  from 'C:\xampp1\htdocs\kurier\app\views\UserList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666f423abec409_01812238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6af88a158e579d302fb1528f34531536be2411e3' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\kurier\\app\\views\\UserList.tpl',
      1 => 1718567481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f423abec409_01812238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_761595034666f423abe3237_08009503', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_761595034666f423abe3237_08009503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_761595034666f423abe3237_08009503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="table-wrapper">
    <table class="alt">
    <thead>
    <tr>
        <th>ID Użytkownika</th>
        <th>Login</th>
        <th>Rola</th>
        <th>Adres e-mail</th>
        <th>Numer Telefonu</th>
        <th>Kiedy utworzony</th>
        <th>Ostatnia edycja [Kiedy/Kto]</th>
        <th></th>
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
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value["id"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value["login"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value["role"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value["email"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value["phone_number"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value["kiedy_utworzono"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value["ostatnia_edycja"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value["kto_edytowal"];?>
</td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" class="button primary small icon solid fa-edit">Edytuj</a>
                    &nbsp;
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userRemove/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" class="button small icon solid fa-trash">Usuń</a>
                </td>
            </tr>
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

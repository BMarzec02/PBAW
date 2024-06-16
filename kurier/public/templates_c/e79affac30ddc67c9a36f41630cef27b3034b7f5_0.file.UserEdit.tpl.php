<?php
/* Smarty version 4.3.4, created on 2024-06-16 21:46:40
  from 'C:\xampp1\htdocs\kurier\app\views\UserEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666f4120ef19b8_20516950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e79affac30ddc67c9a36f41630cef27b3034b7f5' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\kurier\\app\\views\\UserEdit.tpl',
      1 => 1718060839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f4120ef19b8_20516950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1572720893666f4120eeb1f3_68377830', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_1572720893666f4120eeb1f3_68377830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1572720893666f4120eeb1f3_68377830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container wrapper style">
        <section>
            <h3>Modyfikuj użytkownika</h3>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userSave" method="post">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">
                        <input id="login" type="text" placeholder="Login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="email" type="email" placeholder="Email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="phone_number" type="text" placeholder="Numer telefonu" name="phone_number" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone_number;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <select id="role" name="role">
                            <option value="user" <?php if ($_smarty_tpl->tpl_vars['form']->value->role == 'user') {?>selected<?php }?>>Użytkownik</option>
                            <option value="admin" <?php if ($_smarty_tpl->tpl_vars['form']->value->role == 'admin') {?>selected<?php }?>>Administrator</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Zapisz zmiany" class="primary" /></li>
                            <li><a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userList">Cofnij</a></li>
                        </ul>
                </div>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
            </form>
        </section>
    </div>
<?php
}
}
/* {/block 'main'} */
}

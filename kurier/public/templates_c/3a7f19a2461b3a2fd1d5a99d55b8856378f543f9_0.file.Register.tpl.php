<?php
/* Smarty version 4.3.4, created on 2024-06-11 02:23:44
  from 'C:\xampp1\htdocs\kurier\app\views\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66679910dc8f88_26498666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a7f19a2461b3a2fd1d5a99d55b8856378f543f9' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\kurier\\app\\views\\Register.tpl',
      1 => 1718061620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66679910dc8f88_26498666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148859495066679910dc44a7_50588716', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_148859495066679910dc44a7_50588716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_148859495066679910dc44a7_50588716',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container wrapper style">
        <!-- Form -->
        <section>
            <h3>Rejestracja</h3>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerSave" method="post">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">
                        <input id="login" type="text" placeholder="Login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="password" type="password" placeholder="Hasło" name="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="password_confirm" type="password" placeholder="Potwierdź hasło" name="password_confirm" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password_confirm;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="email" type="email" placeholder="Email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="email_confirm" type="email" placeholder="Potwierdź email" name="email_confirm" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email_confirm;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="phone_number" type="text" placeholder="Numer telefonu" name="phone_number" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone_number;?>
">
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Zarejestruj" class="primary" /></li>
                            <li><a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Cofnij</a></li>
                        </ul>
                    </div>
                </div>
                <input type="hidden" name="role" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->role;?>
">
            </form>
        </section>
    </div>
<?php
}
}
/* {/block 'main'} */
}

<?php
/* Smarty version 4.3.4, created on 2024-06-16 21:52:06
  from 'C:\xampp1\htdocs\kurier\app\views\UserLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666f42661752c2_50264172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c5c26601975afceb29b549d8a696d2a0003def1' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\kurier\\app\\views\\UserLogin.tpl',
      1 => 1718054839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f42661752c2_50264172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_537665561666f4266171ce5_56648099', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_537665561666f4266171ce5_56648099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_537665561666f4266171ce5_56648099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container wrapper style">
        <section>
            <h3>Logowanie</h3>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-12">
                        <input id="login" type="text" placeholder="Nazwa użytkownika" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
                    </div>
                    <div class="col-12">
                        <input id="password" type="password" placeholder="Hasło" name="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
">
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Zaloguj" class="primary" /></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">Zarejestruj się!</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
    </div>
<?php
}
}
/* {/block 'main'} */
}

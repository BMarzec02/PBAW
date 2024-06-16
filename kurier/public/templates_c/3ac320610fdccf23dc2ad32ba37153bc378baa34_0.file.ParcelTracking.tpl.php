<?php
/* Smarty version 4.3.4, created on 2024-06-16 21:59:26
  from 'C:\xampp1\htdocs\kurier\app\views\ParcelTracking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666f441eeb44a1_20289796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ac320610fdccf23dc2ad32ba37153bc378baa34' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\kurier\\app\\views\\ParcelTracking.tpl',
      1 => 1718537234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f441eeb44a1_20289796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1608350019666f441eeae003_46194101', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_1608350019666f441eeae003_46194101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1608350019666f441eeae003_46194101',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container wrapper style">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
parcelTracking" method="POST">
            <legend>Wyszukaj przesyłkę</legend>
            <fieldset>
                <div class="input-container">
                    <input type="text" placeholder="numer przesyłki" name="sf_parcelNumber" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->parcelNumber;?>
"/>
                    <button type="submit" class="button primary icon solid fa-search">Wyszukaj</button>
                </div>
                <br>
                <br>

                <?php if (!(isset($_smarty_tpl->tpl_vars['searchForm']->value->parcelNumber)) || empty($_smarty_tpl->tpl_vars['searchForm']->value->parcelNumber)) {?>
                    <p>Wprowadź numer przesyłki.</p>
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['recordsSearch']->value[0]['status']))) {?>
                    <p>Status: <?php echo $_smarty_tpl->tpl_vars['recordsSearch']->value[0]['status'];?>
</p>
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['recordsSearch']->value)) && !$_smarty_tpl->tpl_vars['recordsSearch']->value) {?>
                    <p>Przesyłka o podanym numerze nie istnieje, spróbuj ponownie.</p>
                <?php }?>
            </fieldset>
        </form>
    </div>
<?php
}
}
/* {/block 'main'} */
}

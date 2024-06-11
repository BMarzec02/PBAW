<?php
/* Smarty version 4.3.4, created on 2024-06-10 22:44:20
  from 'C:\xampp\htdocs\kurier\app\views\ParcelTracking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666765a4ee69b2_95428176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53afc1e1510cf5e863f9a96957a033deca07b09f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kurier\\app\\views\\ParcelTracking.tpl',
      1 => 1718052259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666765a4ee69b2_95428176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1399089244666765a4ee0605_50172311', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_1399089244666765a4ee0605_50172311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1399089244666765a4ee0605_50172311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container wrapper style">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
parcelTracking" method="POST">
        <legend>Wyszukaj przesyłkę</legend>
        <fieldset>
            <input type="text" placeholder="numer przesyłki" name="sf_parcelNumber" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->parcelNumber;?>
"/>
            <button type="submit" class="button primary icon solid fa-search">Wyszukaj</button><br>

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
    </div></div>
<?php
}
}
/* {/block 'main'} */
}

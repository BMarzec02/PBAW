<?php
/* Smarty version 4.3.4, created on 2024-06-16 21:50:15
  from 'C:\xampp1\htdocs\kurier\app\views\ParcelList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666f41f7429072_56271348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9da5ef97f9e1424a0ab68686f94471d52c6bb14f' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\kurier\\app\\views\\ParcelList.tpl',
      1 => 1718567405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f41f7429072_56271348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192655283666f41f741d5e4_69657258', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_192655283666f41f741d5e4_69657258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_192655283666f41f741d5e4_69657258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table class="alt">
    <thead>
    <tr>
        <th>Numer przesyłki</th>
        <th>Login nadawcy</th>
        <th>Numer nadawcy</th>
        <th>Waga [kg]</th>
        <th>Rozmiar</th>
        <th>Imię_odbiorcy</th>
        <th>Nazwisko_odbiorcy</th>
        <th>ulica</th>
        <th>Dom/mieszkanie</th>
        <th>Kod Pocztowy</th>
        <th>Miasto</th>
        <th>Numer tel. odbiorcy</th>
        <th>Status</th>
        <th>Data nadania</th>
        <th>Operacje</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parcel']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["numer_przesylki"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["phone_number"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["waga"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["rozmiar"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["imie_odbiorcy"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["nazwisko_odbiorcy"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["ulica"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["numer_domu"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["kod_pocztowy"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["miasto"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["numer_odbiorcy"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["status"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["data_nadania"];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
parcelEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_przesylki'];?>
" class="button primary small icon solid fa-edit">Edytuj</a>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
parcelRemove/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_przesylki'];?>
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

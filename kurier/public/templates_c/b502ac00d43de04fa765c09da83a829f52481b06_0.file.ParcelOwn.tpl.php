<?php
/* Smarty version 4.3.4, created on 2024-06-16 21:50:22
  from 'C:\xampp1\htdocs\kurier\app\views\ParcelOwn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666f41fe982cd5_43625139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b502ac00d43de04fa765c09da83a829f52481b06' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\kurier\\app\\views\\ParcelOwn.tpl',
      1 => 1718565804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f41fe982cd5_43625139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_775545953666f41fe975251_46010750', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_775545953666f41fe975251_46010750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_775545953666f41fe975251_46010750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['no_parcels_message']->value))) {?>
        <div class="align-center">
            <br>
            <h2><?php echo $_smarty_tpl->tpl_vars['no_parcels_message']->value;?>
</h2>
            <div class="col-6"><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"images/sad.png"),$_smarty_tpl ) );?>
" alt="" style="width: 25%;" /></div>
        <p>Przejdź do <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
parcelAdd">dodaj przesyłkę</a> aby nadać swoją pierwszą przesyłkę.</p>
        </div>
    <?php } else { ?>
        <br>
        <div class="table-wrapper">
        <table class="alt">
            <thead>
            <tr>
                <th>Numer przesyłki</th>
                <th>Waga</th>
                <th>Rozmiar</th>
                <th>Imię odbiorcy</th>
                <th>Nazwisko odbiorcy</th>
                <th>Ulica</th>
                <th>Dom/mieszkanie</th>
                <th>Kod Pocztowy</th>
                <th>Miasto</th>
                <th>Numer tel. odbiorcy</th>
                <th>Status</th>
                <th>Data nadania</th>
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
</td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        </div>
    <?php }
}
}
/* {/block 'main'} */
}

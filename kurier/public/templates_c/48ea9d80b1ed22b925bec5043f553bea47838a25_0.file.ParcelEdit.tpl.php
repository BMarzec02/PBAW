<?php
/* Smarty version 4.3.4, created on 2024-06-16 21:57:57
  from 'C:\xampp1\htdocs\kurier\app\views\ParcelEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666f43c5933015_74710130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48ea9d80b1ed22b925bec5043f553bea47838a25' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\kurier\\app\\views\\ParcelEdit.tpl',
      1 => 1718552086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f43c5933015_74710130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1705770582666f43c5927206_94651200', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_1705770582666f43c5927206_94651200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1705770582666f43c5927206_94651200',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container wrapper style">
        <section>
            <h3><?php if ((isset($_smarty_tpl->tpl_vars['form']->value->id_przesylki))) {?>Edytuj<?php } else { ?>Dodaj<?php }?> przesyłkę</h3>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
parcelSave" method="post">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">
                        <input id="waga" type="text" placeholder="Waga (kg)" name="waga" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->waga;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <select id="rozmiar" name="rozmiar">
                            <option value="">- Podaj rozmiar -</option>
                            <option value="S" <?php if ($_smarty_tpl->tpl_vars['form']->value->rozmiar == 'S') {?>selected<?php }?>>S</option>
                            <option value="M" <?php if ($_smarty_tpl->tpl_vars['form']->value->rozmiar == 'M') {?>selected<?php }?>>M</option>
                            <option value="L" <?php if ($_smarty_tpl->tpl_vars['form']->value->rozmiar == 'L') {?>selected<?php }?>>L</option>
                        </select>
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="imie_odbiorcy" type="text" placeholder="Imię odbiorcy" name="imie_odbiorcy" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->imie_odbiorcy;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="nazwisko_odbiorcy" type="text" placeholder="Nazwisko odbiorcy" name="nazwisko_odbiorcy" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwisko_odbiorcy;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="miasto" type="text" placeholder="Miasto" name="miasto" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->miasto;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="kod_pocztowy" type="text" placeholder="Kod pocztowy (01234)" name="kod_pocztowy" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kod_pocztowy;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="ulica" type="text" placeholder="Ulica" name="ulica" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ulica;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="numer_domu" type="text" placeholder="Numer domu/mieszkania" name="numer_domu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->numer_domu;?>
">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="numer_odbiorcy" type="text" placeholder="Numer tel. odbiorcy" name="numer_odbiorcy" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->numer_odbiorcy;?>
">
                    </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->id_przesylki))) {?>
                        <div class="col-12">
                            <select id="status" name="status">
                                <option value="Nadana" <?php if ($_smarty_tpl->tpl_vars['form']->value->status == 'Nadana') {?>selected<?php }?>>Nadana</option>
                                <option value="W drodze" <?php if ($_smarty_tpl->tpl_vars['form']->value->status == 'W drodze') {?>selected<?php }?>>W drodze</option>
                                <option value="Dostarczona" <?php if ($_smarty_tpl->tpl_vars['form']->value->status == 'Dostarczona') {?>selected<?php }?>>Dostarczona</option>
                            </select>
                        </div>
                    <?php }?>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Zapisz zmiany" class="primary" /></li>
                            <li><a class="button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
parcelList">Cofnij</a></li>
                        </ul>
                    </div>
                </div>
                <input type="hidden" name="id_przesylki" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_przesylki;?>
">
                <input type="hidden" name="numer_przesylki" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->numer_przesylki;?>
">
                <input type="hidden" name="data_nadania" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->data_nadania;?>
">
                <input type="hidden" name="id_uzytkownika" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_uzytkownik;?>
">
            </form>
        </section>
    </div>
<?php
}
}
/* {/block 'main'} */
}

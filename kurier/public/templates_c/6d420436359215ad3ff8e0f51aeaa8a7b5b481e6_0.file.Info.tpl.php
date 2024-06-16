<?php
/* Smarty version 4.3.4, created on 2024-06-16 21:50:20
  from 'C:\xampp1\htdocs\kurier\app\views\Info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666f41fc9b0097_30837617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d420436359215ad3ff8e0f51aeaa8a7b5b481e6' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\kurier\\app\\views\\Info.tpl',
      1 => 1718553769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666f41fc9b0097_30837617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_964430017666f41fc9820a3_15289978', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_964430017666f41fc9820a3_15289978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_964430017666f41fc9820a3_15289978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="align-center">
				<section id="intro"><br>


					<?php if (core\RoleUtils::inRole("user")) {?>
						<header>
							<h2>Witaj <?php echo $_SESSION['login'];?>
</b></h2>
						<p>Możesz teraz dodawać przesyłki oraz je śledzić.</p>
						</header>
						<h3>Jak dodawać przesyłki?</h3>
						<p>Aby dodać nową przesyłkę, kliknij przycisk "Dodaj przesyłkę" w panelu użytkownika.<br>
							Następnie wypełnij formularz o niezbędne informacje.<br>
						Musisz również dodać dodatkowe informacje jak waga, rozmiar itp. Po dodaniu przesyłki otrzymam od nas numer dzięki któremu będziesz mógł śledzić swoją przesyłkę.</p>

						<p>Pamiętaj, że po dodaniu przesyłki będziesz mógł ją łatwo śledzić za pomocą dedykowanej funkcji śledzenia.</p>

					<?php }?>
					<?php if (core\RoleUtils::inRole("admin")) {?>
						<header>
							<h2>Witaj <?php echo $_SESSION['login'];?>
 w panelu pracownika!</h2>
						</header>
						<p>Jesteś teraz w panelu pracownika, gdzie masz dostęp do zaawansowanych funkcji naszej aplikacji kurierskiej. <br>
							Możesz edytować istniejące przesyłki, przejrzeć listę użytkowników, zarządzać nimi oraz korzystać z wielu innych przydatnych funkcji. <br>
							Zapraszamy do efektywnego zarządzania i obsługi naszych usług.</p>
					<?php }?>
					<?php if (!core\SessionUtils::load("id",true)) {?>
					<header>
						<h2>Witaj w OUTpost - Twojej aplikacji kurierskiej!</h2>
					</header>
					<p>Jesteśmy firmą kurierską, która zapewnia szybką i niezawodną obsługę przesyłek.<br>
						Nasza aplikacja umożliwia łatwe zarządzanie przesyłkami, dodawanie nowych oraz ich śledzenie.</p>
					<p> Nie będąc zalogowanym masz dostęp tylko do śledzenia przesyłek, aby to zrobić kliknij w odnośnik na górze strony.</p>
					<p>Zaloguj się już teraz, aby w pełni korzystać z naszych usług!</p>
					<?php }?>
	<div class="col-6"><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"images/pic07.png"),$_smarty_tpl ) );?>
" alt="" style="width: 15%;" /></div>

<?php
}
}
/* {/block 'main'} */
}

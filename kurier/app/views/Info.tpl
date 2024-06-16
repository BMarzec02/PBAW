{extends file="main.tpl"}

{block name=main}
				<div class="align-center">
				<section id="intro"><br>


					{if core\RoleUtils::inRole("user")}
						<header>
							<h2>Witaj {$smarty.session.login}</b></h2>
						<p>Możesz teraz dodawać przesyłki oraz je śledzić.</p>
						</header>
						<h3>Jak dodawać przesyłki?</h3>
						<p>Aby dodać nową przesyłkę, kliknij przycisk "Dodaj przesyłkę" w panelu użytkownika.<br>
							Następnie wypełnij formularz o niezbędne informacje.<br>
						Musisz również dodać dodatkowe informacje jak waga, rozmiar itp. Po dodaniu przesyłki otrzymam od nas numer dzięki któremu będziesz mógł śledzić swoją przesyłkę.</p>

						<p>Pamiętaj, że po dodaniu przesyłki będziesz mógł ją łatwo śledzić za pomocą dedykowanej funkcji śledzenia.</p>

					{/if}
					{if core\RoleUtils::inRole("admin")}
						<header>
							<h2>Witaj {$smarty.session.login} w panelu pracownika!</h2>
						</header>
						<p>Jesteś teraz w panelu pracownika, gdzie masz dostęp do zaawansowanych funkcji naszej aplikacji kurierskiej. <br>
							Możesz edytować istniejące przesyłki, przejrzeć listę użytkowników, zarządzać nimi oraz korzystać z wielu innych przydatnych funkcji. <br>
							Zapraszamy do efektywnego zarządzania i obsługi naszych usług.</p>
					{/if}
					{if !core\SessionUtils::load("id", true)}
					<header>
						<h2>Witaj w OUTpost - Twojej aplikacji kurierskiej!</h2>
					</header>
					<p>Jesteśmy firmą kurierską, która zapewnia szybką i niezawodną obsługę przesyłek.<br>
						Nasza aplikacja umożliwia łatwe zarządzanie przesyłkami, dodawanie nowych oraz ich śledzenie.</p>
					<p> Nie będąc zalogowanym masz dostęp tylko do śledzenia przesyłek, aby to zrobić kliknij w odnośnik na górze strony.</p>
					<p>Zaloguj się już teraz, aby w pełni korzystać z naszych usług!</p>
					{/if}
	<div class="col-6"><img src="{url action="images/pic07.png"}" alt="" style="width: 15%;" /></div>

{/block}
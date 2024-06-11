<!DOCTYPE HTML>
<html>
<head>
	<title>Aplikacja kurierska</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{url action="assets/css/main.css"}" />
	<noscript><link rel="stylesheet" href="{url action="assets/css/main.css"} /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">
			<header id="header">
				<h1 id="logo"><a href="main.tpl">OUTpost</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="{$conf->action_root}parcelList" class="pure-menu-heading pure-menu-link">Lista przesyłek</a></li>
						<li><a href="{$conf->action_root}parcelAdd" class="pure-menu-heading pure-menu-link">Dodaj przesyłkę!</a></li>
						<li><a href="{$conf->action_root}userList" class="pure-menu-heading pure-menu-link">Lista Użytkowników</a></li>
						<li><a href="{$conf->action_root}parcelTracking" class="pure-menu-heading pure-menu-link">Śledź przesyłkę!</a></li>
						<li><a href="{$conf->action_root}login" class="button primary">Zaloguj się</a></li>
					</ul>
				</nav>
			</header>
			{block name=main}
				<div class="align-center">
				<section id="intro"><br><br><br><br>
					<header>
						<h2>Witaj w OUTpost - Twojej aplikacji kurierskiej!</h2>
					</header>
					<p>Jesteśmy firmą kurierską, która zapewnia szybką i niezawodną obsługę przesyłek.<br>
					Nasza aplikacja umożliwia łatwe zarządzanie przesyłkami, dodawanie nowych, śledzenie ich oraz zarządzanie użytkownikami.<br><br>
					Zaloguj się już teraz, aby zacząć korzystać z naszych usług!</p>
				</section>
					<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Autor: Bartłomiej Marzec</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
					</footer>
				</div>
			{/block}
			{block name=messages}
				{if $msgs->isMessage()}
					<div>
						<ul>
							{foreach $msgs->getMessages() as $msg}
								{strip}
									<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
								{/strip}
							{/foreach}
						</ul>
					</div>
				{/if}
			{/block}

			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			</body>

		</div>
</html>

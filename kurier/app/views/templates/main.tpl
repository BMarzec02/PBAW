<!DOCTYPE HTML>
<html>
<head>
	<title>Aplikacja kurierska</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{url action="assets/css/main.css"}" />
	<noscript><link rel="stylesheet" href="{url action="assets/css/main.css"}" /></noscript>
</head>
<body class="is-preload">
<div id="page-wrapper">
	<header id="header">
		<h1 id="logo"><a href="{$conf->action_root}info">OUTpost</a></h1>
		<nav id="nav">
			<ul>
				{if core\RoleUtils::inRole("admin")}
					<li><a href="{$conf->action_root}parcelList" class="pure-menu-heading pure-menu-link">Lista przesyłek</a></li>
					<li><a href="{$conf->action_root}parcelOwn" class="pure-menu-heading pure-menu-link">Twoje przesyłki</a></li>
					<li><a href="{$conf->action_root}userList" class="pure-menu-heading pure-menu-link">Lista użytkowników</a></li>
					<li><a href="{$conf->action_root}parcelAdd" class="pure-menu-heading pure-menu-link">Dodaj przesyłkę!</a></li>
				{/if}

				{if core\RoleUtils::inRole("user") && !core\RoleUtils::inRole("admin")}
					<li><a href="{$conf->action_root}parcelOwn" class="pure-menu-heading pure-menu-link">Twoje przesyłki</a></li>
					<li><a href="{$conf->action_root}parcelAdd" class="pure-menu-heading pure-menu-link">Dodaj przesyłkę!</a></li>
				{/if}

				<li><a href="{$conf->action_root}parcelTracking" class="pure-menu-heading pure-menu-link">Śledź przesyłkę!</a></li>

				{if core\SessionUtils::load("id", true)}
					<li><a href="{$conf->action_root}logout" class="button secondary">Wyloguj</a></li>
				{else}
					<li><a href="{$conf->action_root}login_show" class="button primary">Zaloguj się</a></li>
				{/if}
			</ul>
		</nav>
	</header>

	<div id="main">
		{block name=main}
		{/block}

		<!-- Wiadomości -->
		{block name=messages}
			{if $msgs->isMessage()}
				<div class="messages">
					<ul>
						{foreach $msgs->getMessages() as $msg}
							<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">
								{$msg->text}
							</li>
						{/foreach}
					</ul>
				</div>
			{/if}
		{/block}
	</div>

	<footer id="footer">
		<ul class="icons">
			<li><a href="https://github.com/BMarzec02" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
		</ul>
		<ul class="copyright">
			<li>&copy; Autor: Bartłomiej Marzec</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</footer>

</div>
</body>
</html>

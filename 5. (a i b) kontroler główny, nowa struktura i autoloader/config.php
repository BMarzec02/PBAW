<?php
$conf->server_name = 'localhost:80';
$conf->server_url = 'http://localhost:80';
$conf->app_root = '/PBAW/5. (a i b) kontroler główny, nowa struktura i autoloader';
$conf->action_root = $conf->app_root.'/ctrl.php?action=';

$conf->action_url = $conf->server_url.$conf->action_root;
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->root_path = dirname(__FILE__);
?>
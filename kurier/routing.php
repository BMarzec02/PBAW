<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('info');
App::getRouter()->setLoginRoute('login');

Utils::addRoute('main', 'MainCtrl');
Utils::addRoute('info', 'MainCtrl');

//parcels
Utils::addRoute('parcelList', 'ParcelListCtrl', ["admin"]);
Utils::addRoute('parcelOwn', 'ParcelListCtrl', ["admin", "user"]);

Utils::addRoute('parcelRemove', 'ParcelEditCtrl', ["admin"]);
Utils::addRoute('parcelEdit', 'ParcelEditCtrl', ["admin"]);
Utils::addRoute('parcelSave', 'ParcelEditCtrl', ["admin", "user"]);
Utils::addRoute('parcelAdd', 'ParcelEditCtrl', ["admin", "user"]);

Utils::addRoute('parcelTracking', 'ParcelSearchCtrl');

//users
Utils::addRoute('userList', 'UserCtrl', ["admin"]);
Utils::addRoute('userEdit', 'UserCtrl', ["admin"]);
Utils::addRoute('userRemove', 'UserCtrl', ["admin"]);
Utils::addRoute('userSave', 'UserCtrl', ["admin"]);

//login
Utils::addRoute('login', 'auth\LoginCtrl');
Utils::addRoute('login_show', 'auth\LoginCtrl');
Utils::addRoute('logout', 'auth\LoginCtrl');

Utils::addRoute('register', 'auth\RegisterCtrl');
Utils::addRoute('registerSave', 'auth\RegisterCtrl');

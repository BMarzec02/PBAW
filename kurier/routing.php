<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('main');
App::getRouter()->setLoginRoute('login');

Utils::addRoute('main', 'MainCtrl');

//parcels
Utils::addRoute('parcelList', 'ParcelListCtrl');
Utils::addRoute('parcelRemove', 'ParcelEditCtrl');
Utils::addRoute('parcelEdit', 'ParcelEditCtrl');
Utils::addRoute('parcelSave', 'ParcelEditCtrl');
Utils::addRoute('parcelAdd', 'ParcelEditCtrl');

Utils::addRoute('parcelTracking', 'ParcelSearchCtrl');

//users
Utils::addRoute('userList', 'UserCtrl');
Utils::addRoute('userEdit', 'UserCtrl');
Utils::addRoute('userRemove', 'UserCtrl');
Utils::addRoute('userSave', 'UserCtrl');

//login
Utils::addRoute('login', 'auth\LoginCtrl');
Utils::addRoute('logout', 'auth\LoginCtrl');

Utils::addRoute('register', 'auth\RegisterCtrl');
Utils::addRoute('registerSave', 'auth\RegisterCtrl');

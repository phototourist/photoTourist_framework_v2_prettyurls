<?php
    //SITE_ROOT
	$path=$_SERVER['DOCUMENT_ROOT'].'/photoTourist_framework_v2_prettyurls/';
    define('SITE_ROOT', $path);

    //SITE_PATH
    define('SITE_PATH', '/photoTourist_framework_v2_prettyurls/');

		//CSS
		define('CSS_PATH', SITE_PATH . 'view/css/');


		//JS
		define('JS_PATH', SITE_PATH . 'view/js/');

		//IMG
		define('IMG_PATH', SITE_PATH . 'view/images/');

    //log
    define('LOG_DIR',SITE_ROOT.'classes/log.class.singleton.php');
    define('USER_LOG_DIR',SITE_ROOT.'log/user/Site_User_errors.log');
    define('GENERAL_LOG_DIR',SITE_ROOT.'log/general/Site_General_errors.log');

		//libs
		define('LIBS',SITE_ROOT.'libs/');

		//img rural_shop
    //define('IMG_RURAL_SHOP',SITE_ROOT.'view/img/rural_shop.jpg');

    //production
    define('PRODUCTION',true);

    //model
    define('MODEL_PATH',SITE_ROOT.'model/');
    //view
    define('VIEW_PATH_INC',SITE_ROOT.'view/inc/');
    define('VIEW_PATH_INC_ERROR',SITE_ROOT.'view/inc/templates_error/');
    //modules
    define('MODULES_PATH',SITE_ROOT.'modules/');

    //resources
    define('RESOURCES',SITE_ROOT.'resources/');
    //media
    define('MEDIA_PATH',SITE_ROOT.'media/');
    //utils
    define('UTILS',SITE_ROOT.'utils/');

		//model users
	  define('FUNCTIONS_USERS', SITE_ROOT.'modules/users/utils/');
	  define('MODEL_PATH_USERS', SITE_ROOT.'modules/users/model/');
	  define('DAO_USERS', SITE_ROOT.'modules/users/model/DAO/');
	  define('BLL_USERS', SITE_ROOT.'modules/users/model/BLL/');
	  define('MODEL_USERS', SITE_ROOT.'modules/users/model/model/');
	  define('USERS_JS_PATH', SITE_PATH.'modules/users/view/js/');

    //model products
		define('FUNCTIONS_PRODUCTS',SITE_ROOT.'modules/productsfe/utils/');
    define('MODEL_PATH_PRODUCTS',SITE_ROOT.'modules/productsfe/model/');
    define('DAO_PRODUCTS',SITE_ROOT.'modules/productsfe/model/DAO/');
    define('BLL_PRODUCTS',SITE_ROOT.'modules/productsfe/model/BLL/');
    define('MODEL_PRODUCTS',SITE_ROOT.'modules/productsfe/model/model/');
    define('PRODUCTS_JS_PATH', SITE_PATH . 'modules/productsfe/view/js/');
		define('PRODUCTS_CSS_PATH', SITE_PATH . 'modules/productsfe/view/css/');

		//model contact
    define('CONTACT_JS_PATH', SITE_PATH . 'modules/contact/view/js/');
		define('CONTACT_CSS_PATH', SITE_PATH . 'modules/contact/view/css/');
		define('CONTACT_LIB_PATH', SITE_PATH . 'modules/contact/view/lib/');
		define('CONTACT_IMG_PATH', SITE_PATH . 'modules/contact/view/img/');
    define('CONTACT_VIEW_PATH', 'modules/contact/view/');

		//amigables
		define('URL_AMIGABLES', TRUE);

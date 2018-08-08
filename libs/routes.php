<?php

return array(
    // Логин:
    'login' => 'login/auth', // Auth в контроллере логина
    'logout' => 'login/logout', //Logout в контроллере логина
    //Пользователи
    'adduser' => 'polzovatel/addPolz', //Addphoto в контроллере пользователя
    // Каталог:
/*    'catalog' => 'catalog/index', // actionIndex в CatalogController
    // Справочник:
    */
    'spravochnik' => 'spravochnik/spisok', //Spisok в контроллере справочника
    //Лента
    'feed' => 'feed/show', //List в контроллере ленты
    'view/([0-9]+)' => 'posts/view/$1', //ViewPost в контроллере ленты
    'postComment' => 'posts/writeComment', //WriteComment в контроллере ыаыаыа
    'addpost' => 'addPost/show',
    'posting' => 'addPost/postAdd',
    //Сообщения
    'messages/([0-9]+)' => 'messages/show/$1', //Show в котнтроллере сообщений
    'sendMessage/([0-9]+)' => 'messages/sendMessageData/$1', //SendMessageData в котнтроллере сообщений
    'getMessages/([0-9]+)' => 'messages/getMessages/$1', //GetMessages в котнтроллере сообщений
    'getDialogs' => 'messages/getDialogs/', //GetMessages в котнтроллере сообщений
    /*'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController
    // Корзина:
    'cart/checkout' => 'cart/checkout', // actionAdd в CartController    
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController    
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController    
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
    'cart' => 'cart/index', // actionIndex в CartController
    // Пользователь:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    // Управление товарами:    
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
    // Управление категориями:    
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    // Управление заказами:    
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',
    // Админпанель:
    'admin' => 'admin/index',
    // О магазине
    'contacts' => 'site/contact',
    'about' => 'site/about',
*/
    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    'main' => 'site/index', // actionIndex в SiteController
);

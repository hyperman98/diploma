<?php

//   return array(
//
//     'category/([0-9]+)' => 'service/category/$1',
//
//     'user/register' => 'user/register',
//     'user/login' => 'user/login',
//     'user/logout' => 'user/logout',
//
//     'cabinet/edit' => 'cabinet/edit',
//     'cabinet' => 'cabinet/index',
//
//     '' => 'site/index', // actionIndex в SiteController
//
// );

return array(

    'category/([0-9]+)' => 'service/category/$1', // actionView в ProductController

    'police' => 'user/pol',

    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',

    'cart/add/([0-9]+)' => 'cart/add/$1',

    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart/delete/([0-9]+)' => 'cart/delete/$1',
    'cart/checkout' => 'cart/checkout',
    'cart' => 'cart/index',

    'admin/orders/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/orders/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/orders' => 'adminOrder/index',

    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',

    //'admin/products' => 'adminPr/index',
    'admin/prorders/update/([0-9]+)' => 'adminPr/update/$1',
    'admin/prorders/delete/([0-9]+)' => 'adminPr/delete/$1',
    'admin/prorders/full/([0-9]+)' => 'adminPr/view/$1',
    'admin/prorders' => 'adminPr/index',

    'admin/products/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/products/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/products' => 'adminProduct/index',

    'admin/news/update/([0-9]+)' => 'adminNews/update/$1',
    'admin/news/delete/([0-9]+)' => 'adminNews/delete/$1',
    'admin' => 'adminNews/index',

    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    'gallery' => 'site/gallery',
    'contacts' => 'site/contact',
    'comments' => 'review/comment',
    'about_us' => 'site/about',
    'timetable' => 'site/time',
    'fitobar/([0-9]+)' => 'site/bar/$1',
    'fitobar' => 'site/fitobar',
    'page-([0-9]+)' => 'site/index/$1',
    '' => 'site/index', // actionIndex в SiteController
);

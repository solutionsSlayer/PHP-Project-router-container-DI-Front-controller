<?php

$router->get('home', 'PagesController@home');

$router->get('', 'PagesController@home');

$router->get('about', 'PagesController@about');

$router->get('contact', 'PagesController@contact');

<?php

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('database'))
));

function headerView()
{
    require 'views/partials/header.view.php';
}

function footerView()
{
    require 'views/partials/footer.view.php';
}

function navView()
{
    require 'views/partials/nav.view.php';
}

function view($name)
{
    headerView();
    navView();
    require "views/{$name}.view.php";
    footerView();
}

<?php


class PagesController
{
    public static function home()
    {
        return view('home');
    }

    public static function about()
    {
        return view('about');
    }

    public static function contact()
    {
        return view('contact');
    }
}

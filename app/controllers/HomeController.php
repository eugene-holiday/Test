<?php

/**
 * Created by PhpStorm.
 * User: voskresenskyev
 * Date: 01.10.14
 * Time: 16:43
 */
class HomeController extends BaseController
{
    public function index()
    {
        $data = 'HELLO WORLD';
        $words = 'что я делаю здесь не знаю';

        $tmp = preg_split("//u", $words, -1, PREG_SPLIT_NO_EMPTY);
        shuffle($tmp);
        $words = join("", $tmp);




        View::render('home/index', array('data'=>$data, 'words'=>$words));
    }
    public function contact()
    {
        View::render('home/contact');
    }
} 
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
        View::render('home/index', array('data'=>$data));
    }
    public function contact()
    {
        View::render('home/contact');
    }
} 
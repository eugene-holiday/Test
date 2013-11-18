<?php

$data = array(
    array("id"=>1,"title"=>"id nunc interdum feugiat. Sed nec","category"=>4,"date"=>"21/10/2014","avg_rating"=>0,"num_of_comments"=>0,"author"=>"Grady","author_ip"=>7901828),
    array("id"=>2,"title"=>"risus. Donec egestas. Aliquam nec","category"=>1,"date"=>"30/05/2014","avg_rating"=>0,"num_of_comments"=>0,"author"=>"Otto","author_ip"=>970235),
    array("id"=>3,"title"=>"mus. Donec dignissim magna a tortor. Nunc","category"=>4,"date"=>"12/11/2012","avg_rating"=>0,"num_of_comments"=>0,"author"=>"Cedric","author_ip"=>9804979),
    array("id"=>4,"title"=>"Nullam lobortis quam a felis","category"=>3,"date"=>"23/05/2014","avg_rating"=>0,"num_of_comments"=>0,"author"=>"Cain","author_ip"=>2790933),
    array("id"=>5,"title"=>"sem. Pellentesque ut ipsum ac mi eleifend","category"=>4,"date"=>"08/11/2014","avg_rating"=>0,"num_of_comments"=>0,"author"=>"Moses","author_ip"=>2197912),
    array("id"=>6,"title"=>"non arcu. Vivamus sit amet risus. Donec","category"=>10,"date"=>"01/02/2013","avg_rating"=>0,"num_of_comments"=>0,"author"=>"Alexander","author_ip"=>5502846),
    array("id"=>7,"title"=>"venenatis a, magna. Lorem ipsum dolor","category"=>7,"date"=>"10/04/2014","avg_rating"=>0,"num_of_comments"=>0,"author"=>"Xander","author_ip"=>8490121),
    array("id"=>8,"title"=>"non enim. Mauris quis turpis","category"=>9,"date"=>"14/03/2013","avg_rating"=>0,"num_of_comments"=>0,"author"=>"Asher","author_ip"=>1681135),
    array("id"=>9,"title"=>"faucibus orci luctus et ultrices posuere cubilia","category"=>5,"date"=>"11/10/2013","avg_rating"=>0,"num_of_comments"=>0,"author"=>"Raymond","author_ip"=>7429656),
    array("id"=>10,"title"=>"felis purus ac tellus. Suspendisse sed","category"=>10,"date"=>"20/11/2012","avg_rating"=>0,"num_of_comments"=>0,"author"=>"Wallace","author_ip"=>5622096)
);


try {
    require_once 'lib/Twig/lib/Twig/Autoloader.php';
    Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader, array(
        //'cache'       => 'compilation_cache',
        'auto_reload' => true
    ));
    echo $twig->render('articles.html.twig', array('articles' => $data));
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}


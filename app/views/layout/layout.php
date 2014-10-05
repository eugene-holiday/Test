<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Eugene">

    <title>Test Project</title>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/resources/js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="/resources/css/bootstrap.css" type="text/css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/resources/css/custom.css" type="text/css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="/resources/js/moment.min.js"></script>
    <script src="/resources/js/bootstrap-datetimepicker.min.js"></script>
    <link href="/resources/css/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet">
    <script type="text/javascript">
        $(document).ready( function() {

            $(".nav li").click(function() {
                $('.nav li').removeClass("active");
                $(this).addClass("active");
                var page_id = $(this).children("a").attr('id');
                getPage(page_id);
            });

            function getPage(id)
            {
                $.ajax({

                    type: "GET",
                    url: 'navigation.php',
                    data: "id=" + id,
                    success: function(data) {
                        $('#content').html(data);
                    }

                });

            }


        });
    </script>
</head>

<body>

<div class="container">

    <div class="header">
        <ul class="nav nav-pills pull-right">
            <li><a href="/home/index" id="home">Home</a></li>
            <li class="active"><a id="top">Articles</a></li>
            <li><a id="new-article">Add article</a></li>
            <li><a href="/home/contact">Contact</a></li>
        </ul>
        <h3 class="text-muted">Test Project</h3>
    </div>

    <div id="content">
        <?php include $content ?>
    </div>

</div> <!-- /container -->

</body>
</html>
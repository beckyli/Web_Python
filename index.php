<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<title>Google Email Search</title>
    <meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
        <meta http-equiv="cleartype" content="on">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" sizes="196x196" href="img/touch/touch-icon-196x196.png">
        <link rel="shortcut icon" href="img/touch/apple-touch-icon.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="img/touch/apple-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#222222">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.7.1.min.js"></script>   
</head>
    <body>
<h1>Script Options</h1>
    
<form action="/cgi-bin/call.sh" method="get">       
    <TABLE BORDER="1">
        <TR>
            <TD>Keyword:</TD>
            <TD><input type="text" name="query" value="Query"></TD>
        </TR>
        <TR>
            <TD># of Pages:</TD>
            <TD><input type="text" name="pages" value="1"></TD>
        </TR>
        <TR>
            <TD>Output File Name:</TD>
            <TD><input type="text" name="output_name" value="results"></TD>
        </TR>
        <TR>
            <TD>E-mail Address:</TD>
            <TD><input type="text" name="email_address" value="example@gmail.com"></TD>
        </TR>
        <TR>
            <TD><input type="submit" value="Submit"></TD>
        </TR>
    </TABLE>
</form>
 <!-- Add your site or application content here -->

        <script src="js/vendor/jquery-2.1.0.min.js"></script>
        <script src="js/helper.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>

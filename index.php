<?php date_default_timezone_set('Asia/Jakarta'); ?>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
<meta http-equiv="content-type" content="text/html"; charset=utf-8>
<title>DirectNews.Com</title>
</head>
<?php

    include "header.inc";
    include "menu.inc";
    if(isset($_GET['p'])){
        $page = $_GET['p'].".inc";
        if(isset($page)) include "$page"; else include "home.inc";
    } else include "home.inc";

    include "sidebar.inc";
    include "footer.inc";

?>
    
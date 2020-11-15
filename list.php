<?php

    include "header.inc";
    include "menu.inc";
    
    if (isset ($_GET ['p'])) {
        $page = $_GET['p'].".inc";
        if (isset($page)) include "$page"; else include "list.inc";
    } else include "list.inc";
    include "footer.inc";
?>
    <html>
    <p>Apabila ingin Keluar bisa klik tombol di bawah ini<br>
    <a href="logout.php">Logout</a>
    </p>
    </html>

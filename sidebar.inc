<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="wrapper">
        <h1>Login untuk admin</h1>
        <form action="proses_login.php" method="POST">
            <p>
                <input type="email" placeholder="Masukkan email anda" name="email">
            </p>
            <p>
                <input type="password" placeholder="Masukkan password anda" name="password">
            </p>
            <p>
                <input type="submit" value="Login Now">
            </p>
        </form>
    </div>
</body>
<div id="sidebar">
    <li class="widget">  
        <h2>Popular Post</h2>       
        <ul>   
            <li><a href="article-1.html">Penemuan Telegram Kabarkan Dahsyatnya Letusan Krakatau</a></li>   
            <li><a href="article-2.html">Pesawat Tanpa Awak UGM Berdaya Jelajah 200 Kilometer</a></li>   
            <li><a href="article-3.html">Prasasti Maya Bukan Petunjuk Kiamat</a></li>  
        </ul> 
    </li> 
    <li class="widget">  
        <h2>Commented Post</h2>  
        <ul>             
            <li><a href="article-1.html">Penemuan Telegram Kabarkan Dahsyatnya Letusan Krakatau</a></li>   
            <li><a href="article-2.html">Pesawat Tanpa Awak UGM Berdaya Jelajah 200 Kilometer</a></li>   
            <li><a href="article-3.html">Prasasti Maya Bukan Petunjuk Kiamat</a></li>   
        </ul> 
    </li> 
    <li class="widget">  
        <h2>Audio Streaming</h2>  
            <audio id="audio" src="sound.mp3" controls></audio> 
        </li> 
</div>
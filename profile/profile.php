    <?php 
    session_start();
    include_once("headNoNav.php");
    
    if(!isset($_SESSION["authorized"])){
        header("location: /ultimLogin/login");
        exit;
    }
    ?>
    <base href = "/portfolio/ultimLogin/profile/">
    <link rel = "stylesheet" href = "profile.css">
    </head>
    <body>
        <main class = "djv-container">
            <section class = "profile-container">
                <div class = "profile-nav">
                    <h2>Ultim Login</h2>
                    <nav >
                        <ul>
                            <li><a href="/ultimLogin/profile"><i class="fas fa-cog"></i></a>
                                <ul class = "dropdown-content">
                                    <li><a href = "logout.php">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class = "profile-content">
                     <h1>Welcome <?php echo $_SESSION["firstName"];?></h1>
                </div>
            </section>
        </main>
    </body>
</html>
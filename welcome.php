<?php

    session_start();
    if(!ISSET($_SESSION['username'])){
      header("Location: index.php");
    }

?>

<!DOCTYPE html>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="welcome.css">
    <script src="https://kit.fontawesome.com/e7b98dd161.js"> </script>
</head>
<body>
    <div id="home">
        <header>
            <a href="#home"><img src="logo.png" alt="logo" class="logo"></a>
            <?php
                    echo "Welcome " . $_SESSION['username'];
            ?>
            <nav class="navbar">
                <button onclick="myFunction()">Dark Mode</button>
                <a href="LogOut.php">Log out</a>
            </nav>
        </header>
    </div>

    <div id="specialty" class="specialty">
        <h1 class="s-heading">Our <span>Menu</span></h1>

        <div class="s-container">

            <div class="s-box">
                <img src="menu/porksinigang.jpg" alt="sinigang" class="s-image">
                <div class="s-content">
                    <h3>Pork Sinigang</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sunt vero expedita delectus tempore ipsum iste qui ut pariatur. Cum dolores saepe nesciunt ratione non veritatis quisquam dolorem autem soluta?</p>
                </div>
            </div>

            <div class="s-box">
                <img src="menu/icecream.jpg" alt="cream" class="s-image">
                <div class="s-content">
                    <h3>Ice Cream</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sunt vero expedita delectus tempore ipsum iste qui ut pariatur. Cum dolores saepe nesciunt ratione non veritatis quisquam dolorem autem soluta?</p>
                </div>
            </div>

            <div class="s-box">
                <img src="menu/sisig.jpg" alt="sisig" class="s-image">
                <div class="s-content">
                    <h3>Sisig</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sunt vero expedita delectus tempore ipsum iste qui ut pariatur. Cum dolores saepe nesciunt ratione non veritatis quisquam dolorem autem soluta?</p>
                </div>
            </div>

            <div class="s-box">
                <img src="menu/turon.jpg" alt="turon" class="s-image">
                <div class="s-content">
                    <h3>Turon</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sunt vero expedita delectus tempore ipsum iste qui ut pariatur. Cum dolores saepe nesciunt ratione non veritatis quisquam dolorem autem soluta?</p>
                </div>
            </div>

            <div class="s-box">
                <img src="menu/Pork-Adobo.jpg" alt="adobo" class="s-image">
                <div class="s-content">
                    <h3>Adobo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sunt vero expedita delectus tempore ipsum iste qui ut pariatur. Cum dolores saepe nesciunt ratione non veritatis quisquam dolorem autem soluta?</p>
                </div>
            </div>

            <div class="s-box">
                <img src="menu/lecheplan.jpg" alt="lecheplan" class="s-image">
                <div class="s-content">
                    <h3>Leche Flan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sunt vero expedita delectus tempore ipsum iste qui ut pariatur. Cum dolores saepe nesciunt ratione non veritatis quisquam dolorem autem soluta?</p>
                </div>
            </div>

        </div>

    </div>
    <footer>
        <div class="f-cont">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
        </div>
        <p class="copyright">Group SEVEN - Copyright 2022</p>
    </footer>

    <script>
        function myFunction() {
           var element = document.body;
           element.classList.toggle("dark-mode");
        }
    </script>

</body>
</html>

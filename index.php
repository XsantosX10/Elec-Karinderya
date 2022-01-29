<!DOCTYPE html>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodResto</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e7b98dd161.js"> </script>
</head>
<body>

    <div id="home">
        <header>
            <a href="#home"><img src="logo.png" alt="logo" class="logo"></a>
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#specialty">Specialty</a>
                <a href="#about">About</a>
                <a href="SignIn.php">Sign In</a>
                <button onclick="myFunction()">Dark Mode</button>
            </nav>
        </header>

        <div class="content">

            <div class="textbox">
                <h2>TALK OF THE TOWN</h2>
                <h3>CHICKEN ADOBO</h3>
                <dfn>Philippine adobo (from Spanish adobar: "marinade," "sauce" or "seasoning" / English: /əˈdoʊboʊ/ Tagalog pronunciation: [ɐdobo]) is a popular Filipino dish and cooking process in Philippine cuisine that involves meat, seafood, or vegetables marinated in vinegar, soy sauce, garlic, bay leaves, and black peppercorns, which is browned in oil, and simmered in the marinade. It has occasionally been considered the unofficial national dish in the Philippines. <br>
                </dfn>
                <a href="#specialty">See More</a>
            </div>

            <div class="img-box">
                <img src="adobo.png" alt="adobo" class="adobo">
            </div>

        </div>

        <div class="footer">
            <div class="mediabox">
                <div class="media">
                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div id="specialty" class="specialty">
        <h1 class="s-heading">Our <span>Specialty</span></h1>

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


    <div class="about" id="about">
        <h1 class="a-heading">About <span>Us</span></h1>
        <div class="content">
            <div class="textbox">
                <p>E-Karinderya “A simple, convenient, and cost-efficient web-based food market” is a website created to serve and to provide a convenient food service available for all while promoting authentic Filipino cuisines and delicacies. This aims to avoid the high possibility of being infected by the virus that is currently spreading. <br>
                </p>
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

        <ul class="foot-menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#specialty">Specialty</a></li>
            <li><a href="#about">About</a></li>
        </ul>
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

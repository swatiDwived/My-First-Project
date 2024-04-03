<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pollution</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Nunito', sans-serif;
  }

header{
    z-index: 999;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 200px;
    transition: 0.5s ease;
}

header .brand{
    color: #fff;
    font-size: 1.5rem;
    font-weight: 700;
    text-transform: uppercase;
    text-decoration: none;
}

header .brand:hover{
    color: #09a6d4;
}

header .navigation{
    position: relative;
}

header .navigation .navigation-items a{
    position: relative;
    color: #fff;
    font-size: 1em;
    font-weight: 500;
    text-decoration: none;
    margin-left: 15px;
    transition: 0.3s ease;
}

header .navigation .navigation-items a:before{
    content: '';
    position: absolute;
    background: #fff;
    width: 0;
    height: 3px;
    bottom: 0;
    left: 0;
    transition: 0.3s ease;
}

header .navigation .navigation-items a:hover:before{
    width: 100%;
    background: #09a6d4;
}

section{
    padding: 100px 200px;
}

.home {
    position: relative;
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.home:before{
    z-index: 777;
    content: '';
    position: absolute;
    background: rgba(251, 3, 3, 0.034);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.home .content{
    z-index: 888;
    color: #fff;
    width: 70%;
    margin-top: 50px;
    display: none;
}

.home .content.active{
    display: block;
}

.home .content h1{
    font-size: 4em;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 5px;
    line-height: 75px;
    margin-bottom: 40px;
}

.home .content h1 span{
    font-size: 1.2em;
    font-weight: 600;
}

.home .content p{
    margin-bottom: 65px;
    line-height: 22px;
}

.home .content a{
    /* background: #fff; */
    padding: 15px 35px;
    color: #09a6d4;
    font-size: 1.1em;
    font-weight: 500;
    text-decoration: none;
    border-radius: 2px;
}

.home .content a:hover{
    background: #09a6d4;
    color: #fff;
}

.home .media-icons{
    z-index: 888;
    position: absolute;
    right: 30px;
    display: flex;
    flex-direction: column;
    transition: 0.5s ease;
}

.home .media-icons a{
    color: #fff;
    font-size: 1.6em;
    transition: 0.3s ease;
}

.home .media-icons a:not(:last-child){
    margin-bottom: 20px;
}

.home .media-icons a:hover{
    transform: scale(1.3);
    color: #09a6d4;
}

.home video{
    z-index: 000;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.slider-navigation{
    z-index: 888;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: translateY(80px);
    margin-bottom: 12px;
}

.slider-navigation .nav-btn{
    width: 12px;
    height: 12px;
    background: #fff;
    border-radius: 50%;
    cursor: pointer;
    box-shadow: 0 0 2px rgba(255, 255, 255, 0.5);
    transition: 0.3s ease;
}

.slider-navigation .nav-btn.active{
    background: #09a6d4;
}

.slider-navigation .nav-btn:not(:last-child){
    margin-right: 20px;
}

.slider-navigation .nav-btn:hover{
    transform: scale(1.2);
}

.img-slide{
    position: absolute;
    width: 100%;
    clip-path: circle(0% at 0 50%);
}

.img-slide.active{
    clip-path: circle(150% at 0 50%);
    transition: 2s ease;
    transition-property: clip-path;
}

@media (max-width: 1040px){
    header{
        padding: 12px 20px;
    }
    section{
        padding: 100px 20px;
    }
    .home .media-icons{
        right: 15px;
    }
    header .navigation{
        display: none;
    }
    header .navigation.active{
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(1, 1, 1, 0.5);
    }

    header .navigation .navigation-items a{
        color: #222;
        font-size: 1.2em;
        margin: 20px;
    }
    header .navigation .navigation-items a:before{
        background: #222;
        height: 5px;
    }
    header .navigation .navigation-items{
        background: #fff;
        width: 600px;
        max-width: 600px;
        margin: 20px;
        padding: 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 5px;
        box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
    }
    .menu-btn{
        background: url(images/menu.png)no-repeat;
        background-size: 30px;
        background-position: center;
        width: 40px;
        height: 40px;
        cursor: pointer;
        transition: 0.3s ease;
    }
    .menu-btn.active{
        z-index: 999;
        background: url(close.png)no-repeat;
        background-size: 25px;
        background-position: center;
        transition: 0.3s ease;
    }
}

@media (max-width: 560px){
    .home .content h1{
        font-size: 3em;
        line-height: 60px;
    }
}
.brand{
	animation: animate 1s alternate infinite;
}
@keyframes animate{
            from {
                color: lightgrey;
            }

            to {
                transform: scale(1.25);
                color: white;
            }
        }
        .logo img{
  position: absolute;
  top: 5px;
  left: 80px;
  border: none;
  border-radius: 300px;
}
    </style>
</head>
<body>

    <header>
    <div class="logo">
    <img src="images/logo2.png" alt="" height="60px" width="60px">
  </div>
        <a href="#" class="brand">STOP POLLUTION !</a>
        <div class="menu-btn">
            <div class="navigation">
                <div class="navigation-items">
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="explore.php">Explore</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="Quiz.php">Quiz</a>
                    <a href="feed.php">Feedback</a>
                    
                </div>
                </div>
            </div>
        </div>
    </header>

    <section class="home">
        <video decoding="async" class="img-slide active" src="videos/water.mp4" autoplay muted loop ></video>
        <video decoding="async" class="img-slide" src="videos/air.mp4" autoplay muted loop ></video>
        <video decoding="async" class="img-slide" src="videos/Land.mp4" autoplay muted loop ></video>
        <!-- <video decoding="async" class="img-slide" src=""></video>
        <video decoding="async" class="img-slide" src=""></video> -->
        <div class="content active">
            <h1><br><span>Water Pollution</span></h1>
            <p>Water pollution (or aquatic pollution) is the contamination of water bodies, usually as a result of human activities, in such a manner that negatively affects its legitimate uses. Water pollution reduces the ability of the body of water to provide the ecosystem services that it would otherwise provide..</p>
          <a href="water.php">Read More</a>
        </div>
        <div class="content">
          <h1><br><span>Air Pollution</span></h1>
          <p>Air pollution is the contamination of air due to the presence of substances in the atmosphere that are harmful to the health of humans and other living beings, or cause damage to the climate or to materials. It can also cause harm to food crops, and may damage the natural environment (for example, climate change, ozone depletion or habitat degradation).</p>
          <a href="air.php">Read More</a>
        </div>
        <div class="content">
          <h1><br><span>land pollution</span></h1>
          <p>Soil contamination, soil pollution, or land pollution as a part of land degradation is caused by the presence of human-made chemicals or other alteration in the natural soil environment. It is typically caused by industrial activity, agricultural chemicals or improper disposal of waste.</p>
          <a href="land.php">Read More</a>
        </div>
    
        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <!-- <div class="nav-btn"></div>
            <div class="nav-btn"></div> -->
        </div>
    </section> <script src="main.js" defer data-deferred="1"></script> </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>  
</head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
  *{
    margin: 0px;
    padding: 0px;
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
    background-color: #f4f4f4;
}

header .brand{
    color: black;
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
    color: black;
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

.head2{
  text-align: center;
  font-weight: bold;
  font-size: 40px;
  color black;
  padding-left: 270px;
}
.head1{
  text-align: center;
  font-weight: bold;
  font-size: 40px;
  color: black;
  padding-bottom: 15px;
  margin: auto;
  
}
#padding{
  padding: 40px;
  margin-top: 20px;
  background-color: #f2f2f2;
  border: 1px solid lightgrey;
  border-radius: 10px;
}
.brand{
	animation: animate 1s alternate infinite;
}
@keyframes animate{
            from {
                color: white;
            }

            to {
                transform: scale(1.25);
                color: black;
            }
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
        background-color: black;
    }
    .menu-btn.active{
        z-index: 999;
        background: url(images/close.png)no-repeat;
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
#padding{
  padding-top: 40px;
}
#imghov{
  border-radius: 9px;
  cursor: pointer;
  
}
#imghov:hover{
  animation: animage 1s alternate infinite;
}

@keyframes animage{
            from {
                
            }

            to {
                transform: scale(1.1);
                transition-property: all;
                transition-timimg-function: ease-out;
               
            }
        }
        .logo img{
  position: absolute;
  top: 2px;
  left: 80px;
  border: none;
  border-radius: 300px;
}
.footimg{
  border: none;
  border-radius: 300px;
}
.RJ{
  position: fixed;
  bottom: 2px;
  right: 0px;
}
.RJ img{
  border: none;
  border-radius: 300px;
}
</style>
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
                    <a href="about.php">About us</a>
                    <a href="explore.php">Explore</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="Quiz.php">Quiz</a>
                    <a href="feed.php">Feedback</a>
                </div>
            </div>
        </div>
    </header>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex w-full mb-20 flex-wrap" id="padding">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4"><b>OVERVIEW</b> &nbsp;of <b>POLLUTION</b> in <b>INDIA</b></h1>
      <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">
      <b>INDIA</b> has ranked <b>8th</b> in the global list of countries with the most hazardous air quality and hosts <b>12</b> of the <b>15</b> most polluted cities from Central and South Asia.<b>DUST</b> <b>&</b> <b>CONSTRUCTION</b> contribute about <b>59%</b> to the air pollution in India, which is followed by Waste Burning. Crafting activities are mostly in the urban areas while Waste Burning is in the rural areas.
      </p>
    </div>
    <div class="head1">
         <h1>
        AIR POLLUTION
         </h1>
</div>
<div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" id="imghov" src="images/delhi.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" id="imghov" src="images/save.jpg">
        </div>
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" id="imghov" src="images/gas.jpg">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" id="imghov" src="images/taj.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" id="imghov" src="images/varanasi.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" id="imghov" src="images/girl.jpg">
        </div>
      </div>
    </div>
  </div>
  <div class="head2">
         <h1>
             WATER POLLUTION
         </h1>
</div>
<div class="container px-5 py-24 mx-auto flex flex-wrap">
<div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" id="imghov" src="images/w1.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" id="imghov" src="images/w3.jpg">
        </div>
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" id="imghov" src="images/w10.jpg">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" id="imghov" src="images/w2.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" id="imghov" src="images/w4.avif">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" id="imghov" src="images/w8.jpg">
        </div>
      </div>
    </div>
  </div>

  <div class="head2">
         <h1>
             LAND POLLUTION
         </h1>
</div>
<div class="container px-5 py-24 mx-auto flex flex-wrap">
<div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" id="imghov" src="images/L1.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" id="imghov" src="images/L3.jpg">
        </div>
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" id="imghov"src="images/L2.jpg">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" id="imghov" src="images/L5.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" id="imghov" src="images/L4.jpg">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" id="imghov" src="images/L6.avif">
        </div>
      </div>
    </div>
  </div>
</section> 
</div>
<hr>
<div class="RJ">
      <img src="images/RJlogo.png" alt="" height="80px" width="80px">
      </div>
<footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <img class="footimg" src="images/logo2.png" alt="" height="50px" width="50px">
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4"> save the EARTH-
      <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">#PollutionFree<pre>                                                                                                                            A cleaner Earth begins with you :)</pre></a>
    </p>
    </span>
  </div>
</footer>
<script src="main.js" defer data-deferred="1"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore More</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
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
.brand{
	animation: animate 1s alternate infinite;
}
@keyframes animate{
            from {
                
            }

            to {
                transform: scale(1.25);
            }
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
.logo img{
  position: absolute;
  top: 2px;
  left: 80px;
  border: none;
  border-radius: 300px;
}
.space{
    padding-top: 90px;
}
.heading{
    text-align: center;
    font-size: 40px;
    font-weight: bold;
    padding-top: 50px;
    color: black;
    text-shadow: 4px 4px 6px lightgrey; 
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
.heading{
  margin-left: 200px;
  margin-right: 200px;
  text-align: center;
  background-color: #f4f4f4;
  padding-bottom: 50px;
  border: 1px solid grey;
  border-radius: 9px;
}
#break{
  padding-top: 30px;
  font-size: 20px;
}
#big{
  font-size: 30px;
}
#br{
  border: none;
  border-radius: 12px;
}
  </style>
    <div class="main">
<header>
<div class="logo">
    <img src="images/logo2.png" alt="" height="60px" width="60px">
  </div>
        <a href="#" class="brand"> STOP POLLUTION !</a>
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
    </header>
    <div class="space">
        <div class="heading"><h1>10 Most Polluted Cities in INDIA<br>(2023 Rankings)</br></h1></div>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" id="imghov" src="images/hassan.webp">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3"><b>Hassan</b></h2>
        <p class="leading-relaxed text-base"></p>

      </div>
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" id="imghov" src="Images/bhiwadi.webp">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3"><b>Bhiwadi</b></h2>
        <p class="leading-relaxed text-base"></p>
      </div>
    </div>

    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" id="imghov"  src="images/delhi.jpg">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3"><b>Delhi</b></h2>
        <p class="leading-relaxed text-base"></p>

      </div>
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" id="imghov"src="Images/faridabad.webp">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3"><b>Faridabad</b></h2>
        <p class="leading-relaxed text-base"></p>
      </div>
    </div>
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" id="imghov" src="images/charkhi.webp">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3"><b>Charkhi</b></h2>
        <p class="leading-relaxed text-base"></p>

      </div>
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" id="imghov" src="Images/gurugram.webp">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3"><b>Gurugram</b></h2>
        <p class="leading-relaxed text-base"></p>
      </div>
    </div>

    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" id="imghov" src="images/Kalyan.webp">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3"><b>Kalyan</b></h2>
        <p class="leading-relaxed text-base"></p>

      </div>
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" id="imghov" src="Images/mumbai.webp">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3"><b>Mumbai</b></h2>
        <p class="leading-relaxed text-base"></p>
      </div>
    </div>
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" id="imghov" src="images/noida.webp">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3"><b>Noida</b></h2>
        <p class="leading-relaxed text-base"></p>

      </div>
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" id="imghov" src="Images/ambala.webp">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3"><b>Ambala</b></h2>
        <p class="leading-relaxed text-base"></p>
      </div>
    </div>
  </div>
</section>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" id="big"><b>#pollutionFREE</b></h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base" id="break"><b>"GREEN</b> choices <b>TODAY,</b>  breathe easier <b>TOMORROW" - </b>make india <b>POLLUTION-FREE</b></p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" id="br" src="images/bg1.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">#pollutionFREE</h1>
            <p class="leading-relaxed">"Pollution is silent, but its impact is loud – act now for a noise-free, pollution-free India."<Br><br>
              you can make a difference ! 
            </p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" id="br" src="images/bg2.webp">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">#pollutionFREE</h1>
            <p class="leading-relaxed">"Clear skies, clean rivers, a pollution-free India—where every breath is a promise of a healthier tomorrow."<br> you can make a difference ! </p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" id="br" src="images/bg3.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
          <h1 class="title-font text-lg font-medium text-gray-900 mb-3">#pollutionFREE</h1>
            <p class="leading-relaxed">"Breathe easy, live freely – a pollution-free India begins with each one of us. Clean air, bright future – let's make it happen, together."</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" id="br" src="images/bg4.webp">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
          <h1 class="title-font text-lg font-medium text-gray-900 mb-3">#pollutionFREE</h1>
            <p class="leading-relaxed">"Breathe in hope, exhale change. Let's paint our skies with dreams, not pollutants. A pollution-free India begins with you and me."<br></p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" id="br" src="images/bg5.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
          <h1 class="title-font text-lg font-medium text-gray-900 mb-3">#pollutionFREE</h1>
            <p class="leading-relaxed">"Clean air, clear future – pledge for a pollution-free India. Small steps, big change – breathe for a better tomorrow.
              "<br><br></p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" id="br" src="images/bg6.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
          <h1 class="title-font text-lg font-medium text-gray-900 mb-3">#pollutionFREE</h1> 
            <p class="leading-relaxed">"Clear the air, care for the Earth. A pollution-free India starts with you. Breathe in, breathe out – let's make every breath count."<br><br></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
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
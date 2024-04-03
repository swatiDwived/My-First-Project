<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>  
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

.main{
    /* max-width: 80vw; */
    margin-left: 170px;
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
.footimg{
  border: none;
  border-radius: 300px;
}
#RJimage:hover{
  filter: drop-shadow(2px 4px 6px grey);
  cursor: pointer;
}
#button:hover{
  filter: drop-shadow(2px 2px 4px grey);
  cursor: pointer;
  background-color: whitesmoke;
  color: blue;
}
#ourimage:hover{
  filter: drop-shadow(2px 2px 4px grey);
  cursor: pointer;
}
</style>
</head>
<body>
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


    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="text-2xl font-medium title-font mb-4 text-gray-900"><b>OUR TEAM</b></h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">"Join us on a journey to combat pollution and foster change. Our dedicated team is passionate about creating awareness to build a cleaner, healthier future for our community. Together, let's explore the impact of pollution and inspire positive action."</p>
      <br><br>------STUDENT'S OF RJ COLLEGE------
    </div>
    <div class="main">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 lg:w-1/4 md:w-1/2">
        <div class="h-full flex flex-col items-center text-center">
          <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" id="ourimage" src="images/swati.jpg">
          <div class="w-full">
            <h2 class="title-font font-medium text-lg text-gray-900">Swati Dwivedi</h2>
            <h3 class="text-gray-500 mb-3">Student</h3>
            <p class="mb-4">Hey there! I'm a first year student of an undergraduate course Information technology studying in RJ college of Arts, Commerce and science. </p>

          </div>
        </div>
      </div>

      <div class="p-4 lg:w-1/4 md:w-1/2">
        <div class="h-full flex flex-col items-center text-center">
          <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" id="ourimage" src="images/jui.jpg">
          <div class="w-full">
            <h2 class="title-font font-medium text-lg text-gray-900">Juili Bhogale</h2>
            <h3 class="text-gray-500 mb-3">Student</h3>
            <p class="mb-4">Hey there! I'm a first year student of an undergraduate course Information technology studying in RJ college of Arts, Commerce and science.</p>
          </div>
        </div>
      </div>
      
      <div class="p-4 lg:w-1/4 md:w-1/2">
        <div class="h-full flex flex-col items-center text-center">
          <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" id="ourimage" src="images/chaitali.jpg">
          <div class="w-full">
            <h2 class="title-font font-medium text-lg text-gray-900">Chaitali pandey</h2>
            <h3 class="text-gray-500 mb-3">student</h3>
            <p class="mb-4">Hey there! I'm a first year student of an undergraduate course Information technology studying in RJ college of Arts, Commerce and science.</p>
            
          </div>
        </div>
      </div>
    
</section>
<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" alt="hero" id="RJimage" src="images/RJimage.jpg">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Ramniranjan Jhunjhunwala College of Arts, commerce and Science.
      </h1>
      <p class="mb-8 leading-relaxed">The college is located in Ghatkopar (W), Mumbai, India. It is affiliated to University of Mumbai. It was established in 1963.
It has been awarded and rated "A" grade by the NAAC with CGPA 3.50 and has been awarded "Best College" of Mumbai University in 2009.
</p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" id="button"><a href="https://www.rjcollege.edu.in" target="blank">Know More</a></button>
      </div>
    </div>
  </div>
</section>
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
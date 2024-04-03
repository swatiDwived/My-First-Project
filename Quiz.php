<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz on pollution</title>
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
.sec{
    padding: 100px;
    padding-top: 140px;

}
.heading{
    text-align: center;
    font-size: 40px;
    font-weight: bolder;
    max-width: 50vw;
    margin: auto;
    color: #043E8B;
}
.heading{
	animation: animate 4s alternate;
}
@keyframes animate{
            from {
                color: white;
            }

            to {
                transform: scale(1.09);
                
            }
        }
        #inn{
            padding-right: 10px;
        }
        .container{
            text-align: center;
            max-width: 50vw;
            margin: auto;
        }
        .container h3{
            font-size: 30px;
            font-weight: bolder;
            padding-bottom: 25px;
            color: #595454;
        }
        .container h1{
            font-size: 40px;
            font-weight: bolder;
            padding-bottom: 50px;
            color: #043E8B
        }
        .container h1{
	animation: animate 4s alternate;
}
@keyframes animate{
            from {
                color: white;
            }

            to {
                transform: scale(1.09);
            }
        }
        .green{
            font-size: 20px;
            font-weight: bolder;
            color: #047D43;
        }
        input[type="text"],
input[type="email"],
textarea{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    max-width: 50vw;
    margin: auto;
    width: 80%;
    padding: 10px;
    border: 1px solid black;
    border-radius: 5px;
    margin: 10px;
    border: 1px solid lightgrey;
    border-radius: 8px;
}

input[type="submit"]{
    background-color: black;
    font-size: large;
    color: white;
    padding: 9px;
    border-color: grey; 
    border-radius: 9px;
    width: 25%;
    cursor: pointer;
    margin-left: 135px;
}
input[type="submit"]:hover{
    background-color: whitesmoke;
    color: black;
}
.form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    max-width: 50vw;
    margin: auto;
    width: 60%;
    padding: 10px;
    padding-left: 100px;
    padding-top: 70px;
}
.box{
    background-color: #D9D9D9;
    background-size: cover;
    background-repeat: no-repeat;
    margin-left: 120px;
    margin-right: 120px;
    margin-top: 30px;
    margin-bottom: 30px;
    border: 2px solid grey;
    border-radius: 9px;
}
.box:hover{
    filter: drop-shadow(2px 2px 4px grey);
  cursor: pointer;
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
                    <a href="about.php">About Us</a>
                    <a href="explore.php">Explore</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="Quiz.php">Quiz</a>
                    <a href="feed.php">Feedback</a>
                </div>
            </div>
        </div>
    </header>

    
<div class="sec">
<div class="heading">
       What INDIA is doing to tackle POLLUTION ?
    </div>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex flex-wrap w-full">
      <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
        <div class="flex relative pb-12">
          <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider"><b>STEP 1</b></h2>
            <p class="leading-relaxed" id="inn">The 2020 GRAP (Graded Response Action Plan): The GRAP is an emergency action plan to combat severe air pollution episodes in the Delhi-NCR region and other major cities.</p>
          </div>
        </div>
        <div class="flex relative pb-12">
          <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider"><b>STEP 2</b></h2>
            <p class="leading-relaxed" id="inn">The 2021 Green Hydrogen Mission : India launched the Green Hydrogen Mission to promote clean energy and reduce pollution from fossil fuels.
</p>
          </div>
        </div>
        <div class="flex relative pb-12">
          <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider"><b>STEP 3</b></h2>
            <p class="leading-relaxed" id="inn">The “Control of Pollution” is an ongoing scheme under the Central Sector Scheme, which was initiated in 2018-19. Its full budget was made available from the year 2019-20.</p>
          </div>
        </div>
        <div class="flex relative pb-12">
          <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider"><b>STEP 4</b></h2>
            <p class="leading-relaxed" id="inn">On October 15, Delhi Environment Minister Gopal Rai announced that 21 construction sites in the capital were fined a total of Rs 8.35 lakh for violating anti-dust guidelines. This initiative is part of a broader anti-dust campaign designed to address air pollution issues in the national capital.</p>
          </div>
        </div>
        <div class="flex relative">
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider"><b>STEP 5</b></h2>
            <p class="leading-relaxed" id="inn">The 2019 BS-VI Emission Standards: India transitioned to Bharat Stage VI (BS-VI) emission standards, which significantly reduced vehicle emissions by promoting cleaner fuels and technologies.</p>
          </div>
        </div>
      </div>
      <img class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12" src="images/qimage.webp" alt="step">
    </div>
  </div>
  </div>
</section>


<div class="container">
    <h3>Now Let Us Test</h3>
    <h1>What We HUMANS are doing to reduce pollution ? </h1>
            <p class="green">" Time to eco-explore! What's Your environmental role - spill the Green secrets ! " &#9829;</p>
</div>
<div class="box">
<div class="form">
    <form action="userQuiz.php" method="POST">
    Name : <input type="text" name="name" id="name" placeholder="Write your name" required><br>
    Email : <input type="email" name="email" id="email" placeholder="Write your E-mail" required><br>
    Are there specific habits you've adopted to save water in your daily life?<br><br>
    <textarea name="water" id="water" cols="30" rows=3" placeholder="Write here !"></textarea><br>
    Do You actively participate in tree planting or green intiatives ?<br><br>
    <textarea name="plant" id="plant" cols="30" rows=3" placeholder="Write here !"></textarea><br>
    Do You segregate your waste as dry, wet and recycling waste ?<br><br>
    <textarea name="waste" id="waste" cols="30" rows=3" placeholder="Write here !"></textarea><br>
    Do You participate in community clean-up drives ? If not yet, would you like to ?<br><br>
    <textarea name="community" id="community" cols="30" rows=3" placeholder="Write here !"></textarea><br>
    Are You mindful of turning off lights and appliances when not in use?<br><br>
    <textarea name="light" id="light" cols="30" rows=3" placeholder="Write here !"></textarea><br>
    How often do you choose walking or cycling over public or private transport for short distances?<br><br>
    <textarea name="walk" id="walk" cols="30" rows=3" placeholder="Write here !"></textarea><br>
    <input type="submit" value="Submit">
    </form>
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
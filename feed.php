<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
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
                color: white;
            }

            to {
                transform: scale(1.25);
                clor: black;
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
.container{
    max-width: 80%; 
    padding: 34px; 
    margin: auto;
    padding-top: 130px;
    
}

.container h1 {
    text-align: center;
    font-size: 40px;
    padding: 15px;
    padding-bottom: 30px;
}
.box{
    background-color: #f2f2f2;
    border: 2px solid grey;
    border-radius: 10px;

}
.box:hover{
    filter: drop-shadow(2px 2px 4px grey);
  cursor: pointer;
}
p{
    font-size: 15px;
    text-align: center;
    padding: 20px;
}

input, textarea{
    
    border: 2px solid lightgrey;
    border-radius: 6px;
    outline: none;
    font-size: 14px;
    width: 80%;
    margin: 11px 0px;
  
    padding: 7px;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.btn{
    color: white;
    background: black;
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
    margin-bottom: 20px;
}
.btn:hover{
  filter: drop-shadow(2px 2px 4px grey);
  cursor: pointer;
  background-color: whitesmoke;
  color: black;
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
.marg{
    margin-top: 25px;
    margin-bottom: 25px;
    padding-top: 6px;
    padding-bottom: 6px;
    padding-left: 5px;
}
.slogan p{
    font-size: 20px;
    font-weight: bold;
    animation: slogan 1s alternate infinite;   
    margin-bottom: 30px;
}
@keyframes slogan{
            from {
                color: white;
            }

            to {
                color: darkgreen;
                font-size: 25px;
                transform: scale(0.95);
                transition-property: all;
                transition-timimg-function: ease-out;
            }
        }
        .box2{
  margin-left: 120px;
  margin-right: 100px;
  margin-bottom: 100px;
  margin-top: 80px;
  background-color: #f2f2f2;
  border: 2px solid grey;
  border-radius: 10px;
}
.box2:hover{
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
    <div class="container">
        <div class="box">
        <h1>FEEDBACK</h3>
        <p>Enter your details and submit this form to to share your experience with us !</p>
    
        <form action="userinfo.php" method="POST">
             <input type="text" name="name" id="name" class="marg" placeholder="Enter your name">
            <input type="email" name="email" id="email" class="marg" placeholder="Enter your email">
            <textarea name="desc" id="desc" cols="30" rows="10" class="marg" placeholder="Hope you liked the website and the content...please share your feedback with us !"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    </div>
    <div class="box2">
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
      </svg>
      <p class="leading-relaxed text-lg">Thank you for exploring our Pollution Awareness website. Your interest is crucial in the fight against pollution. We invite you to be a part of the solution—contribute to pollution reduction by adopting sustainable practices and spreading awareness. Together, we can make a meaningful impact.<b><br><br>
Best regards,<br>----Student's of RJ college----</b></p>
      <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
      <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Ramniranjan Jhunjhunwala college</h2>
      <p class="text-gray-500">Ghatkopar(west)</p>
    </div>
  </div>
  </div>
</section>
    <div class="slogan">
    <p>PLANT trees, breathe clean, reduce waste, let nature's sheen !</p>
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
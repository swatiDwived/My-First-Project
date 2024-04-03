<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air pollution</title>
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

    .air
{
	width: 80%;
	margin: auto;
	text-align: center;
	padding-top: 100px;
}
.air h1
{
	font-size: 38px;
	font-weight: 600;
}
.air p
{
	color: black;
	font-size: 14px;
	font-weight: 300;
	line-height: 22px;
	padding: 10px;
}
.totalair
{
	margin-top: 5%;
	display: flex;
	justify-content: space-between;
}
.prosair
{
	background:#fff3f3;
	border-radius: 10px;
	flex-basis: 31%;
	margin-top: 2.5;
	margin-bottom: 5%;
	padding: 20px 12px;
	box-sizing: border-box;
	transition: 0.5s;
}
.prosair:hover
{
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
	cursor: pointer;
}
.main{
  background-image:url(images/new1.jpeg);
  background-size: cover;
  background-repeat: no-repeat;
}
.video{
    position: absolute;
	left: 0;
	width: 100%;
	height: 100%;
}
.video video{
  position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;	
	object-fit: cover;
	/* opacity: 0; */
}
/* .container{
	height: 100vh;
	width: 100%;
} */
.sec3{
    position: absolute;
	top: 225%;
	left: 0;
	width: 100%;
	height: 100%;
}
.sec3 video{
  position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;	
	object-fit: cover;
	/* opacity: 0; */
	
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
                
            }

            to {
                transform: scale(1.25);
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
    </header>

    <div class="main">
<section class="second">
	<div class="air">
		<a name = "air" class="air"><h1>Air Pollution</h1></a>
		<p class="desca">Air pollution refers to the release of pollutants into the air—pollutants which are detrimental to human health and the planet as a whole.  Nine out of ten human beings currently breathe air that exceeds the WHO’s guideline limits for pollutants, with those living in low- and middle-income countries suffering the most.</p>
		<div class="totalair">
			<div class="prosair">
				<h3>Causes</h3>
				<p>Household combustion devices, motor vehicles, industrial facilities and forest fires are common sources of air pollution. Pollutants of major public health concern include particulate matter, carbon monoxide, ozone, nitrogen dioxide and sulfur dioxide. Another type of air pollution, smog, is then worsened by that increased heat, forming when the weather is warmer and there is more ultraviolet radiation. Fumes from paint, hair spray, varnish, aerosol sprays and other solvents. Aviation is also one of the major sources of air pollution.</p>
			</div>

			<div class="prosair">
				<h3>Preventions</h3>
				<p>The less gasoline we burn, the better we are doing to reduce air pollution and harmful effects of climate change. Make good choices about transportation. When you can, walk, ride a bike, or take public transportation. For driving, choose a car that gets better miles per gallon of gas, or choose an electric car. You can also investigate your power provider options—you may be able to request that your electricity be supplied by wind or solar. Buying your food locally cuts down on the fossil fuels burned in trucking or flying food in from across the country.</p>
			</div>

			<div class="prosair">
				<h3>Facts</h3>
				<p>Air pollution is a significant risk factor for a number of pollution-related diseases, including respiratory infections, heart disease, COPD, stroke and lung cancer. Outdoor air pollution alone causes 2.1 to 4.21 million deaths annually, making it one of the top contributors to human death
				   Data shows that almost all of the global population (99%) breathe air that exceeds WHO guideline limits and contains high levels of pollutants, with low- and middle-income countries suffering from the highest exposures</p>
			</div>

		</div>
	</div>
</section>

<section class="video">
  <video src="videos/aircanva.mp4"  autoplay muted loop ></video>
</section>

<!-- <section class="airvideo">
  <video src="airvediocanva.mp4"  autoplay muted loop ></video>
</section> -->
</div>				
						
<div class="sec3">
  <video src="videos/Aircanvavideo.mp4" autoplay muted loop ></video>
</div>
 <script src="main.js" defer data-deferred="1"></script> </body>
				
</body>
</html>
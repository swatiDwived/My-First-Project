<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>water pollution</title>
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

      
.main{
  background-image: url(images/new2.jpg);
  background-size: cover;
  background-repeat: no-repeat;
}
.water
{
	width: 80%;
	margin: auto;
	text-align: center;
	padding-top: 100px;
}
.water h1
{
	font-size: 38px;
	font-weight: 600;
}
.water p
{
	color: #777;
	font-size: 14px;
	font-weight: 300;
	line-height: 22px;
	padding: 10px;
}
.totalwater
{
	margin-top: 5%;
	display: flex;
	justify-content: space-between;
}
.proswater
{
	background: #D8DEE1;
	border-radius:10px;
	flex-basis: 31%;
	margin-bottom: 5%;
	padding: 20px 12px;
	box-sizing: border-box;
	transition: 0.5s;
}
.proswater:hover
{
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
	cursor: pointer;
}
.third h3{
  font-weight: bold;
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
	height: 97%;	
	object-fit: cover;
	/* opacity: 0; */
}
.sec3{
    position: absolute;
	top: 228%;
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
.logo img{
  position: absolute;
  top: 2px;
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

    <section class="third">
		<div class="water">
				<h1>Water Pollution</h1>
				<p class="descw">Water pollution occurs when harmful substances—often chemicals or microorganisms—contaminate a stream, river, lake, ocean, aquifer, or other body of water, degrading water quality and rendering it toxic to humans or the environment.</p>
				<div class="totalwater">
					<div class="proswater">
						<h3>Causes</h3>
						<p>Water is uniquely vulnerable to pollution. Known as a “universal solvent,” water is able to dissolve more substances than any other liquid on earth. Water pollution can usually be attributed to one of four sources: sewage, industry, agriculture, and urban runoff including stormwater. For example, releasing inadequately treated wastewater into natural waters can lead to degradation of these aquatic ecosystems. Water pollution can also lead to water-borne diseases for people using polluted water for drinking, bathing, washing or irrigation.</p>
					</div>

					<div class="proswater">
						<h3>Preventions</h3>
						<p>Reduce your plastic consumption and reuse or recycle plastic when you can.
							Properly dispose of chemical cleaners, oils, and nonbiodegradable items to keep them from going down the drain.
							Maintain your car so it does not leak oil, antifreeze, or coolant. Be mindful of anything you pour into storm sewers, since that waste often won’t be treated before being released into local waterways. If you notice a storm sewer blocked by litter, clean it up to keep that trash out of the water.
							Don't put fertilizer on the grass right before it rains. The chemicals will wash into storm drains and waterways.
						</p>
					</div>

					<div class="proswater">
						<h3>Facts</h3>
						<p>Approximately 785 million people in the world do not have access to clean drinking water because of pollution. Around 70% of the industrial waste is dumped into the water bodies where they pollute the usable water supply. Industry dumps an estimated 300-400 MT of polluted waste into water bodies every year. It includes millions of tonnes of heavy metals, solvents, toxic sludge and other wastes. Fourteen billion pounds of garbage, mostly plastic, is dumped into the ocean every year. 15 million children under the age of five die each year because of diseases caused by drinking water</p>
					</div>		
				</div>
		</div>
</section>

<section class="video">
  <video src="videos/WATERCANVA.mp4"  autoplay muted loop ></video>
</section>

</div>
<div class="sec3">
  <video src="videos/Watercanvavideo.mp4" autoplay muted loop ></video>
</div>
<script src="main.js" defer data-deferred="1"></script>
</body>
</html>
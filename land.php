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
  background-image: url(images/landimage.jpg);
  background-size: cover;
  background-repeat: no-repeat;
}
      .land
{
	width: 80%;
	margin: auto;
	text-align: center;
	padding-top: 100px;
}
.big{
  font-size: 38px;
  color: white;
}
.land h1
{
  color: white
	font-weight: 600;
}
.land .desc{
  color: white;
}
.land h3{
  font-weight: bold;
}
.land p
{
	color: #777;
	font-size: 14px;
	font-weight: 300;
	line-height: 22px;
	padding: 10px;
}
.totalland
{
	margin-top: 5%;
	display: flex;
	justify-content: space-between;
}
.prosland
{
	background: #fff3f3;
	border-radius: 10px;
	flex-basis: 31%;
	margin-bottom: 5%;
	padding: 20px 12px;
	box-sizing: border-box;
	transition: 0.5s;
}
.prosland:hover
{
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
	cursor: pointer;
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
<section class="fourth">
	<div class="land">
		<a name = "land" class="land"><h1 class="big">Land Pollution</h1></a>
		<p class="desc">Land pollution refers to the deterioration of the earth’s land surfaces, at and below ground level. The cause is the accumulation of solid and liquid waste materials that contaminate groundwater and soil.</p>
			<div class="totalland">
				<div class="prosland">
					<h3>Causes</h3>
					<p>The most common chemicals involved are petroleum hydrocarbons, polynuclear aromatic hydrocarbons (such as naphthalene and benzo(a)pyrene), solvents, pesticides, lead, and other heavy metals. Contamination is correlated with the degree of industrialization and intensity of chemical substance.  These compounds are mainly formed through soil microbial activity and decomposition of organisms. Additionally, various compounds get into the soil from the atmosphere, e.g with precipitation water, as well as by wind activity or other types of soil disturbances.</p>
				</div>

				<div class="prosland">
					<h3>Preventions</h3>
					<p>Reducing pesticides and chemical fertilizer usage can help in the prevention of land pollution. In addition to contaminating the soil, they do no good for the crops.

						Also, instead of harmful toxins, farmers must use natural ingredients. They can switch to bio-fertilizers and manure. This will help to minimize land pollution. All of us must practice reforestation to protect the land from occurring pollution. Further, it will prevent us from floods and soil erosion. We must also practice "Reduce, Reuse and Recycle" in our day to day lives to make this world a better place.</p>
				</div>

				<div class="prosland">
					<h3>Facts</h3>
					<p>Energy production and food waste are the reason for about 80% of the land pollution.
						80% of the items on the landfills are recyclable.
						The planet loses 24 billion tonnes of topsoil each year because of land pollution.
						Agricultural activities are the reason for a significant percent of the land pollution. That would be anything related to fertilizing, using pesticides, irrigation and improper disposal of animal waste.
						Half of the population is drinking water that is unsafe that has been contaminated by environmental pollution of the land.
					</p>
				</div>

			</div>
	</div>
</section>
</div>
<section class="video">
  <video src="videos/landcanva.mp4"  autoplay muted loop ></video>
</section>

</div>
<div class="sec3">
  <video src="videos/LANDCANVAVIDEO.mp4" autoplay muted loop ></video>
</div>
<script src="main.js" defer data-deferred="1"></script>
</body>
</html>
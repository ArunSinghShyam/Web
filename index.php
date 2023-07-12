<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link for awesome cdn font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--css link-->
    <link rel="stylesheet" href="style.css">
    <title>Tourism...</title>
</head>
<body>
    <header >
        <a href="#" class="logo"><span>T</span>raval</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#book" target="_blank">Book</a>
            <a href="#package"target="_blank">package</a>
            <a href="#services"target="_blank">services</a>
            <a href="#gallary"target="_blank">gallary</a>
            <a href="#review"target="_blank">review</a>
            <a href="#contact"target="_blank">contact</a>
        </nav>
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user"  id="login-btn"></i>
        </div>
        <form action="https://www.google.com/search" method="get" class="search-bar-container">
            <input type="text" id="search-bar" placeholder="Enter the place name" name="q"></input>
            <button type="submit" class="fas fa-search" ></button> 
    
        </form>

    </header> 

    <!--Login-form-container -->
    <div class="login-form-container">
        <i class="fas fa-time" id="form-close"></i>
        <form action="" >
            <h3>LOGIN</h3>
            <input type="email" class="box" placeholder="Enter the email">
            <input type="password" class="box" placeholder="Enter the password">
            <input type="submit" value="login now" onclick="loginnow()" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have account<a href="#">register now</a></p>
        </form>
    </div>
    <!--login form end-->

    <!--home section starts-->
    <section class="home" id="home">
        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>Find your-self in  india's best tourist place</p>
            <a href="#" class="btn">Discover your self</a>
        </div>
        <div class="controls">
            <span class="vid-btn active" data-src="image/vid4.mp4"></span>
            <span class="vid-btn" data-src="image/vid2.mp4"></span>
            <span class="vid-btn" data-src="image/vid3.mp4"></span>
            <span class="vid-btn" data-src="image/vid1.mp4"></span>

        </div>
        <div class="video-container">
            <video src="image/vid4.mp4" id="video-slider" loop autoplay muted></video>
            
        </div>

    </section>
 <!--home section end-->


 <!--book section start-->
    <section class="book" id="book">
        <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
        </h1>
    
        <div class="row">
            <div class="image">
                <img src=" image/image1.jpg" height="400" weight="300" alt="here">
            </div>
            <form action="">
                <div class="inputBox">
                    <h3>where to</h3>
                    <input type="text" placeholder="place name">
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="number" placeholder="number of guests">
                </div>
                <div class="inputBox">
                    <h3>Arrival</h3>
                    <input type="date" placeholder="Enter the date">
                </div>
                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date" placeholder="Enter the date">
                </div>
                <input type="submit" class="btn" onclick="submit1()" value="book now">
            </form>
        </div>
    </section>
 <!--book section end-->

 <!--pacakge section start-->
 <section class="packages" id="package">
    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <img src="image/gallery-delhi.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-market-alt"></i>Delhi</h3>
                <p>the india gate is war memorial located near the kartavya path on the
                    eastern edge of the ceremonial axis of new delhi
                </p>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">Rs:90.00<span>Rs:120.00</span></div>
                <a href="#" class="btn" onclick="submit1()">book now </a>
            </div>
        </div>

        <div class="box">
            <img src="image/gallery-manali.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-market-alt"></i>manali</h3>
                <p>manali is  a town ,near kullu town in kullu district valley formed
                    by the beas river.
                </p>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">Rs:80.0<span>Rs:110.0</span></div>
                <a href="#" class="btn" onclick="submit1()">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="image/gallery-lonavala.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-market-alt"></i>lonavala</h3>
                <p>lonavala is a hill station surrounded by green valleys 
                    in western india near mumbai
                </p>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">Rs:70.00<span>Rs:110.00</span></div>
                <a href="#" class="btn" onclick="submit1()">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="image/gallery-shilong.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-market-alt"></i>shilong</h3>
                <p>Shillong is a hill station in northeast india 
                    and capital of hte state of meghalaya
                </p>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">Rs:80.0<span>Rs:130.0</span></div>
                <a href="i.html" class="btn" onclick="submit1()">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="image/gallery-munnar.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-market-alt"></i>Munnar</h3>
                <p>munnar is a town in the western ghats mountain range in india</p>
                <div class="starts">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">Rs:60.0<span>Rs:100.0</span></div>
                <a href="#" class="btn" onclick="submit1()">book now</a>
            </div>
        </div>
            <div class="box">
                <img src="image/gallery-tajmahal.jpg" alt="">
                <div class="content">
                    <h3><i class="fas fa-map-market-alt"></i>tajmahal</h3>
                    <p>The taj mahal is an ivory -white marble mausoleum on the right
                        bank of the river Yamuna in agra.
                    </p>
                    <div class="starts">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">Rs:90.0<span>Rs:120.0</span></div>
                    <a href="#" class="btn" onclick="submit1">book now </a>
                </div>    
            </div>
        </div>
 </section>
 <!--pacakge section start-->

 <!--service section start-->

 <section class="services" id="services">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affortable hostels</h3>
            <p>this is most famous hotel</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>this is most famous hotel</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safety guide</h3>
            <p>this is most famous hotel</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the India</h3>
            <p>this is most famous hotel</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>around the India</h3>
            <p>this is most famous hotel</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>around the India</h3>
            <p>this is most famous hotel</p>
        </div>
    </div>

 </section>
 <!--service section end-->
 <!--gallary section start-->

 <section class="gallery" id="gallary" >
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>a</span>
        <span>r</span>
        <span>y</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <img src="image/1.png" alt="">
            <div class="content">
                <h3>hawa-mahal</h3>
                <p>The hawa mahal is palace of the city of jaipur</p>
                <a href="i.html" class="btn">see more </a>
            </div>
        </div>

        <div class="box">
            <img src="image/8.jpg" alt="">
            <div class="content">
                <h3>akshardham</h3>
                <p>Swaminarayan akshardham is a hindi temple and spiritual-cultural</p>
                <a href="i2.html" class="btn">see more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/9.jpg" alt="">
            <div class="content">
                <h3>lotus-temple</h3>
                <p>the lotus temple located in delhi(its lotus like structure is more attractive</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/12.jpg" alt="">
            <div class="content">
                <h3>Agra fort</h3>
                <p>agra fort is a historical fort in the city of agra</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/13.jpg" alt="">
            <div class="content">
                <h3>ranthambore national park</h3>
                <p>ranthambore national park is one of the biggest and most renowned national park in northern india</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/14.jpg" alt="">
            <div class="content">
                <h3>jama-masjid</h3>
                <p>the jama mosque is a 17th century congregational mosque located in utterpradesh</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/16.jpg" alt="">
            <div class="content">
                <h3>Mysore Palace</h3>
                <p>mysore palace is also known as amba vilas palace ,is a historical palace and a royal residence</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/18.jpg" alt="">
            <div class="content">
                <h3>Humayun's tomb</h3>
                <p>Opulent red-sandstone tomb of mughal emperor-humayun build in 1572</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/19.jpg" alt="">
            <div class="content">
                <h3>amber palace</h3>
                <p>Amer Fort or Amber Fort is a fort located in Amer,Rajasthan(India)</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
    </div>

 </section>
 <!--gallary section end-->


 <!--review section start-->
 <section class="review" id="review">
    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>
    <div class="review-slider">
            <div class="slider">
                <div class="box">
                    <img src="image/img1.jpg" alt>
                    <h3>johndeo</h3>
                    <p>India is one of the the greatest country all over the world
                        and their culture is to good.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="slider">
                <div class="box">
                    <img src="image/img2.jpg" alt>
                    <h3>rohan</h3>
                    <p>i love  traval in india and respect the their culture and heritage.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="slider">
                <div class="box">
                    <img src="image/img3.jpg" alt>
                    <h3>mariya</h3>
                    <p>culture and country is too good.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
    </div>
 </section>
  <!--review section end-->

  <!--contact section start-->
  <section class="contact" id="contact">
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>
    <div class="row">
        <div class="images">
            <img src="image/gallery-varanasi.jpg" alt="image_will_be_present ">
        </div>
        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="enter the email">
             </div>

            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>
    </div>
    
  </section>
  <!--contact section end-->

  <!--footer section start-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>its depends up to uuu  its a open challenge concept
            </p>
        </div>

        <div class="box">
            <h3>branch-locations</h3>
            <a href="#">Kolkata</a>
            <a href="#">Mumbai</a>
            <a href="#">delhi</a>
            <a href="#">Rajasthan</a>
            </p>
        </div>

        <div class="box">
            <h3>quick-link</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">services</a>
            <a href="#">package</a>
            <a href="#">gallary</a>
            <a href="#">review</a>
            <a href="#">contact</a>
            </p>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            </p>
        </div>
    </div>
</section>

  <!--footer section end-->
 
 
    <script src="script.js"></script> 
</body>
 
</html>
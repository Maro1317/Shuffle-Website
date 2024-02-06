<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuffle</title>
    <link rel="icon" type="image/x-icon" href="./Shuffle.png">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    
   
    
    
  </head>


<body>
  
    
      


 
  <div class="row">
    <div class="col-sm nav-col-grey ">
      <nav class="nav1">

        <a href="SignUp.html">Sign Up</a>
        <a href="LogIn.html">Log In</a>
        
      </nav> 
    </div>

    <div class="col-sm nav-col-grey">
      <center><a href=""><img src="./Shuffle.png" alt=""></a></center>
    </div>

    <div class="col-sm nav-col-grey" >
      <p id="user" style="color: white; text-align: right; font-family: custom-font; padding-top: 14px;"> 
        <?php 
        session_start();
        echo "Welcome " . $_SESSION['email2'];


         ?>
        </p>
    </div>
  </div>

 
 <div class="div2">    
  <nav class="nav2">
    <a href="#">News</a>
    <a href="#">Information</a>
    <a href="#">Stories</a>
    <a href="#">Development</a>
    <a href="#">More</a>
  </nav>
 </div> 
     
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./card1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./card2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./card4.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
         <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button>
        </div>
      
        
          
    
 
    
    <main>
       <div class="paragraph1"><p> 
        Welcome to the enchanting realm of Shuffle, where the art of cards transcends ordinary boundaries and unveils a world brimming with limitless possibilities. Prepare to immerse yourself in a captivating journey, where decks of playing cards, tarot cards, and trading cards come alive with beauty, strategy, and mystery.</p></div>
        <div class="paragraph1"><p>Whether you're an avid collector, a curious explorer, or a seasoned player seeking the thrill of a new challenge, Cardscape is your gateway to a universe where every card tells a story. Step into our digital wonderland, where the shuffling whispers of destiny beckon, and embark on a thrilling adventure that will leave you spellbound. Welcome to the realm of Cardscape, where the power to shuffle fate lies within your hands. </p></div>
        
    </main>
    <h2 style="margin-left: 150px;"></h2>
    
              <div class="card" style="width: 18rem; display:inline-block">
        <img class="card-img-top card-img" src="./Uno.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Uno cards</h5>
          <p class="card-text">Uno cards are vibrant portals to thrilling strategic surprises, sparking friendly competition and uproarious laughter.</p>
          <a href="#" class="btn btn-primary">More Info</a>
        </div>
      </div>

      <div class="card" style="width: 18rem; display:inline-block">
        <img class="card-img-top card-img" src="./card1.jpg" alt="Card image cap">
        <div class="card-body card-body-Repilca">
          <h5 class="card-title "> Regular cards</h5>
          <p class="card-text">the timeless companions of countless games, hold the power to transport players to infinite entertainment.</p>
          <a href="#" class="btn btn-primary">More Info</a>
        </div>
      </div>

      <div class="card" style="width: 18rem; display:inline-block">
        <img class="card-img-top card-img" src="./Racko.avif" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Racko cards </h5>
          <p class="card-text">Racko cards, the embodiment of organized chaos, invite players into a whirlwind of strategy and anticipation.</p>
          <a href="#" class="btn btn-primary">More Info</a>
        </div>
      </div>

      <br>
      <br>
      <br>
      <br>
      <br>

      
        

      

        <div class="container" style="margin-bottom: 10px;">

          <div class="row row2" style="height: 400px;">
            <div class="col-sm-8" style="height: 100%">
              <iframe class="embed-responsive-item" style="width: 100%; height: 100%" src="https://www.youtube.com/embed/8BK-hOuA7CY" allowfullscreen></iframe>
            </div>
            <div class="col-sm-4 ">
              <div class="text-box">
                <h2 style="text-align: left;">Featured video</h2>
                <p style="text-align: right;">Biycle entertainment premium deck of 52 cards limited edition for a limted time</p>
              </div>
            </div>
           </div>

        </div>
        

        <div class= "picture" style=" background-image: url(./card-bar.jpg) "> </div>
      <center>
        
        <div class= "featured-games" >
          <div class="container">
            <div class="row row2">
              <div class="col-sm custom-col">
                <div class="card-custom" style="width: 6rem; display:inline-block">
                  <div class="hover-item"><img style="width:150px; height:230px" class="card-img-top" src="./card2.jpg" alt="Card image cap"></div>
                    
                  <div class="card-body">
                    <h5 class="card-title">Poker</h5>
                    
                    
                  </div>
                </div> 
      
              </div>
              <div class="col-sm custom-col">
              <a href="blackjack.html">
                <div class="card-custom" style="width: 6rem; display:inline-block">
                  <div class="hover-item"><img style="width:150px; height:230px" class="card-img-top" src="./card2.jpg" alt="Card image cap"></div>
                  <div class="card-body">
                    <h5 class="card-title">Blackjack</h5>
              </a>
                    
                  </div>
                </div> 
              </div>
      
              <div class="col-sm custom-col">


                <div class="card-custom " style="width: 6rem; display:inline-block">
                  <div class="hover-item"><img style="width:150px; height:230px" class="card-img-top" src="./card2.jpg" alt="Card image cap"></div>
                  <div class="card-body">
                    <h5 class="card-title">Solitaire</h5>
                    
                    
                  </div>
                </div> 
              </div>
              <div class="col-sm custom-col">

               <a href="cardCrazy.html">
                <div class="card-custom" style="width: 6rem; display:inline-block">
                  <div class="hover-item"><img style="width:150px; height:230px" class="card-img-top" src="./card2.jpg" alt="Card image cap"></div>
                  <div class="card-body">
                    <h5 class="card-title">Crazy 8's</h5>
                </a>
                  
                </div> 
              </div>
            </div>
          </div>
         </div>
        </div>
       
      
      
      </center>
      
    

  
    <footer>
        &copy; 2023 Shuffle. All rights reserved. | Designed by <a href="#" target="_blank">Maro</a>
    </footer>
   

    
    <script src="./js/jquery.slim.min.js" > </script>
    <script src="./js/bootstrap.min.js" ></script>
    <script src="./js/popper.min.js" > </script>
    <script src="./LogIn.js" > </script>
    <script src="./project.js"></script>

   
</body>
</html>












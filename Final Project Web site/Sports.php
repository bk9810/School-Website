<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanadarawa Central College</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="shortcut icon" href="2.png"/>
    <link rel="stylesheet" href="course.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
      body{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }
      .aa{
        margin-bottom: 40px;
        color: #001858;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 50px;
      }
      .section_container{
        margin-top: 40px;
      }
    </style>
</head>
<body>
    <div>
        <nav class="nav">
           <div>
            <a href="#" class="kan">
                <img src="2.png">
                
            </a>
           </div>
           
           <div>
                <ul class="ul">
                    <li><a class="ho" href="Home.php">Home</a></li>
                    <li><a class="ho" href="Academcs.php">Academics</a></li>
                    <li class="services"><a class="ho"  href="#">Student Life
                      <i class="fa-regular fa-caret-down"></i>
                    </a>
                    <ul id="submenu">
                      <li><a href="ClubandScoiety.php"> Club and Scoiety </a></li>
                      <li><a href="#"> Sports </a></li>
                      
                    </ul>
                  </li>
                    <li><a class="ho" href="#">Gallery</a></li>
                    <li><a class="ho" href="news-event.php">News/events</a></li>
                    <li class="services"><a class="ho" href="About Us.php">About Us
                      <i class="fa-regular fa-caret-down"></i>
                    </a>
                      <ul id="submenu">
                        <li><a href="About Our school.php"> About Our School </a></li>
                        <li><a href="History.php"> History </a></li>
                        
                      </ul>
                    </li>
                    <li><a href="Contact Us.php"><button class="btn" style="border-radius: 15%;">Contact Us</button></a></li>
    
                </ul>
           </div>
        </nav>
    </div>

    
    <div class="aa">
        <h4>Our School Sport Details</h4>
    </div>

   
   <section class="section_container sport_container">
        <p class="section_subheader"></p>
        <h2 class="section_header">School Sports are </h2>
        <div class="sport_grid" id="sports-grid">
           
            
           
           
        </div>
    </section>
    

    <script src="https://unpkg.com/scrollreveal"></script>
    


    

    <script src="sports.js"></script>

    

    <footer class="footer">
  <div>
  <div>
      <img src="22.png" >
  </div>

  <div>
    <ul>
      <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
    </ul>
  </div>
  <div>
      <ul>
        <li><a href="Home.html" class="home">Home</a></li>
        <li><a href="Academcs.html" class="home">Academics</a></li>
        <li><a href="#" class="home">Privacy policy</a></li>
        <li><a href="About Us.html" class="home">About us</a></li>
        <li><a href="Contact Us.html" class="home">Contact</a></li>
      </ul>
  </div>
  <hr width="100%" size="4" color="black" noshade>
  <div>
      <p class="pp">&copy; Kanadarawa Central College</p>
  </div>
</div>
</footer>
    
</body>
</html>
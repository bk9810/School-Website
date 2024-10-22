<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanadarawa Central College</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="shortcut icon" href="2.png"/>
    <link rel="stylesheet" href="academic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
       body{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }
      .acad{
        padding-left: 150px;
        padding-right: 150px;
        margin-left: 100px;
        width: 1200px;
      }
      .sect{
        background-color: #001858;
        margin-top: 10px;
        border-radius: 60px;
      }
      .sect h6{
        color: gainsboro;
      }
      .se{
        margin-top: 0;
      }
      .jun{
        margin-top: 10px;
      }
      .ia h4{
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 60px;
        color: #001858;
      }
      /* Responsive Styles */
      @media (max-width: 1200px) {
    .lr, .di, .aca, .cas, .sp {
        flex-direction: column;
        text-align: center;
    }

    .lef, .rig {
        width: 100%;
        margin-bottom: 20px;
    }

    .rig {
        text-align: center;
    }
}

@media (max-width: 768px) {
    .lr, .di, .aca, .cas, .sp {
        padding: 10px;
    }

    .lef img, .rig img {
        width: 100%;
    }

    .conta div {
        flex: 1 1 100%;
        margin: 5px 0;
    }
}

@media (max-width: 480px) {
    .rig h2 {
        font-size: 1.5rem;
    }

    .wel h4 {
        font-size: 1.2rem;
    }

    .wel p {
        font-size: 0.9rem;
    }

    .di h2, .evs h2, .aca h3, .cas h3, .sp h3 {
        font-size: 1.2rem;
    }

    .di h4, .evs h4, .aca p, .cas p, .sp p {
        font-size: 0.8rem;
    }

    .btn {
        font-size: 0.8rem;
        padding: 5px 10px;
    }
}
    </style>
<body>
    <div>
        <nav class="nav" >
           <div>
            <a href="#" class="kan">
                <img src="2.png">
                
            </a>
           </div>
           
           <div>
                <ul class="ul">
                    <li><a class="ho" href="Home.php">Home</a></li>
                    <li><a class="ho" href="#">Academics</a></li>
                    <li class="services"><a class="ho"  href="#">Student Life
                      
                    </a>
                    <ul id="submenu">
                      <li><a href="ClubandScoiety.php"> Club and Scoiety </a></li>
                      <li><a href="Sports.php"> Sports </a></li>
                      
                    </ul>
                  </li>
                    <li><a class="ho" href="#">Gallery</a></li>
                    <li><a class="ho" href="news-event.php">News/events</a></li>
                    <li class="services"><a class="ho" href="About Us.html">About Us
                      
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

    <div class="spr">
      <div class="ia">
        <h4> Our School Academic </h4>
      </div>
      <div class="acad">
        <p>
          Our college's focus on academics is long-standing and all other priorities of our college, be it co-curricular or extra-curricular, are always developed to emphasize the academic experience of its students and focus on improving student performance. .
          Since our school's inception in 1905, the school has grown its student base from 30 to 3,200, with a marginal difference in enrollment each year. Each of these students is exposed to the best of the Sri Lankan education system with strong infrastructure, a conducive learning environment and an excellent administrative system that brings it all together.
          This section will explore the academic infrastructure of the college, the curriculum taught in various departments at different levels of admission, our faculty and the achievements of students who are products of this great educational institution.
        </p>
        
      </div>
      <div class="sect">
        <h6>
          There are only 2 sections that students study in our college. They are shown below.
        </h6>
        <div class="jun">
          <img src="ddd.jpg">
        <p>
          
          In the Junior Division of our College, we empower students to explore and expand their horizons, building on the foundation laid in the Primary Division. Our dynamic secondary education program focuses on academic rigor and character development and personal growth. With dedicated subject teachers and advanced resources, we meet individual learning needs, nurturing students to become critical thinkers, problem solvers and lifelong learners.
        </p>
        </div>
        
        <div class="se">
          <img  src="images.jpg">
          <p >
            In the Senior Division of our College, we embrace a culture of academic excellence and holistic preparation for the challenges beyond. As students approach their O/L and A/L exams, our dedicated faculty provides extensive support and guidance to develop self-discipline, time management and effective study habits. Our goal is to prepare students for higher education and future careers, empowering students to achieve their best potential.
          </p>
          
  
        </div>
      </div>
    </div>

    <div class="faculty">
      <img src="fghjk.jpg">
      <h5>Faculty</h5>
      <p>Our school's experienced teaching staff develops excellent education and perfect development for students. And with the highest level of academic qualifications and teaching experience, they impart knowledge with pedagogical sophistication, and as mentors they go beyond their role to serve as mentor role models. Their unwavering commitment to the pursuit of knowledge and nurturing of young minds ensures that our college maintains its position as an educational excellence.</p>
      <a class="fi" href="faculty.php">Read More</a>
    </div>

    <div class="admission">
      <h5>Admissions</h5>
      <p>
        Admission of new students to our college includes a very strict and specific set of rules that reflect the school's reputation and academic standards. A strict set of rules for admitting students, evaluation of character and in-depth assessment of extracurricular activities and achievement. Incoming students are required to demonstrate exceptional academic performance as well as demonstrate qualities consistent with the school's ethos, including integrity, leadership ability, and commitment to service in extracurricular activities. Those who make it through this rigorous selection process join a distinguished group of students, embarking on a journey marked by academic distinction and profound personal development.
      </p>
      <a  href="#">Read More</a>
    </div>

    <div class="curri">
      <img src="567.jpg">
      <h5>Curriculum</h5>
      <p>From the moment of admission to the moment of leaving school, our college takes a multifaceted approach to a student's learning and growth. Primary, Intermediate and Advanced sections are designed to provide the appropriate blend of challenging and stimulating experiences for the respective age groups. Whether following the national syllabus or imparting skills to students to succeed in competitive exams, creativity and inspiration are never forgotten.</p>
    </div>


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
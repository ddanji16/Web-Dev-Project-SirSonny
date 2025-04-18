<?php
session_start();




echo $_SESSION["name"] . "<br>";
echo $_SESSION["email"];


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Secure Disaster Preparedness Platform</title>
        <link rel="icon" href="./img/logo.jpg">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>


  <div class="logo2">
    <h2>CATBALOGAN CITY</h2>
    <img src="./img/logo.jpg" alt="">
  </div>

     





  <!-- NAVIGATION BAR -->
  <div id="mainContent">
    <!-- Header with Navigation -->
    <header>
      <div class="container">
        <div class="logo">
      
        </div>
        <nav>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#alerts">Real-Time Alerts</a></li>
            <li><a href="#preparedness">Preparedness Guidelines</a></li>
            <li><a href="#contacts">Emergency Contacts</a></li>
            <li><a href="#map">Map</a></li>
            <li><a href="logout.php">Log-out</a></li>
          </ul>
        </nav>
      </div>
    </header>




    <!-- Main Banner -->
    <section id="home" class="banner">
      <div class="container">
        <div class="banner-text">
          <h2>Disaster Preparedness and Response Platform for Catbalogan City</h2>
          <p>Stay informed and prepared for natural disasters. Real-time updates, resources, and emergency information for Catbalogan residents.</p>
          <a href="#alerts" class="cta-btn">Get Alerts Now</a>
        </div>
      </div>
    </section>








    <!-- About Us Section -->
    <section id="about">
      <div class="container">
        <h2>About Catbalogan City Disaster Preparedness Platform</h2>
        <div class="mission">
          <h1>Mission</h1>
          <p>To help and to provide real-time information, updates, and resources to help residents and authorities respond effectively to disasters.To assist and provide real-time information, timely updates, and essential resources that empower residents and authorities to respond efficiently and effectively to disasters. Through collaboration and innovation, our platform aims to enhance disaster readiness, minimize risks, and support recovery efforts for a safer and more resilient community.</p>
          <button type="button" onclick="document.getElementById('mission').innerHTML='To provide comprehensive real-time information, updates, and resources designed to empower residents and authorities in effectively responding to disasters. Our platform aims to be a readily accessible, reliable, and user-friendly solution that delivers critical resources, fosters collaboration, and facilitates efficient communication. By integrating advanced tools and community-driven initiatives, we strive to enhance disaster preparedness, response, and recovery efforts for all citizens and government agencies within Catbalogan City.'">More</button>
          <p id="mission"></p>
        </div>
        <div class="vision">
          <h1>Vision</h1>
          <p>A disaster-resilient Catbalogan where all residents are informed, prepared, and safe.A disaster-resilient Catbalogan where every resident is well-informed, actively prepared, and assured of their safety. We envision a community strengthened by proactive measures, innovative solutions, and a unified effort to mitigate the impacts of disasters while fostering a culture of resilience and readiness.</p>
        </div>
      </div>
    </section>







    <!-- Key Features -->
    <section id="features" class="features">
      <div class="container">
        <h1>UPDATES</h1>
        <div class="wrapper">
          <img src="./img/catba.jpg" alt="">
              <div class="text-box">
                  <h3>CATBALOGAN CITY </h3>
                      <p>Catbalogan city is located in samar province and 
                          most of the time we're having trouble in disaster, 
                          typhoon and etc..so this website can help and provide 
                          help, information and emergency response and contacts and updates
                      </p>
                </div>
            </div>
      

  
<div class="box-1">

        <div class="feature-item">
          <h3>Real-Time Alerts</h3>
          <p>Stay up-to-date with the latest disaster alerts (storms, floods, landslides).</p>
        </div>
        <div class="feature-item">
          <h3>Preparedness Guidelines</h3>
          <p>Learn how to prepare for emergencies with easy-to-follow steps.</p>
        </div>
        <div class="feature-item">
          <h3>Emergency Contacts</h3>
          <p>Quick access to local authorities, medical services, and shelters.</p>
        </div>
        <div class="feature-item">
          <h3>Interactive Map</h3>
          <p>Find affected areas, evacuation routes, and safe zones.</p>
        </div>
    </div>
      </div>
     
    </section>









    <!-- Real-Time Alerts Section -->
    <section id="alerts">
      <div class="container">
        <h2>Real-Time Disaster Alerts</h2>
        <div class="alert-info">
          <p><span class="alert-high">Storm Warning:</span> Catbalogan City - Expected heavy rainfall and flooding in the next 2 hours. Stay indoors and avoid low-lying areas.</p>
          <button onclick="alert('You will now receive real-time alerts!')">Get Alerted</button>
        </div>
      </div>
    </section>




    <!-- Preparedness Guidelines Section -->
    <section id="preparedness">
      <div class="container">
        <h2>Disaster Preparedness Guidelines</h2>
        <div>
          <h3>Before the Disaster</h3>
          <ul>
            <li>Secure your home</li>
            <li>Prepare emergency kits</li>
            <li>Have a communication plan</li>
          </ul>
        </div>
        <div>
          <h3>During the Disaster</h3>
          <ul>
            <li>Stay in safe zones</li>
            <li>Follow evacuation routes</li>
          </ul>
        </div>
        <div>
          <h3>After the Disaster</h3>
          <ul>
            <li>Check for injuries</li>
            <li>Assess damage</li>
          </ul>
        </div>
      </div>
    </section>











    <!-- Emergency Contacts Section -->
    <section id="contacts">
   <div class="container">
    <h1>Emergency Contacts and Services</h1>
        <div class="box">

              <div class="CDRRMO">
                <h2><a href="https://www.facebook.com/profile.php?id=100064719877465" target="_blank">CDRRMO</a></h2>
                <h3>0935-713-5886</h3>
                <img src="./img/CDRRMO.jpg" alt="CDRRMO">
                <p>RISK REDUCTION MANAGEMENT OFFICE</p>
              </div>


              <div class="PNP">
                <h2><a href="https://www.facebook.com/p/Catbalogan-Pulis-100064713818911/" target="_blank">PNP</a></h2>
                <h3>0905-310-7114</h3>
                <img src="./img/PNP.jpg" alt="PNP">
                <p>CATBALOGAN CITY POLICE</p>
              </div>


              <div class="CWD">
                <h2><a href="https://www.facebook.com/p/Catbalogan-Pulis-100064713818911/" target="_blank">CWD</a></h2>
                <h3>0917-707-2643</h3>
                <img src="./img/CWD.jpg" alt="CWD">
                <p>CATBALOGAN WATER DISTRICT</p>
              </div>
       </div>

       <br><br><br>

           <div class="box-2">

            <div class="BFP">
              <h2><a href="https://www.facebook.com/p/Catbalogan-Pulis-100064713818911/" target="_blank">BFP</a></h2>
              <h3>0995-532-2202</h3>
              <img src="./img/BFP.jpg" alt="BFP">
              <p>BUREAU OF FIRE PROTECTION</p>
             </div> 

          

              <div class="BFP">
                <h2><a href="https://www.facebook.com/p/Catbalogan-Pulis-100064713818911/" target="_blank">CSWDO</a></h2>
                <h3>0935-713-5886</h3>
                <img src="./img/CSWDO.jpg" alt="BFP">
                <p>CITY SOCIAL WELFARE & DEVELOPMENT OFFICE</p>
               </div>

               <div class="BFP">
                <h2><a href="https://www.facebook.com/p/Catbalogan-Pulis-100064713818911/" target="_blank">SAMELCO II</a></h2>
                <h3>0935-713-5886</h3>
                <img src="./img/SAMELCO2.jpg" alt="BFP">
                <p>CATBALOGAN SAMELCO II</p>
               </div>

              
           </div>

      </div>
    </section>














    <!-- Map Section -->
    <section id="map">
      <div class="container">
        <h2>Disaster Map and Evacuation Routes</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124976.85176136269!2d124.73279980924022!3d11.798344240803774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x330834d7864d55d7%3A0xcbc9fd0999445956!2sCatbalogan%20City%2C%20Samar!5e0!3m2!1sen!2sph!4v1733300677155!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>© 2024 Catbalogan City Disaster Preparedness</p>
      </div>
    </footer>
  </div>















  
       </body>
     <script src="script.js"></script>
</html>
<?php
session_start();


/*
echo $_SESSION['name'];
echo $_SESSION['email'];
*/

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
            <li><a href="#preparedness">Preparedness Guidelines</a></li>
            <li><a href="#contacts">Contacts</a></li>
            <li><a href="#map">Map</a></li>
            <li><a href="sample.php">Notification</a></li>
            <li><a href="adminFolder/admin.php">Dashboard</a></li>
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
         <button popovertarget="popup">More</button>

         <div id="popup" popover>
         <p>To provide comprehensive real-time information, updates, and resources designed to empower residents and authorities in effectively responding to disasters. Our platform aims to be a readily accessible, reliable, and user-friendly solution that delivers critical resources, fosters collaboration, and facilitates efficient communication. By integrating advanced tools and community-driven initiatives, we strive to enhance disaster preparedness, response, and recovery efforts for all citizens and government agencies within Catbalogan City.</p>
      
         </div>
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
                <h2><a href="https://www.facebook.com/profile.php?id=100064719877465" target="_blank">CDRRMO</h2>
                <h3>0935-713-5886</h3>
                <img src="./img/CDRRMO.jpg" alt="CDRRMO">
                <p>RISK REDUCTION MANAGEMENT OFFICE</p>
                </a>
              </div>


              <div class="PNP">
                <h2><a href="https://www.facebook.com/p/Catbalogan-Pulis-100064713818911/" target="_blank">PNP</h2>
                <h3>0905-310-7114</h3>
                <img src="./img/PNP.jpg" alt="PNP">
                <p>CATBALOGAN CITY POLICE</p>
                </a>
              </div>


              <div class="CWD">
                <h2><a href="https://www.facebook.com/p/Catbalogan-Pulis-100064713818911/" target="_blank">CWD</h2>
                <h3>0917-707-2643</h3>
                <img src="./img/CWD.jpg" alt="CWD">
                <p>CATBALOGAN WATER DISTRICT</p>
                </a>
              </div>
       </div>

       <br><br><br>

           <div class="box-2">

            <div class="BFP">
              <h2><a href="https://www.facebook.com/p/Catbalogan-Pulis-100064713818911/" target="_blank">BFP</h2>
              <h3>0995-532-2202</h3>
              <img src="./img/BFP.jpg" alt="BFP">
              <p>BUREAU OF FIRE PROTECTION</p>
              </a>
             </div> 

          

          <div class="BFP">
                <h2><a href="https://www.facebook.com/p/Catbalogan-Pulis-100064713818911/" target="_blank">CSWDO</h2>
                <h3>0935-713-5886</h3>
                <img src="./img/CSWDO.jpg" alt="BFP">
                <p>SOCIAL WELFARE & DEVELOPMENT OFFICE</p>
                </a>
               </div>

               <div class="BFP">
                <h2><a href="https://www.facebook.com/p/Catbalogan-Pulis-100064713818911/" target="_blank">SAMELCO II</h2>
                <h3>0935-713-5886</h3>
                <img src="./img/SAMELCO2.jpg" alt="BFP">
                <p>CATBALOGAN SAMELCO II</p>
                </a>
               </div>

              
           </div>

      </div>
    </section>














    <!-- Map Section -->
    <section id="map">
    <div class="container">
        <h2>Disaster Map and Evacuation Routes</h2>
        <div id="map-container" class="map-container" style="height: 400px;"></div>
        <div id="legend" class="map-legend">
            <h3>Legend</h3>
            <ul>
                <li onclick="toggleMarkers('flood')"><span style="background:blue;"></span> Flood-prone Areas</li>
                <li onclick="toggleMarkers('earthquake')"><span style="background:red;"></span> Earthquake Zones</li>
                <li onclick="toggleMarkers('evacuation')"><span style="background:green;"></span> Evacuation Centers</li>
            </ul>
        </div>
    </div>
</section>

<!-- Include Leaflet JS & CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<style>
    .map-legend {
        background: white;
        padding: 10px;
        border-radius: 5px;
        margin-top: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        text-align: center;
    }
    .map-legend ul {
        list-style: none;
        padding: 0;
    }
    .map-legend li {
        cursor: pointer;
        margin: 5px 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .map-legend li span {
        display: inline-block;
        width: 15px;
        height: 15px;
        margin-right: 8px;
        border-radius: 50%;
    }
</style>

<script>
    var map = L.map('map-container', {
        center: [11.7753, 124.8866],
        zoom: 13,
        maxBounds: [[11.76, 124.87], [11.79, 124.90]], // Restrict map bounds to Catbalogan City
        maxBoundsViscosity: 1.0
    });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Disaster Markers
    var markers = {
        flood: [
            L.marker([11.777, 124.8886], {icon: L.divIcon({className: 'flood-marker', html: '<div style="background: blue; width: 15px; height: 15px; border-radius: 50%;"></div>'})}).bindPopup("Flood-prone Area 1"),
            L.marker([11.780, 124.8856], {icon: L.divIcon({className: 'flood-marker', html: '<div style="background: blue; width: 15px; height: 15px; border-radius: 50%;"></div>'})}).bindPopup("Flood-prone Area 2")
        ],
        earthquake: [
            L.marker([11.773, 124.8836], {icon: L.divIcon({className: 'earthquake-marker', html: '<div style="background: red; width: 15px; height: 15px; border-radius: 50%;"></div>'})}).bindPopup("Earthquake Zone 1"),
            L.marker([11.779, 124.8890], {icon: L.divIcon({className: 'earthquake-marker', html: '<div style="background: red; width: 15px; height: 15px; border-radius: 50%;"></div>'})}).bindPopup("Earthquake Zone 2")
        ],
        evacuation: [
            L.marker([11.774, 124.8840], {icon: L.divIcon({className: 'evacuation-marker', html: '<div style="background: green; width: 15px; height: 15px; border-radius: 50%;"></div>'})}).bindPopup("Evacuation Center 1"),
            L.marker([11.776, 124.8860], {icon: L.divIcon({className: 'evacuation-marker', html: '<div style="background: green; width: 15px; height: 15px; border-radius: 50%;"></div>'})}).bindPopup("Evacuation Center 2")
        ]
    };

    // Add markers to map initially
    Object.values(markers).forEach(markerGroup => {
        markerGroup.forEach(marker => marker.addTo(map));
    });

    // Toggle markers on map
    function toggleMarkers(type) {
        markers[type].forEach(marker => {
            if (map.hasLayer(marker)) {
                map.removeLayer(marker);
            } else {
                marker.addTo(map);
            }
        });
    }
</script>
</html>
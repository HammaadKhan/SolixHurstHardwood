<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
   
<style>
    .vertical-line {
    margin-left: 5px;
    margin-right: 0px; /* Set margin-right to 0px to remove space between links */
    color: black;
}
body {
            overflow-x: hidden; /* Hide horizontal scrollbar */
            overflow-y: auto; /* Enable vertical scrollbar when needed */
        }
        #footerMain {

  bottom: 0;
  left: 0;
  width: 100%;
  background-color: #f8f8f8; /* Change this to your desired background color */
  padding: 20px; /* Adjust as needed */
  box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1); /* Optional: add a shadow for separation */
}


</style>

<head>
    <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

    <!-- Other meta tags and stylesheets -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Include Bootstrap CSS -->
    <link href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-D/y8BABzP9zUKtGOc3BnvFZsbU7U4poXKtkYGRtHP5VY+Sc6J48C2RPKxc0r5ijG" crossorigin="anonymous">

<!-- Bootstrap JS (jQuery must be included before Bootstrap JS) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <footer id="footerMain">
      
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <!-- Row div -->
                <div class="row">
                  <!-- First column -->
                  <div class="col-md-3">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                  </div>
                  <!-- Second column -->
                  <div class="col-md-3">
                    <div style="font-size: 18px; font-weight: bold;">HURST HARDWOODS</div>
                    <!-- Description -->
                    <p>Reliable shipping from multiple locations to all 50 states, Canada, and surrounding countries.</p>
                    <!-- Business Hours -->
                    <p>Business Hours:</p> <span style="font-size: 12px; font-weight: bold;">Mon-Fri 8-5:30 PM</span>, <span style="font-size: 10px; font-weight: bold;">Sat 9-1 PM (EST)</span>
                  </div>
                  <!-- Third column -->
                  <div class="col-md-2">
                    <div style="font-size: 18px; font-weight: bold;">SHOP NOW</div>
                    <!-- List of items -->
                    <ul style="list-style: none; padding: 0; margin: 0;">
                      <li style="font-size: 12px;">Contractor Specials</li>
                      <li style="font-size: 12px;">Unfinished Hardwood</li>
                      <li style="font-size: 12px;">Prefinished Hardwood</li>
                      <li style="font-size: 12px;">Hardwood Brands</li>
                      <li style="font-size: 12px;">Vinyl & Laminate</li>
                      <li style="font-size: 12px;">Stair Treads & Risers</li>
                    </ul>
                  
                  </div>
                  <!-- Fourth column -->
                  <div class="col-md-2">
                    <div style="font-size: 18px; font-weight: bold;">TIPS & TOOLS</div>
                    <!-- List of items -->
                    <ul style="list-style: none; padding: 0; margin: 0;">

                      <li style="font-size: 12px;">How to Measure</li>
                      <li style="font-size: 12px;"> Hardness Chart</li>
                      <li style="font-size: 12px;">Flooring Grades</li>
                      <li style="font-size: 12px;"> Edge Styles</li>
                      <li style="font-size: 12px;">Moisture Control</li>
                      <li style="font-size: 12px;">Floor Care</li>
                      <li style="font-size: 12px;">Rift & Quartered</li>
                    </ul>
                  
                  </div>
                  <!-- Fifth column -->
                  <div class="col-md-2">
                    
                 
                  
                
                  
                    <div style="font-size: 18px; font-weight: bold;">CONTACT US</div>
                    <div style="font-size: 18px; font-weight: bold;">NEED A QUOTE</div>
                    <div style="font-size: 18px; font-weight: bold;">ABOUT US</div>
                    <div style="font-size: 18px; font-weight: bold;">TERMS & POLICIES</div>
                    <div style="font-size: 18px; font-weight: bold;">FINANCING</div>
                    <div style="font-size: 18px; font-weight: bold; padding-top: 10px;"> Follow Us</div>
                  </div>
                </div>
              </div>
            
        <div style="border-top: 1px solid #ccc; padding-top: 10px; text-align: center;">

            <p>&copy;2024 Hurst Hardwoods. All Rights Reserved | <a href="sitemap.html" style="color: black;">Site Map</a></p>
          </div>
    </footer>
    
</body>
</html>

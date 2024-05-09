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
        header {
    background-color: #F7F7F7;
    padding-bottom: 20px;
  
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
    <header id="headerMain" class="siteHeader clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <a class="sitelogo" href="/">
                        <img class="desktop" alt="Hurst Hardwoods" src="/cms/images/logo.png">
                        <img class="mobile" alt="Hurst Hardwoods" src="/cms/images/logo-mobile.png">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="row"style="margin-top: 10px;">
                        <div class="headerBusiness">
                            <i class="fa fa-phone" style="color: #008BAE; font-size: 25px; margin-right: 5px;"></i> <!-- Font Awesome phone icon with blue color and larger font size -->
                            <a class="hdrPhonenum" style="font-weight: bold; color: black; font-size: 18px; margin-right: 10px;">(888) 704-8778</a> <!-- Phone number with bold style, blue color, and larger font size -->
                             <!-- Inline styling for bold phone number -->
                            <span class="businessHours" style="color: gray; font-size: 12px; margin-right: 200px;">MON-FRI 8-5:30 PM (EST)</span> <!-- Inline styling for font size -->
                        </div>
                        
                        <div>
                        <span id="AnonymousView">
                            <a class="login" style=" color: black; font-size: 16px; margin-right: 10px;">LOGIN</a>
                            <a class="register" style=" color: black; font-size: 16px; margin-right: 80px;">REGISTER</a>
                        </span>
                   
                    </div>
                    <div> 
                    <a class="cartLink">
                        <i class="fa fa-shopping-cart" style="color: #008BAE; font-size: 25px; margin-right: 5px;"></i> 
                      
                        <span class="cartTxt" style=" color: black; font-size: 14px; margin-right: 20px;">VIEW CART</span>
                    </a>
                </div>
            </div>
            <div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="I am searching for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" style="background-color: #008BAE; color: white;" type="button"><i class="fa fa-search"></i></button>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 customer-service"style="font-weight: bold; color: black; font-size: 16px;">Tips and Tools <i class="fa fa-chevron-down"></i></div>
               
                    <div class="col-md-3 customer-service"style="font-weight: bold; color: black; font-size: 16px; ">
                        Customer Service  <i class="fa fa-chevron-down"></i>
                        
                    </div>
                    
                </div>
          
              
                        
                <div class="row col-md-12" style="margin-top: 10px; margin-left: 60%;">
                   
                    <div style="color: black; font-size: 14px; margin-right: 10px;">
                        <a href="#" style="color: black; font-size: 14px;">Contact Us</a><span class="vertical-line">|</span>
                    </div>
                    <div style="color: black; font-size: 14px; margin-right: 10px;">
                        <a href="#" style="color: black; font-size: 14px;">About Us</a><span class="vertical-line">|</span>
                    </div>
                    <div style="color: black; font-size: 14px; margin-right: 10px;">
                        <a href="#" style="color: black; font-size: 14px;">Refer a Friend</a><span class="vertical-line">|</span>
                    </div>
                    <div style="color: black; font-size: 14px; margin-right: 10px;">
                        <a href="#" style="color: black; font-size: 14px;">Financing</a>
                    </div>
                </div>
                
                
                   
                    </div>
                  
                  
                </div>
            </div>
        </div>
    </header>
    
</body>
</html>

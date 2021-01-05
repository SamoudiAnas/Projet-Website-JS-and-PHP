<?php include 'sendApplication.php'; ?>
    









<html lang="en">
    
    
<head>
    <meta charset="utf-8">
    
    <title>My Portfolio</title>
    
    <!--    GOOGLE FONTS     -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Hammersmith+One&family=Open+Sans:ital,wght@0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <nav>
            
            <img class="logo "src="images/logo.png" alt="logo" />
            
            <div class="nav-bar">
                <a href="index.html">Home</a>
                <a href="#">Skills</a>
                <a href="portfolio.html">Portfolio</a>
                <a href="contact.php">Contact</a>
            
                <div class="menu-icon" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            
            
            </div>
        </nav>
        <section>
            
                
                
                <div class="hero">
                    
<!--                    hero image                      -->
                    <img src="images/appImage.jpg" alt="cityImage">
                    
                    
                    
                    
                    <div class="headline3 headline">
                        
                            <h3 class="contact-me">Send a project request</h3>
                        
                            <h1 >
                                Tell me about your project        details
                                <br>
                                
                                This is important to both of us
                            </h1>
                    
                    </div>   
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class="app-form-background-1">
                        </div>
                    
                    <div class="app-form-1">
                       <form action="" method="POST">
    
      <div class="input-block">
        <br><label for="">Company Name</label><br>
        <input type="text" class="form-control" name="company-Name">
      </div>
      <div class="input-block">
        <br><label for="">Business Type</label><br>
        <input type="text" class="form-control" name="company-Type">
      </div>
    <div class="input-block">
        <br><label for="">Business Email</label><br>
        <input type="text" class="form-control" name="company-email">
      </div>                    
      <div class="input-block">
        <br><label for="">What is Your Project About?</label><br>
        <input type="text" class="form-control" name="p-subject">
      </div>
      
    
  </form> 
                    </div>
                    
                    
                    
                    <div class="app-form-background-2">
                        </div>
                    
                    <div class="app-form2">
                       <form action="" method="POST">
    
      <div class="input-block">
        <br><label for="">Project Name</label><br>
        <input type="text" class="form-control" name="p-name">
      </div>
      <div class="input-block">
        <br><label for="">Project Type</label><br>
        <input type="text" class="form-control" name="p-type" placeholder="Logo design / Web development">
      </div>
    <div class="input-block">
        <br><label for="">Project Budget</label><br>
        <input type="text" class="form-control" name="p-budget"> 
      </div>                    
      
      <div class="input-block textarea">
        <br><label for="">Please describe freely what you want </label><br>
        <textarea rows="8" type="text" class="form-control" name="p-description"></textarea>
      </div>
        
      <br><button class="square-button">Send</button>
            
            
            
                         
  </form> 
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

                    
                </div>
                
           
        </section>
    
    </header>
    
    <div class="slider"></div>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
    <script src="app.js"></script>
</body>
    
    
    
    
</html>
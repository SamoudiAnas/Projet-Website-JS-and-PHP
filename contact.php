<?php include 'sendEmail.php'; ?>








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
                    
                        <img src="images/discussion.jpg" alt="discussion">
                        <div class="headline headline2">
                            <h3 class="contact-me">Contact me!</h3>
                            <h1 >Send me a message about your questions and interest  </h1>
                    
                        </div>
                    
                    
                <div class="contact-form2">
                                        </div>

                    <div class="form">
                       <form action="contact.php" method="post">
    
      <div class="input-block">
        <br><label for="">First Name</label><br>
        <input type="text" class="form-control" name="first-name">
      </div>
      <div class="input-block">
        <br><label for="">Last Name</label><br>
        <input type="text" class="form-control" name="last-name">
      </div>
    <div class="input-block">
        <br><label for="">Email</label><br>
        <input type="text" class="form-control" name="email">
      </div>                    
      <div class="input-block">
        <br><label for="">Message Subject</label><br>
        <input type="text" class="form-control" name="subject">
      </div>
      <div class="input-block textarea">
        <br><label for="">Drop your message here</label><br>
        <textarea rows="3" type="text" class="form-control" name="message"></textarea>
      </div>
    <div>
      <br><button class="square-button" name="send">Send</button>
        <a href="application.php" class="request">Send a Project Request</a>
                           </div>
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
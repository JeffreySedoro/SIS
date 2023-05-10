<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Information System</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/homepage.css">

</head>
<body>
    <div class="toggle">&times;</div>
    <nav id="nav">
    <ul class="left-ul">
  <li>
    <a href="index.php" class="logo-container">
      <img src="./assets/img/Logo2.png" alt="logo2">
      <span><b>Student Information System</b></span>
    </a>
  </li>
</ul>
<ul class="right-ul">
  <li>
<div>
    </a><button onclick="window.location.href='login.php'">Login</button>
  </div>
  </li>
  <li>
    <div>
    <button onclick="window.location.href='register.php'">Register</button>
</div>
</li>
</ul>
    </nav>
    <!-- Close nav -->
    <header id="banner">
        <div class="banner-text">
            <h1>Student Information System</h1>
            <p>Who cater students with their  enrollment application </p>
            <div class="banner-btn">
                <a href="" class="btn btn-default">Read more &rarr;</a>
            </div>
        </div>
    </header>
    
    <section id="aim">
        <div class="container">
            <h1 class="aimHeading">
                Our Aims
            </h1>
            <p class="aimp">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolorum, consequatur ducimus consectetur laborum aliquid reiciendis nulla non ex corporis eveniet voluptatum vitae ipsum eos omnis corrupti aliquam officia quidem.
            </p>
            <div class="aimbtn">
                <a href="" class="btn btn-default">Start now &rarr;</a>
            </div>
        </div>
    </section>
    <!-- Close aim -->

    <section id="intro">
            <div class="row">
                <div class="col-6">
                 <div class="introImage">
                     <img src="assets/images/owner.jpeg" alt="">
                 </div>
                </div>
                <div class="col-6">
                    <div class="intro">
                 <h3 class="ownerName">Shakil Khan</h3>
                 <strong>Full Stack Developer</strong>
                <p class="ownerIntro">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque commodi perferendis voluptates id consectetur saepe reprehenderit, eos dolore! Unde debitis odit amet voluptatum eius libero ad nobis, animi ipsum nostrum?
                </p>
                </div>
            </div>
            </div>
 
    </section>

    <section id="services">
        <div class="container">
            <div class="servicesHeader">
                <h2>Services</h2>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="service-icon">
                       <i class="fab fa-adobe"></i>
                    </div>
                    <div class="serviceheader">
                      <h3>Ready to ship</h3>
                    </div>
                    <div class="serivesText">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos molestias nesciunt quis provident
                    </div>
                </div>

                <div class="col-3">
                        <div class="service-icon">
                           <i class="fab fa-audible"></i>
                        </div>
                        <div class="serviceheader">
                          <h3>Sturday templates</h3>
                        </div>
                        <div class="serivesText">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos molestias nesciunt quis provident
                        </div>
                    </div>

                    <div class="col-3">
                            <div class="service-icon">
                               <i class="fab fa-app-store"></i>
                            </div>
                            <div class="serviceheader">
                              <h3>Up to date</h3>
                            </div>
                            <div class="serivesText">
                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos molestias nesciunt quis provident
                            </div>
                        </div>

                        <div class="col-3">
                                <div class="service-icon">
                                   <i class="far fa-heart"></i>
                                </div>
                                <div class="serviceheader">
                                  <h3>Made with love</h3>
                                </div>
                                <div class="serivesText">
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos molestias nesciunt quis provident
                                </div>
                            </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="contact-header">
                        <h3>Contact us</h3>
                        <p>If you have any issue please feel free you can contact us!</p>
                    </div>
                </div>
                <div class="col-6">
                    <form action="">
                        <div class="group">
                            <input type="text" class="control" placeholder="Enter name">
                        </div>
                        <div class="group">
                                <input type="email" class="control" placeholder="Enter email">
                            </div>
                            <div class="group">
                               <textarea name="" class="control" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="group">
                                    <input type="submit" value="Send &rarr;" class="btn btn-default">
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script>
    
     let btn = document.querySelector(".toggle");
         btn.addEventListener("click", function(){
             let righttUl = document.querySelector(".right-ul");
             if(righttUl.style.display === "none"){
                 righttUl.style.display = "block";
             } else {
                righttUl.style.display = "none";
             }
         })

    </script>
  <footer id="footer" class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p>&copy; Copyright 
          <strong><span>BukSU Main</span></strong>. All Rights Reserved
        </p>
      </div>
      <div class="col-md-6">
        <p class="credits">Designed by 
          <a href="">Troubleshooters</a>
        </p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
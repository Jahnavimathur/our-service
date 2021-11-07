<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <header>
        <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Our Services</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#scrollspyHeading1">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading2">About Us</a>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#scrollspyHeading2.1">Web Development</a></li>
                      <li><a class="dropdown-item" href="#scrollspyHeading2.2">App Development</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#scrollspyHeading2.3">Content Writing</a></li>
                      <li><a class="dropdown-item" href="#scrollspyHeading2.4">Technical Writing</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading3">Blog</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading4">Contact Us</a>
                  </li>
                </ul>
                <div class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
                <ul class="navbar-nav  mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading6">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading6">Sign Up</a>
                  </li>
                </ul>
                
              </div>
            </div>
          </nav>
    </header>
  <main>

           

        <section>
           <div class="hero">
            <img src="images/background.jpg" alt="">
            <h1 class="headline">Our Services</h1>
           </div> 
        </section>

        <div class="slider"></div>
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">

          <div id="scrollspyHeading1"></div>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/slider 1.jpg" alt="">    
                <div class="container">
                  <div class="carousel-caption text-start">
                    <h1>Example headline.</h1>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
              <img src="images/slider 2.jpg" alt="">  

                <div class="container">
                  <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
              <img src="images/slider 3.jpg" alt="">     

                <div class="container">
                  <div class="carousel-caption text-end">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                  </div>
                </div>
              </div>
            </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
      

            <br><br>
        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
      
      <div class="container marketing">
      
          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-lg-4">
              <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      
              <h2>Heading</h2>
              <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
              <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      
              <h2>Heading</h2>
              <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
              <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
      
              <h2>Heading</h2>
              <p>And lastly this, the third column of representative placeholder content.</p>
              <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        
      
          <!-- START THE FEATURETTES -->
      
          <hr class="featurette-divider">
          <div id="scrollspyHeading2"><center><h1>About Us</h1></center></div>
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
              <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class="col-md-5">
            <img src="images/png image 1.png" alt="">    
    
            </div>
          </div>
      
          <hr class="featurette-divider">
      
          <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
              <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
            <img src="images/png image 2.png" alt="">    
      
            </div>
          </div>
      
          <hr class="featurette-divider">
      
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
              <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
            <img src="images/png image 3.png" alt="">    
      
            </div>
          </div>
      
    
          <hr class="featurette-divider">
      
          <!-- /END THE FEATURETTES -->
      
      </div><!-- /.container -->
        <div id="scrollspyHeading2.1"></div>
          <div class="web-development">
            <div class="webdevelopment">
              <h2 id="web-development">WEB DEVELOPMENT</h2>
                <p>Web development services are used to design, build, support, and evolve all types of web-based software. With 22 years in web development, ScienceSoft delivers intuitive and fast websites, web portals, and other web solutions that bring about digital transformation and enhance business workflows.</p><br>
                <p>Our website developers provide expert web application development and web design services to our clients. Appnovation offers a variety of website design and development services, from creating mobile web development solutions and responsive website designs, to building custom e-commerce and intranet experiences using the latest and proven web technologies. With up to 85% of consumers visiting company’s or service provider’s website before making a purchase, more and more consumers make decisions based on their online experience: the appearance, usability and accessibility of your website is more important than ever, especially in an increasingly competitive market.</p><br>
                <p>We are a top-notch web design and development company in India that can help you define your brand and increase your products/ or services demand through a customer-centric and data-driven approach. We understand the importance of having an engaging website in today’s digital era and make sure to incorporate all digital marketing aspects like SEO, PPC, content marketing, and more to yield outstanding results.</p>
            </div>
          </div>

        <div id="scrollspyHeading2.2"></div>
          <div class="app-development">
            <div class="appdevelopment">
              <h2 id="app-development">App Development</h2>
                <p>We offer a full cycle of application design, integration and management services. Whether it is a consumer oriented app or a transformative enterprise-class solution, the company leads the entire mobile app development process from ideation and concept to delivery, and to ongoing ongoing support.</p><br>
                <p>Delight your users with expressive and feature-rich native iOS / Android, cross-platform or Progressive Web Apps leveraging our extensive experience of working with all major technologies. Build Progressive Web Apps that combine the best technical solutions applied in mobile and web applications beneficial in terms of the ease of development and distribution, as well as a number of other advantages for your business.</p><br>
                <p>Use AI-based algorithms like a machine and deep learning to automate any operation, gain insights from Big Data, ensure fail-safe decisions of your employees, and more. Join an incredible record of organizations, from startups to Fortune 1000, who trust our mobile application development services.</p><br>
                <p>Our team of mobile app developers is capable of creating apps for multiple-platforms like iOS, Android and cross-platform solutions in Flutter, React Native & Ionic. Being one of the top-rated mobile application development companies in USA and India, we have expertise in developing mobile app development solutions to meet your business requirements.</p>
            </div>
          </div>


        <div id="scrollspyHeading2.3"></div>
        <div class="content-writing">
          <div class="contentwriting">
          <h2 id="content-writing">Content Writing</h2>
              <p>Content marketing is clearly a highly important part of any online strategy. That's why with Thrive, you'll get content that's optimized for search engines and your website visitors.

              Need to write content for your website and meet deadlines? Delegate those tasks to the Thrive content team instead.

                Optimized websites need quality content
                Effective websites require quality content to best represent their brand or services. If you want your website to achieve your sales goals, it must contain search engine optimized, descriptive, original, understandable content. At Thrive, we confidently offer our clients a content writing services that meets the high standards that a professional, high-quality website requires.</p><br>
                  <ul>
                    <li>We are a professional, personable web marketing service, and we will take the time to work closely with you on how best to communicate your site’s purpose.</li>
                    <li>We will thoroughly research your website’s brand, services, purpose, and audience to tailor content that efficiently and dynamically tells your story.</li>
                    <li>We will review your competitors, analyzing their weaknesses and adjusting your content to benefit from our findings.</li>
                    <li>We will identify the best keywords and phrases that will attract traffic to your site and encourage visitor-to-client conversion.</li>
                    <li>As an experienced SEO company, we possess excellent search engine optimization skills and will apply our expertise while writing your website’s content.</li>
                    <li>We understand how search engines work, and are constantly updating our methods to match each new update that search engines roll out.</li>
                    <li>We enjoy the process of writing and its practical application on websites, and our content quality reflects that commitment and desire for excellence.</li>
                    <li>We save our clients time, producing web page and blog content at an efficient pace.</li>
                  </ul>
          </div>
        </div>


        <div id="scrollspyHeading2.4"></div>
          <div class="technical-writing">
            <div class="technicalwriting">
            <h2 id="technical-writing">Technical Writing</h2>
              <p>If you are looking for expert technical writing services, you have found the right outsourcing partner. We are one of India’s leading providers of technical documentation services. Writing technical papers requires expertise at understanding technical information and presenting it in an easy to understand manner. At Outsource2india, we have a 150+ team of technical writers who have extensive experience in developing different types of technical content.</p><br>

              <p>Whether you require online help, software documentation or product specifications, our team of technical writers can provide you with accurate technical content. Choose Outsource2india as your technical documentation partner and get access to cost-effective services with consistent quality. You can be assured that we will deliver flawlessly crafted technical documents, well ahead of your deadline.
              <p>Our quality assurance team is unequalled in software bugs search in all parts and aspects of a software product. We track defects everywhere: in functionality, usability, performance, security, user interface, back-end and front-end.</p><br>

                  No error can hide from TestMatick software testing company. Join hundreds of our customers and be sure in quality of your application.</p>
            </div>
          </div>



        <h1 id="scrollspyHeading3"><center>Blog</center></h1><br>
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="card-group">
              <div class="card">
                <img src="images/card 1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
          </div>
    
      
          <div class="col">
            <div class="card">
              <img src="images/card 2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/card 3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/card 4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        
            
         



    <div class="align-item">        
      <div class="wrapper">
      <div id="scrollspyHeading6"></div>
              <div class="title-text">
                  <div class="title login">
                    Login Form
                  </div>
                  <div class="title signup">
                    Signup Form
                  </div>
              </div>
              <div class="form-container">
                  <div class="slide-controls">
                    <input type="radio" name="slide" id="login" checked>
                    <input type="radio" name="slide" id="signup">
                    <label for="login" class="slide login">Login</label>
                    <label for="signup" class="slide signup">Signup</label>
                    <div class="slider-tab"></div>
                  </div>
                  <div class="form-inner">
                
                    <form action="#" class="login">
                        <div class="field">
                          <input type="text" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                          <input type="password" placeholder="Password" required>
                        </div>
                        <div class="pass-link">
                          <a href="#">Forgot password?</a>
                        </div>
                        <div class="field btn">
                          <div class="btn-layer"></div>
                          <input type="submit" value="Login">
                        </div>
                        <div class="signup-link">
                          Not a member? <a href="">Signup now</a>
                        </div>
                    </form>
                
                    <form action="#" class="signup">
                        <div class="field">
                          <input type="text" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                          <input type="password" placeholder="Password" required>
                        </div>
                        <div class="field">
                          <input type="password" placeholder="Confirm password" required>
                        </div>
                        <div class="field btn">
                          <div class="btn-layer"></div>
                          <input type="submit" value="Signup">
                        </div>
                    </form>
                  </div>
              </div>
            </div>
      </div>
      <div class="social-media">
        <h2>Connect With us!</h2><br><br><br>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
          <a href="#" class="fa fa-instagram"></a>
      </div>
    </div>
    <br>

  </main>
  <footer class="footer mt-auto py-4 bg-dark">

      <h2 id="scrollspyHeading4">Contact Us</h2>
      <div id="footer">
          <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">BLUE CORONA CORPORATE OFFICE:</h5>
              <p class="card-text">7595 Rickenbacker Drive
              <br>Gaithersburg, MD 20879
              <br>Phone: 800-731-4197</p>
              
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">NORTH CAROLINA OFFICE:</h5>
              <p class="card-text">1401 Central Ave, Suite 200-F
              <br>Charlotte, NC 28205
              <br>Phone: 800-731-4197</p>
              
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">OFFICE HOURS: 8:30 AM – 5:30 PM, MONDAY – FRIDAY</h5>
              <p class="card-text">Any query?
                <br>Just call US!
              </p>
              
            </div>
          </div>
        </div>
            </div>
      </div>
            </div>
              <div class="container">
                <span class="text-muted">&copy; Copyright 2021</span>
              </div>
  </footer>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" integrity="sha512-8Wy4KH0O+AuzjMm1w5QfZ5j5/y8Q/kcUktK9mPUVaUoBvh3QPUZB822W/vy7ULqri3yR8daH3F58+Y8Z08qzeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js" integrity="sha512-lJDBw/vKlGO8aIZB8/6CY4lV+EMAL3qzViHid6wXjH/uDrqUl+uvfCROHXAEL0T/bgdAQHSuE68vRlcFHUdrUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    


    <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });




//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

    </script>

</body>
</html>
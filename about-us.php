<?php
    $title = "About Us | Innovatech";                   
    include "header.php";                 
?>
    <section class="video-background">
        <div class="container">
            <div class="video-container>">
                <video autoplay muted loop id="video-background">
                <source src="Video/gradient.bg.mp4" type="video/mp4">
            </div>
        </div>
        <div class="hero-text">
            <h1>About Us</h1>
            <div class="hero-btn">
                <button id="getstarted" onclick="location.href = '#about-content';">EXPLORE</button>
            </div>
        </div>
    </section>
    <section class="carousel-slide">
        <div>
              <div id="carouselExampleCaptions" class="carousel slide" >
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active c-item">
                    <img src="Images/asian-team-ux-developer-and-ui-designer-brainstorm-2023-06-30-21-01-42-utc.jpg" class="d-block w-100 c-image" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <!-- <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p> -->
                    </div>
                  </div>
                  <div class="carousel-item c-item">
                    <img src="Images/asian-web-developer-working-with-hologram-and-augm-2022-10-19-05-05-55-utc.jpg" class="d-block w-100 c-image" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <!-- <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p> -->
                    </div>
                  </div>
                  <div class="carousel-item c-item">
                    <img src="Images/group-of-professionals-web-developers-are-working-2022-04-30-08-04-12-utc.jpg" class="d-block w-100 c-image" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <!-- <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p> -->
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <div class="car-con">
                <div class="car-con-title">
                    <h2>
                        Innovatech is trusted by businesses worldwide
                    </h2>
                    <h2>
                        As they build their brand
                    </h2>
                </div>
                <div class="car-con-content">
                    <div>
                        <h2>6 years</h2>
                        <p>In Business</p>
                    </div>
                    <div>
                        <h2>3000+</h2>
                        <p>Clients Worldwide</p>
                    </div>
                    <div>
                        <h2>1.5M+</h2>
                        <p>Social Media Followers</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section>
        <div class="au-con">
            <div class="au-card">
                <div class="au-card-content">
                    <div class="au-card-cont-con">
                        <h3 class="au-card-title">
                            Our Mission
                    
                        </h3>
                        <span class="card-par">
                            Innovatech's mission is to revolutionize businesses through cutting-edge tech solutions. We strive to empower organizations with tailored services, driving digital transformation, enhancing efficiency, and unlocking growth opportunities. Our passion for innovation fuels our commitment to deliver excellence, paving the way for a more connected and advanced digital world.
                        </span>
                    </div>
                    <div>
                        <div class="card-btn">
                            <button id="getstarted">Get Started</button>
                        </div>
                    </div>
                </div>
          </div>
          <div>
            <img src="Images/au-img1.png">
          </div>
        </div>
    </section>
    <section class="about-content" id="about-content">
        <div class="h2">
            <h2 class="A-U-h2-title">Pioneering Tech Solutions </h2>
            <h2 class="A-U-h2-title">For a Digital World</h2>
            <p class="par1">
                At Innovatech, we are passionate about technology and its transformative power. As a leading tech solutions company, we are committed to pushing the boundaries of innovation and helping businesses thrive in the digital age. 
            </p>
        </div> 
        <div>
            <h2 class="A-U-h2-title">Who We Are</h2>
            <p class="par1">
                Innovatech is a dynamic team of tech enthusiasts, developers, and industry experts, united by a common goal: to revolutionize the way businesses operate. With our deep understanding of cutting-edge technologies and years of experience across various industries, we offer tailored solutions that address unique challenges and drive tangible results. 
            </p>
            <h2 class="A-U-h2-title">What We Do</h2>
            <p class="par1">
                Our comprehensive suite of tech services encompasses everything your business needs to stay ahead in today's fast-paced digital landscape. From bespoke software development to harnessing the potential of big data with advanced analytics, we deliver end-to-end solutions that empower your business for success. 
            </p>
        </div>
    </section>
    
    <section class="formx">
        <div class="form-card-container">
            <div class="form-card">
                <div class="form-title">
                    <h2>Start Your Journey</h2>
                    <h2>With Us!</h2>
                </div>
                <div class="form-email">
                    <input type="email" id="email" name="email" placeholder="Your Email">
                    <button>Start</button>
                </div>
            </div>
            <div class="tilted-img">
                <img src="Images/tilted.png">
            </div>
        </div>
    </section>
<?php
    include "footer.php";                
?>
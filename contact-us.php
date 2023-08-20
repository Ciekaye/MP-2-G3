<?php
    $title = "Contact Innovatech";                   
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
            <h1>Contact Us Now!</h1>
            <div class="hero-btn">
                <button id="getstarted" onclick="location.href = '#form';">EXPLORE</button>
            </div>
        </div>
    </section>
    <section id="form">
        <div class="contact-form">
            <form class="c-form">
                <h2>Get in Touch</h2>
                <div class="con-info">
                    <div class="int-email">
                        <i class="fa-regular fa-envelope fa-xl"></i>
                        <p>innovatech@gmail.com</p> 
                    </div>
                    <div class="int-number">
                        <i class="fa-solid fa-phone fa-xl"></i>
                        <p>(+63) 917 1362 485</p>
                    </div>
                </div>
                <div class="fill-form">
                    <div>
                        <div class="c-fullname">
                            <div>
                                <label for="fullname">Fullname</label>
                            </div>
                            <div>
                                <input type="text" id="fullname" name="fullname">
                            </div>
                        </div>
                        <div class="c-number">
                            <div>
                                <label for="mobileNumber">Mobile Number</label>
                            </div>
                            <div>
                                <input type="tel" id="mobileNumber" name="mobileNumber" required>
                            </div>
                        </div>
                        <div class="c-email">
                            <div>
                                <label for="email">Email</label>
                            </div>
                            <div>
                                <input type="email" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="c-button">
                            <button>Submit</button>
                        </div>
                    </div>
                    <div class="c-message">
                        <div>
                            <div>
                                <label for="message">Message</label>
                            </div>
                            <div>
                                <textarea name="message" id="message" cols="30" rows="15"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
           </form>
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
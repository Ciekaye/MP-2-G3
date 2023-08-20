<?php
    $title = "Innovatech Pricing";                   
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
            <h1>Pricing</h1>
            <div class="hero-btn">
                <button id="getstarted" onclick="location.href = '#price-list';">EXPLORE</button>
            </div>
        </div>
    </section>
    <section class="pr-card-sec" id="price-list">
        <div class="pricing-card-container">
            <div class="pr-title">
                <h3 class="pring-card-title">
                    Transparent and Affordable Tech Solutions Pricing at Innovatech
                </h3>
                <div class="pr-toggle">
                    <label>Annually</label>
                    <div class="pr-toggle-btn">
                        <input type="checkbox" id="checkbox" class="pr-checkbox">
                        <label for="checkbox" class="sub" id="suv">
                            <div class="circle"></div>
                        </label>
                    </div>
                    <label>Monthly</label>
                </div>
            </div>
            
            <div class="pricing-cards">
                <div class="pr-card-basic shadow">
                    <ul>
                        <li class="pack">Basic</li>
                        <li id="basic" class="price bottom-bar">&dollar; 199.99 </li>
                        <li class="bootom-bar">Customized Software Development</li>
                        <li class="bootom-bar">Basic Data Analytics Insights</li>
                        <li class="bootom-bar">Cloud Solutions Setup (Standard)</li>
                        <li class="bootom-bar">Essential Cybersecurity Measures</li>
                        <li class="bootom-bar">Limited IT Consulting Hours</li>
                        <li>
                            <button class="pr-btn">Learn More</button>
                        </li>
                    </ul>
                </div>
                <div class="pr-card active">
                    <ul>
                        <li class="pack">Standard</li>
                        <li id="basic" class="price bottom-bar">&dollar; 399.99 </li>
                        <li class="bootom-bar">Comprehensive Software Development</li>
                        <li class="bootom-bar">Advanced Data Analytics with Actionable Insights</li>
                        <li class="bootom-bar">Robust Cloud Solutions with Scalability</li>
                        <li class="bootom-bar">Comprehensive Cybersecurity Measures</li>
                        <li class="bootom-bar">Moderate IT Consulting Hours</li>
                        <li>
                            <button class="active-pr-btn">Learn More</button>
                        </li>
                    </ul>
                </div>
                <div class="pr-card shadow">
                    <ul>
                        <li class="pack">Premium</li>
                        <li id="basic" class="price bottom-bar">&dollar; 699.99 </li>
                        <li class="bootom-bar">Fully Customized and Enterprise-Level Software Solutions</li>
                        <li class="bootom-bar">Advanced Data Analytics and Predictive Modeling</li>
                        <li class="bootom-bar">Cloud Solutions with High Performance and Scalability</li>
                        <li class="bootom-bar">Advanced Cybersecurity and Threat Intelligence</li>
                        <li class="bootom-bar">Extensive IT Consulting and Strategy Support</li>
                        <li>
                            <button class="pr-btn">Learn More</button>
                        </li>
                    </ul>
                </div>
            </div>
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
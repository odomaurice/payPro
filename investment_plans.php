<?php

include('./templates/header.php');

$title = 'Investment Plans';

?>




<title>Arkinvest||<?= $title; ?></title>

</head>

<body>

  <!-- navbar -->

  <header>
    <div class="nav-container">

      <h1 class="logo text-hover-blue">Arkinvest</h1>

      <nav class="site-nav">
        <ul class="pl-3">
          <li><a class="text-hover-blue" href="index.php"><i class=" site-nav--icon"></i>Home</a></li>
          <li><a class="text-hover-blue" href="about_us.php"><i class=" site-nav--icon"></i>About</a></li>
          <li><a class="text-hover-blue" href="investment_plans.php"><i class=" site-nav--icon"></i>Plans</a></li>
          <li><a class="text-hover-blue" href="our_services.php"><i class=" site-nav--icon"></i> Services</a></li>
          <li><a class="text-hover-blue" href="policy.php"><i class=" site-nav--icon"></i>Policy</a></li>
          <li class=" text-orange text-hover-blue"><a href="login.php"><i class=" site-nav--icon"></i>Login</a></li>
          <li class=" text-orange text-hover-blue"><a href="register.php"><i class=" site-nav--icon"></i>Register</a></li>
        </ul>
      </nav>

      <div class="menu-toggle">
        <div class="hamburger"></div>
      </div>

    </div>

  </header>

  <div class=" text-hover-blue p-2 fixed">
    <a class="chat-us" href="#chat-section"><img src="images/comments.png" width="5%" alt="">Chat with Us...</a>
  </div>






  <div class="Container mt-3">
    <div class="row justify-center">
      <div class="col-12-xs col-5-md">
        <h2>
          <div class="font-xl text-hover-purple">INVESTMENT PLANS</div>

        </h2>
      </div>
    </div>
  </div>

  <!-- INVESTMENT DIV -->

  <section id="work" class="mt-5 investment-div">
    <div class="Container">

      <div class="row gap-2">
        <div class="col-12-xs col-6-md col-3-lg investment-single">
          <div class="card p-2 investment-single">
            <h3 class="card-title text-hover-purple text-orange m-1">BRONZE</h3>
            <img class="bitcoin-img" src="images/bronze-medal.png" alt="">
            <h4 class="m-1 ml-3">20%</h4>
            <h5 class="m-1 ml-3">24hrs</h5>
            <h5 class="m-1 ml-3">$20 — $500</h5>
            <h5 class="m-1 ml-3">REFERRAL COMMISSION: 8%</h5>
            <div class="slider-btn">
              <a href="submit.php" class=" btn-outlined-orange text-orange text-hover-white">Learn More</a>
            </div>

          </div>
        </div>
        <div class="col-12-xs col-6-md col-3-lg investment-single">
          <div class="card p-2 investment-single">
            <h3 class="card-title text-hover-purple text-orange m-1">SILVER</h3>
            <img class="bitcoin-img" src="images/medal.png" alt="">
            <h4 class="m-1 ml-3">30%</h4>
            <h5 class="m-1 ml-3">24hrs</h5>
            <h5 class="m-1 ml-3">$500 — $1,000</h5>
            <h5 class="m-1 ml-3">REFERRAL COMMISSION: 8%</h5>
            <div class="slider-btn">
              <a href="submit.php" class=" btn-outlined-orange text-orange text-hover-white">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-12-xs col-6-md col-3-lg investment-single">
          <div class="card p-2 investment-single">
            <h3 class="card-title text-hover-purple text-orange m-1">GOLD</h3>
            <img class="bitcoin-img" src="images/bitcoin-logo.png" alt="">

            <h4 class="m-1 ml-3">50%</h4>
            <h5 class="m-1 ml-3">24hrs</h5>
            <h5 class="m-1 ml-3">$10000 — $100,000</h5>
            <h5 class="m-1 ml-3">REFERRAL COMMISSION: 8%</h5>
            <div class="slider-btn">
              <a href="submit.php" class=" btn-outlined-orange text-orange text-hover-white">Learn More</a>
            </div>

          </div>
        </div>
        <div class="col-12-xs col-6-md col-3-lg ">
          <div class="card p-2 investment-single ">
            <h3 class="card-title text-hover-purple text-orange m-1">DIAMOND</h3>
            <img class="bitcoin-img" src="images/diamond.png" alt="">

            <h4 class="ml-3 m-1">80%</h4>
            <h5 class="ml-3 ml-1">48hrs</h5>
            <h5 class="ml-3 m-1">$5000 — $100,000</h5>
            <h5 class="ml-3 m-1">REFERRAL COMMISSION: 8%</h5>
            <div class="slider-btn">
              <hr>
              <a href="submit.php" class=" btn-outlined-orange text-orange text-hover-white">Learn More</a>
            </div>
          </div>
        </div>




      </div>
    </div>
  </section>



  <!-- work section -->
  <section id="work" class="mt-5">
    <div class="Container">
      <h2 class="mb-2">WHY <span class="text-hover-blue text-orange">ARKINVEST?</span></h2>
      <div class="row gap-2">
        <div class="col-12-xs col-6-md col-3-lg">
          <div class="card p-0">
            <h3 class="card-title m-1">INCORPORATED COMPANY</h3>
            <img class="card-img" src="images/article-of-incorporation.png" alt="">
            <p class="m-1">We are incorporated in over 25 countries, and continents such as Europe, Africa and Asia</p>
          </div>
        </div>
        <div class="col-12-xs col-6-md col-3-lg">
          <div class="card p-0">
            <h3 class="card-title m-1">PROFESSIONAL SUPPORT</h3>
            <img class="card-img" src="images/security-purposes.png" alt="">
            <p class="m-1">We have the best support team you can think of. We are always here to help you out in your investment process</p>
          </div>
        </div>
        <div class="col-12-xs col-6-md col-3-lg">
          <div class="card p-0">
            <h3 class="card-title m-1">COMODO VERIFIED</h3>
            <img class="card-img" src="images/tick.png" alt="">
            <p class="m-1">We have been verified by the Comodo Security System and found worthy of operation due to the high security features on our system</p>
          </div>
        </div>
        <div class="col-12-xs col-6-md col-3-lg">
          <div class="card p-0">
            <h3 class="card-title m-1">EXPERIENCED MANAGEMENT</h3>
            <img class="card-img" src="images/stakeholder.png" alt="">
            <p class="m-1">Arkinvest is equipped with the best professionals in the investment system. We have over 7 years of experienced team of experts.</p>
          </div>
        </div>
      </div>
      <div class="row gap-2">
        <div class="col-12-xs col-6-md col-3-lg">
          <div class="card p-0">
            <h3 class="card-title m-1">DDOS PROOF</h3>
            <img class="card-img" src="images/searching.png" alt="">
            <p class="m-1">Our System has been built using the best security features which prevents such malicious attacks such as Direct Denial of Service (DDoS).</p>
          </div>
        </div>
        <div class="col-12-xs col-6-md col-3-lg">
          <div class="card p-0">
            <h3 class="card-title m-1">RELIABILITY</h3>
            <img class="card-img" src="images/technical-support.png" alt="">
            <p class="m-1">We are you most trusted plug for wealth creation and sustenance, our reviews speak volumes of us</p>
          </div>
        </div>
        <div class="col-12-xs col-6-md col-3-lg">
          <div class="card p-0">
            <h3 class="card-title m-1">PROFITABILITY</h3>
            <img class="card-img" src="images/financial-profit.png" alt="">
            <p class="m-1">At Arkinvest we only discuss about profit because that is what our story has been for over seven years of business.</p>
          </div>
        </div>
        <div class="col-12-xs col-6-md col-3-lg">
          <div class="card p-0">
            <h3 class="card-title m-1">FLEXIBILITY</h3>
            <img class="card-img" src="images/agile.png" alt="">
            <p class="m-1">We scout for, and update our systems to work with the trends of the business sector</p>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- TESTIMONIAL-SECTION -->
  <div class="Container">

    <h2 class="container m-3">FROM OUR CLIENTS <i></i></h2>

    <div class="col-12-xs col-6-md col-1-lg">
      <div class="card p-2 m-3 justify-center">
        <h3 class="card-title m-1">Johnson Ashley</h3>
        <img class="card-img" src="" alt="">
        <p class="m-1">Being an investor with Arkinvest has been great. Support is always responsive and helpful, and best of all I've been able to help many new Bitcoin users get some of their first Bitcoin.</p>
      </div>
    </div>

    <div class="col-12-xs col-6-md col-1-lg">
      <div class="card p-2 m-3">
        <h3 class="card-title m-1">Elizabeth Scott</h3>
        <img class="card-img" src="" alt="">
        <p class="m-1">Arkinvest is my first Bitcoin experience. Started as your regular newbie first time BTC buyer - asking legacy traders what is a wallet and why I need to follow verification steps. Sold over 400+ Bitcoin to date and helped over 800 newbies like myself to dive in to this new currency.</p>
      </div>
    </div>

    <div class="col-12-xs col-6-md col-1-lg">
      <div class="card p-2 m-3">
        <h3 class="card-title m-1">Anna Summer</h3>
        <img class="card-img" src="" alt="">
        <p class="m-1">I have super slow connectivity and this is a super patient seller. Thank you so much and I appreciate your help I look forward to working with you again!</p>
      </div>
    </div>

    <div class="col-12-xs col-6-md col-1-lg">
      <div class="card p-2 m-3">
        <h3 class="card-title m-1">Maurice Cooper</h3>
        <img class="card-img" src="" alt="">
        <p class="m-1">Super patient and gets you through step by step. Was my first time purchasing, and I would highly recommend this platform to any newbies like me.</p>
      </div>
    </div>



    <!-- SPONSORS SECTION -->

    <div class="sponsor_section bg-grey p-2">
      <div class="container">
        <ul id="sponsor_carousel" class="sponsor_items owl-carousel">
          <li class="sponsor_item">
            <img src="images/test-1.png" alt="sponsor-image">
          </li>
          <li class="sponsor_item">
            <img src="images/test-2.png" alt="sponsor-image">
          </li>
          <li class="sponsor_item">
            <img src="images/test-3.png" alt="sponsor-image">
          </li>
          <li class="sponsor_item">
            <img src="images/test-4.png" alt="sponsor-image">
          </li>
          <li class="sponsor_item">
            <img src="images/test-5.png" alt="sponsor-image">
          </li>
          <li class="sponsor_item">
            <img src="images/test-6.png" alt="sponsor-image">
          </li>
          <li class="sponsor_item">
            <img src="images/test-7.png" alt="sponsor-image">
          </li>
          <li class="sponsor_item">
            <img src="images/test-8.png" alt="sponsor-image">
          </li>
        </ul>
      </div>
    </div><br>

    <div id="chat-section" style="text-align: center; width: 80%;" class="Container">
      <h2 class="text-hover-purple">Send us a message:</h2>
      <div class="form-div">
        <form action="https://formspree.io/f/mlezpnpv" method="post">
          <label for="first name">First name:</label><br>
          <input type="text" id="first name" name="first name"><br><br>
          <label for="last name">Last name:</label><br>
          <input type="text" id="last name" name="last name"><br><br>
          <label for="email">Email:</label><br>
          <input type="email" name="email" id="email"><br><br>
          <label for="message">Message</label><br>
          <textarea name="message" id="message" cols="30" rows="10"></textarea><br><br>
          <div class="d-grid gap-2 col-4 mx-auto">
            <input id="button-reply" class="btn-outlined-orange text-orange text-hover-white mb-2" type="submit" value="Submit"><br>
          </div>
      </div>
      </form>
    </div>
  </div>


  <?php include('./templates/footer.php'); ?>
<?php

include('./templates/index_header.php');

$title = 'Home';



?>

<title>Arkinvest||<?=$title; ?></title>


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






  <!-- CAROUSEL-SECTION -->

  <!-- Hero Slider -->
  <div id="home" class="hero-slider owl-carousel owl-theme">
    <div class="single-hs-item item-bg1">
      <div class="d-table">
        <div class="d-tablecell">
          <div class="hero-text">
            <h1 class="text-hover-blue">GROW YOUR WEALTH <br> WITH CYCLEPAY</h1>
            <p class="text-hover-purple">We are here to aid you in every possible way</p>
            <div class="slider-btn">
              <a href="about_us.php" class=" btn-outlined-orange text-orange text-hover-white">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-hs-item item-bg2">
      <div class="d-table">
        <div class="d-tablecell">
          <div class="hero-text">
            <h1 class="text-hover-blue"> TAKE THAT STEP TODAY</h1>
            <p class="text-hover-purple">The journey of a thousand miles begins with a bold step</p>
            <div class="slider-btn">
              <a href="investment_plans.php" class=" btn-outlined-orange text-orange text-hover-white mr-30">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-hs-item item-bg3">
      <div class="d-table">
        <div class="d-tablecell">
          <div class="hero-text">
            <h1 class="text-hover-blue">INVEST IN THE FUTURE</h1>
            <p class="text-hover-purple">We are known for our flexibility and consistency, all geared towards providing our clients with global trends</p>
            <div class="slider-btn">
              <a href="about_us.php" class="btn-outlined-orange text-orange text-hover-white mr-30">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-hs-item item-bg4">
      <div class="d-table">
        <div class="d-tablecell">
          <div class="hero-text">
            <h1 class="text-hover-blue"> TOWARDS FINANCIAL<br>INDEPENDENCE</h1>
            <p class="text-hover-purple">Our experts are here for you, to ensure you realize your potentials</p>
            <div class="slider-btn">
              <a href="about_us.php" class=" btn-outlined-orange text-orange text-hover-white mr-30">Learn More</a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="single-hs-item item-bg5">
      <div class="d-table">
        <div class="d-tablecell">
          <div class="hero-text">
            <h1 class="text-hover-blue">PICK YOUR PACKAGE<br>AND INVEST NOW</h1>
            <p class="text-hover-purple">We provide series of packages to choose from, bearing in mind individual differences and desires</p>
            <div class="slider-btn">
              <a href="investment_plans.php" class="btn-outlined-orange text-orange text-hover-white mr-30">Learn More</a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="single-hs-item item-bg6">
      <div class="d-table">
        <div class="d-tablecell">
          <div class="hero-text">
            <h1 class="text-hover-blue">THE FUTURE IS DIGITAL<br>JUST LIKE THE PRESENT</h1>
            <p class="text-hover-purple">Invest in the future of digital technologies</p>
            <div class="slider-btn">
              <a href="about_us.php" class=" btn-outlined-orange text-orange text-hover-white mr-30">Learn More</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  </div>
  <!-- End of Carousel section -->


  <div id="google_translate_element"></div>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en',
        layout: google.translate.TranslateElement.InlineLayout.VERTICAL
      }, 'google_translate_element');
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



  <div class=" text-hover-blue p-2 pb-0 fixed">
    <a class="chat-us" href="#chat-section"><img src="images/comments.png" width="5%" alt="">Chat with Us...</a>
  </div>

  <!-- work section -->
  <section id="work" class="mt-0">
    <div class="Container">
      <h2 class="mb-2">WHY <span class="text-hover-blue text-orange">ARKINVEST?</span></h2>
      <div class="row gap-2">
        <div class="col-12-xs col-6-md col-3-lg">
          <div class="card p-0">
            <h3 class="card-title m-1">INCORPORATED COMPANY</h3>
            <img class="card-img" src="images/article-of-incorporation.png" width="10%;" alt="">
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

  <!-- Beginner section -->

  <div class="Container mt-5">
    <div class="row justify-start">
      <div class="col-12-xs col-5-md">
        <img src="images/laptop.svg" width="300px" alt="">
        <h2>
          <div class="font-xl text-hover-blue">CREATE AN ACCOUNT</div>
        </h2>
        <p class="text-gray mt-2 mb-3"> Create An Account With Us To Get Started</p>
        <a href="register.php" class=" btn-outlined-orange text-orange text-hover-white">Register</a>
      </div>
    </div>
  </div>
  <div class="Container mt-5">
    <div class="row justify-center">
      <div class="col-12-xs col-5-md">
        <img src="images/investment.png" width="200px" alt="">
        <h2>
          <div class="font-xl text-hover-blue">MAKE A DEPOSIT</div>

        </h2>
        <p class="text-gray mt-2 mb-3">Enrol By Making A Deposit Into Any Of Our Investment Plans</p>
        <a href="register.php" class="btn-outlined-orange text-orange text-hover-white">Deposit</a>
      </div>
    </div>
  </div>

  <div class="Container mt-5">
    <div class="row justify-end">
      <div class="col-12-xs col-5-md">
        <img src="images/compensation.png" width="200px" alt="">
        <h2>
          <div class="font-xl text-hover-blue">MAKE A WITHDRAWAL</div>
        </h2>
        <p class="text-gray mt-2 mb-3">You Can Make A Withdrawal As Swift As Possible As Possible</p>
        <a href="register.php" class="btn-outlined-orange text-orange text-hover-white">Withdraw</a>
      </div>
    </div>
  </div><br><br>

  <!-- SPONSORS SECTION -->

  <div class="sponsor_section bg-grey">
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

  <!-- CHAT SECTION -->

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
          <input id="button-reply" class="btn-outlined-orange text-orange text-hover-white mb-2" type="submit" value="Submit"></button><br>
        </div>
    </div>

    </form>
  </div>
  </div>



  <?php include('./templates/index_footer.php'); ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tom's Test</title>
    <link href="https://github.com/Lefty-Squish/TestSite.git"/>
    <link href="./main.css" rel="stylesheet"/>
    <link href="main.sass" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script type="application/javascript" src="main.js"></script>
  </head>

  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="main.js"></script>
  <script>document.getElementById("defaultView").click();</script>
<!--  Top Banner  -->
  <div class="container-fluid" id="topBanner">
      <div class="container" id="topHeader">
          <div class="headerWrap">
              <p id="phoneNumber"><img src="Images/phone.png" alt="phone handle" id="phone"> +44 (0) 207 183 3787</p>
              <p id="offer">
                  Want 10% off your first order?
                  <a id="clickHere"> Click Here</a>
              </p>
              <img src="Images/socialMedia.png" alt="Social Media Icons" id="socialMedia">
          </div>
      </div>
  </div>

<!--  Header  -->
  <header class="container-fluid" id="logo">
        <div class="container">
            <div class="clientLogin">
                <img class="row" id="mycoLogo" src="Images/myco-works-logo.svg" alt="MyCo Works Logo" width="300px" height="72px">
            </div>
        </div>
  </header>

<!--  Navigation  -->
  <nav class="container">
      <div class="navigation">
          <ul>
              <li>Address Services</li>
              <li>Company Formations</li>
              <li>Pricing</li>
              <li>Other Services</li>
              <li>Locations</li>
              <li>FAQs</li>
              <li>About Us</li>
              <li>Blogs</li>
              <li>Partners</li>
              <li>Contact Us</li>
          </ul>
      </div>
  </nav>

<!--  First Box -->
  <section class="jumbotron">
      <div class="container">
          <div class="row">
              <div class="col-7">
                  <h1>
                      A comprehensive range of
                      <br>
                      Virtual Office services
                      <br>to help your business grow
                  </h1>
                  <p class="frontPageText">Create an instant presence and protect your privacy with our choice of prestigious business addresses.
                      We'll forward your post and handle your calls! Get in touch with a member of our expert team for more information</p>
                  <div class="viewButtons">
                      <button type="button" name="See Pricing" id="viewPricing">View Pricing</button>
                      <button type="button" name="Our Locations" id="ourLocations">Our Locations</button>
                  </div>
              </div>


              <div class="col-5">
                  <div class="addressImage">
                      <img src="Images/home-banner-img.jpg" alt="A man and woman looking at a tablet" id="homeBanner-img"/>
                  </div>
              </div>
          </div>

          <div class="trustPilot">
              <img src="Images/trustPilot.png" alt="Our Trustpilot Score">
          </div>

      </div>
  </section>

<!--  Banner -->
  <section class="container-fluid">
      <div class="container">
          <div class="middleBanner">

              <!--Trusted Clients-->
              <div class="trustedClients">
                  <div class="trustedClients-img">
                      <img src="Images/Trusted_Clients.svg" alt="Three stick figures" id="clients"/>
                  </div>
                  <div class="trustedClients-text">
                      <h3>30K+</h3>
                      <p>Trusted Clients</p>
                  </div>
              </div>

              <!--Combines Experience-->
              <div class="experience">
                  <div class="experience-img">
                      <img src="Images/Years_of_Experience_icon.svg" alt="A calendar with a tick" id="over100Years">
                  </div>
                  <div class="experience-text">
                      <h3>Over 100 Years</h3>
                      <p>Combined Industry Experience</p>
                  </div>
              </div>

              <!--Prestigious Offices-->
              <div class="prestigiousOffices">
                  <div class="prestigiousOffices-img">
                      <img src="Images/Amazing_Offices_icon.svg" alt="Small building" id="offices">
                  </div>
                  <div class="prestigiousOffices-text">
                      <h3>6</h3>
                      <p>Prestigious Offices</p>
                  </div>
              </div>

              <!--Live Chat-->
              <div class="liveChat">
                  <div class="liveChat-img">
                    <img src="Images/Live%20Chat.png" alt="Speech Bubbles" id="chat">
                  </div>
                  <div class="liveChat-text">
                      <h3>Live Chat</h3>
                      <p>Chat with one of our friendly staff</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

<!--  Introducing MYCO Works  -->
  <section class="aboutUsWrapper">
      <div class="aboutUs-bg-img">
          <img src="https://mycoworks.co.uk/assets/img/about_us.png" alt="About Us">
      </div>
      <div class="container">
          <div class="row" id="aboutRow">
              <div class="col-12 col-xl-6">
                  <div class="aboutImage">
                      <img src="Images/about-us-img.png" alt="group of people in background a man asking for a handshake in the foreground"/>
                  </div>
              </div>
              <div class="col-12 col-xl-6">
                  <div class="aboutUs">
                      <h3 class="introTitle">Introducing MYCO Works</h3>
                      <p class="introText">
                          MYCO Works provides a range of affordable Virtual Office packages to allow you more free time,
                          so you can focus on growing your business. If you're looking for a prestigious business address,
                          mail handling or call answering services, we offer a number of packages to suit your business needs.
                          If you're unsure which package you need? contact our friendly team for advice.
                      </p>
                      <p class="introText">
                          Sign up today and start using your new real business address in minutes, with access to meeting rooms whenever you need it.
                          Stand out from your competitors and promote your new business address on your website, invoices, marketing materials and more.
                      </p>
                      <button type="button" name="About Us" id="aboutUsButton">About Us</button>
                  </div>
              </div>
          </div>
      </div>
  </section>

<!--  UK Limited Company Formation  -->
  <section class="limitedCompanyFormation">
      <div class="container">
          <div class="row">

<!--  Left-hand Side of Company Formation  -->
                  <div class="col-6">
                      <div class="companyFormation">
                          <h3>UK Limited Company Formation</h3>
                          <p>
                              You can secure your company name from only £12.99! With our simple 'Company
                              Formation Only' package. Or why not protect your home address from the
                              Companies House register and include a Virtual Business Address service, by
                              choosing from our 'Company' and 'Non-Resident' packages.
                          </p>
                          <div class="input_search">
                              <label for="companyName"></label><input id="companyName" type="text" name="companyName" placeholder="Enter your company name to check if it is available">
                              <button id="searchCompanyFormation" type="button">Search</button>
                          </div>
                          <h6>
                              Or view
                              <a class="text-orange"> company formation packages</a>
                          </h6>
                      </div>
                  </div>

<!--  Right-hand Side Of Company Formation  -->
                  <div class="col-6">
                      <div class="companyFormationLearnMore">
                          <div class="cfText">
                              <h4>
                                  Register
                                  <br>
                                  Your Company
                              </h4>
                              <h1>FROM £12.99</h1>
                              <a class="learnMoreButton" type="button">
                                  Learn More
                              </a>
                          </div>
                          <div class="cfImage">
                              <img src="Images/CF-home_banner.png" alt="Business man and woman back to back">
                          </div>
                      </div>
                  </div>

          </div>
      </div>
  </section>


<!--  Prices And Services  -->
  <section class="businessAddressServices">
      <div class="container">
          <div class="row">

<!-- Left-hand Side-->
              <div class="col-7">
                  <div class="aboutBAS">
                      <h3>Business Address Services</h3>
                      <div class="tab">
                          <button class="tabLinks active" onclick="openSolution(event, 'ROA')" id="defaultView">Registered Office Address</button>
                          <button class="tabLinks" onclick="openSolution(event, 'VBA')">Virtual Business Address</button>
                          <button class="tabLinks" onclick="openSolution(event, 'VBP')">Virtual Business Plus</button>
                      </div>


<!--                      Registered Office Address Tab-->
                      <div id="ROA" class="tabContent" style="display: block">
                          <div class="tabText">
                              <p>
                                  Select from our choice of prestigious business addresses in the UK, to use as your Registered
                                  Office Address. Instantly enhance your company image and protect your privacy, while
                                  benefiting from a prestigious business address on all your official documents.
                              </p>
                              <p>
                                  Every company is required to have an address where official correspondence, such as letters
                                  from Companies House, HM Revenue & Customs (HMRC) or court documents can be sent.
                              </p>
                              <a class="learnMoreButton" type="button">Learn More</a>
                          </div>
                      </div>

<!--                      Virtual Business Address Tab-->
                      <div id="VBA" class="tabContent" style="display: none">
                          <div class="tabText">
                              <p>
                                  Want to portray a professional image and create the impression of an established business with
                                  its own premises? Use our address as your Business Address anywhere outside Companies
                                  House e.g. on your website, invoices, stationery, adverts, letterheads etc.
                              </p>
                              <p>
                                  Business mail (mail received from banks, clients, suppliers, investors, service providers and
                                  other third parties with whom you do business) is sorted daily and forwarded to you by 1st Class
                                  post or can be scanned and emailed. Plus with access to meeting rooms, our low-cost virtual
                                  business address service provides a huge saving compared to a traditional office space.
                              </p>
                              <a class="learnMoreButton" type="button">Learn More</a>
                          </div>
                      </div>

<!--                      Virtual Business Plus Tab-->
                      <div id="VBP" class="tabContent" style="display: none">
                          <div class="tabText">
                              <p>
                                  Perfect for startups and SMEs, our popular 3-in-1 Virtual Business Plus package includes a
                                  Registered Office Address, Director Service Address and a Virtual Business Address. Using a
                                  virtual business address means your business portrays a professional image and creates the
                                  right impression with clients and suppliers by generating an image of an established business
                                  with its own premises.
                              </p>
                              <p>
                                  Our Registered Office Address and Director Service Address (which includes all directors of a
                                  company) can be used as the company’s and directors’ official address with Companies House
                                  to protect your personal privacy. Our Virtual Business Plus package also grants access to book
                                  meeting rooms.
                              </p>
                              <a class="learnMoreButton" type="button">Learn More</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-5">
                  <div class="BASImg">
                      <img src="./Images/address-service-img.jpg" alt="Skyscrapers">
                  </div>
              </div>
          </div>
      </div>
  </section>







  </body>
</html>


























<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tom's Test</title>
<!--  Git Hub  -->
    <link href="https://github.com/Lefty-Squish/TestSite.git"/>
<!--  CSS  -->
    <link href="./main.css" rel="stylesheet"/>
    <link href="main.sass" rel="stylesheet"/>
<!--  Google Icons  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <script src="https://kit.fontawesome.com/053d8c5668.js" crossorigin="anonymous"></script>
<!--  Slick  -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
<!--  Table HTML  -->
    <link href="/Tables/Table1.php">
    <link href="Footer/Footer.php">
    <link href="Header/HeaderAndNav.php">
<!--  Popcorn  -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
<!--  JavaScript  -->
    <script type="application/javascript" src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

    <body>
        <?php include 'Header/HeaderAndNav.php';?>


<!--  First Box -->
        <section class="jumbotron">
          <div class="container">
              <div class="row">
                  <div class="col-7">
                      <div>
                          <h1>
                              A comprehensive range of
                              <br>
                              Virtual Office services
                              <br>
                              to help your business grow
                          </h1>
                          <p class="frontPageText">Create an instant presence and protect your privacy with our choice of prestigious business addresses.
                              We'll forward your post and handle your calls! Get in touch with a member of our expert team for more information.</p>
                          <div class="viewButtons">
                              <a href="pricing.php">
                                  <button type="button" name="See Pricing" id="viewPricing">View Pricing</button>
                              </a>
                              <button type="button" name="Our Locations" id="ourLocations">Our Locations</button>
                          </div>
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
        <div id="trustedByClients">
          <div class="container">
              <div class="row">
                  <!--Trusted Clients-->
                  <div class="trustedClients-col trustedClients-col--1 col-xl-2 col-md-3 col-12 py-4">
                      <div class="trustedClients-img">
                          <img src="Images/Trusted_Clients.svg" alt="Three stick figures" id="clients"/>
                      </div>
                      <div class="trustedClients-text">
                          <h3>30K+</h3>
                          <p>Global Clients</p>
                      </div>
                  </div>
                  <!--Combines Experience-->
                  <div class="experience-col experience-col--2 col-xl-4 col-md-6 col-12 py-4">
                      <div class="experience-img">
                          <img src="Images/Years_of_Experience_icon.svg" alt="A calendar with a tick" id="over100Years">
                      </div>
                      <div class="experience-text">
                          <h3>Over 100 Years</h3>
                          <p>Combined Industry Experience</p>
                      </div>
                  </div>
                  <!--Prestigious Offices-->
                  <div class="prestigiousOffices-col prestigiousOffices-col--3 col-xl-3 col-md-3 col-12 py-4 pr-xl-5">
                      <div class="prestigiousOffices-img">
                          <img src="Images/Amazing_Offices_icon.svg" alt="Small building" id="offices">
                      </div>
                      <div class="prestigiousOffices-text">
                          <h3>6</h3>
                          <p>Prestigious Offices</p>
                      </div>
                  </div>
                  <!--Live Chat-->
                  <div class="liveChat-col liveChat-col--4 col-xl-3 col-12 py-4 pl-xl-5">
                      <div class="liveChat-btn">
                          <div class="inner">
                            <img class="chatBubble" src="Images/Group.svg" alt="Speech Bubbles">
                          </div>
                      </div>
                      <div class="liveChat-text">
                          <h3>Live Chat</h3>
                          <p>Chat with one of our friendly staff</p>
                      </div>
                  </div>
              </div>
          </div>
        </div>


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
                              <h3>
                                  Register
                                  <br>
                                  Your Company
                              </h3>
                              <h2>FROM £12.99</h2>
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


<!--  Business Address Service  -->
        <section class="businessAddressServices">
          <div class="container">
              <div class="row">
        <!--         Left-hand Side  -->
                  <div class="col-7 pr-1">
                      <div class="aboutBAS">
                          <h3>Business Address Services</h3>
                          <div class="tab">
                              <button class="BASLinks sub-active" onclick="openSolution(event, 'ROA')" id="defaultView">Registered Office Address</button>
                              <button class="BASLinks" onclick="openSolution(event, 'VBA')">Virtual Business Address</button>
                              <button class="BASLinks" onclick="openSolution(event, 'VBP')">Virtual Business Plus</button>
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
        <!--              Right-Hand Side  -->
                  <div class="col-5">
                      <div class="BASImg">
                          <img src="./Images/address-service-img.jpg" alt="Skyscrapers">
                      </div>
                  </div>
              </div>
          </div>
        </section>


<!--  Telephone Answering Service  -->
        <section class="telephoneAnsweringService">
          <div class="container">
              <div class="row">

        <!--              Left-Hand Side  -->
                  <div class="col-5">
                      <div class="TASImg">
                          <img src="Images/TAS-img.jpg" alt="telephone answering service">
                      </div>
                  </div>
        <!--              Right-Hand Side  -->
                  <div class="col-7 pl-1">
                      <div class="aboutTAS">
                          <h3>Telephone Answering Service</h3>
                      </div>
                      <div class="tab">
                          <button class="TASLinks sub-active" onclick="openTab(event, 'TAS')" id="defaultView">Telephone Answering Service</button>
                          <button class="TASLinks" onclick="openTab(event, 'whoItsFor')">Who It's For</button>
                          <button class="TASLinks" onclick="openTab(event, 'keyFeatures')">Key Features</button>
                          <button class="TASLinks" onclick="openTab(event, 'howItWorks')">How It Works</button>
                      </div>
        <!--                  Telephone Answering Service  -->
                      <div id="TAS" class="TASContent" style="display: block">
                          <div class="tabText">
                              <p>
                                  Our affordable Telephone Answering Service is ideal for busy startups, SMEs, entrepreneurs, and
                                  freelancers who don't have time to answer the phone.
                              </p>
                              <p>
                                  Our friendly staff ensure a professional image is portrayed to your clients by answering your
                                  calls promptly
                              </p>
                              <a class="learnMoreButton" type="button">Learn More</a>
                          </div>
                      </div>
        <!--                  Who It's For  -->
                      <div id="whoItsFor" class="TASContent" style="display: none">
                          <div class="tabText">
                              <p>
                                  <img src="Images/TAS%20icons/icon-rocket.svg" alt="Rocket">
                                  Startups, freelancers, entrepreneurs and SMEs
                              </p>
                              <p>
                                  <img src="Images/TAS%20icons/icon-call-answ.svg" alt="Call Agent">
                                  Business owners who cannot always get to the phone
                              </p>
                              <p>
                                  <img src="Images/TAS%20icons/icon-support.svg" alt="Support">
                                  Companies that want to save money on hiring a receptionist
                              </p>
                              <a class="learnMoreButton" type="button">Learn More</a>
                          </div>
                      </div>

        <!--                  Key Features  -->
                      <div id="keyFeatures" class="TASContent" style="display: none">
                          <div class="tabText">
                              <p>
                                  <img src="Images/TAS%20icons/icon-phone2.svg" alt="Telephone">
                                  Choice of telephone numbers
                              </p>
                              <p>
                                  <img src="Images/TAS%20icons/icon-support.svg" alt="support">
                                  Calls answered professionally in your company name
                              </p>
                              <p>
                                  <img src="Images/TAS%20icons/icon-phone1.svg" alt="Handset">
                                  Unlimited phone calls
                              </p>
                              <p>
                                  <img src="Images/TAS%20icons/calls-taken.svg" alt="Calls Taken">
                                  All messages taken
                              </p>
                              <a class="learnMoreButton" type="button">Learn More</a>
                          </div>
                      </div>
        <!--                  How It Works  -->
                      <div id="howItWorks" class="TASContent" style="display: none">
                          <div class="tabText">
                              <p>
                                  <img src="Images/TAS%20icons/icon-website.svg" alt="Monitor">
                                  Select your required package, complete your order and start receiving messages within
                                  the hour
                              </p>
                              <p>
                                  <img src="Images/TAS%20icons/icon-support.svg" alt="Support">
                                  Our friendly and professional staff answer your calls in your business name
                              </p>
                              <p>
                                  <img src="Images/TAS%20icons/icon-email.svg" alt="Email">
                                  Messages (including contact details) are taken and sent to you instantly via email, your
                                  online admin panel and our free MYCO app
                              </p>
                              <p>
                                  <img src="Images/TAS%20icons/icon-handshake.svg" alt="Handshake">
                                  Never miss a call or opportunity again!
                              </p>
                              <a class="learnMoreButton" type="button">Learn More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>


<!--  Company Formation & Ready Made Companies  -->
        <section class="CFAndRM">
          <div class="container">
              <div class="row">
        <!--              Left-Hand Side  -->
                  <div class="col-7 ">
                      <div class="aboutCFAndRM">
                          <h3>Company Formation & Ready Made Companies</h3>
                          <div class="tab">
                              <button class="CFLinks sub-active" onclick="openCF(event, 'companyFormation')" id="defaultView">Company Formation</button>
                              <button class="CFLinks" onclick="openCF(event, 'readyMade')">Ready Made Companies</button>
                          </div>
        <!--                      Company Formation  -->
                          <div id="companyFormation" class="CFContent" style="display: block">
                              <div class="tabText">
                                  <p>
                                      There's never been a more exciting time to start a new business and to help you business get
                                      off to the perfect start, you can register a limited company from just £12.99!
                                  </p>
                                  <p>
                                      All our company formation packages include free digital versions of your company documents,
                                      which are emailed directly to you as PDF documents.
                                  </p>
                                  <a class="learnMoreButton" type="button">Learn More</a>
                              </div>
                          </div>
        <!--                      Ready Made Companies  -->
                          <div id="readyMade" class="CFContent" style="display:none">
                              <div class="tabText">
                                  <p>
                                      Ready Made companies are a great way to ensure that those initial start-up worries are taken
                                      care of, and to get yourself established in the market quickly.
                                  </p>
                                  <p>
                                      Included in our admin fees, Companies House fees and electronic filing of the new director's
                                      details. Our Ready Made companies also come with a free registered office and directors
                                      service address for one year (you can renew at £49.99 plus VAT on an annual basis).
                                  </p>
                                  <a class="learnMoreButton" type="button">Learn More</a>
                              </div>
                          </div>
                      </div>
                  </div>

        <!--              Right-Hand Side  -->
                  <div class="col-5">
                      <div class="CFImg">
                          <img src="Images/CF-img.jpg" alt="Company Formation" class="CFImage">
                      </div>
                  </div>
              </div>
          </div>
        </section>


<!--  Meeting Rooms  -->
        <section class="meetingRooms">
          <div class="container">
               <div class="row">

        <!--               Left-Hand Side  -->
                   <div class="col-5">
                       <div class="meetingRoomImg">
                           <img src="Images/Meeting-rooms-img.jpg" alt="Meeting Rooms">
                       </div>
                   </div>

        <!--               Right-Hand Side  -->
                   <div class="col-7">
                       <div class="aboutMeetingRooms">
                           <h3>Meeting Rooms</h3>
                       </div>

                       <div class="tab">
                           <button class="meetingLinks sub-active" onclick="openMeeting(event, 'ourMeetingRooms')" id="defaultView">Our Meeting Rooms</button>
                           <button class="meetingLinks" onclick="openMeeting(event, 'KFAndPricing')">Key Features And Pricing</button>
                           <button class="meetingLinks" onclick="openMeeting(event, 'howToBook')">How To Book</button>
                       </div>

        <!--                   Our Meeting Rooms  -->
                       <div id="ourMeetingRooms" class="meetingContent" style="display: block">
                           <div class="tabText">
                               <p>
                                   Need access to an affordable meeting room for a brainstorming session, client pitch,
                                   collaboration, or get-together with your team?
                               </p>
                               <p>
                                   MYCO Works has a range of contemporary, unbranded private meeting rooms available for hire
                                   in Central London, Edinburgh, and Ipswich for up to 12 people with a range of facilities.
                               </p>
                               <a class="meetingButton" type="button">London</a>
                               <a class="meetingButton" type="button">Edinburgh</a>
                               <a class="meetingButton" type="button">Ipswich</a>
                           </div>
                       </div>

        <!--                    Key Features And Pricing  -->
                       <div id="KFAndPricing" class="meetingContent" style="display: none">
                           <div class="tabText">
                               <p>
                                   We have a range of private, unbranded meeting rooms to suit all requirements, comfortably
                                   sitting between four and twelve people starting from just £12 an hour (+VAT).
                               </p>
                               <p>
                                   Our meeting room spaces offer a range of great amenities, including a business lounge, staffed
                                   reception areas, free Wi-Fi, free tea and coffee, kitchen and toilet facilities, modern ergonomic
                                   furniture, as well as air-conditioned rooms. The facilities differ slightly for each location, so we
                                   advise you to check before choosing your virtual office address.
                               </p>
                           </div>
                       </div>

        <!--                    How To Book  -->
                       <div id="howToBook" class="meetingContent" style="display: none">
                           <div class="tabText">
                               <p>
                                   Book one of our meeting rooms and impress at your next pitch, interview or workshop. Book by
                                   the hour or the day.
                               </p>
                               <p>
                                   Our meeting rooms are available to book online via your account. You can also reserve a meeting
                                   room on the go by downloading our ‘MYCO Meeting’ app.
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
          </div>
        </section>


<!--  Virtual Office Packages And Tables  -->
        <?php include 'Tables/Table1.php';?>


<!--  Unsure  -->
        <section>
          <div class="container-fluid unsureBackground">
              <div class="container unsureContainer">
                  <div class="Unsure">
                      <h1>
                          Unsure which Virtual Business Address Package you need?
                      </h1>
                      <p>
                          Use our handy flow diagram to quickly discover which of our
                          <br>
                          packages best suits your business requirements.
                      </p>
                  </div>
                  <div>
                      <button class="learnMoreButton unsureButton" name="Learn More">Learn More</button>
                  </div>
              </div>
          </div>
        </section>


<!--  Our Locations  -->
        <section>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="locationTitle" style="text-align: center">
                        <h3>Our Locations</h3>
                        <h6>Choose from our prestigious business addresses</h6>
                    </div>
                </div>
                <div class="locations">
                    <div class="locationsButtons">
                        <button class="locationBtn activeLocation" onclick="openLocation(event, 'londonLocation')" id="defaultView">London</button>
                        <button class="locationBtn" onclick="openLocation(event, 'edinburghLocation')">Edinburgh</button>
                        <button class="locationBtn" onclick="openLocation(event, 'ipswichLocation')">Ipswich</button>
                        <div class="locationLine"></div>
                    </div>
                </div>
        <!--                London Locations  -->
                <div id="londonLocation" class="officeLocation" style="display: block">
                    <div class="locationContent">
                        <div class="numberOfLocations">
                            <p>Showing <strong>4</strong> locations</p>
                        </div>
        <!--                        London Location 1  -->
                        <div class="locationCard london1">
                            <div class="locationImg">
                                <img src="Images/locationImg/lnd-1.png" alt="West End, W1">
                            </div>
                            <div class="locationCardInfo">
                                <div class="locationInfo">
                                    <p class="locationName">West End, W1</p>
                                    <p class="locationAddress">
                                        167-169 Great Portland Street
                                        <br>
                                        London
                                    </p>
                                </div>
                                <div class="tubeDistance">
                                    <img src="Images/locationImg/underground%201.png" alt="Underground Location">
                                    <p>Great Portland Street (4-minute walk)</p>
                                </div>
                                <div class="locationServices">
                                    <div class="meetingIcon">
                                        <img src="Images/locationImg/Group.svg" alt="Meeting Room">
                                        <p class="roomsAvailable">4 Meeting Rooms</p>
                                    </div>
                                    <div class="otherServices">
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">mode_fan</span>
                                        </p>
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">chair</span>
                                        </p>
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">restaurant</span>
                                        </p>
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">local_cafe</span>
                                        </p>
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">wifi</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="locationText">
                                    <p>
                                        Situated in the heart of London, the West End is a
                                        popular location for commercial industries. Our
                                        virtual office provides meeting space which is
                                        highly sought after in this exclusive location.
                                    </p>
                                </div>
                                <div>
                                    <button class="locationLearnMore">Learn More</button>
                                </div>
                            </div>
                        </div>
        <!--                        London Location 2  -->
                        <div class="locationCard london2">
                            <div class="locationImg">
                                <img src="Images/locationImg/lnd-2.png" alt="West End, W1">
                            </div>
                            <div class="locationCardInfo">
                                <div class="locationInfo">
                                    <p class="locationName">West End, W1</p>
                                    <p class="locationAddress">
                                        85 Great Portland Street
                                        <br>
                                        London
                                    </p>
                                </div>
                                <div class="tubeDistance">
                                    <img src="Images/locationImg/underground%201.png" alt="Underground Location">
                                    <p>Oxford Circus (6-minute walk)</p>
                                </div>
                                <div class="locationServices">
                                    <div class="meetingIcon">
                                        <img src="Images/locationImg/Group.svg" alt="Meeting Room">
                                        <p class="roomsAvailable">1 Meeting Room</p>
                                    </div>
                                    <div class="otherServices">
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">wifi</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="locationText">
                                    <p>
                                        The West End is a fantastic choice for your
                                        company address. This location has world-class
                                        amenities and provides excellent transport links
                                        around Central and Greater London.
                                    </p>
                                </div>
                                <div>
                                    <button class="locationLearnMore">Learn More</button>
                                </div>
                            </div>
                        </div>
        <!--                        London Location 3  -->
                        <div class="locationCard london3">
                            <div class="locationImg">
                                <img src="Images/locationImg/lnd-3.png" alt="Strand, WC2">
                            </div>
                            <div class="locationCardInfo">
                                <div class="locationInfo">
                                    <p class="locationName">Strand, WC2</p>
                                    <p class="locationAddress">
                                        7 Bell Yard
                                        <br>
                                        London
                                    </p>
                                </div>
                                <div class="tubeDistance">
                                    <img src="Images/locationImg/underground%201.png" alt="Underground Location">
                                    <p>Temple (6-minute walk)</p>
                                </div>
                                <div class="locationServices">
                                    <div class="meetingIcon">
                                        <img src="Images/locationImg/Group.svg" alt="Meeting Room">
                                        <p class="roomsAvailable">1 Meeting Room</p>
                                    </div>
                                    <div class="otherServices">
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">local_cafe</span>
                                        </p>
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">wifi</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="locationText">
                                    <p>
                                        Situated in the Strand, this location offers start-ups
                                        a prestigious address as well as easy access to a
                                        network of other businesses nearby.
                                    </p>
                                </div>
                                <div>
                                    <button class="locationLearnMore">Learn More</button>
                                </div>
                            </div>
                        </div>
        <!--                        London Location 4  -->
                        <div class="locationCard london4">
                            <div class="locationImg">
                                <img src="Images/locationImg/lnd-4.png" alt="City, EC1">
                            </div>
                            <div class="locationCardInfo">
                                <div class="locationInfo">
                                    <p class="locationName">City, EC2</p>
                                    <p class="locationAddress">
                                        63-66 Hatton Garden
                                        <br>
                                        London
                                    </p>
                                </div>
                                <div class="tubeDistance">
                                    <img src="Images/locationImg/underground%201.png" alt="Underground Location">
                                    <p>Chancery Lane (6-minute walk)</p>
                                </div>
                                <div class="locationText positionBottom">
                                    <p>
                                        Our virtual office is in Central London, on Hatton
                                        Garden in Holborn. Hatton Garden is also known as
                                        London's diamond district due to a large number of
                                        high-end jewellers based there.
                                    </p>
                                </div>
                                <div>
                                    <button class="locationLearnMore">Learn More</button>
                                </div>
                            </div>
                        </div>
        <!--                        London Map  -->
                        <div class="locationMap" id="londonMap">
                        </div>
                    </div>
                </div>

        <!--                Edinburgh Location  -->
                <div id="edinburghLocation" class="officeLocation" style="display: none">
                    <div class="locationContent-Edi">
                        <div class="numberOfLocations">
                            <p>Showing <strong>1</strong> location</p>
                        </div>
                        <div class="locationCard ediCard">
                            <div class="locationImg">
                                <img src="Images/locationImg/ed-image.jpg" alt="Edinburgh, EH2">
                            </div>
                            <div class="locationCardInfo">
                                <div class="locationInfo">
                                    <p class="locationName">Edinburgh, EH2</p>
                                    <p class="locationAddress">
                                        5 South Charlotte Street
                                        <br>
                                        Edinburgh
                                    </p>
                                </div>
                                <div class="tubeDistance">
                                    <img src="Images/locationImg/train_black.png" alt="Train">
                                    <p>Edinburgh Waverley Station (13-Minute walk)</p>
                                </div>
                                <div class="tubeDistance">
                                    <img src="Images/locationImg/train_black.png" alt="Train">
                                    <p>Haymarket Station (13-Minute walk)</p>
                                </div>
                                <div class="locationServices">
                                    <div class="meetingIcon">
                                        <img src="Images/locationImg/Group.svg" alt="Meeting Room">
                                        <p class="roomsAvailable">3 Meeting Rooms</p>
                                    </div>
                                    <div class="otherServices">
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">restaurant</span>
                                        </p>
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">local_cafe</span>
                                        </p>
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">wifi</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="locationText">
                                    This address is located on the east side of South
                                    Charlotte Street, close to Princes Street and
                                    Edinburgh’s west end. This highly desirable central
                                    location also benefits from numerous city-centre
                                    transport links.
                                </div>
                                <div>
                                    <button class="locationLearnMore ediLocation">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <!--                Ipswich Location  -->
                <div id="ipswichLocation" class="officeLocation" style="display: none">
                    <div class="locationContent-Edi">
                        <div class="numberOfLocations">
                            <p>Showing <strong>1</strong> location</p>
                        </div>
                        <div class="locationCard ediCard">
                            <div class="locationImg">
                                <img src="Images/locationImg/ipswich-image.jpg" alt="Ipswich, IP1">
                            </div>
                            <div class="locationCardInfo">
                                <div class="locationInfo">
                                    <p class="locationName">Ipswich, IP1</p>
                                    <p class="locationAddress">
                                        50 Princes Street
                                        <br>
                                        Ipswich
                                    </p>
                                </div>
                                <div class="tubeDistance">
                                    <img src="Images/locationImg/train_black.png" alt="Train">
                                    <p>Ipswich Train Station (11-Minute walk)</p>
                                </div>
                                <div class="locationServices">
                                    <div class="meetingIcon">
                                        <img src="Images/locationImg/Group.svg" alt="Meeting Room">
                                        <p class="roomsAvailable">3 Meeting Rooms</p>
                                    </div>
                                    <div class="otherServices">
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">mode_fan</span>
                                        </p>
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">chair</span>
                                        </p>
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">restaurant</span>
                                        </p>
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">local_cafe</span>
                                        </p>
                                        <p class="LIconsStyling">
                                            <span class="material-symbols-outlined LIcons">wifi</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="locationText">
                                    Located in the heart of Ipswich’s prime commercial
                                    office area, directly opposite Willis Plc’s landmark
                                    black glass headquarters building. Public car parks,
                                    restaurants and bars, and Ipswich Waterfront are all
                                    within easy walking distance.
                                </div>
                                <div>
                                    <button class="locationLearnMore ediLocation">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>


<!--  Why Our Clients Choose MYCO  -->
        <section class="chooseMYCO">
          <div class="container-fluid">
              <div class="container">
                  <div class="row">
                      <div class="whyMYCOTitle">
                          <h3 style="text-align: center">Why do our clients choose MYCO Works?</h3>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4">
                          <div class="whyBox">
                              <div class="whyBoxInside">
                                  <img src="Images/WhyMYCO/free-company.svg" alt="Virtual Business Address">
                                  <h3>Virtual Business Address</h3>
                                  <p>
                                      When purchasing a Virtual Business package, you
                                      can use our address as your business address
                                      wherever you need, such as on your website or
                                      stationery.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4">
                          <div class="whyBox">
                              <div class="whyBoxInside">
                                  <img src="Images/WhyMYCO/support.svg" alt="Customer Support">
                                  <h3>Customer Support</h3>
                                  <p>
                                      Receive unlimited support from our customer
                                      service team. Our friendly staff are available
                                      Monday to Friday, 9am - 5.30pm via phone, live
                                      chat, email or in person, to help answer any
                                      questions.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4">
                          <div class="whyBox">
                              <div class="whyBoxInside">
                                  <img src="Images/WhyMYCO/free-mail.svg" alt="Free Unlimited Scans & Email">
                                  <h3>Free Unlimited Scans & Email</h3>
                                  <p>
                                      With all our Virtual Office Address packages, we
                                      include a free unlimited 'Scans & Email' service for
                                      all mail. Mail can also be forwarded or held for
                                      collection.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4">
                          <div class="whyBox">
                              <div class="whyBoxInside">
                                  <img src="Images/WhyMYCO/meeting-rooms.svg" alt="Meeting Rooms">
                                  <h3>Meeting Rooms For Hire</h3>
                                  <p>
                                      Need access to an affordable meeting room for a
                                      brainstorming session, client pitch, collaboration
                                      or get-together with your team? From only £12 an hour.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4">
                          <div class="whyBox">
                              <div class="whyBoxInside">
                                  <img src="Images/WhyMYCO/Account-Icon.svg" alt="Account Management">
                                  <h3>Account Management</h3>
                                  <p>
                                      Our 'Office Support' tool is where you can manage
                                      your account, view mail and telephone messages,
                                      renew subscriptions and add additional services.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4">
                          <div class="whyBox">
                              <div class="whyBoxInside">
                                  <img src="Images/WhyMYCO/Tele-Icon.svg" alt="Telephone Answering">
                                  <h3>Telephone Answering</h3>
                                  <p>
                                      Ideal for startups and SMEs, calls are answered in
                                      your company name by our friendly and
                                      professional staff. Messages are taken and sent
                                      straight to you.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4">
                          <div class="whyBox">
                              <div class="whyBoxInside">
                                  <img src="Images/WhyMYCO/biz-address.svg" alt="Office Locations">
                                  <h3>Prestigious Office Locations</h3>
                                  <p>
                                      Choice of six prestigious virtual office locations
                                      around the UK - four in Central London in the West
                                      End, City and the Strand, one in Central Edinburgh
                                      and one in Ipswich town centre.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4">
                          <div class="whyBox">
                              <div class="whyBoxInside">
                                  <img src="Images/WhyMYCO/Monthly.svg" alt="Annual Service">
                                  <h3>Annual Service</h3>
                                  <p>
                                      Our packages are available on an annual contract
                                      only. We offer 10% off all orders for new clients.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4">
                          <div class="whyBox">
                              <div class="whyBoxInside">
                                  <img src="Images/WhyMYCO/renewals.svg" alt="No Automatic Renewals">
                                  <h3>No Automatic Renewals</h3>
                                  <p>
                                      We do not automatically renew your service with
                                      us. We will contact you near the end of your
                                      subscription to ask if you’re happy to renew.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>


<!--  3 Easy Steps  -->
        <section class="threeSteps">
        <div class="container-fluid">
            <div class="container getStarted">
                <div class="row">
                    <div class="threeStepsTitle">
                        <h3>Get started in 3 quick and easy steps</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="easySteps">
                            <div class="col-4 steps">
                                    <img src="Images/Choose-icon.png" alt="Choose Your Service">
                                    <h4>Choose your service</h4>
                                    <p>
                                        First, Sign up to an individual service or combined
                                        package that meets your business requirements.
                                    </p>
                            </div>
                            <div class="col-4 steps">
                                <img src="Images/Complete%20Order-icon.png" alt="Complete Order">
                                <h4>Complete Order</h4>
                                <p>
                                    Our order process is quick and easy with your
                                    account activated in minutes.
                                </p>
                            </div>
                            <div class="col-4 steps">
                                <img src="Images/Start%20Service-icon.png" alt="Start Using Your Service">
                                <h4>Start using your service</h4>
                                <p>
                                    Once activated, your account is ready. You will also
                                    receive and order conformation email.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>


<!--  Our Apps  -->
        <section>
        <div class="container-fluid ourAppsBanner">
            <div class="container appContainer">
                <div class="row">
                    <div class="appsTitle">
                        <h4>Our Apps</h4>
                    </div>
        <!--                App Buttons  -->
                    <div class="appButtons">
                        <button class="ourApps activeAppTab" onclick="openApp(event, 'MYCOApp')" id="defaultView">MYCO</button>
                        <button class="ourApps" onclick="openApp(event, 'MYCOMailApp')">MYCO Mail</button>
                        <button class="ourApps" onclick="openApp(event, 'MYCOMeetingApp')">MYCO Meeting</button>
                        <button class="ourApps" onclick="openApp(event, 'clientManager')">Client Manager</button>
                    </div>
        <!--                MYCO App  -->
                    <div id="MYCOApp" class="appContent" style="display: block">
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <div class="appText">
                                    <p>
                                        New behaviours, trends and emerging technologies are changing the way we work.
                                        People expect greater flexibility in their work environment, and as we become more
                                        mobile and work on the go more than ever before, staying connected to your
                                        business has never been more essential.
                                    </p>
                                </div>
                                <div class="appList">
                                    <h5 class="appListTitle">Key Features</h5>
                                    <ul class="appList">
                                        <li>
                                            <span class="material-symbols-outlined arrowRight">arrow_right</span> View your scanned mail
                                        </li>
                                        <li>
                                            <span class="material-symbols-outlined arrowRight">arrow_right</span> Instantly receive your telephone messages
                                        </li>
                                        <li>
                                            <span class="material-symbols-outlined arrowRight">arrow_right</span> Choose your mailing preferences
                                        </li>
                                        <li>
                                            <span class="material-symbols-outlined arrowRight">arrow_right</span> Upload your ID
                                        </li>
                                        <li>
                                            <span class="material-symbols-outlined arrowRight">arrow_right</span> Enable push notifications for instant alerts
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 appImgAndButtons">
                                <div class="appStores">
                                    <a href="https://apps.apple.com/gb/app/myco/id1240742424" target="_blank">
                                        <img src="./Images/Apps/App%20Store.png" alt="App Store">
                                    </a>
                                    <a href="https://play.google.com/store/apps/details?id=com.london.home&amp;hl=en" target="_blank">
                                        <img src="./Images/Apps/Google%20Play.png" alt="Google Play Store">
                                    </a>
                                </div>
                                <div class="appImg">
                                    <img src="Images/Apps/Group%2090.png" alt="MYCO App">
                                </div>
                            </div>
                        </div>
                    </div>
        <!--                MYCO Mail App  -->
                    <div id="MYCOMailApp" class="appContent" style="display: none">
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <div class="appText">
                                    <p>
                                        Download our MYCO Mail app to be instantly notified once new mail has been
                                        uploaded to your account. You will be able to access, view and manage mail from
                                        all your accounts in one place.
                                    </p>
                                </div>
                                <div class="appList">
                                    <h5 class="appListTitle">Key Features</h5>
                                    <ul class="appList">
                                        <li>
                                            <span class="material-symbols-outlined arrowRight">arrow_right</span> View your Official & Business scanned mail
                                        </li>
                                        <li>
                                            <span class="material-symbols-outlined arrowRight">arrow_right</span> Request original copies and print mail
                                        </li>
                                        <li>
                                            <span class="material-symbols-outlined arrowRight">arrow_right</span> Update your contact details and mailing address
                                        </li>
                                        <li>
                                            <span class="material-symbols-outlined arrowRight">arrow_right</span> Use face or fingerprint recognition to securely login
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 appImgAndButtons">
                                <div class="appStores">
                                    <a href="https://apps.apple.com/gb/app/myco/id1240742424" target="_blank">
                                        <img src="./Images/Apps/App%20Store.png" alt="App Store">
                                    </a>
                                    <a href="https://play.google.com/store/apps/details?id=com.london.home&amp;hl=en" target="_blank">
                                        <img src="./Images/Apps/Google%20Play.png" alt="Google Play Store">
                                    </a>
                                </div>
                                <div class="appImg">
                                    <img src="Images/Apps/Group%2091.png" alt="MYCO Mail App">
                                </div>
                            </div>
                        </div>
                    </div>
        <!--                MYCO Meeting App  -->
                    <div id="MYCOMeetingApp" class="appContent" style="display: none">
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <div class="appText">
                                    <p>
                                        We offer meeting rooms for a wide range of business needs; impress clients, hold a
                                        brainstorming session with your team, or deliver a winning pitch in our serviced
                                        meeting spaces. We offer meeting room space from 4 up to 12 people in Central
                                        London (West End and the Strand), Edinburgh (South Charlotte Street) and Ipswich
                                        (Princes Street). Our unbranded private meeting rooms are available to book by the
                                        hour or day.
                                        <br>
                                        Book on the move with our app, and our dedicated team will be on hand to ensure
                                        your meeting runs smoothly.
                                    </p>
                                </div>
                                <div class="appList">
                                    <h5 class="appListTitle">Key Features</h5>
                                    <ul class="appList">
                                        <li>
                                            <span class="material-symbols-outlined arrowRight">arrow_right</span> From the app, you can search availability, reserve bookings, and quickly select spaces over multiple days
                                        </li>
                                        <li>
                                            <span class="material-symbols-outlined arrowRight">arrow_right</span> Once you’ve reserved your meeting room, our team will contact you to make payment to confirm your booking
                                        </li>
                                        <li>
                                            <span class="material-symbols-outlined arrowRight">arrow_right</span> Use face or fingerprint recognition to securely login
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 appImgAndButtons">
                                <div class="appStores">
                                    <a href="https://apps.apple.com/gb/app/myco/id1240742424" target="_blank">
                                        <img src="./Images/Apps/App%20Store.png" alt="App Store">
                                    </a>
                                    <a href="https://play.google.com/store/apps/details?id=com.london.home&amp;hl=en" target="_blank">
                                        <img src="./Images/Apps/Google%20Play.png" alt="Google Play Store">
                                    </a>
                                </div>
                                <div class="appImg">
                                    <img src="Images/Apps/Group92.png" alt="MYCO Mail App">
                                </div>
                            </div>
                        </div>
                    </div>
        <!--                Client Manager  -->
                    <div id="clientManager" class="appContent" style="display: none">
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <div class="appText">
                                    <p>
                                        Coming soon! Our newly designed client management software will allow you to
                                        manage your account, view telephone answering messages, booking meeting
                                        space, pay invoices and more - all in one place.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <img src="Images/Apps/Group93.png" alt="Client Manager">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <!--  FAQs  -->
        <section>
            <div class="container-fluid FAQBanner py-md-5 py-0 my-5">
                <div class="container">
                    <div class="row">
                        <h3>Frequently Asked Questions</h3>
                    </div>
                    <div class="row">
                        <!--                  FAQ 1  -->
                        <div class="card">
                            <button class="accordion">Where are your office locations?</button>
                            <div class="panel">
                                <p class="panelText">
                                    MYCO Works has four prestigious Central London addresses in the West End, City and the Strand. We also have further locations in the heart of Edinburgh city centre
                                    and Ipswich town centre and are aiming to soon open offices in Manchester, Cambridge and Gibraltar.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 2  -->
                        <div class="card">
                            <button class="accordion">What will my new company address be?</button>
                            <div class="panel">
                                <p class="panelText">
                                    You will be able to choose a suitable location for your business from our virtual office addresses listed here. You will be able to select the location you
                                    want for your business during the check-out process.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 3  -->
                        <div class="card">
                            <button class="accordion">When was MYCO Works formed?</button>
                            <div class="panel">
                                <p class="panelText">
                                    MYCO Works, a division of Registered Office (UK) Ltd was formed in late 2014 and has since grown to become the one of the UK’s most trusted Virtual
                                    Office service providers with thousands of clients globally.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 4  -->
                        <div class="card">
                            <button class="accordion">Your prices are very competitive, but are there any hidden costs?</button>
                            <div class="panel">
                                <p class="panelText">
                                    We charge £0.20p (+ postal charges) per item of business mail forwarded to you. Upon signing up to any of our Virtual Business packages, we ask for a
                                    £20.00 postal deposit to cover the cost of postage.
                                    <br>
                                    Our listed prices exclude VAT. The UK's standard VAT 'Value Added Tax' rate is 20% and will apply to our services.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 5  -->
                        <div class="card">
                            <button class="accordion">What services do you provide?</button>
                            <div class="panel">
                                <p class="panelText">
                                    We are a business-to-business service provider specialising in affordable and flexible products, including Registered Office Address, Director Service
                                    Address, Virtual Business Address, Company Formations, Ready Made Companies, Telephone Answering services and Meeting Room hire.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 6  -->
                        <div class="card">
                            <button class="accordion">How much do your services cost?</button>
                            <div class="panel">
                                <p class="panelText">
                                    We offer a range of affordable, fully-inclusive and flexible packages with no hidden fees. Click here to view our packages and associated costs. We also
                                    like to help new clients by offering 10% of all new orders. Simply apply for your discount at the top of the page.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 7  -->
                        <div class="card">
                            <button class="accordion">Do I need to provide ID?</button>
                            <div class="panel">
                                <p class="panelText">
                                    Yes, to comply with Anti-Money Laundering (AML) regulations and ‘Know Your Customer’ (KYC) requirements you are required to supply proof of your ID
                                    (passport, driving licence photocard, government-issued ID card, HM Forces ID card, valid Student card, employment ID card, disabled driver blue badge)
                                    and proof of address (utility bill, bank statement, mortgage statement, HMRC Notice of Coding) within seven days. You will be shown where to upload
                                    your ID once your order is complete.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 8  -->
                        <div class="card">
                            <button class="accordion">Which payment methods do you accept?</button>
                            <div class="panel">
                                <p class="panelText">
                                    We accept payment from most credit and debit cards, including Visa, Mastercard and American Express. We cannot accept cheques or cash.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 9  -->
                        <div class="card">
                            <button class="accordion">What are your office opening hours?</button>
                            <div class="panel">
                                <p class="panelText">
                                    Our offices are open from 9am – 5.30pm Monday to Friday (excluding UK public holidays). We are available by phone, live chat or email during these hours.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 10  -->
                        <div class="card">
                            <button class="accordion">Can I cancel any time?</button>
                            <div class="panel">
                                <p class="panelText">
                                    No, if you are not completely satisfied with our services for any reason, you can cancel (in writing) this agreement within 14 days from the date of order, if
                                    our address has not been used for any reason. If you do not cancel within 14 days, the service will continue to operate until such time the service expires.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 11  -->
                        <div class="card">
                            <button class="accordion">How do I join your Partner Program?</button>
                            <div class="panel">
                                <p class="panelText">
                                    We work with many partners who promote our services as their own to generate extra income for their business. Simply complete our contact form to
                                    register your interest, and we will be in touch.
                                </p>
                            </div>
                        </div>


                        <script>
                            const acc = document.getElementsByClassName("accordion");
                            let i;

                            for (i = 0; i < acc.length; i++) {
                                acc[i].addEventListener("click", function() {
                                    this.classList.toggle("faq-active");
                                    const panel = this.nextElementSibling;
                                    if (panel.style.maxHeight) {
                                        panel.style.maxHeight = null;
                                        panel.style.padding = null;
                                    } else {
                                        panel.style.maxHeight = panel.scrollHeight + "140px";
                                        panel.style.padding = panel.style.padding + "50px";
                                    }
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>
        </section>

<!--  Footer  -->
        <?php include 'Footer/Footer.php';?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="main.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script>document.getElementById("defaultView").event();</script>
    </body>
</html>


























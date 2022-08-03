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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="application/javascript" src="main.js"></script>
    <script src=" https://code.jquery.com/jquery-2.1.4.min.js"></script>
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
                <div class="loginButtons">
                    <img src="Images/trolley.png" alt="Cart" class="cart">
                    <button class="client" name="Client Login">Client Log In</button>
                    <button class="enquire" name="Enquire">Enquire</button>
                </div>
            </div>

        </div>
  </header>


<!--  Navigation  -->
  <nav class="container">
      <div class="navigation">
          <div class="nav">
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
          <div class="row">
              <div class="middleBanner">
                  <!--Trusted Clients-->
                  <div class="trustedClients-col trustedClients-col--1 col-xl-2 col-md-3 col-12">
                      <div class="trustedClients-img">
                          <img src="Images/Trusted_Clients.svg" alt="Three stick figures" id="clients"/>
                      </div>
                      <div class="trustedClients-text">
                          <h3>30K+</h3>
                          <p>Global Clients</p>
                      </div>
                  </div>
                  <!--Combines Experience-->
                  <div class="experience-col experience-col--2 col-xl-4 col-md-6 col-12">
                      <div class="experience-img">
                          <img src="Images/Years_of_Experience_icon.svg" alt="A calendar with a tick" id="over100Years">
                      </div>
                      <div class="experience-text">
                          <h3>Over 100 Years</h3>
                          <p>Combined Industry Experience</p>
                      </div>
                  </div>
                  <!--Prestigious Offices-->
                  <div class="prestigiousOffices-col prestigiousOffices-col--3 col-xl-3 col-md-3 col-12 pr-xl-5">
                      <div class="prestigiousOffices-img">
                          <img src="Images/Amazing_Offices_icon.svg" alt="Small building" id="offices">
                      </div>
                      <div class="prestigiousOffices-text">
                          <h3>6</h3>
                          <p>Prestigious Offices</p>
                      </div>
                  </div>
                  <!--Live Chat-->
                  <div class="liveChat-col liveChat-col--4 col-xl-3 col-12 pl-xl-5">
                      <div class="liveChat-img">
                          <div class="inner">
                            <img src="Images/Live%20Chat.png" alt="Speech Bubbles" id="chat">
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


<!--  Business Address Service  -->
  <section class="businessAddressServices">
      <div class="container">
          <div class="row">
<!--         Left-hand Side  -->
              <div class="col-7">
                  <div class="aboutBAS">
                      <h3>Business Address Services</h3>
                      <div class="tab">
                          <button class="BASLinks active" onclick="openSolution(event, 'ROA')" id="defaultView">Registered Office Address</button>
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
              <div class="col-7">
                  <div class="aboutTAS">
                      <h3>Telephone Answering Service</h3>
                  </div>
                  <div class="tab">
                      <button class="TASLinks active" onclick="openTab(event, 'TAS')" id="defaultView">Telephone Answering Service</button>
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
              <div class="col-7">
                  <div class="aboutCFAndRM">
                      <h3>Company Formation & Ready Made Companies</h3>
                      <div class="tab">
                          <button class="CFLinks active" onclick="openCF(event, 'companyFormation')" id="defaultView">Company Formation</button>
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
                      <img src="Images/CF-img.jpg" alt="Company Formation">
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
                       <button class="meetingLinks active" onclick="openMeeting(event, 'ourMeetingRooms')" id="defaultView">Our Meeting Rooms</button>
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
  <div class="container">
      <div class="virtualOfficePackages">
          <h2>Our Virtual Office Packages</h2>
          <p>Save £49.99 when you upgrade to a combined package</p>
      </div>
      <div class="VOPTabs">
          <button class="VOPackages currentlyActive" onclick="openTables(event, 'firstTable')" id="defaultView">Privacy</button>
          <button class="VOPackages" onclick="openTables(event, 'secondTable')">Business Address</button>
          <button class="VOPackages" onclick="openTables(event, 'thirdTable')">Company Formation</button>
          <button class="VOPackages" onclick="openTables(event, 'fourthTable')">Call Answering</button>
          <div class="tabsLine"></div>
      </div>
  </div>


  <section class="privacyTable" id="firstTable" style="display: block">
      <div class="container">
          <div class="privacyText">
              <p>
                  Every company is legally required to have an address where official correspondence, such as letters from Companies House, HM Revenue & Customs (HMRC) or court
                  documents can be sent. Keep your work and home lives separate and protect your privacy by ensuring your residential address stays off the public register with our
                  Registered Office & Director Service Address. Our privacy packages include free mail forwarding or scan and email of all statutory mail.
              </p>
          </div>
      </div>
      <div class="container table1">
<!--          Row 1 - Header Row  -->
          <div class="row">
<!--              Blank Column  -->
              <div class="col-lg-6">
<!--                  Blank  -->
              </div>
<!--              ROA  -->
              <div class="col-sm">
                  <div class="planName">
                      <p>
                          Registered Office
                          <br>
                          Address
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                        <p><small>£</small>39.<small>99</small></p>
                        <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="planButton TopBtnSpace">
                      <button class="tableBtn" name="Learn More">Learn More</button>
                  </div>
              </div>

<!--              ROA + DSA  -->
              <div class="col-sm">
                  <div class="planName">
                      <p>
                          Registered Office &
                          <br>
                          Directors Service
                          <br>
                          Address
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>49.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="planButton TopBtnSpace">
                      <button class="tableBtn" name="Learn More">Learn More</button>
                  </div>
              </div>

<!--              Virtual Business Plus  -->
              <div class="col-sm popular tableBorderRight">
                  <div class="container-fluid pop">
                      <div class="mostPopular">
                          <p>MOST POPULAR</p>
                      </div>
                  </div>
                  <div class="planName">
                      <p>
                          Virtual Business
                          <br>
                          Plus
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>199.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="tableBtn" name="Learn More">Learn More</button>
                  </div>
              </div>
          </div>

<!--          Row 2  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Registered Office Address</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 3  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Option to Forward, Scan, or Collect 'Statutory' Mail</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 4  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Option to Forward, Scan, or Collect 'Business' Mail</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 5  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Mail Sorted Daily</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 6  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Free MYCO Apps</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 7  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Client Portal</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 8  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Directors Service Address</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 9  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Prestigious Business Address</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 10  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Parcels & Packages Signed For</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 11  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Meeting Room Access</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 12  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder tableBorderBottom">
                  <p>Access to Business Lounge</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 13 - Footer  -->
          <div class="row">
<!--              Blank Column  -->
              <div class="col-lg-6">
<!--                  Blank  -->
              </div>
<!--              ROA  -->
              <div class="col-sm tableBorderBottom">
                  <div class="planName">
                      <p>
                          Registered Office
                          <br>
                          Address
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>39.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="planButton bottomBtnSpace">
                      <button class="buyNowBtn" name="Buy Now">Buy Now</button>
                  </div>
              </div>

<!--              ROA + DSA  -->
              <div class="col-sm tableBorderBottom">
                  <div class="planName">
                      <p>
                          Registered Office &
                          <br>
                          Directors Service
                          <br>
                          Address
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>49.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="planButton bottomBtnSpace">
                      <button class="buyNowBtn" name="Buy Now">Buy Now</button>
                  </div>
              </div>

<!--              Virtual Business Plus  -->
              <div class="col-sm popular tableBorderBottom tableBorderRight">
                  <div class="planName">
                      <p>
                          Virtual Business
                          <br>
                          Plus
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>199.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="buyNowBtn" name="Buy Now">Buy Now</button>
                  </div>
              </div>
          </div>
      </div>
  </section>

<!--  Second Table  -->
  <section class="privacyTable" id="secondTable" style="display: none">
      <div class="container">
          <div class="businessAddressText">
              <p>
                  Create an instant presence and improve your business image with our choice of prestigious business addresses. Our most popular 3-in-1 package Virtual Business Plus is
                  perfect for start-ups and SMES and includes a Registered Office Address, Director Service Address and a Virtual Business Address. Our Virtual Business Plus package
                  covers both official and business mail and allows your business access to book meeting rooms and free use of our Business Lounge.
              </p>
          </div>
          <button class="BASubTab activeSubTab" onclick="openSubTabs(event, 'BATable1')" id="defaultView">Individual Packages</button>
          <button class="BASubTab" onclick="openSubTabs(event, 'BATable2')">Combined Packages</button>
      </div>
      <div class="container subTable" id="BATable1">
<!--          Row 1 - Header Row  -->
          <div class="row">
<!--              Blank Column  -->
              <div class="col-lg-6">
<!--                  Blank  -->
              </div>
<!--              ROA  -->
              <div class="col-sm">
                  <div class="planName">
                      <p>
                          Registered Office
                          <br>
                          Address
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>39.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="planButton TopBtnSpace">
                      <button class="tableBtn" name="Learn More">Learn More</button>
                  </div>
              </div>

<!--              ROA + DSA  -->
              <div class="col-sm">
                  <div class="planName">
                      <p>
                          Virtual Business
                          <br>
                          Address
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>169.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="tableBtn" name="Learn More">Learn More</button>
                  </div>
              </div>

<!--              Virtual Business Plus  -->
              <div class="col-sm popular tableBorderRight">
                  <div class="container-fluid pop">
                      <div class="mostPopular">
                          <p>MOST POPULAR</p>
                      </div>
                  </div>
                  <div class="planName">
                      <p>
                          Virtual Business
                          <br>
                          Plus
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>199.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="tableBtn" name="Learn More">Learn More</button>
                  </div>
              </div>
          </div>

<!--          Row 2  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Registered Office Address</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 3  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Option to Forward, Scan, or Collect 'Statutory' Mail</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 4  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Option to Forward, Scan, or Collect 'Business' Mail</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

          <!--          Row 5  -->
          <div class="row table-light">
              <!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Mail Sorted Daily</p>
              </div>
              <!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

          <!--          Row 6  -->
          <div class="row">
              <!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Free MYCO Apps</p>
              </div>
              <!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

          <!--          Row 7  -->
          <div class="row table-light">
              <!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Client Portal</p>
              </div>
              <!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

          <!--          Row 8  -->
          <div class="row">
              <!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Directors Service Address</p>
              </div>
              <!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

          <!--          Row 9  -->
          <div class="row table-light">
              <!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Prestigious Business Address</p>
              </div>
              <!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

          <!--          Row 10  -->
          <div class="row">
              <!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Parcels & Packages Signed For</p>
              </div>
              <!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

          <!--          Row 11  -->
          <div class="row table-light">
              <!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Meeting Room Access</p>
              </div>
              <!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

          <!--          Row 12  -->
          <div class="row">
              <!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder tableBorderBottom">
                  <p>Access to Business Lounge</p>
              </div>
              <!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

          <!--          Row 13 - Footer  -->
          <div class="row">
              <!--              Blank Column  -->
              <div class="col-lg-6">
                  <!--                  Blank  -->
              </div>
              <!--              ROA  -->
              <div class="col-sm tableBorderBottom">
                  <div class="planName">
                      <p>
                          Registered Office
                          <br>
                          Address
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>39.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="planButton bottomBtnSpace">
                      <button class="buyNowBtn" name="Buy Now">Buy Now</button>
                  </div>
              </div>

              <!--              ROA + DSA  -->
              <div class="col-sm tableBorderBottom">
                  <div class="planName">
                      <p>
                          Virtual Business
                          <br>
                          Address
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>169.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="buyNowBtn" name="Buy Now">Buy Now</button>
                  </div>
              </div>

              <!--              Virtual Business Plus  -->
              <div class="col-sm popular tableBorderBottom tableBorderRight">
                  <div class="planName">
                      <p>
                          Virtual Business
                          <br>
                          Plus
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>199.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="buyNowBtn" name="Buy Now">Buy Now</button>
                  </div>
              </div>
          </div>
      </div>


<!--      Sub Tab Table 2  -->
      <div class="container subTable" id="BATable2">
<!--          Row 1 Header Row  -->
          <div class="row">
<!--              Blank Column  -->
              <div class="col-md-3">
<!--                  Blank  -->
              </div>
<!--              VBA & TAS  -->
              <div class="col-sm">
                  <div class="planName">
                      <p>
                          Virtual Business
                          <br>
                          Address & Telephone
                          <br>
                          Answering Service
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>319.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal Deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="tableBtn" name="Learn More">Learn More</button>
                  </div>
              </div>

<!--              VBP & TAS  -->
              <div class="col-sm popular">
                  <div class="container-fluid pop">
                      <div class="mostPopular">
                          <p>MOST POPULAR</p>
                      </div>
                  </div>

                  <div class="planName">
                      <p>
                          Virtual Business Plus &
                          <br>
                          Telephone Answering
                          <br>
                          Service
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>349.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal Deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="tableBtn" name="Learn More">Learn More</button>
                  </div>
              </div>

<!--              VBP & Website + Email Hosting  -->
              <div class="col-sm">
                  <div class="planName">
                      <p>
                          Virtual Business Plus &
                          <br>
                          Website + Email Hosting
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>349.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal Deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="tableBtn" name="Learn More">Learn More</button>
                  </div>
              </div>

<!--              VBP & Legal Document Pack  -->
              <div class="col-sm tableBorderRight">
                  <div class="planName">
                      <p>
                          Virtual Business Plus &
                          <br>
                          Legal Document Pack
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>349.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal Deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="tableBtn" name="Learn More">Learn More</button>
                  </div>
              </div>
          </div>

<!--          Row 2  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Registered Office Address</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 3  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>
                      Option to Forward, Scan, or Collect
                      <br>
                      'Statutory' Mail
                  </p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 4  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>
                      Option to Forward, Scan, or Collect
                      <br>
                      'Business' Mail
                  </p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 5  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Mail Sorted Daily</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 6  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Free MYCO Apps</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 7  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Client Portal</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 8  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Directors Service Address</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 9  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Prestigious Business Address</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 10  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Parcels & Packages Signed For </p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 11  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Meeting Room Access</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 12  -->
          <div class="row tableBorderBottom">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Access to Business Lounge</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row Space  -->

<!--          Row 13  -->
          <div class="row rowBreak table-light">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Telephone Answering Service</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 14  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Choice of Telephone Number</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 15  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Unlimited Inbound Calls</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 16  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Unlimited Messages</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 17  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>One Hour Setup</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 18  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Smartphone Messages</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 19  -->
          <div class="row tableBorderBottom table-light">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Messages Forwarded via Email</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row Space  -->

<!--          Row 20  -->
          <div class="row rowBreak">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>1 Year Free Website Hosting</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 21  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>5 Business Email Addresses</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 22  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Free .co.uk Domain Name</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 23  -->
          <div class="row tableBorderBottom table-light">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Control Panel Access</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row Space  -->

<!--          Row 24  -->
          <div class="row rowBreak">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Share Certificate</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 25  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Bound Set of Documents</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 26  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Solicitor Certified</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 27  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Apostille Certificate</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 28  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-md-3 rowTitle tableBorder tableBorderBottom">
                  <p>Worldwide Shipping</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 29  Footer  -->
          <div class="row">
              <!--              Blank Column  -->
              <div class="col-md-3">
                  <!--                  Blank  -->
              </div>
              <!--              VBA & TAS  -->
              <div class="col-sm tableBorder tableBorderBottom">
                  <div class="planName">
                      <p>
                          Virtual Business
                          <br>
                          Address & Telephone
                          <br>
                          Answering Service
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>319.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal Deposit</p>
                  </div>
                  <div class="planButton bottomBtnSpace">
                      <button class="buyNowBtn" name="Buy Now">Buy Now</button>
                  </div>
              </div>

              <!--              VBP & TAS  -->
              <div class="col-sm popular tableBorder tableBorderBottom">
                  <div class="container-fluid pop">
                      <div class="mostPopular">
                          <p>MOST POPULAR</p>
                      </div>
                  </div>
                  <div class="planName">
                      <p>
                          Virtual Business Plus &
                          <br>
                          Telephone Answering
                          <br>
                          Service
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>349.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal Deposit</p>
                  </div>
                  <div class="planButton bottomBtnSpace">
                      <button class="buyNowBtn" name="Buy Now">Buy Now</button>
                  </div>
              </div>

              <!--              VBP & Website + Email Hosting  -->
              <div class="col-sm tableBorder tableBorderBottom">
                  <div class="planName">
                      <p>
                          Virtual Business Plus &
                          <br>
                          Website + Email Hosting
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>349.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal Deposit</p>
                  </div>
                  <div class="planButton bottomBtnSpace">
                      <button class="buyNowBtn" name="Buy Now">Buy Now</button>
                  </div>
              </div>

              <!--              VBP & Legal Document Pack  -->
              <div class="col-sm tableBorderRight tableBorderBottom">
                  <div class="planName">
                      <p>
                          Virtual Business Plus &
                          <br>
                          Legal Document Pack
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>349.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal Deposit</p>
                  </div>
                  <div class="planButton bottomBtnSpace">
                      <button class="buyNowBtn" name="Buy Now">Buy Now</button>
                  </div>
              </div>
          </div>

      </div>
  </section>




<!--  Third Table  -->
  <section class="privacyTable" id="thirdTable" style="display: none">
      <div class="container">
          <div class="companyFormationText">
              <p>
                  We can help you register your company in the UK no matter where you live in the world. You can secure your company name from only £12.99! With our simple limited
                  'Company Formation Only' package. Or why not protect your home address from the Companies House register and include a Virtual Business Address service, by
                  choosing from our 'Company' and 'Non-Resident' packages. If you are not confident in forming a company on your own, contact our team, and we will be able to help.
              </p>
          </div>
          <button class="CFSubTab activeSubTab">Company Formation Only</button>
          <button class="CFSubTab" id="defaultView">Company Package</button>
          <button class="CFSubTab">Non-Resident Package</button>
      </div>

<!--      Company Formation Only Table  -->
      <div class="container subTable" id="CFTable1" style="display: none">
<!--          Row 1 Header Row  -->
          <div class="row">
<!--              Blank Column  -->
              <div class="col-lg-6">
<!--                  Blank  -->
              </div>
<!--              Company Formation Only  -->
              <div class="col-sm-4 tableBorder tableBorderRight">
                  <div class="planName">
                      <p>
                          Company Formation Only
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>12.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planButton">
                      <button class="tableBtn TopBtnSpace" name="Buy Now">Buy Now</button>
                  </div>
              </div>
          </div>

<!--          Row 2  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Company Formation</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 3  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Companies House Filing Fee</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 4  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Digital Certificate of Incorporation</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 5  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Digital Memorandum & Articles of Association</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 6  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle  tableBorder">
                  <p>Digital Share Certificate(s)</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 7  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Registered Office Address</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 8  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Directors Service Address</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row  9  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Prestigious Business Address</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>


<!--          Row 10  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Telephone Answering Service</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 11  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Printed Certificate of Incorporation</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 12  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Printed Memorandum & Articles of Association</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 13  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Printed Share Certificates</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 14  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Certificate of Good Standing</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 15  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder tableBorderBottom">
                  <p>Apostilled Documents</p>
              </div>
<!--              Table Cell  -->
              <div class="col-sm-4 yes-no tableBorder tableBorderRight">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
          </div>

<!--          Row 16 Footer  -->
          <div class="row">
<!--              Blank Column  -->
              <div class="col-lg-6">
<!--                  Blank  -->
              </div>
<!--              Company Formation Only  -->
              <div class="col-sm-4 tableBorder tableBorderBottom tableBorderRight">
                  <div class="planName">
                      <p>
                          Company Formation Only
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>12.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planButton">
                      <button class="buyNowBtn bottomBtnSpace" name="Buy Now">Buy Now</button>
                  </div>
              </div>
          </div>
      </div>


<!--      Company Packages Table  -->
      <div class="container subTable" id="CFTable2" style="display: block">
<!--          Row 1 Header Row  -->
          <div class="row">
<!--              Blank Column  -->
              <div class="col-md-3">
<!--                  Blank  -->
              </div>
<!--              Starter  -->
              <div class="col-sm">
                  <div class="planName">
                      <p>
                          Starter
                      </p>
                  </div>
                  <div class="ready">
                      <p><small>Ready to Trade Company</small></p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>49.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planButton TopBtnSpace">
                      <button class="tableBtn" name="Learn More">Buy Now</button>
                  </div>
              </div>

<!--              Printed  -->
              <div class="col-sm">
                  <div class="planName">
                      <p>
                          Printed
                      </p>
                  </div>
                  <div class="ready">
                      <p><small>Ready to Trade Company</small></p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>59.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planButton TopBtnSpace">
                      <button class="tableBtn" name="Learn More">Buy Now</button>
                  </div>
              </div>

<!--              Professional  -->
              <div class="col-sm">
                  <div class="planName">
                      <p>
                          Starter
                      </p>
                  </div>
                  <div class="ready">
                      <p><small>Ready for Business</small></p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>49.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="postalDeposit durationSpace">
                      <p>Plus £20 Postal deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="tableBtn" name="Learn More">Buy Now</button>
                  </div>
              </div>

<!--              All-Inclusive  -->
              <div class="col-sm popular tableBorderRight">
                  <div class="mostPopular">
                      <p>MOST POPULAR</p>
                  </div>
                  <div class="planName">
                      <p>
                          All-Inclusive
                      </p>
                  </div>
                  <div class="ready">
                      <p><small>Ready for Business</small></p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>199.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="postalDeposit durationSpace">
                      <p>Plus £20 Postal deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="tableBtn" name="Learn More">Buy Now</button>
                  </div>
              </div>
          </div>

<!--          Row 2  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-md-3 rowTitle tableBorder">
                  <p>Company Formation</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>
      </div>
  </section>




<!--  Fourth Table  -->
  <section class="privacyTable" id="fourthTable" style="display: none">
      <div class="container">
          <div class="callAnsweringText">
              <p>
                  Our cost-effective Telephone Answering Service is ideal for busy start-ups, SMEs, entrepreneurs, and freelancers who don’t have time to answer the phone. Callers will be
                  more confident dialling a number with a local area code, and MYCO Works can provide your business with a local presence to potential customers. Our UK-based
                  receptionists will help you stay connected to your clients, grow your business, and guarantee you never miss a call or opportunity.
              </p>
          </div>
      </div>
      <div class="container table1">
          <!--          Row 1 - Header Row  -->
          <div class="row">
              <!--              Blank Column  -->
              <div class="col-lg-6">
                  <!--                  Blank  -->
              </div>
              <!--              ROA  -->
              <div class="col-sm">
                  <div class="planName">
                      <p>
                          Telephone Answering
                          <br>
                          Service
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>199.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="planButton TopBtnSpace">
                      <button class="tableBtn" name="Learn More">Learn More</button>
                  </div>
              </div>

              <!--              ROA + DSA  -->
              <div class="col-sm">
                  <div class="planName">
                      <p>
                          Virtual Business
                          <br>
                          Address & Telephone
                          <br>
                          Answering Service
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>319.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="tableBtn" name="Learn More">Learn More</button>
                  </div>
              </div>

              <!--              Virtual Business Plus  -->
              <div class="col-sm popular tableBorderRight">
                  <div class="container-fluid pop">
                      <div class="mostPopular">
                          <p>MOST POPULAR</p>
                      </div>
                  </div>
                  <div class="planName">
                      <p>
                          Virtual Business Plus &
                          <br>
                          Telephone Answering
                          <br>
                          Service
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>199.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="tableBtn" name="Learn More">Learn More</button>
                  </div>
              </div>
          </div>

<!--          Row 2  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Telephone Answering Service</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 3  -->
          <div class="row">
<!--              Column Title-->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Choice of Telephone Number</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 4  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Unlimited Inbound Calls</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 5  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Unlimited Messages</p>
              </div>
<!--              Table Cells-->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 6  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>One Hour Setup</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 7  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Smartphone Messages</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 8  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Messages Forwarded Via Email</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 9  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Registered Office Address</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 10  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Option to Forward, Scan, or Collect 'Statutory' Mail</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 11  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Option to Forward, Scan, or Collect 'Business' Mail</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

    <!--          Row 12  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Mail Sorted Daily</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 13  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Free MYCO Apps</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 14  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Client Portal</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 15  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Directors Service Address</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 16  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Prestigious Business Address</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

          <!--          Row 17  -->
          <div class="row">
              <!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Parcels & Packages Signed For</p>
              </div>
              <!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 18  -->
          <div class="row table-light">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder">
                  <p>Meeting Room Access</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 19  -->
          <div class="row">
<!--              Column Title  -->
              <div class="col-lg-6 rowTitle tableBorder tableBorderBottom">
                  <p>Access to Business Lounge</p>
              </div>
<!--              Table Cells  -->
              <div class="col-sm yes-no">
                  <span class="material-icons no">horizontal_rule</span>
              </div>
              <div class="col-sm yes-no">
                  <span class="material-icons yes">check</span>
              </div>
              <div class="col-sm yes-no popular tableBorderRight">
                  <span class="material-icons yes">check</span>
              </div>
          </div>

<!--          Row 20 - Footer  -->
          <div class="row">
<!--              Blank Column  -->
              <div class="col-lg-6">
<!--                  Blank  -->
              </div>
<!--              ROA  -->
              <div class="col-sm tableBorderBottom">
                  <div class="planName">
                      <p>
                          Telephone Answering
                          <br>
                          Service
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>199.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="planButton bottomBtnSpace">
                      <button class="buyNowBtn" name="Buy Now">Buy Now</button>
                  </div>
              </div>

<!--              ROA + DSA  -->
              <div class="col-sm tableBorderBottom">
                  <div class="planName">
                      <p>
                          Virtual Business
                          <br>
                          Address & Telephone
                          <br>
                          Answering Service
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>319.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="buyNowBtn" name="Buy Now">Buy Now</button>
                  </div>
              </div>

<!--              Virtual Business Plus  -->
              <div class="col-sm popular tableBorderBottom tableBorderRight">
                  <div class="planName">
                      <p>
                          Virtual Business Plus &
                          <br>
                          Telephone Answering
                          <br>
                          Service
                      </p>
                  </div>
                  <div class="planPrice">
                      <div class="price">
                          <p><small>£</small>349.<small>99</small></p>
                          <span class="vat">+VAT</span>
                      </div>
                  </div>
                  <div class="planDuration">
                      <p>Per Year</p>
                  </div>
                  <div class="postalDeposit">
                      <p>Plus £20 Postal deposit</p>
                  </div>
                  <div class="planButton">
                      <button class="buyNowBtn" name="Buy Now">Buy Now</button>
                  </div>
              </div>
          </div>
      </div>
  </section>












  <footer>
<!--      Footer Logos  -->
      <div class="container">
          <div class="row">
              <div class="footerLogos">
                  <img src="Images/HM.png" alt="Footer Logo's">
              </div>
          </div>
      </div>

<!--      Footer Info and Mailing List  -->
      <div class="container-fluid" id="footerLower">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="footerInfo">
                          <div class="col-8" id="greyLine">
                              <div>
                                  <img src="Images/Sales.png" alt="Sales" class="footerIcons">
                                  <p>Sales</p>
                                  <p><strong>020 7183 3787</strong></p>
                              </div>
                              <div>
                                  <img src="Images/supportFooter.png" alt="Support" class="footerIcons">
                                  <p>Support</p>
                                  <p><strong>020 7183 2653</strong></p>
                              </div>
                              <div>
                                  <img src="Images/companyFormations.png" alt="Company Formations" class="footerIcons">
                                  <p>Company Formations</p>
                                  <p><strong>020 7183 5369</strong></p>
                              </div>
                              <div>
                                  <img src="Images/openingHours.png" alt="Opening Hours" class="footerIcons">
                                  <p>Opening Hours</p>
                                  <p><strong>09:00 - 17:30</strong></p>
                                  <p>Monday to Friday</p>
                              </div>
                          </div>
                          <div class="col-4" id="mailingList">
                              <div>
                                  <p>Want 10% off your first order?</p>
                                  <p>Join our mailing list</p>
                                  <div class="enterEmailAddress">
                                      <label for="customerEmailAddress"></label><input id="customerEmailAddress" type="text" name="customerEmailAddress" placeholder="Enter your email address..."><button id="subscribe" type="button">Subscribe</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

<!--      Footer Links  -->
      <div class="container-fluid" id="footerLinks">
          <div class="container">
              <div class="row">
                  <div class="MYCOFooter">
                      <div class="MYCOText">
                          <img src="Images/MYCOFooterLogo.png" alt="MYCO Works">
                          <p>
                              MYCO Works is a UK-based, behind-the-scenes
                              B2B service provider, specialising
                              in Registered Office Address, Director
                              Service Address, Virtual Business
                              Address, Company Formations, Ready
                              Made Companies, Meeting Space and
                              Telephone Answering services with cost-effective
                              packages and customer service at its core.
                          </p>
                      </div>

                      <div class="links">
                          <div class="ourServices">
                              <h4>Our Services</h4>
                              <ul>
                                  <li>Registered Office Address</li>
                                  <li>Director Service Address</li>
                                  <li>Virtual Business Address</li>
                                  <li>Virtual Business Plus</li>
                              </ul>
                          </div>

                          <div class="additionalServices">
                              <h4>Additional Services</h4>
                              <ul>
                                  <li>Telephone Answering Service</li>
                                  <li>Company Formation</li>
                                  <li>Meeting Rooms</li>
                                  <li>Ready Made Companies</li>
                              </ul>
                          </div>

                          <div class="ourCompany">
                              <h4>Our Company</h4>
                              <ul>
                                  <li>Make A Payment</li>
                                  <li>About Us</li>
                                  <li>Meet The Team</li>
                                  <li>Our Blog</li>
                                  <li>Our Locations</li>
                                  <li>Pricing</li>
                                  <li>FAQs</li>
                              </ul>
                          </div>
                      </div>

                      <div class="contactUs">
                          <h4>Contact Us</h4>
                          <p>
                              Our Registered Address:<br>
                              85 Great Portland St<br>
                              First Floor<br>
                              London<br>
                              W1W 7LT<br>
                              United Kingdom
                          </p>
                          <a class="footerContact d-flex align-items-center" href="tel:02071125367">
                              <i class="fas fa-phone-alt" aria-hidden="true">
                                  ::before
                              </i>
                              <span>+44 (0) 207 112 5367</span>
                          </a>
                          <a class="footerContact d-flex align-items-center" href="mailto:contact@mycosupport.co.uk">
                             <i class="fas fa-envelope" aria-hidden="true">
                                 ::before
                             </i>
                            <span>contact@mycosupport.co.uk</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

<!--      Copyright  -->
      <div class="container-fluid" id="copyrightTermsAndConditions">
          <div class="container">
              <div class="row">
                  <div class="copyright">
                      <div class="col-8" id="endOfPage">
                          <p>&copy 2022 Registered Office (UK) Ltd, All Rights Reserved. Trading as The London Office   | VAT No: GB263877953 | Company No: 09347868</p>
                      </div>
                      <div class="col-4" id="TAndC">
                          <p>Privacy & Cookies</p>
                          <p>Terms & Conditions</p>
                          <p>Site Security</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>

  </body>
</html>


























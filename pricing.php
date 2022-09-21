<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Our Pricing & Packages</title>
        <!--  Git Hub  -->
        <link href="https://github.com/Lefty-Squish/TestSite.git"/>
        <!--  CSS  -->
        <link href="main.css" rel="stylesheet"/>
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
        <!--  HTML Links  -->
        <link href="index.php" rel="index">
        <link href="Footer/Footer.php" rel="section">
        <link href="Tables/Table1.php">
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

        <section class="pricingBanner">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
<!--                     Left Side  -->
                        <div class="col-7 pricingTitle">
                            <h1>Our Pricing & Packages</h1>
                            <h5>Get <label>10% off</label> all new orders!</h5>
                            <p>
                                At MYCO Works we provide a wide range of competitively priced packages and choice if virtual
                                office addresses for you to choose from. Select the best prestigious location for your business
                                and impress your clients!
                            </p>
                            <p>
                                We also offer 10% off all new orders! Plus, save even more when you purchase a combined
                                package. If you're unsure which package you need, our knowledgeable staff can help
                                recommend the correct package for your business requirements.
                            </p>
                        </div>
<!--                     Right Side  -->
                        <div class="col-5">
                            <div class="P&PImage">
                                <img src="Images/Pricing/pricing.png" alt="Pricing and Packages">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include 'Tables/Table1.php';?>

<!--        Unsure Diagram  -->
        <section id="unsureChart" class="py-md-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5">
                        <h1 class="h3 text-center">
                            Unsure which virtual Business Address package you need?
                        </h1>
                        <p class="text-center mx-auto mb-md-5" style="color: #505050">
                            Use our handy flow diagram to quickly discover which of our
                            <br>
                            packages best suits your business requirements.
                        </p>
<!--                        Chart  -->
                        <div class="serviceChart py-5">
<!--                            Box 1: What Type Of Mail Do You Need -->
                            <div class="box1">
                                <p>
                                    What type of mail do you need to receive?
                                </p>
                            </div>
                            <div class="box1After">
                                <div class="arrow arrow--1"></div>
                                <div class="arrow arrow--2"></div>
                                <div class="arrow arrow--3"></div>
                                <div class="horizontal"></div>
                            </div>
<!--                            Official Mail Only  -->
                            <div class="mailbox mailbox--1 d-flex justify-content-center align-items-center">
                                <p>
                                    Official Mail Only
                                </p>
                            </div>
<!--                            Business Mail Only  -->
                            <div class="mailbox mailbox--2 d-flex justify-content-center align-items-center">
                                <p>
                                    Business Mail Only
                                </p>
                            </div>
<!--                            Official And Business Mail  -->
                            <div class="mailbox mailbox--3 d-flex justify-content-center align-items-center">
                                <p>
                                    Official & Business Mail
                                </p>
                            </div>
<!--                            Arrows After Boxes to You Need Box  -->
                            <div class="arrow arrow--4"></div>
                            <div class="arrow arrow--5"></div>
                            <div class="arrow arrow--6"></div>
<!--                            Box 2: You Need To Buy  -->
                            <div class="box2">
                                <p>
                                    You Need To Buy
                                </p>
                            </div>
<!--                            Arrows From Box 2  -->
                            <div class="arrow arrow--7"></div>
                            <div class="arrow arrow--8"></div>
                            <div class="arrow arrow--9"></div>
<!--                            Service Box 1: Registered Office Address  -->
                            <div class="serviceBox serviceBox--1 serviceBox--purple serviceBox--or d-flex justify-content-center align-items-center">
                                <a>
                                    <p>
                                        Registered Office Address
                                    </p>
                                </a>
                                <div class="arrow--vertical"></div>
                            </div>
<!--                            Service Box 2: Registered Office Address + Directors Service Address  -->
                            <div class="serviceBox serviceBox--2 serviceBox--purple d-flex justify-content-center align-items-center">
                                <a>
                                    <p>
                                        Registered Office Address
                                        <br>
                                        +
                                        <br>
                                        Directors Service Address
                                    </p>
                                </a>
                            </div>
<!--                            Service Box 3: Virtual Business Address  -->
                            <div class="serviceBox serviceBox--3 serviceBox--green serviceBox--or d-flex justify-content-center align-items-center">
                                <a>
                                    <p>
                                        Virtual Business Address
                                    </p>
                                </a>
                                <div class="arrow--vertical"></div>
                            </div>
<!--                            Service Box 4: Virtual Business Address + Telephone Answering Service  -->
                            <div class="serviceBox serviceBox--4 serviceBox--green d-flex justify-content-center align-items-center">
                                <a>
                                    <p>
                                        Virtual Business Address
                                        <br>
                                        +
                                        <br>
                                        Telephone Answering Service
                                    </p>
                                </a>
                            </div>
<!--                            Service Box 5: Virtual Business Plus  -->
                            <div class="serviceBox serviceBox--5 serviceBox--orange serviceBox--or d-flex justify-content-center align-items-center">
                                <a>
                                    <p>
                                        Virtual Business Plus
                                    </p>
                                </a>
                                <div class="arrow--vertical"></div>
                            </div>
<!--                            Service Box 6: Virtual Business Plus + Telephone Answering Service  -->
                            <div class="serviceBox serviceBox--6 serviceBox--orange serviceBox--or d-flex justify-content-center align-items-center">
                                <a>
                                    <p>
                                        Virtual Business Plus
                                        <br>
                                        +
                                        <br>
                                        Telephone Answering Service
                                    </p>
                                </a>
                                <div class="arrow--vertical"></div>
                            </div>
<!--                            Service Box 7: Virtual Business Plus + Legal Document Pack  -->
                            <div class="serviceBox serviceBox--7 serviceBox--orange serviceBox--or d-flex justify-content-center align-items-center">
                                <a>
                                    <p>
                                        Virtual Business Plus
                                        <br>
                                        +
                                        <br>
                                        Legal Document Pack
                                    </p>
                                </a>
                                <div class="arrow--vertical"></div>
                            </div>
<!--                            Service Box 8: Virtual Business Plus + Website & Email Hosting  -->
                            <div class="serviceBox serviceBox--8 serviceBox--orange mb-0 d-flex justify-content-center align-items-center">
                                <a>
                                    <p>
                                        Virtual Business Plus
                                        <br>
                                        +
                                        <br>
                                        Website & Email Hosting
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--    Our Locations  -->
        <section class="locationsBanner">
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
                            <button class="accordion">Which payment methods do you accept?</button>
                            <div class="panel">
                                <p class="panelText">
                                    We accept payment from most credit and debit cards, including Visa, Mastercard, and American Express. We cannot accept cheques, cash, or PayPal payments.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 2  -->
                        <div class="card">
                            <button class="accordion">Do you offer any discounts?</button>
                            <div class="panel">
                                <p class="panelText">
                                    Yes. We offer a 10% discount on all orders for new clients. You can also save more when you upgrade to a combined package.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 3  -->
                        <div class="card">
                            <button class="accordion">Do I need to pay a postal deposit?</button>
                            <div class="panel">
                                <p class="panelText">
                                    For all services that include receiving business mail, we require a £20 postal deposit to cover the cost of forwarding your business mail on to you.
                                    When opting for forwarding, business mail is charged at 20p per letter (plus the cost of forwarding). Once the deposit runs out you will be required to top
                                    it back up. A notification will be sent to you when you fall under £5.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 4  -->
                        <div class="card">
                            <button class="accordion">I don't know which service I require. Can you help?</button>
                            <div class="panel">
                                <p class="panelText">
                                    Of course. While we try simplifying our services as much as possible, we realise some terms can seem confusing - especially if you are just starting out.
                                    Our friendly and knowledgeable team at MYCO Works are happy to help walk you through the order process and answer any questions or queries you
                                    have about any of our services.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 5  -->
                        <div class="card">
                            <button class="accordion">Your prices are very competitive, but are there any hidden costs?</button>
                            <div class="panel">
                                <p class="panelText">
                                    We charge £0.20p (+ postal charges) per item of business mail forwarded to you. Upon signing up to any of our Virtual Business packages, we ask for a
                                    £20.00 postal deposit to cover the cost of postage.
                                    <br>
                                    Our listed prices exclude the VAT. The UK's standard VAT 'Value Added Tax' rate is 20% and will apply to our services.
                                </p>
                            </div>
                        </div>
                        <!--                  FAQ 6  -->
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
                        <!--                  FAQ 7  -->
                        <div class="card">
                            <button class="accordion">Can I cancel at anytime?</button>
                            <div class="panel">
                                <p class="panelText">
                                    No, if you are not completely satisfied with our service for any reason, you can cancel (in writing) this agreement withing 14 days from the date of order, if
                                    our address has not been used for any reason. If you do not cancel withing 14 days, the service will continue to operate until such a time the service expires.
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
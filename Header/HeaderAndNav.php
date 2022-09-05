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
        <div class="container-fluid" id="topBanner">
            <div class="container" id="topHeader">
                <div class="headerWrap">
                    <a href="tel:02071225367" class="phoneNumber" aria-hidden="true">
                        <i class="fas fa-phone" id="phone"></i>
                        <span>+44 (0) 207 112 5367</span>
                    </a>
                    <p id="offer">
                        Want 10% off your first order?
                        <a id="clickHere"> Click Here</a>
                    </p>
                    <div class="contactInfo">
                        <ul>
                            <li>
                                <a href="https://www.linkedin.com/company/registered-office-uk-ltd/" target="_blank">
                                    <i id="linkedin" class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/registeredoffice" target="_blank">
                                    <i id="facebook" class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/registered_uk" target="_blank">
                                    <i id="twitter" class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/the_registered_office/" target="_blank">
                                    <i id="instagram" class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCta11jQVd3gugZVu-da8bjQ" target="_blank">
                                    <i id="youtube" class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--  Header  -->
        <header class="container-fluid headerMain">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="clientLogin">
                            <img class="mycoLogo" src="Images/myco-works-logo.svg" alt="MyCo Works Logo">
                            <div class="loginButtons">
                                <img src="Images/trolley.png" alt="Cart" class="cart">
                                <button class="client" name="Client Login">Client Log In</button>
                                <button class="enquire" name="Enquire">Enquire</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <!--  Navigation  -->
        <section class="navBanner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="nav_menu">
                            <div class="navbar px-0">
                                <ul id="nav-lists">
                                    <!--                                    Home  -->
                                    <li>
                                        <a class="home pl-0" href="http://test-site.test/#">
                                            <img src="Images/home-icon.svg" alt="home">
                                        </a>
                                    </li>
                                    <!--                                    Address Services Dropdown -->
                                    <li id="addressDropDownBtn">
                                        <a class="mainNavigation_link" href="javascript:void(0)">
                                            Address Services
                                            <i id="addressDropDownArrow" class="fa fa-chevron-down" aria-hidden="true" style="transform: rotate(0deg)"></i>
                                        </a>
                                        <!--                                        Drop Down  -->
                                        <ul id="addressDropDown" class="mega-menu position-absolute text-left mt-3 p-0 w-100 hideDropDown">
                                            <li>
                                                <div class="container-fluid">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12 col-xl-9 pb-4">
                                                            <div class="container-fluid d-flex flex-column h-100 justify-content-between p-0">
                                                                <div class="row">
                                                                    <div class="col-12 col-md-12 col-xl-5 mega-menu-column px-4 py-5">
                                                                        <div class="column-header">
                                                                            <h5 class="mega-menu-column-title text-orange m-0 mb-3">Address Services</h5>
                                                                            <p class="text-white m-0">
                                                                                Make the perfect first impression with a prestigious virtual business address.
                                                                            </p>
                                                                        </div>
                                                                        <ul class="p-0 mt-4 text-left">
                                                                            <li class="d-block mb-2">
                                                                                <a class="p-0 text-white mega-menu-link" href="https://mycoworks.co.uk/registered-office-address">
                                                                                    <i class="fa fa-sort-up rotate-clockwise-90 mr-2" aria-hidden="true"></i>
                                                                                    Registered Office Address
                                                                                </a>
                                                                            </li>
                                                                            <li class="d-block mb-2">
                                                                                <a class="p-0 text-white mega-menu-link" href="https://mycoworks.co.uk/director-service-address">
                                                                                    <i class="fa fa-sort-up rotate-clockwise-90 mr-2" aria-hidden="true"></i>
                                                                                    Directors Service Address
                                                                                </a>
                                                                            </li>
                                                                            <li class="d-block mb-2">
                                                                                <a class="p-0 text-white mega-menu-link" href="https://mycoworks.co.uk/virtual-business-address">
                                                                                    <i class="fa fa-sort-up rotate-clockwise-90 mr-2" aria-hidden="true"></i>
                                                                                    Virtual Business Address
                                                                                </a>
                                                                            </li>
                                                                            <li class="d-block mb-2">
                                                                                <a class="p-0 text-white mega-menu-link" href="https://mycoworks.co.uk/virtual-business-plus">
                                                                                    <i class="fa fa-sort-up rotate-clockwise-90 mr-2" aria-hidden="true"></i>
                                                                                    Virtual Business Plus
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-12 col-md-12 col-xl-7 mega-menu-column px-4 py-5">
                                                                        <div class="column-header">
                                                                            <h5 class="mega-menu-column-title text-orange m-0 mb-3">Combined Services</h5>
                                                                            <p class="text-white m-0">
                                                                                Save £49.99 when you upgrade to a combined virtual business package.
                                                                            </p>
                                                                        </div>
                                                                        <ul class="p-0 mt-4 text-left">
                                                                            <li class="d-block mb-2">
                                                                                <a class="p-0 text-white mega-menu-link" href="https://mycoworks.co.uk/virtual-business-address-and-telephone-answering-service">
                                                                                    <i class="fa fa-sort-up rotate-clockwise-90 mr-2" aria-hidden="true"></i>
                                                                                    Virtual Business Address & Telephone Answering Service
                                                                                </a>
                                                                            </li>
                                                                            <li class="d-block mb-2">
                                                                                <a class="p-0 text-white mega-menu-link" href="https://mycoworks.co.uk/virtual-business-plus-and-telephone-answering-service">
                                                                                    <i class="fa fa-sort-up rotate-clockwise-90 mr-2" aria-hidden="true"></i>
                                                                                    Virtual Business Plus & Telephone Answering Service
                                                                                </a>
                                                                            </li>
                                                                            <li class="d-block mb-2">
                                                                                <a class="p-0 text-white mega-menu-link" href="https://mycoworks.co.uk/virtual-business-plus-and-website-and-email-hosting">
                                                                                    <i class="fa fa-sort-up rotate-clockwise-90 mr-2" aria-hidden="true"></i>
                                                                                    Virtual Business Plus & Website & Email Hosting
                                                                                </a>
                                                                            </li>
                                                                            <li class="d-block mb-2">
                                                                                <a class="p-0 text-white mega-menu-link" href="https://mycoworks.co.uk/virtual-business-plus-and-legal-document-pack">
                                                                                    <i class="fa fa-sort-up rotate-clockwise-90 mr-2" aria-hidden="true"></i>
                                                                                    Virtual Business Plus & Legal Document Pack
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="row w-100 d-none d-xl-flex">
                                                                    <div class="col-12">
                                                                        <div class="mega-menu-call-to-action bg-white d-flex justify-content-between align-content-center rounded p-3">
                                                                            <p class="call-to-action-text m-0 align-self-center font-weight-bold">
                                                                                Need help? Contact our support team by phone, live chat, or email
                                                                            </p>
                                                                            <a href="https://mycoworks.co.uk/contact-us">
                                                                                <button class="btn btn-orange text-white">Contact Us</button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 bg-deep-blue py-5 d-none d-xl-block mega-menu-offer-sidebar-wrap">
                                                            <div class="mega-menu-offer-sidebar px-3">
                                                                <p class="text-center text-white font-weight-bold">Want 10% OFF your first order?</p>
                                                                <p class="text-left text-white">
                                                                    Subscribe to our MYCO Works mailing list and receive a 10% discount code
                                                                    <a class="text-orange p-0" href="https://mycoworks.co.uk/terms-and-conditions" target="_blank">T&Cs apply</a>
                                                                </p>
                                                                <div class="mega-menu-offer-sidebar-thumbnail">
                                                                    <img class="w-100" src="Images/logo_add.png" alt="MYCO Works">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--                                    Company Formation Dropdown -->
                                    <li id="formationDropDownBtn">
                                        <a class="mainNavigation_link" href="javascript:void(0)">
                                            Company Formation
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                    </li>
                                    <!--                                    Pricing  -->
                                    <li>
                                        <a>
                                            Pricing
                                        </a>
                                    </li>
                                    <!--                                    Other Services Dropdown -->
                                    <li id="servicesDropDownBtn">
                                        <a class="mainNavigation_link" href="javascript:void(0)">
                                            Other Services
                                            <i id="servicesDropDownArrow" class="fa fa-chevron-down" aria-hidden="true" style="transform: rotate(0deg)"></i>
                                        </a>
                                        <!--                                        Drop Down  -->
                                        <ul id="servicesDropDown" class="mega-menu position-absolute text-left mt-3 p-0 w-100 hideDropDown" >
                                            <div class="container-fluid">
                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-12 col-xl-9 pb-4">
                                                        <div class="container-fluid d-flex flex-column h-100 justify-content-between p-0">
                                                            <div class="row">
                                                                <div class="col-12 col-md-12 col-xl-6 mega-menu-column px-4 py-5 padding_zero_mobile">
                                                                    <div class="column-header">
                                                                        <h5 class="mega-menu-column-title text-orange m-0 mb-3">Meeting Rooms</h5>
                                                                        <p class="text-white m-0">We have a range of contemporary, unbranded private meeting rooms available for hire from 4 to 12 people.</p>
                                                                    </div>
                                                                    <ul class="p-0 mt-4 text-left">
                                                                        <li class="d-block mb-2"><a href="https://mycoworks.co.uk/meeting-rooms-london" class="p-0 text-white mega-menu-link "><i class="fa fa-sort-up rotate-clockwise-90 mr-2" aria-hidden="true"></i> London Meeting Rooms</a></li>
                                                                        <li class="d-block mb-2"><a href="https://mycoworks.co.uk/meeting-rooms-edinburgh" class="p-0 text-white mega-menu-link "><i class="fa fa-sort-up rotate-clockwise-90 mr-2" aria-hidden="true"></i> Edinburgh Meeting Rooms</a></li>
                                                                        <li class="d-block mb-2"><a href="https://mycoworks.co.uk/meeting-rooms-ipswich" class="p-0 text-white mega-menu-link "><i class="fa fa-sort-up rotate-clockwise-90 mr-2" aria-hidden="true"></i> Ipswich Meeting Rooms</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-12 col-md-12 col-xl-6 mega-menu-column px-4 py-5 padding_zero_mobile">
                                                                    <div class="column-header">
                                                                        <h5 class="mega-menu-column-title text-orange m-0 mb-3">Business Call Answering</h5>
                                                                        <p class="text-white m-0">Stay connected to your clients and guarantee you never miss a call or opportunity.</p>
                                                                    </div>
                                                                    <ul class="p-0 mt-4 text-left">
                                                                        <ul class="p-0 mt-4 text-left">
                                                                            <li class="d-block mb-2"><a href="https://mycoworks.co.uk/telephone-answering-service" class="p-0 text-white mega-menu-link "><i class="fa fa-sort-up rotate-clockwise-90 mr-2" aria-hidden="true"></i> Telephone Answering Service</a></li>
                                                                        </ul>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="row w-100 d-none d-xl-flex">
                                                                <div class="col-12">
                                                                    <div class="mega-menu-call-to-action bg-white d-flex justify-content-between align-content-center rounded p-3">
                                                                        <p class="call-to-action-text m-0 align-self-center font-weight-bold">Need help? Contact our support team by phone, live chat, or email</p>
                                                                        <a href="https://mycoworks.co.uk/contact-us"><button class="btn btn-orange text-white">Contact us</button></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 bg-deep-blue py-5 d-none d-xl-block mega-menu-offer-sidebar-wrap">
                                                        <div class="mega-menu-offer-sidebar px-3">
                                                            <p class="text-center text-white font-weight-bold">Want 10% OFF your first order?</p>
                                                            <p class="text-left text-white">Subscribe to our MYCO Works mailing list and receive a 10% off discount code. <a class="text-orange p-0" href="https://mycoworks.co.uk/terms-and-conditions" target="_blank">T&amp;Cs apply</a></p>
                                                            <div class="mega-menu-offer-sidebar-thumbnail">
                                                                <img class="w-100" src="https://mycoworks.co.uk/assets/img/logo_add.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <!--                                    Locations Dropdown -->
                                    <li id="locationDropDownBtn">
                                        <a class="mainNavigation_link" href="javascript:void(0)">
                                            Locations
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                    </li>
                                    <!--                                    FAQs  -->
                                    <li>
                                        <a>
                                            FAQs
                                        </a>
                                    </li>
                                    <!--                                    Partners  -->
                                    <li>
                                        <a>
                                            Partners
                                        </a>
                                    </li>
                                    <!--                                    Blog  -->
                                    <li>
                                        <a>
                                            Blog
                                        </a>
                                    </li>
                                    <!--                                    About Us Dropdown -->
                                    <li id="aboutDropDownBtn">
                                        <a class="mainNavigation_link" href="javascript:void(0)">
                                            About Us
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                    </li>
                                    <!--                                    Contact Us  -->
                                    <li>
                                        <a>
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  To Top Button  -->
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <i class="fa-solid fa-angle-up"></i>
        </button>
        <script>
            const myButton = document.getElementById("myBtn");

            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                    myButton.style.display = "block";
                } else {
                    myButton.style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="main.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script>document.getElementById("defaultView").event();</script>
    </body>
</html>



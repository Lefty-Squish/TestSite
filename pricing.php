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
                        <div class="col-12">
<!--                            Left Side  -->
                            <div class="col-7 pricingTitle">
                                <h1>Our Pricing & Packages</h1>
                                <h5>Get <label>10% off</label> all new orders!</h5>
                                <p>
                                    At MYCO Works we provide a wide range of competitively priced packages and choice if virtual
                                    office addresses for you to choose from. Select the best prestigious location for your business
                                    and impress your clients!
                                    <br>
                                    We also offer 10% off all new orders! Plus, save even more when you purchase a combined
                                    package. If you're unsure which package you need, our knowledgeable staff can help
                                    recommend the correct package for your business requirements.
                                </p>
                            </div>
<!--                            Right Side  -->
                            <div class="col-5">
                                <div class="P&PImage">
                                    <img src="Images/Pricing/pricing.png" alt="Pricing and Packages">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include 'Tables/Table1.php';?>

<!--        Unsure Diagram  -->
        <section id="unsureChart">
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5">
                        <h1 class="h3 text-center">
                            Unsure which virtual Business Address package you need?
                        </h1>
                        <p class="text-center mx-auto mb-md-5">
                            Use our handy flow diagram to quickly discover which of our packages best suits your business requirements.
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
<html>
<head>
    <?php include('settings.php'); ?>
</head>

<body>
    <?php include('nav.php'); ?>

    <section class="welcome-section">
        <div class="container">
            <div class="center">
                <h1 class="welcome-text" style="margin-top:inherit">R.L. Dashbach</h1><h3> & </h3><h1 class="welcome-text">Associates</h1>
                <h1 class="welcome-text subtitle">Family Dentistry</h1>
                <div style="margin:10px">
                    <p>Our family of caring doctors & staff concentrate on your family's needs.</p>
                    <p>Your smile is our reward.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Begin Carousel -->
    <section class="welcome-carousel">
        <div class="jumbotron">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <img src="images/doctors_smallest.jpg" alt="First slide">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="carousel-caption">
                                        <h1>Meet the Doctors</h1>
                                        <p>Our talanted team of professionals practice the art of dentistry and achieve the high standards we set for ourselves.</p>
                                        <p><a class="btn btn-lg btn-primary" href="meet_the_doctors.html" role="button">View Pictures</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="carousel-caption">
                                        <h2 class="font-normal">RESEARCHED.</h2>
                                        <h2 class="font-heavy"> PROVEN. </h2>
                                        <h2 class="font-very-heavy">ENDORSED BY HIPPA BUSINESS PRACTICES.</h2>
                                        <br />
                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#hippa1Modal">Hippa Privacy Form One</button>
                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#hippa2Modal">Hippa Privacy Form Two</button>
                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#medHistModal">Medical History Form</button>
                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#surgModal">Surgical Form</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item item-office">
                        <div class="container">
                            <div class="center">
                                <div class="carousel-caption">
                                    <h1>Our Office</h1>
                                    <p><a class="btn btn-lg btn-primary" href="photo_gallery.php" role="button">Browse gallery</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- End Carousel -->

    <section class="statement-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="statement-container">
                    <p class="statement-details">Our team adheres to the principle of a working, accurate and truthful diagnosis for each dental procedure.  Our skills are developed to a point that each treatment can be individualized for each specific patient's needs.</p>
                    <p class="statement-details">We expect each team member to deliver patient care to the utmost of their ability, with consistent and driven results under an emphasis on quality.</p>
                    <p class="font-very-heavy statement-details">Enjoy a great smile today.</p>
                    <span><a class="btn btn-lg btn-primary" href="#" role="button">Read the Rest of our Mission Statement</a></span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>

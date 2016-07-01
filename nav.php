<nav class="navbar navbar-fixed-top">
    <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">R.L. Daschbach & Associates</a>
            </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="services.php">Services</a></li>
                <!--
                <li>
                    <a class="dropdown dropdown-toggle" id="dropwdownMenu1" data-toggle="dropdown" aria-expanded="true">Services
                        <span class="caret"></span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="services.php">All Services</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="services.php">Financial and Insurance</a></li> 
                        </ul>
                    </a>
                </li>
                -->
                <li>
                    <a class="dropdown dropdown-toggle" id="dropwdownMenu2" data-toggle="dropdown" aria-expanded="true">New Patient Forms
                        <span class="caret"></span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropwdownMenu2">
                            <li class="formDD" role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" data-target="#hippa1Modal">HIPPA Form One</a></li>
                            <li class="formDD" role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" data-target="#hippa2Modal">HIPPA Form Two</a></li>
                            <li class="formDD" role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" data-target="#medHistModal">Medical History Form</a></li>
                            <li class="formDD" role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" data-target="#surgModal">Surgical Form</a></li>
                        </ul>
                    </a>
                </li>
                <li><a href="photo_gallery.php">Photo Gallery</a></li>
                <li>
                    <a class="dropdown dropdown-toggle" id="dropwdownMenu2" data-toggle="dropdown" aria-expanded="true">Our Staff
                        <span class="caret"></span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropwdownMenu2">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="meet_the_doctors.php">Meet the Doctors</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="our_staff.php">Our Staff</a></li>
                        </ul>
                    </a>
                </li>
                <li><a href="contact.php">Contact</a></li>
                <li>
                    <a class="dropdown dropdown-toggle" id="dropwdownMenu2" data-toggle="dropdown" aria-expanded="true">Careers
                        <span class="caret"></span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropwdownMenu2">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="careers.php">Careers</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="mission_statement.php">Mission Statement</a></li>
                        </ul>
                    </a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <!-- Hippa 1 Modal -->
                <div class="modal fade" id="hippa1Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content forms">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">HIPPA Privacy Form 1</h4>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <embed class="iframe-forms" src="forms/HIPPA1.pdf"></embed>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">
                                    <a class="btn-dl" href="forms/HIPPA1.pdf"" download="HIPPA1.pdf">Download PDF</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <!-- Hippa 2 Modal -->
                <div class="modal fade" id="hippa2Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content forms">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">HIPPA Privacy Form 2</h4>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <embed class="iframe-forms" src="forms/HIPPA2.pdf"></embed>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">
                                    <a class="btn-dl" href="forms/HIPPA2.pdf"" download="HIPPA2.pdf">Download PDF</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <!-- Medical History Modal -->
                <div class="modal fade" id="medHistModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content forms">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Medical History Form</h4>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <embed class="iframe-forms" src="forms/medicalhistory.pdf"></embed>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">
                                    <a class="btn-dl" href="forms/medicalhistory.pdf"" download="MedicalHistory.pdf">Download PDF</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <!-- Surgery Modal -->
                <div class="modal fade" id="surgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content forms">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Surgical Form</h4>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <embed class="iframe-forms" src="forms/surgical.pdf"></embed>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">
                                    <a class="btn-dl" href="forms/surgical.pdf" download="SurgicalForm.pdf">Download PDF</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- <div class="nav-spacer"></div> -->
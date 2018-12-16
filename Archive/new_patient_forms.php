<html>
<head>
    <?php include('settings.php'); ?>
</head>

<body>
    <?php include('nav.php'); ?>

	<section class="section-forms-buttons">
        <div class="container container-full">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section-forms-main-heading1">New Patient Forms</h1>
                </div>
                
            </div>
            <div class="row buttons-row">
                <div class="col-lg-2">
                    <h1>Hippa Form 1</h1>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#hippa1Modal">Hippa Privacy Form 1</button>
                </div>
                <div class="col-lg-2 col-lg-offset-1">
                    <h1>Hippa Form 2</h1>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#hippa2Modal">Hippa Privacy Form 2</button>
                </div>
                <div class="col-lg-2 col-lg-offset-1">
                    <h1>Medical History Form</h1>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#medHistModal">Medical History Form</button>
                </div>
                <div class="col-lg-2 col-lg-offset-1">
                    <h1>Surgical Form</h1>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#surgModal">Surgical Form</button>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <!-- Hippa 1 Modal -->
                <div class="modal fade" id="hippa1Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Hippa Privacy Form 1</h4>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <iframe class="iframe-forms" src="forms/HIPPA1.pdf"></iframe>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Download PDF</button>
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
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Hippa Privacy Form 2</h4>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <iframe class="iframe-forms" src="forms/HIPPA2.pdf"></iframe>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Download PDF</button>
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
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Medical History Form</h4>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <iframe class="iframe-forms" src=""></iframe>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Download PDF</button>
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
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Patient Registration and Dental History</h4>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <iframe class="iframe-forms" src="forms/Patient-Registration-&-Dental-History-Final-2018.pdf"></iframe>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Download PDF</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

</body>
</html>
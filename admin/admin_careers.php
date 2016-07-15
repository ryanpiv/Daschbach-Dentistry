<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    //echo "Welcome to the member's area, " . $_SESSION['FirstName'] . "!";
} else {
    header('Location: login.php');
}

?>

<html>
<head>
    <link href="../customCSS/careers.css" rel="stylesheet" type="text/css" />
    <?php include('admin_settings.php'); ?>
</head>

<body>
    <?php include('../nav.php'); ?>



    <section class="section-careers-main section-main">
    	<div class="container">
    		<div class="row">
    		<div class="glyphicon glyphicon-send section-main-glyphicon" aria-hidden="true"></div><br />
    			<h1 class="section-main-header section-careers-main-header">
    				Join our team.
    			</h1>
    			<p>
    				Browse our open and available positions.
    			</p>
    			<p>
    				Don't see what you're looking for? We're always open to anyone who believes they'll be a great fit. Send us an email with your resume and reason for sending to <a href="#">careers@daschbachdenstistry.com</a>
    			</p>
    		</div>
    	</div>
    </section>

    <section class="section-careers-positions section-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="h2-careers-positions">Open Positions</h2>
                    <small>Click the job titles to learn more about the positions listed below.</small>
                    <legend></legend>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<?php
					$json = file_get_contents('../admin_files/careers/careers.json');
					$obj = json_decode($json);
                    $careersCount = 0;
                    while(isset($obj[$careersCount])){
    					echo "<div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading" . $careersCount. "'>
                                    <h2 class='panel-title'>
                                        <a class='collapsed' data-toggle='collapse' data-parent='#accordion' href='#collapse" . $careersCount . "' aria-expanded='false' aria-controls='collapse" . $careersCount . "'>" . $obj[$careersCount]->title; 
                        echo '</a></h2>';

                        echo '<button style="float:right" class="btn btn-danger btn-sm btn-remove" data-count=' . $careersCount .'>- Remove Position</button>';

                        if(isset($obj[$careersCount]->type) || isset($obj[$careersCount]->experience) || isset($obj[$careersCount]->location) ){
                            echo '<p>';
                        }
                        if(isset($obj[$careersCount]->type)){
                        	echo '<span class="glyphicon glyphicon-hourglass"></span><span class="job-detail">' . $obj[$careersCount]->type . '</span>';
                        }
                        if(isset($obj[$careersCount]->experience)){
                        	echo '  ' . '<span class="glyphicon glyphicon-education"></span><span class="job-detail">' . $obj[$careersCount]->experience . '</span>';
                        }
                        if(isset($obj[$careersCount]->location)){
                        	echo '  ' .'<span class="glyphicon glyphicon-map-marker"></span><span class="job-detail">' . $obj[$careersCount]->location . '</span>';
                        }
                        if(isset($obj[$careersCount]->type) || isset($obj[$careersCount]->experience) || isset($obj[$careersCount]->location) ){
                        	echo '</p>';
                        }

                        echo "</div><div id='collapse" . $careersCount . "' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading" . $careersCount . "'>
                        	<div class='panel-body'>";
                            if(isset($obj[$careersCount]->summary)){
                                echo "<h4>Summary</h4><p>" . $obj[$careersCount]->summary . '</p>';
                            }

                        	if(isset($obj[$careersCount]->requirements)){
                        		echo '<h4>Requirements</h4><ul>';
                                $reqCount = 1;
                                while(isset($obj[$careersCount]->requirements->$reqCount)){
                                    echo '<li>' . $obj[$careersCount]->requirements->$reqCount .'</li>';
                                    $reqCount++;
                                }
                        		echo '</ul>';
                        	}
                        	
                        	if(isset($obj[$careersCount]->responsibilities)){
                        		echo '<h4>Responsibilities</h4><ul>';
                        		$respCount = 1;
                                while(isset($obj[$careersCount]->responsibilities->$respCount)){
                                    echo '<li>' . $obj[$careersCount]->responsibilities->$respCount . '</li>';
                                    $respCount++;
                                }
                        		echo '</ul>';
                        	}
                        echo '<button style="float:right" class="btn btn-primary btn-lg">Apply</button>';
                        echo '</div></div></div>';

                        $careersCount++;
                    }
					?>
                        <div class="row btn-add-row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button style="float:right" class="btn btn-success btn-lg btn-add">+ Add New Position</button>
                            </div>
                        </div>
		            </div>
                </div>
            </div>
            <div id="row-new-position" class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 style="display:inline">Add New Position</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <span class="input-group-addon" id="title">Title</span> 
                                    <input id="input-title" class="form-control" placeholder="Dental Hygenist" aria-describedby="title" onkeydown="removeError(this)">
                                </div>
                            </div>
                            <div class="col-input col-lg-3">
                                <div class="input-group">
                                    <span class="input-group-addon" id="type">Type</span> 
                                    <input id="input-type" class="form-control" placeholder="Full Time" aria-describedby="type" onkeydown="removeError(this)">
                                </div>
                            </div>
                            <div class="col-input col-lg-3">
                                <div class="input-group">
                                    <span class="input-group-addon" id="experience">Experience</span> 
                                    <input id="input-experience" class="form-control" placeholder="Mid-Level, 2+ Years Experience" aria-describedby="experience" onkeydown="removeError(this)">
                                </div>
                            </div>
                            <div class="col-input col-lg-3">
                                <div class="input-group">
                                    <span class="input-group-addon" id="location">Location</span> 
                                    <input id="input-location" class="form-control" placeholder="Philadelphia, PA" aria-describedby="location" onkeydown="removeError(this)">
                                </div>
                            </div>
                            <div class="col-input col-lg-12">
                                <div class="input-group">
                                    <span class="input-group-addon" id="summary">Summary</span>
                                    <textarea id="txtarea-summary" aria-describedby="summary" class="form-control" placeholder="" rows="3" onkeydown="removeError(this)"></textarea>
                                </div>
                            </div>
                            <div class="col-input col-lg-6">
                                <div class="col-input input-group">
                                    <span class="input-group-addon" id="requirements">Requirements</span> 
                                </div>
                                <div class="col-input input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary btn-requirements" type="button" onclick="btnRequirementsClick()">Requirement +</button> 
                                    </span>
                                    <input class="form-control requirements-input" placeholder="Requirement" onkeydown="removeError(this)">
                                </div>
                            </div>
                            <div class="col-input col-lg-6">
                                <div class="col-input input-group">
                                    <span class="input-group-addon" id="responsibilities">Responsibilities</span> 
                                </div>
                                <div class="col-input input-group">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary btn-responsibilities" type="button" onclick="btnResponsibilitiesClick()">Responsibility +</button> 
                                    </span>
                                    <input class="form-control responsibilities-input" placeholder="Responsibility" onkeydown="removeError(this)">
                                </div>
                            </div>
                            <div class="col-input col-lg-6"id=div-requirements>
                                <ul class="list-requirements list-group"></ul>
                            </div>
                            <div class="col-input col-lg-6" id="div-responsibilities">
                                <ul class="list-responsibilities list-group"></ul>
                            </div>

                            <div class="col-lg-12">
                                <button class="btn btn-warning btn-clear-current" onclick="btnClearCurrent()">Clear Fields</button>
                                <button class="btn btn-success btn-add-current btn-float-right" onclick="btnAddCurrent()">Add Position</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <?php include('admin_footer.php'); ?>

    <script>
        var id;
        var items = [];
        $('.btn-remove').click(function(){
            var r = confirm("Performing this action will permanently remove the selected entry.  This cannot be undone.  Select 'ok' to continue or 'cancel' to stop.");
            if(r == true){
                items = [];
                id = $(this).data('count');
                $.getJSON( "../admin_files/careers/careers.json", function( data ) {
                    $.each( data, function( key, val ) {
                        items.push(val);
                    });
                    items.splice(id, 1);
                    var data = JSON.stringify(items);
                    $.post('post-json.php', 'data=' + data).done(function(response){
                        location.reload();
                    });
                });
            }
        });



        $('.btn-add').click(function(){
            $('#row-new-position').slideDown();
        });

        function btnRequirementsClick(){
            if($('.requirements-input').val() == ""){
                alert('Please enter a requirement.');
            } else {
                var html = "<li class='list-group-item'>" + $('.requirements-input').val() + '<button class="btn btn-danger btn-float-right btn-xs btn-remove-list-item" onclick="$(this).parent().remove()">x</button></li>' ;
                $('.list-requirements').append(html);
                $('.requirements-input').val("");
            }
        }

        function btnResponsibilitiesClick(){
            if($('.responsibilities-input').val() == ""){
                alert('Please enter a responsibility');
            } else {
                var html = "<li class='list-group-item'>" + $('.responsibilities-input').val() + '<button class="btn btn-danger btn-float-right btn-xs btn-remove-list-item" onclick="$(this).parent().remove()">x</button></li>' ;
                $('.list-responsibilities').append(html);
                $('.responsibilities-input').val("");                
            }
        }

        function btnClearCurrent() {
            var r = confirm("This will remove all values from the fields in the 'Add New Position' area.  This cannot be undone.  Are you sure you want to continue?");
            if(r == true){
                $('#input-title').val("");
                $('#input-location').val("");
                $('#input-experience').val("");
                $('#input-type').val("");
                $('#txtarea-summary').val("");

                $('.list-responsibilities').children().remove();
                $('.list-requirements').children().remove();
            }
        }
        
        function btnAddCurrent(){
            if(validateEntry() == true) {
                $.getJSON( "../admin_files/careers/careers.json", function( data ) {
                    $.each( data, function( key, val ) {
                        items.push(val);
                    });
                    var json = ' [{ ';

                    json += '"title" : "' + $('#input-title').val() + '", ';
                    json += '"location" : "' + $('#input-type').val() + '", ';
                    json += '"type" : "' + $('#input-experience').val() + '", ';
                    json += '"experience" : "' + $('#input-location').val() + '", ';
                    json += '"summary" : "' + $('#txtarea-summary').val() + '", ';
                    //lists
                    if($('.list-requirements').children()){ 
                        var reqItems = $('.list-requirements').children();
                        json += '"requirements" : { '
                        for(var i = 0; i < reqItems.length; i++){
                            json += '"' + i + '" : "' + reqItems[i].innerText + '"';
                            if(i + 1 < reqItems.length) {
                                json += ', ';
                            }
                        }
                        json += ' } ';
                    }
                    if($('.list-responsibilities').children() && $('.list-requirements').children()) {
                        json += ", ";
                    }
                    if($('.list-responsibilities').children()){ 
                        var reqItems = $('.list-responsibilities').children();
                        json += '"responsibilities" : { '
                        for(var i = 0; i < reqItems.length; i++){
                            json += '"' + i + '" : "' + reqItems[i].innerText + '"';
                            if(i + 1 < reqItems.length) {
                                json += ', ';
                            }
                        }
                        json += ' } ';
                    }
                    json += '}]';
                    var jsonObj = JSON.parse(json);
                    items.push(jsonObj[0]);
                    var data = JSON.stringify(items);
                    $.post('post-json.php', 'data=' + data).done(function(response){
                        location.reload();
                    });
                });
            }
        }

        function validateEntry(){
            $('.input-group').removeClass('input-error');

            var errorStr = "Errors were found.  Please correct them to continue.\n";
            if($('#input-title').val() == ""){
                errorStr += "Please add a value for Title.\n";
                $('#input-title').parent().addClass("input-error");
            }
            if($('#input-location').val() == ""){
                errorStr += "Please add a value for Location.\n";
                $('#input-location').parent().addClass("input-error");
            }
            if($('#input-experience').val() == ""){
                errorStr += "Please add a value for Experience.\n";
                $('#input-experience').parent().addClass("input-error");   
            }
            if($('#input-type').val() == ""){
                errorStr += "Please add a value for Type. \n";
                $('#input-type').parent().addClass("input-error");      
            }
            if($('#txtarea-summary').val() == ""){
                errorStr += "Please add description text for Summary.\n"
                $('#txtarea-summary').parent().addClass("input-error");         
            }

            if($('.list-requirements').children().length == 0){
                var r = confirm('No Requirements have been found for this position.  Select "Ok" to continue without position Requirements or "Cancel" to stop.');
                if(r == false){
                    errorStr += "Please add Requirements for this position.\n";
                    $('.requirements-input').parent().addClass('input-error');
                }
            }
            if($('.list-responsibilities').children().length == 0){
                var r = confirm('No Responsibilities have been found for this position.  Select "Ok" to continue without position Responsibilities or "Cancel" to stop.');
                if(r == false){
                    errorStr += "Please add Responsibilities for this position.\n";
                    $('.responsibilities-input').parent().addClass('input-error');
                }
            }

            if(errorStr != "Errors were found.  Please correct them to continue.\n"){
                alert(errorStr);
                return false;
            } else {
                return true;
            }
        }

        function removeError(element){
            $(element).parent().removeClass('input-error');
        }
        
    </script>

</body>
</html>

<!-- https://wpjobmanager.com/add-ons/applications/ -->
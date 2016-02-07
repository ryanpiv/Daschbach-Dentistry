<html>
<head>
    <link href="customCSS/careers.css" rel="stylesheet" type="text/css" />
    <?php include('settings.php'); ?>
</head>

<body>
    <?php include('nav.php'); ?>

    <section class="section-careers-main">
    	<div class="container">
    		<div class="row">
    		<div class="glyphicon glyphicon-send" aria-hidden="true"></div><br />
    			<h1 class="section-main-header section-careers-main-header">
    				Be a part of our team.
    			</h1>
    			<p>
    				Our open and available positions are listed here.
    			</p>
    			<p>
    				Don't see what you're looking for? We're always open to anyone who believes they'll be a great fit. Send us an email with your resume and reason for sending to <a href="#">careers@daschbachdenstistry.com</a>
    			</p>
    		</div>
    	</div>
    </section>

    <section class="section-careers-positions">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="h2-careers-positions">Open Positions</h2>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<legend></legend>
					<?php
					$json = file_get_contents('admin_files/careers/careers.json');
					$obj = json_decode($json);
					echo "<div class='panel panel-default'>
                            <div class='panel-heading' role='tab' id='headingOne'>
                                <h2 class='panel-title'>
                                    <a data-toggle='collapse' data-parent='#accordion' href='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>" . $obj->careers["0"]->title; 
                    echo '</a></h2>';

                    if($obj->careers["0"]->type != "" || $obj->careers["0"]->experience || $obj->careers["0"]->location ){
                    	echo '<p>';
                    }
                    if($obj->careers["0"]->type != ""){
                    	echo '<span class="glyphicon glyphicon-hourglass"></span><span class="job-detail">' . $obj->careers["0"]->type . '</span>';
                    }
                    if($obj->careers["0"]->experience != ""){
                    	echo '  ' . '<span class="glyphicon glyphicon-education"></span><span class="job-detail">' . $obj->careers["0"]->experience . '</span>';
                    }
                    if($obj->careers["0"]->location != ""){
                    	echo '  ' .'<span class="glyphicon glyphicon-map-marker"></span><span class="job-detail">' . $obj->careers["0"]->location . '</span>';
                    }
                    if($obj->careers["0"]->type != "" || $obj->careers["0"]->experience || $obj->careers["0"]->location ){
                    	echo '</p>';
                    }
                    

                    echo "</div><div id='collapseOne' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingOne'>
                    	<div class='panel-body'><h4>Summary</h4><p>" . $obj->careers["0"]->summary . '</p>';

                    	if($obj->careers["0"]->requirements != ""){
                    		echo '<h4>Requirements</h4><ul>';
                    		echo $obj->careers["0"]->requirements;
                    		echo '</ul>';
                    	}
                    	
                    	if($obj->careers["0"]->responsibilities != ""){
                    		echo '<h4>Responsibilities</h4><ul>';
                    		echo $obj->careers["0"]->responsibilities;
                    		echo '</ul>';
                    	}
                                	
                    echo '</div></div></div>';
                    //echo $obj->careers["0"]->subtitle;
					?>
				</div>
			</div>
		</div>
    </section>


    <?php include('footer.php'); ?>
</body>
</html>
<html>
<head>
    <link href="customCSS/careers.css" rel="stylesheet" type="text/css" />
    <?php include('settings.php'); ?>
</head>

<body>
    <?php include('nav.php'); ?>

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
					$json = file_get_contents('admin_files/careers/careers.json');
					$obj = json_decode($json);
                    $careersCount = 0;
                    while(isset($obj[$careersCount])){
    					echo "<div class='panel panel-default'>
                                <div class='panel-heading' role='tab' id='heading" . $careersCount. "'>
                                    <h2 class='panel-title'>
                                        <a class='collapsed' data-toggle='collapse' data-parent='#accordion' href='#collapse" . $careersCount . "' aria-expanded='false' aria-controls='collapse" . $careersCount . "'>" . $obj[$careersCount]->title; 
                        echo '</a></h2>';

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
				</div>
			</div>
		</div>
    </section>


    <?php include('footer.php'); ?>
</body>
</html>

<!-- https://wpjobmanager.com/add-ons/applications/ -->
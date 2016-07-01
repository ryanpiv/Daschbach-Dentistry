<html>
<head>
    <link href="customCSS/mission_statement.css" rel="stylesheet" type="text/css" />
    <?php include('settings.php'); ?>
    <link rel="stylesheet" href="js-libraries/vegas/vegas.min.css">
    <script src="js-libraries/vegas/vegas.min.js"></script>
</head>

<body>
    <?php include('nav.php'); ?>

    <section class="section-statement-main section-main">
      <div class="container container-fill-width">
        <div class="row">
          <div class="glyphicon glyphicon-thumbs-up section-main-glyphicon" aria-hidden="true"></div><br />
          <h1 class="section-main-header section-statement-main-header">
            Our Mission
          </h1>
          <p>
            Our purpose is to practice the art of dentistry and strive to attend toward the following principles: 
          </p>
        </div>
      </div>
    </section>

    <section class="section-statement-content section-content">
      <div class="container">
        <div class="row">
        	<ul class="list-group list-content">
			    <script>
			      var items = [];
			      $.getJSON( "admin_files/mission_statement/mission_statement.json", function( data ) {
			        $.each( data, function( key, val ) {
			          items.push(val);
			        });
			        for(var i = 0; i < items[0].length; i++){
			        	$(".list-content").append('<li class="list-group-item"><span class="badge">' + (i + 1) + '</span><h4>' + items[0][i][i] + '</h4></li>');
			        }
			      });
			    </script>
		    </ul>
        </div>
      </div>
    </section>

	<?php include('footer.php'); ?>
</body>
</html>
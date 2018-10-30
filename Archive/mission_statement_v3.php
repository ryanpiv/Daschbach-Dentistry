<html>
<head>
    <link href="customCSS/mission_statement.css" rel="stylesheet" type="text/css" />
    <?php include('settings.php'); ?>
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
        <div class="row row-border_bottom">
          <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 col-border_bottom">
            <h3>We strictly adhere to the principle of developing a working diagnosis, both accurate and truthful for each dental procedure.</h3>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 col-border_bottom">
            <h3>We strive to develop our own skills to a point that treatment can be individualized.  Presented as a list of options to each patient in lieu of a pre-set treatment plan.</h3>
          </div>
        </div>
        <div class="row row-border_bottom">
          <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 col-border_bottom">
            <h3>We expect each team member to deliver patient care to the utmost of their ability, with regularly consistent successful results with emphasis on quality in lieu of quantity.</h3>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 col-border_bottom">
            <h3>We appreciate learning to be continual and to be a shared expression of genuine concern for the mutual development of skills.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 col-border_bottom">
            <h3>We strictly adhere to the principle of developing a working diagnosis, both accurate and truthful for each dental procedure.</h3>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading"><h3>There are several levels of giving:</h3></div>
          <ul class="list-group">
            <li class="list-group-item"><h4>The most common is a reduced fee for services.</h4></li>
            <li class="list-group-item"><h4>The second is the delivery of free services with-in a single visit.</h4></li>
            <li class="list-group-item"><h4>The third is a free will offering of multiple to accomplish a goal.</h4></li>
            <li class="list-group-item"><h4>Fourth and on, a sacrificed level is the decision to treat the poor.</h4></li>
            <li class="list-group-item">
              <h3>Examples</h3>
              <li class="list-group-item">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <h4>Donated Dental Service</h4>
                  </div>
                  <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <h4>Missionary of the Month</h4>
                  </div>
                  <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">  
                    <h4>Outreach to referred poor</h4>
                  </div>
                </div>
              </li>
            </li>
          </ul>
        </div>



        	<!-- <ul class="list-group list-content"> -->
			    <!-- <script>
			      var items = [];
			      $.getJSON( "admin_files/mission_statement/mission_statement.json", function( data ) {
			        $.each( data, function( key, val ) {
			          items.push(val);
			        });
			        for(var i = 0; i < items[0].length; i++){
                var html = "";
			        	//$(".list-content").append('<li class="list-group-item"><span class="badge">' + (i + 1) + '</span><h4>' + items[0][i][i] + '</h4></li>');
                html += '<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12"><h3>' + items[0][i][i] + '</h3>';
                if(typeof(items[0][i].subset) != "undefined"){
                  html += '<ul class="list-group list-content">';
                  for(var n = 1; n < Object.keys(items[0][i].subset); n++ ) {
                    html += '<li class="list-group-item"><h3>' + items[0][i].subset[i + '.' + n] + '</h3>';
                    if(typeof(items[0][i].subset[i + '.' + n].subset) != "undefined"){
                      for(var x = 1; x < Object.keys(items[0][i].subset[i + '.' + n].subset[n + '.' + x]); x++){
                        html += '<p>' + items[0][i].subset[i + '.' + n].subset[n + '.' + x] + '</p>';
                      }
                    }
                    html += '</li>'
                  }
                }
                html += '<legend></legend></div>';
                $(".list-content").append(html);
			        }
			      });
			    </script> -->
		    <!-- </ul> -->
        </div>
      </div>
    </section>

	<?php include('footer.php'); ?>
</body>
</html>
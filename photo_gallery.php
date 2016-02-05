<html>
<head>
    <?php include('settings.php'); ?>
    <link href="customCSS/photo_gallery.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php include('nav.php'); ?>

  <section class="section-gallery-main">
    <div class="container container-fill-width">
      <h1 class="section-gallery-main-heading">Photo Gallery</h1>
      <div class="section-gallery-sort-controls">
      	<button class="filter btn btn-primary" data-filter="all">View All</button>

  <?php
  	ini_set('display_errors', 'On');

	$count = 1;
	$dirArray = array();
	$iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator("images/gallery/"), 
            RecursiveIteratorIterator::SELF_FIRST);

	foreach($iterator as $file) {
	    if($file->isDir()) {
	    	if($file->getFilename() != "." && $file->getFilename() != ".."){
	    		echo "<button class='filter btn btn-primary' data-filter='.category-" . "$count'" . '>' . $file->getFilename(), PHP_EOL . "</button>";
	    		//array_push($dirArray, $file->getFilename());
	    		$dirArray[$count] = $file->getFilename();
	    		$count++;
	    	}
	    }
	}
	echo "<!-- sort controls div end --> </div></div><div class='container container-fill-width-100' id='Container'>";
	/*
	echo "<br/>";
	echo "array contents: " . implode(", ", $dirArray);
	echo "<br/>";
	echo "array size: " . count($dirArray);
	echo "<br/>";
	*/

	for($i = 1; $i <= count($dirArray); $i++){
		//echo($dirArray[$i]);
		$dir = "images/gallery/" . "$dirArray[$i]";
		//echo $dir . "<br />";

		$di = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
		foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
			//echo $di . '<br/>';
			if($filename != '.' && $filename != '..' && $filename){
				//echo $filename . '<br/>'; //. ' - ' . $file->getSize() . ' bytes <br/>';
				echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mix category-' . $i . ' " style="margin-bottom:1%"><div class="mix-item" style="background-image: url(' . $dir . '/' . $di . ')"></div></div>';
			}
		}
	}
	
	
  ?>
  </div>
  </section>

  <div class="modal fade" tabindex="-1" role="dialog"   aria-labelledby="myLargeModalLabel" id="myModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div id="displayDiv"></div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
  

  <script>
    //debugger;

    $(window).resize(function(){

    });

    $(".mix").click(function(){
      $("#Container").children(".mix").removeClass("clicked");
      $(this).addClass("clicked");

      var bgimage = $(this).children("div").css('background-image');
      $("#displayDiv").css('background-image', bgimage);

      bgimage = bgimage.replace(/url\((['"])?(.*?)\1\)/gi, '$2')
                        .split(',')[0];
      var image = new Image();
      image.src = bgimage;
      var imgWidth = image.width;
      var imgHeight = image.height;
      $("#displayDiv").height(imgHeight);
      $("#displayDiv").width(imgWidth);
      $("#myModal").modal('show');
    });
  </script>

  <script>
	  $(document).ready(function(){
	  	$('#Container').mixItUp();
	  });
  </script>
</body>
</html>

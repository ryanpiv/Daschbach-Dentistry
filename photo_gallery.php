<html>
<head>
    <link href="customCSS/photo_gallery.css" rel="stylesheet" type="text/css" />
    <?php include('settings.php'); ?>
</head>

<body>
  <?php include('nav.php'); ?>

  <section class="section-gallery-main section-main">
    <div class="container container-fill-width">
      <div class="row">
      <div class="glyphicon glyphicon-camera section-main-glyphicon" aria-hidden="true"></div><br />
        <h1 class="section-main-header section-gallery-main-header">
          Tour our office.
        </h1>
        <p>
          We work in a beautiful atmosphere we take pride in sharing.
        </p>
      </div>
    </div>
  </section>
  <div id="Container" class="container container-fill-width">
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
	echo "<!-- sort controls div end --> </div>";
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

  <div class="modal fade" tabindex="-1" role="dialog"   aria-labelledby="myLargeModalLabel" id="myModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content centered"></div>
    </div>
    <div onclick="galleryPrevClick()" class="glyphicon glyphicon-chevron-left" aria-hidden="true"></div>
    <div onclick="galleryNextClick()" class="glyphicon glyphicon-chevron-right" aria-hidden="true"></div>
  </div>

  <?php include('footer.php'); ?>
  

  <script>
    //debugger;

    var bg_next;
    var bg_prev;
    var bg_current;
    var bgimage;
    var image = new Image();

    $(window).resize(function(){
      resizeImage(image.width, image.height);
    });

    $(".mix").click(function(){
      $("#Container").children(".mix").removeClass("clicked");
      $(this).addClass("clicked");

      bgimage = $(this).children("div").css("background-image");
      bg_current = $(this);
      bg_next = $(this).next();
      bg_prev = $(this).prev();
      
      setGalleryImage(bgimage);
    });

    $("body").keydown(function(e) {
      if(e.keyCode == 37) { // left
        galleryPrevClick();
      }
      else if(e.keyCode == 39) { // right
        galleryNextClick();
      }
    });

    function setGalleryImage(bgimage_url){
      if(bgimage_url == 'undefined' || bgimage_url == '' || typeof(bgimage_url) == 'undefined'){
        return;
      }
      $(".modal-content").css('background-image', bgimage_url);

      bgimage_url = bgimage_url.replace(/url\((['"])?(.*?)\1\)/gi, '$2')
                        .split(',')[0];
      image.src = bgimage_url;

      if(image.width > window.innerWidth || image.height > window.innerHeight){
        resizeImage(image.width, image.height);  
      } else {
        $(".modal-content").height(image.height);
        $(".modal-content").width(image.width);
        $(".modal-dialog").height(image.height);
        $(".modal-dialog").width(image.width);
      }
      
      $("#myModal").modal('show');
    }

    function resizeImage(imgWidth, imgHeight){
      var ratio = Math.min(window.innerWidth / imgWidth, window.innerHeight / imgHeight);

      imgHeight *= ratio;
      imgWidth *= ratio;

      $(".modal-content").height(imgHeight);
      $(".modal-content").width(imgWidth);
      $(".modal-dialog").height(imgHeight);
      $(".modal-dialog").width(imgWidth);
    }

    function galleryNextClick(){
      if(bg_next.length > 0){
        setGalleryImage($(bg_next).children("div").css("background-image"));
        bg_current = $(bg_next);
        bg_next = $(bg_current).next();
        bg_prev = $(bg_current).prev();  
      }
    }

    function galleryPrevClick(){
      if(bg_prev.length > 0){
        setGalleryImage($(bg_prev).children("div").css("background-image"));
        bg_current = $(bg_prev);
        bg_next = $(bg_current).next();
        bg_prev = $(bg_current).prev();
      }
    }
  </script>

  <script>
	  $(document).ready(function(){
	  	$('#Container').mixItUp();
	  });
  </script>
</body>
</html>

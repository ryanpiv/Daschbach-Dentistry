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

    <script>
      var items = [];
      $.getJSON( "admin_files/mission_statement/mission_statement.json", function( data ) {
        $.each( data, function( key, val ) {
          items.push(val);
        });
      });
    </script>

    <section class="section-statement-content section-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
            <p id="slide-count"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-3" style="height:25px"></div>
          <div id="vc-play" class="col-lg-2 col-md-1 col-sm-4 col-xs-4 vegas-control vegas-control-active">Play</div>
          <div id="vc-next" class="col-lg-2 col-md-1 col-sm-4 col-xs-4 vegas-control" >Next</div>
          <div id="vc-first" class="col-lg-2 col-md-1 col-sm-4 col-xs-4 vegas-control">First</div>
          <div class="col-lg-3 col-md-3" style="height:25px"></div>
          <div class="col-lg-3 col-md-3" style="height:25px"></div>
          <div id="vc-pause" class="col-lg-2 col-md-1 col-sm-4 col-xs-4 vegas-control">Pause</div>
          <div id="vc-prev" class="col-lg-2 col-md-1 col-sm-4 col-xs-4 vegas-control">Previous</div>
          <div id="vc-last" class="col-lg-2 col-md-1 col-sm-4 col-xs-4 vegas-control">Last</div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:25px">
            <h1 id="current-statement" class="current-statement"></h1>
          </div>
        </div>
      </div>
    </section>

    <?php include('footer.php'); ?>
</body>
<script>
  $(".section-statement-content").vegas({
    slides: [
        { src: "images/mission_statement/0.jpg" },
        { src: "images/mission_statement/1.jpg" },
        { src: "images/mission_statement/2.jpg" },
        { src: "images/mission_statement/3.jpg" },
        { src: "images/mission_statement/4.jpg" },
        { src: "images/mission_statement/5.jpg" },
        { src: "images/mission_statement/6.jpg" }
    ],
    overlay: 'js-libraries/vegas/overlays/01.png',
    delay: 10000,
    walk: function (index, slideSettings) {
      //console.log("Slide index " + index + " image " + slideSettings.src);
      if(items.length > 0){
        $("#current-statement").fadeOut("slow", function(){
          $("#current-statement").html((items[0][parseInt(index)][parseInt(index)]));
          $("#current-statement").fadeIn("slow");
        });
      }
      $('#slide-count').html(parseInt($('.section-statement-content').vegas('current')) + 1 + " of " + items[0].length);
    }
  });

  $(".vegas-overlay").css("background-color", "rgba(0, 0, 0, 0.32)");
  $(".vegas-control").click(function(){
    vegasControlSwitch(this);
  });
  function vegasControlSwitch(control){
    switch($(control).html()){
      case "Play":
        $('#vc-pause').removeClass('vegas-control-active');
        $(control).addClass('vegas-control-active');
        $('.section-statement-content').vegas('play');
        break;
      case "Pause":
        $('#vc-play').removeClass('vegas-control-active');
        $(control).addClass('vegas-control-active');
        $('.section-statement-content').vegas('pause');
        break;
      case "Next":
        $('.section-statement-content').vegas('next');
        break;
      case "Previous":
        $('.section-statement-content').vegas('previous');
        break;
      case "First":
        $('.section-statement-content').vegas('jump', 0);
        break;
      case "Last":
        $('.section-statement-content').vegas('jump', parseInt(items[0].length - 1));
        break;
    }
  }
</script>
</html>
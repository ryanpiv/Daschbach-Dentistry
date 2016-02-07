<html>
<head>
    <link href="customCSS/mission_statement.css" rel="stylesheet" type="text/css" />
    <?php include('settings.php'); ?>
</head>

<body id="mission-statement" style="overflow: hidden">
    <?php include('nav.php'); ?>

    <section class="section-statement-main">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></div>
              <h3>Our Mission</h3>
              <h1>Our purpose is to practice the art of dentistry and strive to attend toward principles we set for ourselves and goals our patients help us set to achieve quality results everyone can truly appreicate</h1>
              </div>
          </div>
        </div>

        <div class="arrow-up">
          <button onclick="buttonScrollUp()">
            <div class="glyphicon glyphicon-menu-up" aria-hidden="true"><small><br/>Return to Top</small></div>
          </button>
        </div>

        <div class="arrow">
          <button onclick="downEvents()">
            <div class="bounce glyphicon glyphicon-menu-down" aria-hidden="true"></div>
          </button>
        </div>
    </section>

    <section class="section-statement-two">
      <div class="container">
        <div class="col-lg-7">
          <h1 class="section-statement-point">We develop our own skills to a point that every treatment can be individualized to each unique patient.</h1>
        </div>
      </div>
    </section>

    <section class="section-statement-three">
      <div class="container">
        <div class="col-lg-7 col-lg-offset-5">
          <h1 class="section-statement-point">A list of options is presented to our patients in lieu of a pre-set treatment plan to determine the best experience for the individual.</h1>
        </div>
      </div>
    </section>

    <section class="section-statement-four">
      <div class="container">
        <div class="col-lg-10 col-lg-offset-1">
          <h1 class="section-statement-point">Each team member will deliver care to the utmost of their ability, with regularly consistent and successful results that emphasize quality in lieu of quantity.</h1>
      </div>
      </div>
    </section>

    <section class="section-statement-five">
      <div class="container">
        <div class="col-lg-7">
          <h1 class="section-statement-point">Learning will be a continual experience of genuine concern shared between the doctor and patient to benefit the mutual development of skills and dental treatment.</h1>
        </div>
      </div>
    </section>

    <section class="section-statement-six">
      <div class="container">
        <div class="col-lg-7 col-lg-offset-5">
          <h1 class="section-statement-point">We will always strive to develop our own skills to a point that treatment can be individualized.</h1>
        </div>
      </div>
    </section>

    <section class="section-statement-seven">
      <div class="container">
        <div class="col-lg-8 col-lg-offset-4">
          <h1 class="section-statement-point">We are not only a dental office, but also a teaching institution concentrating on, but not limited to, the development of dental assistants and others who wish to make dentistry their career choice.</h1>
        </div>
      </div>
    </section>

    <section class="section-statement-eight">
      <div class="container">
        <div class="col-lg-10 col-lg-offset-1">
          <h1 class="section-statement-point">It is our desire to develop and maintain a team of dental professionals who wish to serve a higher calling by lending their talents to a team effort under these mission statements.</h1>
        </div>
      </div>
    </section>

    <!-- <?php include('footer.php'); ?> -->

    <script>
      var currentPosition;
      var finish;

      $(document).load(function(){
        if(typeof currentPosition === 'undefined'){
          
        }
      });

      $(window).load(function(){

      });

      $('body').on( 'DOMMouseScroll mousewheel', function ( event ) {
        beginScrollingEvents(event);
      });

      function beginScrollingEvents(event){
        if(typeof finish === 'undefined' || finish == true){
          finish = false;
        } else {
          return;
        }

        if( event.originalEvent.detail > 0 || event.originalEvent.wheelDelta < 0 ) { //alternative options for wheelData: wheelDeltaX & wheelDeltaY
          //scroll down
          //console.log('Down');
          downEvents();
        } else {
          //scroll up
          //console.log('Up');
          upEvents();

          //prevent page fom scrolling
          return false;
        }
      }

      function downEvents(){
        if(typeof currentPosition === 'undefined') {
          currentPosition = "main";
        }
        switch(currentPosition){
          case "main":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: $('.section-statement-two').offset().top
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "two";
            break;
          case "two":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: $('.section-statement-three').offset().top
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "three";
            break;
          case "three":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: $('.section-statement-four').offset().top
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "four";
            break;
          case "four":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: $('.section-statement-five').offset().top
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "five";
            break;
          case "five":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: $('.section-statement-six').offset().top
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "six";
            break;
          case "six":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: $('.section-statement-seven').offset().top
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "seven";
            break;
          case "seven":
            $(".arrow-up").css("display", "block");
            $(".arrow").css("display", "none");
            $("html, body").stop().animate({
              scrollTop: $('.section-statement-eight').offset().top
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "eight";
            break;
          case "eight":
            $(".arrow-up").css("display", "block");
            $(".arrow").css("display", "none");
            finish = true;
            currentPosition = "eight";
            break;
        }
      }

      function upEvents(){
        if(typeof currentPosition === 'undefined') {
          currentPosition = "main";
        }
        switch(currentPosition){
          case "main":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: 0
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "main";
            break;
          case "two":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: 0
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "main";
            break;
          case "three":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: $('.section-statement-two').offset().top
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "two";
            break;
          case "four":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: $('.section-statement-three').offset().top
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "three";
            break;
          case "five":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: $('.section-statement-four').offset().top
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "four";
            break;
          case "six":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: $('.section-statement-five').offset().top
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "five";
            break;
          case "seven":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: $('.section-statement-six').offset().top
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "six";
            break;
          case "eight":
            $(".arrow-up").css("display", "none");
            $(".arrow").css("display", "block");
            $("html, body").stop().animate({
              scrollTop: $('.section-statement-seven').offset().top
            }, 700, !1, function() {
              finish = true;
            });
            currentPosition = "seven";
            break;
        }
      }

      $(".section-statement-two").css("height", screen.height);
      $(".section-statement-three").css("height", screen.height);
      $(".section-statement-four").css("height", screen.height);
      $(".section-statement-five").css("height", screen.height);
      $(".section-statement-six").css("height", screen.height);
      $(".section-statement-seven").css("height", screen.height);
      $(".section-statement-eight").css("height", screen.height);

      $(window).resize(function() {
        $(".section-statement-two").css("height", screen.height);
        $(".section-statement-three").css("height", screen.height);
        $(".section-statement-four").css("height", screen.height);
        $(".section-statement-five").css("height", screen.height);
        $(".section-statement-six").css("height", screen.height);
        $(".section-statement-seven").css("height", screen.height);
        $(".section-statement-eight").css("height", screen.height);
      });

      function buttonScrollDown() {
        downEvents();
      }
      function buttonScrollUp() {
        currentPosition = 'main';
        upEvents();
      }
    </script>

</body>
</html>

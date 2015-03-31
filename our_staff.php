<html>
<head>
    <?php include('settings.php'); ?>

    <link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui.min.css">
    <script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
</head>

<body>
  <?php include('nav.php'); ?>

  <section class="section-staff-main">
    <div class="container">
      <div class="row">
        <div class="section-staff-main-heading">
          <div class="glyphicon glyphicon-star" aria-hidden="true"></div>
          <h2>Our Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 col-lg-offset-3">
            <h3>We are not your average doctors.</br>We are a family of talented individuals and we are proud of it.</h3>
          </div>
        </div>
      </div>
      <legend style="padding-bottom:3%"></legend>
    </div>
  </section>

    <section class="section-staff-info">
      <div class="container">
        <div class="row">
          <h1 id="info-main-heading"></h1>
          <h1><small id="info-sub"></small></h1>
          <div id="info-img"></div>
          <div class="col-lg-8 col-lg-offset-2">
            <p id="info-about"></p>
          </div>
        </div>
        <legend></legend>
      </div>
    </section>

  <section class="section-staff-photos">
    <div class="container container-fill-width">

      <div class="row">
        <h2 class="staff-hygenists-heading">Dental Hygenists</h2>
      </div>
      <div class="row">
        <div class="col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-xs-5 col-xs-offset-1">
          <div class="img-container img-mbrobst"></div>
        </div>
        <div class="col-lg-2 col-lg-offset-0 col-md-3 col-md-offset-1 col-xs-5">
          <div class="img-container img-terb"></div>
        </div>
        <div class="col-lg-2 col-lg-offset-0 col-md-3 col-md-offset-1 col-xs-5 col-xs-offset-1">
          <div class="img-container img-mgehman"></div>
        </div>
        <div class="col-lg-2 col-lg-offset-0 col-md-3 col-md-offset-1 col-xs-5">
          <div class="img-container img-nguerrieri"></div>
        </div>
        <div class="col-lg-2 col-lg-offset-0 col-md-3 col-md-offset-1 col-xs-5 col-xs-offset-1">
          <div class="img-container img-clage"></div>
        </div>
        <div class="col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-xs-5">
          <div class="img-container img-gmills"></div>
        </div>
        <div class="col-lg-2 col-lg-offset-0 col-lg-offset-0 col-md-3 col-md-offset-1 col-xs-5 col-xs-offset-1">
          <div class="img-container img-jmurray"></div>
        </div>
        <div class="col-lg-2 col-lg-offset-0 col-md-3 col-md-offset-1 col-xs-5">
          <div class="img-container img-gsordini"></div>
        </div>
        <div class="col-lg-2 col-lg-offset-0 col-md-3 col-md-offset-1 col-xs-5 col-xs-offset-1">
          <div class="img-container img-lyothers"></div>
        </div>
        <div class="col-lg-2 col-lg-offset-0 col-md-3 col-md-offset-5 col-xs-5">
          <div class="img-container img-szansitis"></div>
        </div>
      </div>
    </div>
  </section>

  <?php include('footer.php'); ?>

  <script>
    var classClicked;
    var switchData;

    $(".img-container").click(
      function() {
        classClicked = $(this).attr("class");
        //alert(classClicked);

        if(classClicked.substring(14, classClicked.length + 1) != switchData) {
          switchData = classClicked;
          switchData = switchData.substring(14, switchData.length + 1);

          $("#info-img").css("display", "none");
          $(".section-staff-info").stop().slideUp();

          switch(switchData){
            case "img-mbrobst":
              $("#info-main-heading").text("Maryann Brobst");
              $("#info-sub").text("Dental Hygenist");
              $("#info-img").css("background-image", "url(images/staff/color/mbrobst.jpg)");
              $("#info-about").text("Maryann joined our staff in 1993 and is licensed in Dental Hygiene, and Expanded Functions since 1977. She lives in Franconia with her husband Duane and two children Dan and Rachel.");
              break;
            case "img-terb":
              $("#info-main-heading").text("Tina Erb");
              $("#info-sub").text("Dental Hygenist");
              $("#info-img").css("background-image", "url(images/staff/color/terb.jpg)");
              $("#info-about").text("Joined our staff in the summer of 2004, and is licensed in dental hygiene. She is enrolled at Nova Southeastern University in Fort Lauderdale, Florida to pursue her Masters Degree in Health Science, Tina earned an Associates Degree of Science from Philadelphia Community College. She later joined the staff in the summer of 2004. Tina and her husband Jim have two children Tori and Zachary. Outside of work Tina enjoys fishing, gardening and spending time with family at the beach.");
              break;
            case "img-mgehman":
              $("#info-main-heading").text("Mattie Gehman");
              $("#info-sub").text("Dental Hygenist");
              $("#info-img").css("background-image", "url(images/staff/color/mgehman.jpg)");
              $("#info-about").text("Since graduating from Christopher Dock Mennonite High School, Mattie joined us in 2009 and is currently working on her Associates Degree in Dental Hygiene at Montgomery County Community College. She is the daughter of Marlin and Sue Gehman and also has a younger sister Carrie. Mattie enjoys playing the viola, soccer and volleyball when she is not at work. She also enjoys time with her friends and is actively involved at her church with the Young Adult Group.");
              break;
            case "img-nguerrieri":
              $("#info-main-heading").text("Nicole Guerrieri");
              $("#info-sub").text("Dental Hygenist");
              $("#info-img").css("background-image", "url(images/staff/color/nguerrieri.jpg)");
              $("#info-about").text("Since graduating from Christopher Dock Mennonite High School, Mattie joined us in 2009 and is currently working on her Associates Degree in Dental Hygiene at Montgomery County Community College. She is the daughter of Marlin and Sue Gehman and also has a younger sister Carrie. Mattie enjoys playing the viola, soccer and volleyball when she is not at work. She also enjoys time with her friends and is actively involved at her church with the Young Adult Group.");
              break;
            case "img-clage":
              $("#info-main-heading").text("Chris Lage");
              $("#info-sub").text("Dental Hygenist");
              $("#info-img").css("background-image", "url(images/staff/color/clage.jpg)");
              $("#info-about").text("After receiving an Associates Degree in Science, Chris joined our staff in 1994. She is married to her husband Steve and they have two children. Her interests outside of the office include music, soccer and traveling.");
              break;
            case "img-gmills":
              $("#info-main-heading").text("Gail Mills");
              $("#info-sub").text("Dental Hygenist");
              $("#info-img").css("background-image", "url(images/staff/color/gmills.jpg)");
              $("#info-about").text("Gail received and Associates Degree from West Liberty University in West Liberty, West Virginia before she began her career with us in 2007. She is married to her husband Sam who is a retired chemical engineer and they have four children Steve, Sam, Alex, and Katelyn. When she is not working she enjoys quilting, reading and taking vacations!...especially at the beach.");
              break;
            case "img-jmurray":
              $("#info-main-heading").text("Janice Murray");
              $("#info-sub").text("Dental Hygenist");
              $("#info-img").css("background-image", "url(images/staff/color/jmurray.jpg)");
              $("#info-about").text("Janice became a member of our staff in the summer of 2005 after receiving an Associates Degree in Dental Hygiene. She and her husband Denny enjoy fixing up their new home.");
              break;
            case "img-gsordini":
              $("#info-main-heading").text("Gina Sordini");
              $("#info-sub").text("Dental Hygenist");
              $("#info-img").css("background-image", "url(images/staff/color/gsordini.jpg)");
              $("#info-about").text("A graduate of Montgomery County Community College in 1995, Gina received a Degree in Dental Hygiene. She joined our staff in the spring of 2010. Gina is married and has three boys. In her down time she enjoys reading and family time.");
              break;
            case "img-lyothers":
              $("#info-main-heading").text("Linsey Yothers");
              $("#info-sub").text("Dental Hygenist");
              $("#info-img").css("background-image", "url(images/staff/color/lyothers.jpg)");
              $("#info-about").text("After high school, Linsey went to Montgomery County Community College and graduated with an Associates Degree in Dental Hygiene. She later than became a member of our staff in 2006 Lindsey and her husband Ben were married in 2008 and they have one son Braeden, born in 2010. Outside of work, Linsey enjoys traveling, baking, photography, spending time with family and friends. But above all, enjoying every minute being a mother.");
              break;
            case "img-szansitis":
              $("#info-main-heading").text("Susan Zansitis");
              $("#info-sub").text("Dental Hygenist");
              $("#info-img").css("background-image", "url(images/staff/color/szansitis.jpg)");
              $("#info-about").text("Susan is a registered Dental Hygienist with an Associates Degree in Applied Science from Northampton County Community College in Bethlehem PA. She started working with us in the fall of 1990. She has been married to the same guy for a long time and has three children. Outside of work she enjoys reading, yoga, cycling and dining with friends and family.");
              break;
          }

          $("#info-img").stop().fadeIn(1500);
          $(".section-staff-info").slideDown();
          $("#info-main-heading").stop().animate({
            color: "white"
          }, 0, function() {
            $("#info-main-heading").stop().animate({
              color: "#333333"
            }, 1000);
          });
          $("#info-sub").stop().animate({
            color: "white"
          }, 0, function() {
            $("#info-sub").stop().animate({
              color: "#333333"
            }, 1000);
          });
          $("#info-about").stop().animate({
            color: "white"
          }, 0, function() {
            $("#info-about").stop().animate({
              color: "#333333"
            }, 1000);
          });

        }

      });
  </script>
</body>
</html>

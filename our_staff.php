<html>
<head>
    <?php include('settings.php'); ?>

    <link href="customCSS/our_staff.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php include('nav.php'); ?>

  <section class="section-staff-main section-main">
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
    </div>
  </section>

  <div class="container"><legend class="staff-legend-main"></legend></div>

  <section class="section-staff-info section-content">
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

  <section class="section-staff-photos section-content">
    <div id="container-staff" class="container container-fill-width">
      <h4>Click our pictures to learn more about us.</h4>

  <script>
    var items = [];
    var orderArr = [];
    var html = "";
    var default_img_color_path = "images/staff/color/";
    var default_img_bw_path = "images/staff/bw/";

    $.getJSON( "admin_files/our_staff/our_staff.json", function( data ) {
      $.each( data, function( key, val ) {
        //items.push(key);
        items.push(val);
      });

      orderArr = items[0];

      for(var y = 1; y < items.length; y++){
        html = "";
        for(var i = 1; i < items.length; i++){
          if(items[i][0].section_title == orderArr[0][y]){
            html = "<div class='row'><h2 class='staff-heading'>" + items[i][0].section_title + "</h2>";
            for(var x = 1; x < items[i].length; x++){
              html += '<div class="col-lg-2 col-md-3 col-xs-5">';
              html += '<div onclick=setStaffInfo(this); class="img-container staff-item "'; 
              if(items[i][x].image == ""){
                html += 'style="background-color:' + getRandomColor() + '" ';
              } else {
                html += 'style="background-image:url(' + default_img_bw_path + items[i][x].image + ')" ';
              }
              html += 'data-name="' + items[i][x].name + '" data-title="' + items[i][x].title + '" data-sub-title="' + items[i][x].sub_title + '" data-bio="' + items[i][x].bio + '"';
              html += '></div></div>';
            }
          }
        }
        $('#container-staff').append(html);
      }
    });
  </script>

  </section>

  <?php include('footer.php'); ?>

  <script>
    function setStaffInfo(obj){
      //debugger;
      //console.log(obj);
      var strBG = obj.style.backgroundImage;
      strBG = strBG.replace("/bw/", "/color/");

      $("#info-img").css("display", "none");
      $(".section-staff-info").css("background-color", "#95de93");

      $("#info-main-heading").text(obj.getAttribute('data-name'));
      $("#info-sub").text(obj.getAttribute('data-title'));
      $("#info-about").text(obj.getAttribute('data-bio'));
      $("#info-img").css("background-image", strBG);

      $("#info-img").stop().fadeIn(1000);
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
      

      $("html, body").stop().animate({
        scrollTop: $(".section-staff-info").offset().top-50
      }, 700, !1);
      //-50 makes up for nav bar space, which is set to min-height 50px
    }

    function getRandomColor() {
      var letters = '0123456789ABCDEF'.split('');
      var color = '#';
      for (var i = 0; i < 6; i++ ) {
          color += letters[Math.floor(Math.random() * 16)];
      }
      return color;
    }
  </script>
</body>
</html>

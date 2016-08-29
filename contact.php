<html>
<head>
    <link href="customCSS/contact.css" rel="stylesheet" type="text/css" />
    <?php include('settings.php'); ?>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css"></script>
</head>

<body>
  <?php include('nav.php'); ?>

	<section class="section-contact-main section-main">
		<div class="container container-fill-width">
			<div class="row">
				<div class="glyphicon glyphicon-map-marker contact-globe section-main-glyphicon" aria-hidden="true"></div><br />
				<h1 class="section-main-header section-contact-main-header">
					Get in touch.
				</h1>
        <p>
          Call, email, fax, or face-to-face.
        </p>
			</div>
		</div>
	</section>

  <section class="section-contact-call section-content">
    <div class="container container-full">
      <div class="row">
        <div class="glyphicon glyphicon-earphone" aria-hidden="true"></div>
        <h2 class="phone-heading">Phone</h2>
        <h1 class="phone-number"><a href="tel:215-721-8811">215-721-8811</a></h1>
        <h4>24 hour on call service</h4>
      </div>
      <h3 class="fax-heading">Fax</h3>
      <h4 class="fax-number">215-721-5393</h4>
    </div>
  </section>

  <section class="section-contact-social section-content">
    <div class="container">
      <div class="row">
        <h3>Find us on Facebook<h3>
        <div class="social-icons">
          <a href="https://www.facebook.com/daschbachdentistry/" target="_blank" class="btn btn-round btn-clear btn-facebook"><i class="fa fa-facebook"></i></a>
          <!-- <a href="" target="_blank" style="margin-left: 1%; margin-right: 1%" class="btn btn-round btn-clear btn-linkedin"><i class="fa fa-linkedin-square"></i></a> -->
        </div>
      </div>
    </div>
  </section>

  <section class="section-contact-information section-content">
    <div class="container container-fill-width">
      <div class="row">
        <div class="contact-col col-lg-4 col-lg-offset-2">
          <h2 class="contact-info-heading">Office Hours</h2>
          <legend></legend>
          <ul class="list-group">
            <li id=1 class="list-group-item">
              Monday
              <p class="contact-hours-hours">8:30am - 5:00pm</p>
            </li>
            <li id=2 class="list-group-item">
              Tuesday
              <p class="contact-hours-hours">8:30am - 9:00pm</p>
            </li>
            <li id=3 class="list-group-item">
              Wednesday
              <p class="contact-hours-hours">8:30am - 5:00pm</p>
            </li>
            <li id=4 class="list-group-item">
              Thursday
              <p class="contact-hours-hours">8:30am - 9:00pm</p>
            </li>
            <li id=5 class="list-group-item">
              Friday
              <p class="contact-hours-hours">8:30am - 5:00pm</p>
            </li>
            <li id=6 class="list-group-item">
              Saturday
              <p class="contact-hours-hours">8:30am - 2:00pm</p>
            </li>
            <li id=0 class="list-group-item">
              Sunday
              <p class="contact-hours-hours">Closed</p>
            </li>
          </ul>
        </div>
        <div class="contact-col col-lg-4">
          <h2 class="contact-info-heading">Address</h2>
          <legend></legend>
          <p class="contact-address"><a target="_blank" href="https://www.google.com/maps/place/390+Harleysville+Pike,+Souderton,+PA+18964/@40.3153595,-75.3337482,17z/data=!3m1!4b1!4m2!3m1!1s0x89c6a024479ca3cd:0x9b3eb5a30a3e87e9?hl=en">Dr. Robert L. Daschbach D.D.S.<br/>390 Harleysville Pike<br/>Souderton PA 18964</a></p>
          <p>Off of Godshall road across from Bergey&#39;s Car dealership.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-maps">
    <div class="container-fluid">
      <?php include('google-map.php'); ?>
    </div>
  </section>

  <?php include('footer.php'); ?>

  <script>
    var d = new Date();
    if(d.getDay() == '0'){
      $('#' + d.getDay()).addClass('closed-day');
    } else {
      $('#' + d.getDay()).addClass('open-day');
    }
  </script>

</body>
</html>

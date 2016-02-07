<html>
<head>
    <link href="customCSS/contact.css" rel="stylesheet" type="text/css" />
    <?php include('settings.php'); ?>
</head>

<body>
    <?php include('nav.php'); ?>

    <section class="section-contact-main">
    	<div class="container container-fill-height">
    			<h1 class="section-contact-main-header1">
            <div class="glyphicon glyphicon-search contact-globe" aria-hidden="true"></div><br />
            Let's work together.
          </h1>
    	</div>
    </section>

    <section class="contact-call">
      <div class="container conatiner-full">
        <div class="row">
          <div class="glyphicon glyphicon-earphone" aria-hidden="true"></div>
          <h3 class="contact-call-heading-phone">Give us a call</h1>
          <h1>215-721-8811</h1>
        </div>
        <h3>Fax</h3>
        <p>215-721-5393</p>
      </div>
    </section>

    <section class="section-contact-information">
      <div class="container container-fill-width">
        <div class="row">
          <div class="contact-col col-lg-4 col-lg-offset-2">
            <h2 class="contact-info-heading">Office Hours</h2>
            <legend></legend>
            <ul class="list-group">
              <li class="list-group-item lihover">
                Monday
                <p class="contact-hours-hours">8:30am - 5:00pm</p>
              </li>
              <li class="list-group-item lihover">
                Tuesday
                <p class="contact-hours-hours">8:30am - 9:00pm</p>
              </li>
              <li class="list-group-item lihover">
                Wednesday
                <p class="contact-hours-hours">8:30am - 5:00pm</p>
              </li>
              <li class="list-group-item lihover">
                Thursday
                <p class="contact-hours-hours">8:30am - 9:00pm</p>
              </li>
              <li class="list-group-item lihover">
                Friday
                <p class="contact-hours-hours">8:30am - 5:00pm</p>
              </li>
              <li class="list-group-item lihover">
                Saturday
                <p class="contact-hours-hours">8:30am - 2:00pm</p>
              </li>
              <li class="list-group-item lihover">
                Sunday
                <p class="contact-hours-hours">Closed</p>
              </li>
            </ul>
          </div>
          <div class="contact-col col-lg-4">
            <h2 class="contact-info-heading">Address</h2>
            <legend></legend>
            <p class="contact-address">Dr. Robert L. Daschbach D.D.S.<br/>390 Harleysville Pike<br/>Souderton PA 18964</p>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-maps">
      <div class="container">
        <h1 class="contact-map-heading"><a target="_blank" href="https://www.google.com/maps/place/390+Harleysville+Pike,+Souderton,+PA+18964/@40.3153595,-75.3337482,17z/data=!3m1!4b1!4m2!3m1!1s0x89c6a024479ca3cd:0x9b3eb5a30a3e87e9?hl=en">Locate us</a></h1>
        <div class="glyphicon glyphicon-map-marker contact-map-marker" aria-hidden="true"></div>
        <?php include('google-map.php'); ?>
      </div>
    </section>




    <?php include('footer.php'); ?>

</body>
</html>

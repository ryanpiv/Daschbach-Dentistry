<html>
<head>
    <?php include('settings.php'); ?>
</head>

<body>
  <?php include('nav.php'); ?>

  <section class="section-gallery-main">
    <div id="Container" class="container container-fill-width">
      <h1 class="section-gallery-main-heading">Photo Gallery</h1>
      <div class="section-gallery-sort-controls">
        <button class="filter btn btn-primary" data-filter="all">View All</button>
        <button class="filter btn btn-primary" data-filter=".category-1">Inside</button>
        <button class="filter btn btn-primary" data-filter=".category-2">Outside</button>
        <button class="filter btn btn-primary" data-filter=".category-3">Patient Rooms</button>
        <button class="filter btn btn-primary" data-filter=".category-4">Miscellaneous</button>
      </div>

      <div class="row">
        <div class=" mix category-1 filter" data-my-order="1">
          <div class="office1"></div>
        </div>
        <div class=" mix category-1 filter" data-my-order="1">
          <div class="office2"></div>
        </div>
        <div class=" mix category-1 filter" data-my-order="1">
          <div class="office3"></div>
        </div>
        <div class=" mix category-1 filter" data-my-order="1">
          <div class="office4"></div>
        </div>
        <div class=" mix category-1 filter" data-my-order="1">
          <div class="office5"></div>
        </div>
        <div class=" mix category-1 filter" data-my-order="1">
          <div class="office6"></div>
        </div>
        <div class=" mix category-1 filter" data-my-order="1">
          <div class="office7"></div>
        </div>
        <div class=" mix category-1 filter" data-my-order="1">
          <div class="office8"></div>
        </div>
        <div class=" mix category-1 filter" data-my-order="1">
          <div class="office9"></div>
        </div>

        <div class=" mix category-4 filter" data-my-order="1">
          <div class="gt1"></div>
        </div>
        <div class=" mix category-4 filter" data-my-order="1">
          <div class="gt2"></div>
        </div>
        <div class=" mix category-4 filter" data-my-order="1">
          <div class="gt3"></div>
        </div>
        <div class=" mix category-4 filter" data-my-order="1">
          <div class="gt4"></div>
        </div>

        <div class=" mix category-2 filter" data-my-order="1">
          <div class="land1"></div>
        </div>
        <div class=" mix category-2 filter" data-my-order="1">
          <div class="land2"></div>
        </div>
        <div class=" mix category-2 filter" data-my-order="1">
          <div class="land3"></div>
        </div>
        <div class=" mix category-2 filter" data-my-order="1">
          <div class="land4"></div>
        </div>
        <div class=" mix category-2 filter" data-my-order="1">
          <div class="land5"></div>
        </div>
        <div class=" mix category-2 filter" data-my-order="1">
          <div class="land6"></div>
        </div>
        <div class=" mix category-2 filter" data-my-order="1">
          <div class="land7"></div>
        </div>
        <div class=" mix category-2 filter" data-my-order="1">
          <div class="land8"></div>
        </div>
        <div class=" mix category-2 filter" data-my-order="1">
          <div class="land9"></div>
        </div>
        <div class=" mix category-2 filter" data-my-order="1">
          <div class="land10"></div>
        </div>
        <div class=" mix category-2 filter" data-my-order="1">
          <div class="land44"></div>
        </div>
        <div class=" mix category-2 filter" data-my-order="1">
          <div class="land66"></div>
        </div>

        <div class=" mix category-3 filter" data-my-order="1">
          <div class="pr1"></div>
        </div>
        <div class=" mix category-3 filter" data-my-order="1">
          <div class="pr2"></div>
        </div>
        <div class=" mix category-3 filter" data-my-order="1">
          <div class="pr3"></div>
        </div>
        <div class=" mix category-3 filter" data-my-order="1">
          <div class="pr4"></div>
        </div>
        <div class=" mix category-3 filter" data-my-order="1">
          <div class="pr5"></div>
        </div>
        <div class=" mix category-3 filter" data-my-order="1">
          <div class="pr6"></div>
        </div>
        <div class=" mix category-3 filter" data-my-order="1">
          <div class="pr7"></div>
        </div>
        <div class=" mix category-3 filter" data-my-order="1">
          <div class="pr8"></div>
        </div>
        <div class=" mix category-3 filter" data-my-order="1">
          <div class="pr9"></div>
        </div>
        <div class=" mix category-3 filter" data-my-order="1">
          <div class="pr10"></div>
        </div>
        <div class=" mix category-3 filter" data-my-order="1">
          <div class="pr11"></div>
        </div>
        <div class=" mix category-3 filter" data-my-order="1">
          <div class="pr13"></div>
        </div>
        <div class=" mix category-3 filter" data-my-order="1">
          <div class="pr14"></div>
        </div>
      </div>

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
    $(function(){
      $('#Container').mixItUp();
    });
  </script>

  <script>
    //debugger;
    var classData;
    var height = window.innerHeight;
    height = height * .85;

    $(window).resize(function(){
      //height = screen.height;
      height = window.innerHeight;
      height = height * .85;
      $("#displayDiv").css("height", height);
      $(".modal-content").css("height", height);
    });

    $(".mix").click(function(){
      //debugger;
      classClicked = $(this).children("div").attr("class");
      $("#displayDiv").attr("class", classClicked);
      $("#displayDiv").css("height", height);
      $(".modal-content").css("height", height);
      $("#myModal").modal('show');
    });
  </script>
</body>
</html>

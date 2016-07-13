<!-- <div class="footer-adjust"></div> -->
<footer class="footer section-content">
    <div class="container">
        <p class="footer-text">"I can do everything through him who gives me strength."</p>
        <legend style="margin-bottom:10px"></legend>
        <p>- Philippians 4:3</p>
    </div>
</footer>
<!-- Scripts -->
<script src="customJS/custom.js" type="text/javascript"></script>

<script>
	Pace.on("done", function () {
		$("section").css('display', 'block');
		$(".footer").css('display', 'block');
		//$(".vegas-overlay").css('display', 'block');
		$('#Container-mix').mixItUp();
		try{
			initGoogleMap();
		} catch(err) { console.log(err); }
		
	});
</script>
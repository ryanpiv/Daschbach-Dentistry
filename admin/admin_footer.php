<a href="logout.php" class="btn btn-danger btn-sm" style="z-index:10000; bottom:0; right:0; position:fixed">Logout</a>


<!-- <div class="footer-adjust"></div> -->
<footer class="footer section-content">
    <div class="container">
        <p class="footer-text">"I can do everything through him who gives me strength."</p>
        <legend style="margin-bottom:10px"></legend>
        <p>- Philippians 4:3</p>
    </div>
</footer>

<!-- Scripts -->
<script src="../customJS/custom.js" type="text/javascript"></script>

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

<script>
window.onbeforeunload = function (e) {
   e.preventDefault(); //Not even sure what the default action does, but oh well
   ajax = new XMLHttpRequest();
   ajax.open("killsession.php","POST",true);
   ajax.send(); 
}
</script>
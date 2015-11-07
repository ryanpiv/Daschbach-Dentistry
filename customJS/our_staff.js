var classClicked;
var switchData;

$(".img-container").click(function() {
	classClicked = $(this).attr("class");
	//alert(classClicked);

	if (classClicked.substring(14, classClicked.length + 1) != switchData) {
		switchData = classClicked;
		switchData = switchData.substring(14, switchData.length + 1);

		$("#info-img").css("display", "none");
		//$(".section-staff-info").css("display", "none");

		switch (switchData) {
			case "img-mbrobst":
				$("#info-main-heading").text("Maryann Brobst");
				$("#info-sub").text("Dental Hygenist");
				$("#info-img").css("background-image",
					"url(images/staff/color/mbrobst.jpg)");
				$("#info-about").text(
					"Maryann joined our staff in 1993 and is licensed in Dental Hygiene, and Expanded Functions since 1977. She lives in Franconia with her husband Duane and two children Dan and Rachel."
				);
				break;
			case "img-terb":
				$("#info-main-heading").text("Tina Erb");
				$("#info-sub").text("Dental Hygenist");
				$("#info-img").css("background-image", "url(images/staff/color/terb.jpg)");
				$("#info-about").text(
					"Joined our staff in the summer of 2004, and is licensed in dental hygiene. She is enrolled at Nova Southeastern University in Fort Lauderdale, Florida to pursue her Masters Degree in Health Science, Tina earned an Associates Degree of Science from Philadelphia Community College. She later joined the staff in the summer of 2004. Tina and her husband Jim have two children Tori and Zachary. Outside of work Tina enjoys fishing, gardening and spending time with family at the beach."
				);
				break;
			case "img-mgehman":
				$("#info-main-heading").text("Mattie Gehman");
				$("#info-sub").text("Dental Hygenist");
				$("#info-img").css("background-image",
					"url(images/staff/color/mgehman.jpg)");
				$("#info-about").text(
					"Since graduating from Christopher Dock Mennonite High School, Mattie joined us in 2009 and is currently working on her Associates Degree in Dental Hygiene at Montgomery County Community College. She is the daughter of Marlin and Sue Gehman and also has a younger sister Carrie. Mattie enjoys playing the viola, soccer and volleyball when she is not at work. She also enjoys time with her friends and is actively involved at her church with the Young Adult Group."
				);
				break;
			case "img-nguerrieri":
				$("#info-main-heading").text("Nicole Guerrieri");
				$("#info-sub").text("Dental Hygenist");
				$("#info-img").css("background-image",
					"url(images/staff/color/nguerrieri.jpg)");
				$("#info-about").text(
					"Since graduating from Christopher Dock Mennonite High School, Mattie joined us in 2009 and is currently working on her Associates Degree in Dental Hygiene at Montgomery County Community College. She is the daughter of Marlin and Sue Gehman and also has a younger sister Carrie. Mattie enjoys playing the viola, soccer and volleyball when she is not at work. She also enjoys time with her friends and is actively involved at her church with the Young Adult Group."
				);
				break;
			case "img-clage":
				$("#info-main-heading").text("Chris Lage");
				$("#info-sub").text("Dental Hygenist");
				$("#info-img").css("background-image",
					"url(images/staff/color/clage.jpg)");
				$("#info-about").text(
					"After receiving an Associates Degree in Science, Chris joined our staff in 1994. She is married to her husband Steve and they have two children. Her interests outside of the office include music, soccer and traveling."
				);
				break;
			case "img-gmills":
				$("#info-main-heading").text("Gail Mills");
				$("#info-sub").text("Dental Hygenist");
				$("#info-img").css("background-image",
					"url(images/staff/color/gmills.jpg)");
				$("#info-about").text(
					"Gail received and Associates Degree from West Liberty University in West Liberty, West Virginia before she began her career with us in 2007. She is married to her husband Sam who is a retired chemical engineer and they have four children Steve, Sam, Alex, and Katelyn. When she is not working she enjoys quilting, reading and taking vacations!...especially at the beach."
				);
				break;
			case "img-jmurray":
				$("#info-main-heading").text("Janice Murray");
				$("#info-sub").text("Dental Hygenist");
				$("#info-img").css("background-image",
					"url(images/staff/color/jmurray.jpg)");
				$("#info-about").text(
					"Janice became a member of our staff in the summer of 2005 after receiving an Associates Degree in Dental Hygiene. She and her husband Denny enjoy fixing up their new home."
				);
				break;
			case "img-gsordini":
				$("#info-main-heading").text("Gina Sordini");
				$("#info-sub").text("Dental Hygenist");
				$("#info-img").css("background-image",
					"url(images/staff/color/gsordini.jpg)");
				$("#info-about").text(
					"A graduate of Montgomery County Community College in 1995, Gina received a Degree in Dental Hygiene. She joined our staff in the spring of 2010. Gina is married and has three boys. In her down time she enjoys reading and family time."
				);
				break;
			case "img-lyothers":
				$("#info-main-heading").text("Linsey Yothers");
				$("#info-sub").text("Dental Hygenist");
				$("#info-img").css("background-image",
					"url(images/staff/color/lyothers.jpg)");
				$("#info-about").text(
					"After high school, Linsey went to Montgomery County Community College and graduated with an Associates Degree in Dental Hygiene. She later than became a member of our staff in 2006 Lindsey and her husband Ben were married in 2008 and they have one son Braeden, born in 2010. Outside of work, Linsey enjoys traveling, baking, photography, spending time with family and friends. But above all, enjoying every minute being a mother."
				);
				break;
			case "img-szansitis":
				$("#info-main-heading").text("Susan Zansitis");
				$("#info-sub").text("Dental Hygenist");
				$("#info-img").css("background-image",
					"url(images/staff/color/szansitis.jpg)");
				$("#info-about").text(
					"Susan is a registered Dental Hygienist with an Associates Degree in Applied Science from Northampton County Community College in Bethlehem PA. She started working with us in the fall of 1990. She has been married to the same guy for a long time and has three children. Outside of work she enjoys reading, yoga, cycling and dining with friends and family."
				);
				break;
			case "img-jborisow":
				$("#info-main-heading").text("Jane Borisow");
				$("#info-sub").text("Dental Assitant");
				$("#info-img").css("background-image",
					"url(images/staff/color/jborisow.jpg)");
				$("#info-about").text(
					"Susan is a registered Dental Hygienist with an Associates Degree in Applied Science from Northampton County Community College in Bethlehem PA. She started working with us in the fall of 1990. She has been married to the same guy for a long time and has three children. Outside of work she enjoys reading, yoga, cycling and dining with friends and family."
				);
				break;
			case "img-adelaney":
				$("#info-main-heading").text("Annmarie Delaney");
				$("#info-sub").text("Dental Assitant");
				$("#info-img").css("background-image",
					"url(images/staff/color/adelaney.jpg)");
				$("#info-about").text(
					"Annmarie joined us in 2001 graduating from Harry S. Truman High School in Levitown, PA and Bucks County Technical School in Fairless Hills, PA to become a dental assistant. She has three children and enjoys spending time with her family and as a Girl Scout Leader."
				);
				break;
			case "img-szansitis":
				$("#info-main-heading").text("Susan Zansitis");
				$("#info-sub").text("Dental Assitant");
				$("#info-img").css("background-image",
					"url(images/staff/color/szansitis.jpg)");
				$("#info-about").text(
					"Susan is a registered Dental Hygienist with an Associates Degree in Applied Science from Northampton County Community College in Bethlehem PA. She started working with us in the fall of 1990. She has been married to the same guy for a long time and has three children. Outside of work she enjoys reading, yoga, cycling and dining with friends and family."
				);
				break;
			case "img-memeric":
				$("#info-main-heading").text("Marlene Emrick");
				$("#info-sub").text("Dental Assitant");
				$("#info-img").css("background-image",
					"url(images/staff/color/memeric.jpg)");
				$("#info-about").text(
					"Marlene became a Dental Assistant in the fall of 2008. Outside the office she enjoys restoring old furniture, photography, and music. She lives in Souderton with her husband Galen."
				);
				break;
			case "img-szansitis":
				$("#info-main-heading").text("Susan Zansitis");
				$("#info-sub").text("Dental Assitant");
				$("#info-img").css("background-image",
					"url(images/staff/color/szansitis.jpg)");
				$("#info-about").text(
					"Susan is a registered Dental Hygienist with an Associates Degree in Applied Science from Northampton County Community College in Bethlehem PA. She started working with us in the fall of 1990. She has been married to the same guy for a long time and has three children. Outside of work she enjoys reading, yoga, cycling and dining with friends and family."
				);
				break;
			case "img-nnice":
				$("#info-main-heading").text("Nadeen Nice");
				$("#info-sub").text("Dental Assitant");
				$("#info-img").css("background-image",
					"url(images/staff/color/nnice.jpg)");
				$("#info-about").text(
					"Nadeen is a Certified Dental Assistant with an expanded functions degree. She joined our staff in 2008. She is married to her husband Lowell and they have a cat named Chipper. Her hobbies consist of gardening, fishing, hunting, bird watching, collecting antiques and restoring old furniture and watching her nephew race go-karts."
				);
				break;
				//end assistants
				//begin office
			case "img-jblattner":
				$("#info-main-heading").text("Joyce Blattner");
				$("#info-sub").text("Office");
				$("#info-img").css("background-image",
					"url(images/staff/color/jblattner.jpg)");
				$("#info-about").text(
					"Joyce completed her high school education and got her diploma in 1960. She went on to a four year program at the Bible Institute with 2 year teacher training course where she received a certificate of achievement from 1969 to 1972. She began working for Dr. Daschbach in 1984 in the front office. Her family consists of her husband and three children and 11 grandchildren. Outside of work she enjoys sewing, gardening, visiting the sick and having picnics with her grandchildren or going to their sporting events."
				);
				break;
			case "img-dblattner":
				$("#info-main-heading").text("Dalene Blattner");
				$("#info-sub").text("Office");
				$("#info-img").css("background-image",
					"url(images/staff/color/dblattner.jpg)");
				$("#info-about").text(
					"Joined our staff in 1999 and began in the front office. She is married to David and has four children Brooke, Westin, Taylor, and Chase. Outside of work she enjoys gardening, going to the mountains, and spending time with her family."
				);
				break;
			case "img-ddaschbach":
				$("#info-main-heading").text("Donna Daschbach");
				$("#info-sub").text("Office");
				$("#info-img").css("background-image",
					"url(images/staff/color/ddaschbach.jpg)");
				$("#info-about").text(
					"Donna is the wife to Dr. Robert L. Daschbach. She started working in the front office position in May of 2008. She is a graduate of Perkiomen Valley High School (1981) and married Dr. Bob in October 1983. Donna and Bob have one daughter, Mandy, who was born in October 1984. Outside of work, Donna enjoys skiing, golf, entertaining, cooking, gardening, and decorating. Some of her decorating style can be seen though out the office."
				);
				break;
			case "img-vfontaine":
				$("#info-main-heading").text("Vera Fontaine");
				$("#info-sub").text("Office");
				$("#info-img").css("background-image",
					"url(images/staff/color/vfontaine.jpg)");
				$("#info-about").text(
					"Vera has an Associates Degree in Medical Transcription and became a member of the front office in June 2008. She is married to her husband Theodore and has three children Jason, Michael, and Rachel. Her other interests outside of the office include skiing and cooking."
				);
				break;
			case "img-szansitis":
				$("#info-main-heading").text("Susan Zansitis");
				$("#info-sub").text("Office");
				$("#info-img").css("background-image",
					"url(images/staff/color/szansitis.jpg)");
				$("#info-about").text(
					"Susan is a registered Dental Hygienist with an Associates Degree in Applied Science from Northampton County Community College in Bethlehem PA. She started working with us in the fall of 1990. She has been married to the same guy for a long time and has three children. Outside of work she enjoys reading, yoga, cycling and dining with friends and family."
				);
				break;
			case "img-lleyland":
				$("#info-main-heading").text("Lisa Leyland");
				$("#info-sub").text("Office");
				$("#info-img").css("background-image",
					"url(images/staff/color/lleyland.jpg)");
				$("#info-about").text(
					"Lisa became the book keeper for the office in 1996 and has a BS in Accounting from Philadelphia University. Lisa is married to Steve and has two boys, William and Tyler. She spends her free time attending sporting events for her boys and enjoys outdoor activities such as swimming, camping, skiing, walking, biking. She also enjoys the occasional board game and spending time with her family."
				);
				break;
			case "img-mmowry":
				$("#info-main-heading").text("Mandy Mowry");
				$("#info-sub").text("Office");
				$("#info-img").css("background-image",
					"url(images/staff/color/mmowry.jpg)");
				$("#info-about").text(
					"Joined our staff in 2012 however, Mandy has always been around the practice being that she is Dr. Daschbach's daughter. She graduated in 2007 from Lock Haven University with her B.S. in Education. Mandy lives in Souderton with her husband Kevin and her dog Remington. Mandy enjoys spending time with her family and friends, watching movies, cooking and playing field hockey."
				);
				break;
			case "img-jpoehlmann":
				$("#info-main-heading").text("Jan Poehlmann");
				$("#info-sub").text("Office");
				$("#info-img").css("background-image",
					"url(images/staff/color/jpoehlmann.jpg)");
				$("#info-about").text(
					"Jan is a member of our front office and started working for us in 2010. She is married to her husband Glen since 1981 and has two daughters, Kimberly and Kelsey. Her hobbies outside of work consist of singing on praise team at church, tending to her animals (4 dogs, 3 cats, and1 cockatiel.) time, gardening and traveling with her family."
				);
				break;
			case "img-kpultorak":
				$("#info-main-heading").text("Keimberly Pultorak");
				$("#info-sub").text("Office");
				$("#info-img").css("background-image",
					"url(images/staff/color/kpultorak.jpg)");
				$("#info-about").text(
					"Kim started in 2010 and is the personal assistant to Dr. Daschbach with a Bachelor of Science from Wesley College in Dover DE. She is married to her husband Rick and is the mother to their daughter Natalie. She also has a dog named Jasper who is a two year old Sheltie. Outside of the office, Kim enjoys cooking, interior design, floral design, scrapbooking, gardening, and spending time with family."
				);
				break;
			case "img-bscheetz":
				$("#info-main-heading").text("Becky Scheetz");
				$("#info-sub").text("Office");
				$("#info-img").css("background-image",
					"url(images/staff/color/bscheetz.jpg)");
				$("#info-about").text(
					"Becky also started with us in the front office in 2010 and is a graduate from Christopher Dock Mennonite High School (1969). She is married to her husband Tom and has four children and seven grandchildren. Becky?s hobbies and interests outside of the office are being a part of the Tuesday Night Knitters Group which her grandchildren and family very much benefit from, walking with friends in the morning hours, and vacationing with family in Ocean City, NJ."
				);
				break;
		}

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

	}

	$("html, body").stop().animate({
		scrollTop: $(".staff-legend-main").offset().top
	}, 700, !1);

});

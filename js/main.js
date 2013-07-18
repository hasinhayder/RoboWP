;
(function($){
$(document).ready(function(){
	var w = $(window).width();
	var h = $(document).height();
	var safeh = h-100-$(window).height();
	// console.log(safeh);
	$(".header").css("height",($(".thumb img").height()));
	$(".next").css({"left":(w-70),display:"block"});

	$(".navigation li a").bind("click",function(){
		var loc = $(this).attr("href");
		$("body").scrollTo($(loc),1000);
		$(".navigation li").removeClass("active");
		$(this).parent().addClass("active");
		return false;
	});

	$(window).bind("scroll",function(){
		var st = $(window).scrollTop();
		// console.log(st);
		if(st>100 && st<safeh)
			$(".gototop").show("slow");
		else
			$(".gototop").hide();
	});

	$(".topanchor").bind("click",function(){
		$(".navigation li").removeClass("active");
		$(".homelink").addClass("active");
		$("body").scrollTo($("#home"),1000);
		return false;
	});

	// $("#gmap").show();

	$(".rslides").responsiveSlides({
		maxwidth: w,
		speed: 1000,
		timeout:6000,
		nav:true,
		prevText:"<i class='icon-chevron-sign-left'></i>",
		nextText:"<i class='icon-chevron-sign-right'></i>"

	});


	/** Time Calculation Started **/
	dateFuture = new Date();
	dateFuture.setFullYear(2013,6,20);
	dateNow = new Date();

	seconds = Math.floor((dateFuture - (dateNow))/1000);
	minutes = Math.floor(seconds/60);
	hours = Math.floor(minutes/60);
	days = Math.floor(hours/24);

	hours = hours-(days*24);
	minutes = minutes-(days*24*60)-(hours*60);
	seconds = seconds-(days*24*60*60)-(hours*60*60)-(minutes*60);
	var dayText = " DAYS";
	if(days<=1) dayText = " DAY";

	var hourText = " HOURS";
	if(hours<=1) hourText=" HOUR";

	$(".days").html(days+dayText);
	$(".hours").html(hours+hourText);
	/** Time Calculation Ended**/
});
})(jQuery);
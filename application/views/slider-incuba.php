<!-- Plugin css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.animateSlider.css">
<!-- Demo css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/slider_principal.css">
<ul class="anim-slider">

	<!-- Slide No1 -->
	<li class="anim-slide">
	</li>

	<!-- Slide No2 -->
	<li class="anim-slide">
	</li>

	<!-- Slide No3 -->
	<li class="anim-slide">
	</li>

	<!-- Arrows -->
	<nav class="anim-arrows">
		<span class="anim-arrows-prev"></span>
		<span class="anim-arrows-next"></span>
	</nav>
	<!-- Dynamically created dots -->
</ul> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/modernizr.js"></script>	
<script src="<?php echo base_url(); ?>js/jquery.animateSlider.js"></script>
<script>
	$(".anim-slider").animateSlider(
	{
		autoplay	:true,
		interval	:5000,
		animations 	: 
		{
					0	: 	//Slide No1
					{
						li	: 
						{
							show   	  : "fadeIn",
							hide 	  : "flipOutX",
							delayShow : "delay-5s"
						}
					},
					1	: //Slide No2
					{	
						li			:
						{
							show 		: "fadeIn",
							hide 		: "fadeOut",
							delayShow   : "delay-5s"
						}
					},
					2:
					{
						li			:
						{
							show 		: "fadeInUp",
							hide 		: "flipOutX",
							delayShow   : "delay-5s"
						},
					}
				}
			});
	setInterval(function(){ $(".anim-arrows-next").click(); }, 5000);
</script>
 <script src="<?php echo base_url(); ?>js/vendor/jquery.min.js"></script>
 <script src="<?php echo base_url(); ?>js/vendor/bootstrap.min.js"></script>
 <script src="<?php echo base_url(); ?>js/vendor/datatables.min.js"></script>
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <script src="<?php echo base_url(); ?>js/vendor/ie10-viewport-bug-workaround.js"></script>
 <script>
  $(document).ready(function(){
	  //boton
	  $(".ir-arriba").click(function(){
	  	$("body, html").animate({
	  		scrollTop: '0px'
	  	}, 350);
	  });
	  $(window).scroll(function(){
	  	if($(this).scrollTop() > 0 ){
	  		$('.ir-arriba').slideDown(250);
	  	}else{
	  		$('.ir-arriba').slideUp(250);
	  	}
	  });
  });
</script>
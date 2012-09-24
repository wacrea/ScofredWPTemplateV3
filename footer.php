</div> <!-- fin div #page -->

	<footer>
		<div id="footer">
			<a href="http://www.williamagay.fr/">William AGAY <?php echo lang('tous droits réservés','all rights reserved'); ?> 2012</a>
		</div>
	</footer>

	<script type="text/javascript">
	// Code Jquery pour le bouton back to the top
	$(function(){
		  $('#btn_up').click(function() {
			$('html,body').animate({scrollTop: 0}, 'slow');
		  });
		  
		  $(window).scroll(function(){
			 if($(window).scrollTop()<20){
				$('#btn_up').fadeOut();
			 }else{
				$('#btn_up').fadeIn();
			 }
		  });
	});
	</script>
	
	<!--<div id="btn_up" class="opa">
		<img alt="<?php echo lang('Retour en haut', 'Back to top'); ?>" title="<?php echo lang('Retour en haut', 'Back to top'); ?>" src="<?php bloginfo('template_url'); ?>/images/up.png" width="40" />
	</div>-->
	
</body>
</html>

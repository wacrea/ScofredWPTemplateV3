<div id="sidebar">
	<div class="side_elem">
		<h2><?php echo lang('Catégories','Categories'); ?></h2>

		<script type="text/javascript">
				$(function(){
					$("#sidebar li a").hover(
						  function () {

							// On annime en déplaçant vers la droite
							$(this).animate({
								marginLeft: "5px"
							  }, 100 );
						  }, 
						  function () {
							// On remet comme avant
							$(this).animate({
								marginLeft: "0px"
							  }, 50 );
						  }
						);
				});
		</script>
		
		<ul>
			<?php wp_list_cats('hide_empty=1'); ?>
		</ul>
	</div>
</div>
<?php 
get_header(); 

$child_theme = get_stylesheet_directory_uri();
$error_graphic = file_get_contents($child_theme.'/images/404.svg');

?>

<div class="container-wrap">
	
	<div class="container main-content">
		
		<div class="row">
			
			<div class="col span_12">
				
				<div id="error-404" class="nb-404-custom">
					<div class="error-graphic">
						<?php echo $error_graphic; ?>
					</div>
					<h1>404</h1>
					<h2>Hive not found!</h2>
					<a class="nb-404-button" href="/product/plans/netbeez-free/">Maybe it's here?</a>
				</div>
				
			</div><!--/span_12-->
			
		</div><!--/row-->
		
	</div><!--/container-->

</div>
<?php get_footer(); ?>


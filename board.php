<?php
/**
	Template Name: Board Page
 */
 
 // Advanced Custom Fields
$location = 'Location: ';
$board_tagline = get_field('board_tagline');
$board_headline	= get_field('board_headline');
//
$guzman_image = get_field('guzman_image');
$guzman_name = get_field('guzman_name');
$guzman_position = get_field('guzman_position');
$guzman_location = $location . get_field('guzman_location');
$guzman_text = get_field('guzman_text');
//
$cuellar_image = get_field('cuellar_image');
$cuellar_name = get_field('cuellar_name');
$cuellar_position = get_field('cuellar_position');
$cuellar_location = $location . get_field('cuellar_location');
$cuellar_text = get_field('cuellar_text');
//
$tobias_image = get_field('tobias_image');
$tobias_name = get_field('tobias_name');
$tobias_position = get_field('tobias_position');
$tobias_loction = $location . get_field('tobias_location');
$tobias_text = get_field('tobias_text');
//
$reynolds_image = get_field('reynolds_image');
$reynolds_name = get_field('reynolds_name');
$reynolds_position = get_field('reynolds_position');
$reynolds_location = $location . get_field('reynolds_location');
$reynolds_text = get_field('reynolds_text');
//
$shih_image = get_field('shih_image');
$shih_name = get_field('shih_name');
$board_5_position = get_field('shih_position');
$shih_location = $location . get_field('shih_location');
$shih_text = get_field('shih_text');
//
$rabb_image = get_field('rabb_image');
$rabb_name = get_field('rabb_name');
$rabb_position = get_field('rabb_position');
$rabb_location = $location . get_field('rabb_location');
$rabb_text = get_field('rabb_text');
//
$dolsten_image = get_field('dolsten_image');
$dolsten_name = get_field('dolsten_name');
$board_7_position = get_field('board_7_position');
$dolsten_location = $location . get_field('dolsten_location');
$dolsten_text = get_field('dolsten_text');
get_header(); ?>
			
<!--BOARD BANNER
	============================================= -->	
	<section id="board" data-type="background" data-speed="5">	
		<article class=" page category-team">
			<div  class="site-main container-fluid clearfix">
				<div class="row">
					<div id="board-banner" class="site-content col-xs-12" role="main">
						<div>
							<h1 class="tagline"><?php echo $board_tagline; ?></h1>
						</div> <!-- board-banner-->
					</div><!-- end col -->			
				</div><!-- row -->								
			<div> <!-- container -->
		</article><!-- #post -->
	</section> <!-- board-->	
			
	<!--BOARD CONTENT
	============================================= -->	
	<section id="board-content">
	
		<div class="entry-content container ">
			<div class="row">
				<div class="col-sm-6 team-list">
					<div id="guzman" class="board-list">
    					<img class='team-picture rounded' src="<?php echo $guzman_image['url']; ?>"/>
    					<div class="board-heading">
    						<h2 class="team-title"><?php echo $guzman_name; ?></h2>
    						<h4 class="team-position"><?php echo $guzman_position; ?></h4>
						<h5 class="team-location"><?php echo $guzman_location; ?></h5>
     					</div> <!-- board-heading -->
					<div style="clear: both;"></div>	
     					<p class="board-text regular"><?php echo $guzman_text; ?></p>
					</div><!-- guzman -->
						
					<div id="cuellar" class="board-list">
						<img class='team-picture rounded' src="<?php echo $cuellar_image['url']; ?>"/>
    					<div class="board-heading">
    						<h2 class="team-title"><?php echo $cuellar_name; ?></h2>
    						<h4 class="team-position"><?php echo $cuellar_position; ?></h4>
						<h5 class="team-location"><?php echo $cuellar_location; ?></h5>
    					</div> <!-- board-heading -->
    					<div style="clear: both;"></div>
						<p class="board-text regular"><?php echo $cuellar_text; ?></p>
					</div><!-- cuellar-->
						
    				<div id="tobias" class="board-list">
    					<img class='team-picture rounded' src='<?php echo $tobias_image['url']; ?>'/>
    					<div class="board-heading">
    						<h2 class="team-title"><?php echo $tobias_name; ?></h2>
    						<h4 class="team-position"><?php echo $tobias_position; ?></h4>
						<h5 class="team-location"><?php echo $tobias_loction; ?></h5>
	     					</div> <!-- board-heading -->
     					<div style="clear: both;"></div>
     					<p class="board-text regular"><?php echo $tobias_text; ?></p>
     				</div><!-- tobias -->
     				
     				<div id="reynolds" class="board-list">
     					<img class='team-picture rounded' src='<?php echo $reynolds_image['url']; ?>'/>
    					<div class="board-heading">
    						<h2 class="team-title"><?php echo $reynolds_name; ?></h2>
    						<h4 class="team-position"><?php echo $reynolds_position; ?></h4>
						<h5 class="team-location"><?php echo $reynolds_location;?></h5>
     					</div> <!-- board-heading -->
     					<div style="clear: both;"></div>
     					<p class="board-text regular"><?php echo $reynolds_text; ?></p>
					</div> <!-- reynolds -->
					</div><!-- end col -->	
  				<div class="col-sm-6 team-list">
  				<div id="shih" class="board-list">
  						<img class='team-picture rounded' src="<?php echo $shih_image['url']; ?>"/>
  						<div class="board-heading">
    						<h2 class="team-title"><?php echo $shih_name; ?></h2>
    						<h4 class="team-position"><?php echo $shih_position; ?></h4>
						<h5 class="team-location"><?php echo $shih_location;?></h5>

    					</div> <!-- board-heading -->
    					<div style="clear: both;"></div>
    					<p class="board-text regular"><?php echo $shih_text; ?></p>
					</div><!-- shih -->
					
   					<div id="rabb" class="board-list">
    					<img class='team-picture rounded' src="<?php echo $rabb_image['url']; ?>"/>
    					<div class="board-heading">	
    						<h2 class="team-title"><?php echo $rabb_name; ?></h2>
    						<h4 class="team-position"><?php echo $rabb_position; ?></h4>
						<h5 class="team-location"><?php echo $rabb_location; ?></h5>
    						</div> <!-- board-heading -->
    					<div style="clear: both;"></div>
    					<p class="board-text regular"><?php echo $rabb_text; ?></p>
					</div><!-- rabb -->
					
					<div id="dolsten" class="board-list">
						<img class='team-picture rounded' src="<?php echo $dolsten_image['url']; ?>"/>
    					<div class="board-heading">
    						<h2 class="team-title"><?php echo $dolsten_name; ?></h2>
    						<h4 class="team-position"><?php echo $dolsten_position; ?></h4>
						<h5 class="team-location"><?php echo $dolsten_location; ?></h5>
     					</div> <!-- board-heading -->
    					<div style="clear: both;"></div>
    					<p class="board-text regular"><?php echo $dolsten_text; ?></p>
					</div><!-- dolsten -->
					
									
		</div><!-- end col -->			
			</div><!-- row -->								
		<div> <!-- container -->
	</section>
	

<?php

get_footer(); ?>
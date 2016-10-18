<?php
/*
Template Name: General Page Template
*/
?>
<html>
 
<?php 
$images = array();

if (get_field('image1') !== false){
	$images[image1] = get_field('image1');
	}
	
if (get_field('image2') !== false){
	$images[image2] = get_field('image2');
	}

if (get_field('image3') !== false){
	$images[image3] = get_field('image3');
	}

if (get_field('image4') !== false){
	$images[image4] = get_field('image4');
	}
	
?>

<div class="portdescription">
				<div class="closer">
					<p>X</p>
				</div>
				
				<div class="description">
					<h3></h3> 
					<p class="contentDescription">
						<div class="aboutItem">
						<p><?php echo get_field('description'); ?></p>
						</div>
					</p>
				</div>
			</div>
			
			
			<div class="portimages">
				<div class="pictures">
				<?php 
				
					foreach($images as $image){ ?>
					<img src="<?php echo $image; ?>">
				
				<?php } ?>
				</div>
			</div>
	
</html>

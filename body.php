<ul class="rslides">
	<?php
	$connected_posts = new WP_Query( array(
		'connected_type' => 'slider_to_pages',
		'connected_items' => get_queried_object(),
		'nopaging' => false,
		'order'=>'ASC',
		'count'=>1,
		'posts_per_page'=>'3'
		) );

	if($connected_posts->have_posts()){
		$i=0;
		while($connected_posts->have_posts()){
			$connected_posts->the_post();
			?>
			<li>
				<div class="header">
					<div class="thumb">
						<?php the_post_thumbnail( );?>
					</div>
					<div class="headertext">
						<div class="moto">
							<h1><?php the_title();?> </h1>
						</div>
						<div class="header-info">
							<?php the_content();?>
						</div>
					</div>
				</div>
			</li>
			<?php 
		} 
	}
	?>
	
</ul>
<div class="appfeatures" id="features">
	<div class="container">
		<div class="row">
			<?php
				//get the connected posts
			$feat_span_length=$feat_text_length=0;
			wp_reset_query();
			$connected_posts = new WP_Query( array(
				'connected_type' => 'feature_to_pages',
				'connected_items' => get_queried_object(),
				'nopaging' => false,
				'order'=>'ASC',
				'count'=>1,
				'posts_per_page'=>'3'
				) );
			$ftpc = $connected_posts->post_count;
			$lengths = array(0=>array(0,0),1=>array(12=>11),2=>array(6,5),3=>array(4,3));
			list($feat_span_length,$feat_text_length) = $lengths[$ftpc];

			if($connected_posts->have_posts()){
				$i=0;
				while($connected_posts->have_posts()){
					$connected_posts->the_post();
					?>
					<div class="span4">
						<div class="row">
							<div class="span1">
								<?php the_post_thumbnail( );?>
							</div>
							<div class="span3">
								<p class="fhead">
									<?php echo get_the_title();?>
									<!-- <span class='ftime'>Jan 2013</span> -->
								</p>
								<p class="ftext">
									<?php the_content();?>
								</p>

							</div>
						</div>	
					</div>
					<?php 
				}
			}
			?>
		</div>	
	</div>
</div>
<?php
	//get the connected posts
$options = get_option("your_theme");

wp_reset_query();
$connected_posts = new WP_Query( array(
	'connected_type' => 'posts_to_pages',
	'connected_items' => get_queried_object(),
	'nopaging' => false,
	'order'=>'ASC',
	'count'=>1,
	'posts_per_page'=>'10'
	) );
$ptpc = $connected_posts->post_count; //post to pages post count
if($connected_posts->have_posts()){
	$i=0;
	while($connected_posts->have_posts()){
		$connected_posts->the_post();
		global $post;
		$bgimage =get_post_meta($post->ID,"_robowp_bg_image",true);
		?>
		<div class="post" id="news" style="background-image:url(<?php echo $bgimage;?>);">
			<div class="container">
				<div class="row">
					<?php if($i%2==0){?>
					<div class="span6">
						<div class="featured-image">
							<?php the_post_thumbnail( );?> 
						</div>
					</div>
					<?php } ?>
					<div class="span6">
						<div class="postcontent">
							<div class="title">
								<h1><?php echo get_the_title(); ?></h1>
							</div>
							<div class="content">
								<?php the_content(  );?>
							</div>
						</div>
					</div>
					<?php if($i%2==1){?>
					<div class="span6">
						<div class="featured-image">
							<?php the_post_thumbnail( );?> 
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php
		$i++;
	}
}
?>

<div class="team bg6" id="team">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="headline">
					<div class="team-subtitle">
						<h2>THE ROBO COMPANY</h2>
					</div>
					<div class="team-title">
						<h1>An Awesome Team In An Awesome Startup</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
				//get the connected posts
			wp_reset_query();
			$connected_posts = new WP_Query( array(
				'connected_type' => 'team_to_pages',
				'connected_items' => get_queried_object(),
				'nopaging' => false,
				'order'=>'ASC',
				'count'=>1,
				'posts_per_page'=>'3'
				) );
			$ttpc = $connected_posts->post_count; //team to pages post count
			if($connected_posts->have_posts()){
				$i=0;
				while($connected_posts->have_posts()){
					$connected_posts->the_post();
					?>
					<div class="span4">
						<div class="profile-pic">
							<?php the_post_thumbnail( );?>
						</div>
						<div class="profile-content">
							<p>
								<h2><?php the_title();?></h2>
								<?php the_content(  );?>
							</p>

						</div>
					</div>
					<?php 
				}
			}
			?>
		</div>
	</div>
</div>
<div class="mailing-list" id="location">
	<div class="container">
		<div class="row">
			<div class="span3"></div>
			<div class="span6">
				<div class="signupform">
					<form method="POST" target="_blank" action="http://themio.us1.list-manage.com/subscribe/post">
						<p>Subscribe to our mailing list & stay tuned</p>
						<input type='text' id='EMAIL' name="EMAIL"/>
						<input type='submit' id='submit' name="submit" value="Subscribe"/>
					</form>
				</div>
			</div>
			<div class="span3"></div>
		</div>
	</div>
</div>
<div class="map">
	<div id="map_canvas">
		<?php echo do_shortcode( "[gmaps height='350px' width='100%' center='23.7,90.3833333' zoom=13]" );?>
		<!-- <iframe id="gmap" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Michigan,+United+States&amp;aq=0&amp;oq=Mi&amp;sll=37.0625,-95.677068&amp;sspn=38.775203,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Michigan&amp;t=m&amp;ll=44.406807,-85.347118&amp;spn=0.058864,0.109863&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe> -->
	</div>
</div>
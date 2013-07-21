<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" prefix="og: http://ogp.me/ns#" > <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php bloginfo( "name" );?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head();?>
</head>
<body class="mp0">
	<?php
	$himage = get_header_image();
	?>
	<?php if(is_page_template("homepage-template.php")) { ?>
	<div class="gototop">
		<a href='#home' class="topanchor"><i class='icon-chevron-sign-up'></i></a>
	</div>
	<div class="navigation-container" id="home">
		<div class="container">
			<div class="row">
				<div class="span6">
					<h1 class="mp0 logo">
						<span class="brand" style="color:#<?php echo get_header_textcolor();?>;" >
						  <?php 
						  if(!$himage)
						    bloginfo('name'); 
						  else
						    echo "<img src='{$himage}'/>";
						  ?>
						</span>
					</h1>
				</div>
				<div class="span6">
					<ul class="navigation mp0 pull-right">
						<li class='homelink'><a href='#home'>Home</a></li>
						<li class="active"><a href='#features'>Features</a></li>
						<li><a href='#news'>News</a></li>
						<li><a href='#team'>Team</a></li>
						<li><a href='#location'>Location</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
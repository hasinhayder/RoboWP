<?php if(is_page_template("homepage-template.php")) { ?>
<div class='footer'>
	<div class="container">
		<div class="row">
			<div class="span6">
				<div class="footer-text">
					<?php if(!dynamic_sidebar( "footer-left" )){?>
					<h2 class="mp">© 2013 The Robo Company</h2>

					<p>
						Lorem Ipsum is simply dummy text of the printing<br/> and typesetting industry. 
					</p>
					<?php } ?>
				</div>
			</div>
			<div class="span6">
				<div class="social-icons">
					<?php if(!dynamic_sidebar( "footer-right" )) { ?>
					<p>
						<a href='http://facebook.com'><img src="<?php echo get_template_directory_uri();?>/img/fb1.png" alt=""></a>
						<a href='http://twitter.com'><img src="<?php echo get_template_directory_uri();?>/img/tw1.png" alt=""></a>
						<a href='http://pinterest.com'><img src="<?php echo get_template_directory_uri();?>/img/pin1.png" alt=""></a>
						<a href='http://wordpress.com'><img src="<?php echo get_template_directory_uri();?>/img/wp1.png" alt=""></a>
					</p>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php wp_footer();?>
</body>
</html>
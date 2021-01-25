<footer class="footer_area">
        <div class="container">
            <div class="row">
			<?php echo dynamic_sidebar('consult_footer_sidebar');?>
                
                <div class="col-md-3 col-sm-6">
                    <ul class="footer_social_icon">
                        <li>
                            <a href="<?php the_author_meta('facebook'); ?>" title="Facebook" target="_blank" id="facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="<?php the_author_meta('twitter'); ?>" title="Twitter" target="_blank" id="twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="<?php the_author_meta('instagram'); ?>" title="Instagram" target="_blank" id="instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="<?php the_author_meta('linkedin'); ?>" title="Linkedin" target="_blank" id="linkedin"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
				
            </div>
        </div>
        <div class="footer_bottom text-center">
            <div class="container">
                <p>© Copyright 2017 <span>|</span> Consult by <a href="#">HelloXpartan</a> <span>|</span> All Rights Reserved</p>
            </div>
        </div>
    </footer>
	<?php wp_footer();?>
</body>
</html>
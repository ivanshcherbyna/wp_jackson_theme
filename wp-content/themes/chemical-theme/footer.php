			<!-- footer -->
			<?php  global $mytheme;  //echo whith REDUX FRAMEWORK?>
			<footer class="footer" role="contentinfo" >
				<div class="div-footer" style="background-color:<?php echo  $mytheme['footer-background-img']['background-color']; ?>">
				<div class="copyright">
<!--					&copy; --><?php //echo date('Y'); ?><!-- Copyright --><?php //bloginfo('name'); ?><!--. --><?php //_e('Powered by', THEME_OPT); ?>
<!--					<a href="//wordpress.org" title="WordPress">WordPress</a>.-->


					<?php echo  $mytheme['copyright-text']; ?>
				</div>
				<!-- /copyright -->
				</div>
			</footer>
			<!-- /footer footer-bg -->
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
	</body>
</html>

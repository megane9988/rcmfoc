	<footer class="siteFooter">
		<?php dynamic_sidebar( 'widget-1' ); ?>
		<div class="site-info">
			<?php esc_attr_e( 'powered by', 'rcmfoc' ); ?> <a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>" title="<?php esc_attr_e( 'WordPress', 'rcmfoc' ); ?>">
				WordPress</a>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
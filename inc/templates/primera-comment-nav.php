<nav class="comment-navigation" role="navigation">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<div class="post-link-nav">
				<span><i class="fas fa-chevron-left"></i></span> 
				<?php previous_comments_link( esc_html__( 'Older Comments', 'primeratheme' ) ) ?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 text-right">
			<div class="post-link-nav">
				<?php next_comments_link( esc_html__( 'Newer Comments', 'primeratheme' ) ) ?>
				<span><i class="fas fa-chevron-right"></i></span>
			</div>
		</div>
	</div><!-- .row -->
</nav>
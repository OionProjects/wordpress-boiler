<?php
/**
 * Check if WooCommerce plugin is activated.
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
    function is_woocommerce_activated() {
        if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
    }
}

/**
 * Primera function to parse comments
 */
function primera_posted_footer(){
	$comments_num = get_comments_number();
	if( comments_open() ){
		if( $comments_num == 0 ){
			$comments = __('No Comments');
		} elseif ( $comments_num > 1 ){
			$comments= $comments_num . __(' Comments');
		} else {
			$comments = __('1 Comment');
		}
		$comments = '<a href="' . get_comments_link() . '">'. $comments .' <span><i class="fas fa-comment"></i></span></a>';
	} else {
		$comments = __('Comments are closed');
	}
	return
		'<div class="post-footer-container">
			<div class="row">
				<div class="left col-xs-12 col-sm-6">'
					. get_the_tag_list('<div class="tags-list"><span><i class="fas fa-tags"></i> </span> ' , ' ', '</div>') .
				'</div>
				<div class="col-xs-12 col-sm-6 text-right">'. $comments .'</div>
			</div>
		</div>';
}


function primera_get_terms( $postID, $term ){

	$terms_list = wp_get_post_terms($postID, $term);
	$output = '';

	$i = 0;
	foreach( $terms_list as $term ){ $i++;
		if( $i > 1 ){ $output .= ', '; }
		$output .= '<a href="' . get_term_link( $term ) . '">'. $term->name .'</a>';
	}

	return $output;

}

function primera_get_embedded_media( $type = array() ){
	$content = do_shortcode( apply_filters( 'the_content', get_the_content() ) );
	$embed = get_media_embedded_in_content( $content, $type );

	if( in_array( 'audio' , $type) ):
		$output = str_replace( '?visual=true', '?visual=false', $embed[0] );
	else:
		$output = $embed[0];
	endif;
	return $output;
}

function primera_post_nav(){
	$nav = '<div class="row">';
	$prev = get_previous_post_link( '<div class="post-link-nav"><span><i class="fas fa-chevron-left"></i></span> %link </div>', '%title' );
	$nav .= '<div class="col-xs-12 col-sm-6">' . $prev . '</div>';
	$next = get_next_post_link( '<div class="post-link-nav"> %link <span><i class="fas fa-chevron-right"></i> </span></div>', '%title' );
	$nav .= '<div class="col-xs-12 col-sm-6 text-right">' . $next . '</div>';
	$nav .= '</div>';
	echo $nav;
}












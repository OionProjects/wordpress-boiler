<?php
/**
 * Created by PhpStorm.
 * User: ROG
 * Date: 6/29/2019
 * Time: 8:28 PM
 */

class Primera_Admin_Controls {

	public static function check_user_role( $author = '' ){
		$user = wp_get_current_user();
		$user_nicename = $user->data->user_nicename;
		if( $author  === $user_nicename ){
			echo '<span class="edit"> <i class="far fa-edit"></i>'; edit_post_link(); echo '</span>';
		}
	}

}
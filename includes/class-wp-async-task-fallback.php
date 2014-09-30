<?php

class WP_Async_Task_Fallback extends WP_Async_Task {

	public function add( $hook, $args = array() ) {
		// todo Lets improve this - I don't particularly like the idea of falling back to wp-cron, but it works for now.
		wp_schedule_single_event( time(), $hook, $args );
	}

}

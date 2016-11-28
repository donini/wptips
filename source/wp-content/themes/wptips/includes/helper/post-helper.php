<?php
function add_events_metaboxes() {
	add_meta_box('wpt_events_location', 'Event Location', 'wpt_events_location', 'events', 'side', 'default');
}
?>
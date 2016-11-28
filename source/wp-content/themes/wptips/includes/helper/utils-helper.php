<?php
class Utils {
	public static function time_to_read($content) {
		if (!empty($content)) {
			$words = str_word_count($content);
			return ceil($words / 180);
		}
	}
	public static function zero_fill ($num, $zerofill = 5)
	{
		return str_pad($num, $zerofill, '0', STR_PAD_LEFT);
	}
}

?>
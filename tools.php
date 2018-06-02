<?php 
/**
* 
*/
class Tools
{
	public static function notify($type, $msg)
	{
		return 
		'toastr.options = {
		  "closeButton": true,
		  "debug": false,
		  "newestOnTop": false,
		  "progressBar": true,
		  "positionClass": "toast-bottom-right",
		  "preventDuplicates": false,
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "7000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		};'.
		'toastr.'.$type.'("'.$msg.'")';
	}	

	public static function truncate($string, $max_length = 30, $replacement = '', $trunc_at_space = false)
	{
	    $max_length -= strlen($replacement);
	    $string_length = strlen($string);
	    if($string_length <= $max_length)
	        return $string;
	    if( $trunc_at_space && ($space_position = strrpos($string, ' ', $max_length-$string_length)) )
	        $max_length = $space_position;
	    return substr_replace($string, $replacement, $max_length);
	}

}
?>
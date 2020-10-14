<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;
  
class Helpers
{
   /**
   * Drop-down Menu
   *
   * @access	public
   * @param	string
   * @param	array
   * @param	string
   * @param	string
   * @return	string
   */
    static function form_dropdown($name = '', $options = array(), $selected = array(), $extra = '') {
		if ( ! is_array($selected)){
			$selected = array($selected);
		}
	
		// If no selected state was submitted we will attempt to set it automatically
		if (count($selected) === 0){
			// If the form name appears in the $_POST array we have a winner!
			if (isset($_POST[$name]))
			{
			$selected = array($_POST[$name]);
			}
		}
  
      	if ($extra != '') $extra = ' '.$extra;
  
      	$multiple = (count($selected) > 1 && strpos($extra, 'multiple') === FALSE) ? ' multiple="multiple"' : '';
  
      	$form = '<select name="'.$name.'"'.$extra.$multiple.">\n";
  
      	foreach ($options as $key => $val){
			$key = (string) $key;
	
			if (is_array($val) && ! empty($val))
			{
				$form .= '<optgroup label="'.$key.'">'."\n";
		
				foreach ($val as $optgroup_key => $optgroup_val)
				{
					$sel = (in_array($optgroup_key, $selected)) ? ' selected="selected"' : '';
		
					$form .= '<option value="'.$optgroup_key.'"'.$sel.'>'.(string) $optgroup_val."</option>\n";
				}
		
				$form .= '</optgroup>'."\n";
			}else{
				$sel = (in_array($key, $selected)) ? ' selected="selected"' : '';
		
				$form .= '<option value="'.$key.'"'.$sel.'>'.(string) $val."</option>\n";
			}
      	}
  
		$form .= '</select>';
	
		return $form;
	}
	
	/**
	 * TRUE if this is an ajax request
	 *
	 * @return bool TRUE if this is an ajax request
	 */
	static function is_ajax_request() {
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])
				&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

			return true;
		}
		return false;
	}

	static function print_me($array) {
		echo '<pre>'; print_r($array); echo '</pre>' ;
	}

	static function historical_format($value,$delimeter='/') {
		//echo intval($value); die;
		if(empty($value)) return null;
		if($val=intval($value) == 0)
		{
			return $format = intval($value).$delimeter.intval($value);
		}
		return $format= intval($value).$delimeter.'100';
	}

	/**
	 * @return string
	 */
	static function getLastTraceLocation() {

		$backtrace = debug_backtrace();
		$file = '???';
		$line = '???';
		if(!empty($backtrace[1])) {
			$file = $backtrace[1]['file'];
			$line = $backtrace[1]['line'];
			//$func = $backtrace[0]['function'];
		}
		$ret = div(bld('Trace: ').$file.':'.$line);

		return $ret;

	}
  
}

?>
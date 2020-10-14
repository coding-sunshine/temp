<?php

/**
 * HTML Tooltip
 *
 * @param  $message
 * @param string $label
 * @param string $class
 *      eg. f10 brd ptr
 * @return string
 */
function qTip($message, $label = ' i ', $class = '') {

    if($label == '') {
        $label = ' i ';
    }

	if($label == ' i ') {
		$class = ' fGeorgia bld c444 '.$class;
	}

	$q = '<a href="javascript:void(0);" class="qTip '.$class.'" title="'.htmlspecialchars($message).'">'.$label.'</a>';

	return $q;

}

function qTipBL($message, $label = ' i ', $class = '') {

	if($label == ' i ') {
		$class = ' fGeorgia bld c444 '.$class;
	}

	$q = '<a href="javascript:void(0);" class="qTipBL '.$class.'" title="'.htmlspecialchars($message).'">'.$label.'</a>';

	return $q;

}
function qTipBR($message, $label = ' i ', $class = '') {

	if($label == ' i ') {
		$class = ' fGeorgia bld c444 '.$class;
	}

	$q = '<a href="javascript:void(0);" class="qTipBR '.$class.'" title="'.htmlspecialchars($message).'">'.$label.'</a>';

	return $q;

}

function show_comms($message,$id="",$label=" c "){
		$class = ' fGeorgia bld c444 ';
	$q = '<a href="javascript:void(0);" class="qTipBL '.$class.'" title="'.htmlspecialchars($message).'" id="show_comms" style="display:none;" ><strong>'.$label.'</strong></a>'."<script>
		//function for showing the commissions in table 
		$(document).ready(function(){
			var col;
			var comm_exist=0;
			var loc=1;
			$('#tab4 table th').each(function(){
				if($(this).text()=='Commissionsinc.GST' || $(this).text() == 'PIAB Comms'){
					comm_exist=1;
					col=loc;
					$('#show_comms').show();
					$('#tab4 th:nth-child('+col+')').hide();
					$('#tab4 td:nth-child('+col+')').hide();
			}
			loc++;
			});

		});
		$('#show_comms').click(function(){
			var col;
			var loc=1;
			var show=1;
			$('#tab4 table th').each(function(){
				if($(this).text()=='Commissionsinc.GST' || $(this).text() == 'PIAB Comms'){
					col=loc;
					if($(this).css('display')=='none')
					{
						$('#tab4 th:nth-child('+col+')').show();
						$('#tab4 td:nth-child('+col+')').show();
					}
					else
					{
						$('#tab4 th:nth-child('+col+')').hide();
						$('#tab4 td:nth-child('+col+')').hide();
					}
			}
			loc++;
			});
			
		});
		$(document).ready(function(){
			var col;
			var comm_exist=0;
			var loc=1;
			$('#tab2 table th').each(function(){
				if($(this).text()=='Commissionsinc.GST' || $(this).text() == 'PIAB Comms'){
					comm_exist=1;
					col=loc;
					$('#show_comms').show();
					$('#tab2 th:nth-child('+col+')').hide();
					$('#tab2 td:nth-child('+col+')').hide();
			}
			loc++;
			});
		});
		$('#show_comms').click(function(){
			var col;
			var loc=1;
			var show=1;
			$('#tab2 table th').each(function(){
				if($(this).text()=='Commissionsinc.GST' || $(this).text() == 'PIAB Comms'){
					col=loc;
					if($(this).css('display')=='none')
					{
						$('#tab2 th:nth-child('+col+')').show();
						$('#tab2 td:nth-child('+col+')').show();
					}
					else
					{
						$('#tab2 th:nth-child('+col+')').hide();
						$('#tab2 td:nth-child('+col+')').hide();
					}
			}
			loc++;
			});
			
		});
		</script>";

	return $q;
}
function qTipMenu($message, $label = ' i ', $class = '') {

	if($label == ' i ') {
		$class = ' fGeorgia bld c444 '.$class;
	}

	$q = '<a href="javascript:void(0);" class="qTipMenu '.$class.'" title="'.htmlspecialchars($message).'">'.$label.'</a>';

	return $q;

}

function h1($s, $class = '', $extra = '') {

	return tag('h1',$s,$class,$extra);

}

function h2($s, $class = '', $extra = '') {

	return tag('h2',$s,$class,$extra);

}

function h3($s, $class = '', $extra = '') {

	return tag('h3',$s,$class,$extra);

}

function h4($s, $class = '', $extra = '') {

	return tag('h4',$s,$class,$extra);

}

/**
 * @param $s string
 * @param $class string
 * @param $extra string
 * @return string
 */
function div($s, $class = '', $extra = '') {

	return tag('div',$s,$class,$extra);

}

/**
 * @param $s string
 * @param $class string
 * @param $extra string
 * @return string
 */
function span($s, $class = '', $extra = '') {

	return tag('span',$s,$class,$extra);

}

/**
 * @param $s string
 * @param $class string
 * @param $extra string
 * @return string
 */
function p($s, $class = '', $extra = '') {

	return tag('p',$s,$class,$extra);

}

function clear_fix() {

	return '<div class="clear clearfix"></div>';

}

function nl() {
	return "\n";
}

function bld($s,$class='') {
	return bold($s,$class);
}
function bold($s,$class='') {
	return tag('strong',$s,$class);
}
function pre($s,$class='') {
	return tag('pre',$s,$class);
}
function em($s,$class='') {
	return tag('em',$s,$class);
}

function hr() {
	return '<hr />';
}

function br(){
    return '<br />';
}

/**
 * @param  $pctComplete
 * @param int $barWidth
 * @param bool $tickIfComplete
 * @return string
 */
function percent_complete_bar($pctComplete, $barWidth = 170, $tickIfComplete = false) {

	$p = '';

	if($tickIfComplete && $pctComplete >= 100) {
		$p .= '<img src="'.base_url().'images/notification-tick.gif" width="16" height="16" alt="&radic;" />
			 Complete';
	}
	else if($pctComplete <= 0) {
		$p .= div('&nbsp; 0%');
	}
	else {
		// % between 0 and 100
		if($pctComplete > 100) {
			$pctComplete = 100; // fail safe :-o
		}
		$p .= '
			<div style="width: '.($barWidth+30).'px; height: 16px; line-height: 16px; font-size: 10px; background: #fff url('.base_url().'images/indicator-red-to-green_190x10.jpg) 30px 3px no-repeat;">
				<div style="width: 30px; float:left;">'.$pctComplete.'% </div>
				<div style="width: '.($barWidth - (round($barWidth*($pctComplete/100)))).'px; float:right; top:0px; right:0px; background: white;">&nbsp;</div>
			</div>
		';
	}

	return $p;
}

/**
 * @param string $url
 * @return string HTML Text
 */
function adminEditLink($url='#', $openInNewTab = true, $label = 'edit') {

	$target = '_self';
	if($openInNewTab) {
		$target = '_blank';
	}
	// "open-new" triggers an icon image to be displayed with this anchor - by jQuery on Dom Ready
	return div(
		anchor($url, $label,
			'target="'.$target.'" class="dred f12 '.($openInNewTab?'open-new':'').' adminEditLink"'),
		'fRight'
	);

}

/**
 * Display a nice css formatted message box.
 *
 * @return string HTML Code for message.
 */
function message($type = 'notification', $msg = '???') {

	$id = $type.rand(999,9999999);

	switch($type) {

		case 'notice':
		case 'information':
		case 'info':

			$type = 'information';

			break;

		case 'error':

			$type = 'error';

			break;

		case 'success':

			$type = 'success';

			break;

		case 'attention':
		case 'warning':
		case 'caution':

		default:

			$type = 'attention';

			break;
	}

	$m = div(
			span($msg
				.'<div class="close" onclick="$(\'#'.$id.'\').hide();">close</div>',
				'notification n-'.$type
			),
			'',
			'style="display:block;" id="'.$id.'"'
	);

	return $m;

}

/**
 * Display a Dev Note IF DEVPC ONLY!
 * @param $msg
 * @param $mixed
 * @return void
 */
function dev_note($msg,$mixed=null) {

	if(DEVPC) {
        $id = 'devnote'.rand(99,999999999);
        echo '<div class="notification n-attention f12">'
		    .bld('Dev Note:')
                .br().$msg
            .div('Stack Trace...','fRight ul blu p4 f11 ptr','onclick="jShowOrHide(\'#'.$id.'\');"')
            .clear_fix();

		if(!is_null($mixed)) {
			var_dump($mixed);
		}


		echo clear_fix()
        .'<div id="'.$id.'" class="hide">';

        $backtrace = debug_backtrace();
		for($i=0,$iend=count($backtrace); $i<=$iend; $i++) {

			if(empty($backtrace[$i])) {
				continue;
			}

	        $file = (!empty($backtrace[$i]['file'])?$backtrace[$i]['file']:'???');
	        $line = (!empty($backtrace[$i]['line'])?$backtrace[$i]['line']:'???');
	        $func = (!empty($backtrace[$i]['function'])?$backtrace[$i]['function']:'???');

			if($file && $line) {
				echo div("File-Line: $file:$line");
				if($func) {
					echo div("Function: $func");
				}
				echo div('----------------');
			}

		}

		echo '</div></div>';
	}

}

/**
 * @param $src
 * @return void
 */
function javascript($src) {

	return '<script type="text/javascript" src="'.$src.'"></script>';

}


/**
 * @param $tagName string
 * @param $text string
 * @param $class string
 * @param $extra string
 * @return string
 */
function tag($tagName, $text, $class = '', $extra = '') {

	return '<'.$tagName.' class="'.$class.'" '.$extra.'>'.$text.'</'.$tagName.'>';

}

/**
 *
 * @property CI_Session session
 * @param string $class
 * @param string $extra
 * @return string
 */
function backLink($class = 'f14 bld p4', $extra = '', $label = '&laquo; Back') {

	$CI =& get_instance();

	$ref = $CI->session->getReferrer();
	if(!$ref) {
		// else return JS Back Link
		$ref = 'javascript:history.back();';
	}

	return '<a href="'.$ref.'" class="'.$class.'" '.$extra.'>'.$label.'</a>';

}

/**
 *
 * @property CI_Session session
 * @param string $class
 * @param string $extra
 * @return string
 */
function backButton($class = 'f14 bld p4 lh30', $extra = 'style="padding: 0 15px;"', $label = '&laquo; Back') {

	$CI =& get_instance();

	$ref = $CI->session->getReferrer();
	if(!$ref) {
		// else return JS Back Link
		$ref = 'javascript:history.back();';
	}

	return '<button onclick="window.open(\''.$ref.'\',\'_self\');" class="'.$class.'" '.$extra.'>'.$label.'</button>';

}

/**
 * Image
 * Generates an <img /> element
 *
 * @param string $src
 * @param bool $index_page
 * @param int $width
 * @param int $height
 * @return void
 */
function img_icon($src = '', $index_page = FALSE, $width = 0, $height = 0, $extra = '') {

	$src = base_url().'images/icon/'.$src;

	$image_properties = array(
	        'src'   => $src,
	        'index_page' => $index_page,
	        'width' => $width,
	        'height'=> $height,
	        'rel'   => 'image/icon'
	);

	$i = img($image_properties);

	if($extra) {
		$i = str_replace('<img','<img '.$extra,$i);
	}

	return $i;
}

function new_image_icon($d,$m,$y) {

	$CI =& get_instance();
	$CI->load->library('newimg');
	$img = my_img($CI->newimg->getImageCode($d,$m,$y));
	return $img;

}

/**
 * Image
 *
 * Generates an <img /> element
 *
 * @param string $src
 * @param bool $index_page
 * @param int $width
 * @param int $height
 * @param $extra
 * @return void
 */
function my_img($src = '', $index_page = FALSE, $width = 0, $height = 0, $extra='')
{
	if(empty($src)) {
		return '';
	}
	$img_array = array(
			'src' => $src,
			'index_page' => $index_page,
			'width' => $width,
			'height' => $height);
	$img = img($img_array);
	$img = str_replace('/>',' '.$extra.' />',$img);
	return $img;
}

function small($s) {
	return '<small>'.$s.'</small>';
}

function red_note($s,$class = '') {
    return span($s,'hi2 red f10 p1 m0 '.$class);
}

function quot($s, $class = '') {

    if($class !== '') {
        return span('&ldquo;'.$s.'&rdquo; ',$class);
    }

    return '&ldquo;'.$s.'&rdquo; ';
}

/**
 * Extract HTML body content from $html
 *
 * @param $html
 * @return string HTML Body from $html string passed in.
 */
function extract_body(&$html) {

	//$regex = '(.*<\s*body[^>]*>)|(<\s*/\s*body\s*\>.+)';
	$regex = "@\<body[^>]*>(.*?)\</body\>@is";
	$matches = array();
	preg_match($regex, $html, $matches);

	if(!empty($matches[1])) {
		$ret = $matches[1];
	}
	else {
		$ret = $html;
	}

	return $ret;

}
/**
 * Generates meta tags from an array of key/values
 *
 * @access  public
 * @param   array
 * @return  string
 */
if ( ! function_exists('meta'))
{
    function meta($property = '', $content = '', $type = 'property', $newline = "\n")
    {
        // Since we allow the data to be passes as a string, a simple array
        // or a multidimensional one, we need to do a little prepping.
        if ( ! is_array($property))
        {
            $property = array(array('property' => $property, 'content' => $content, 'type' => $type, 'newline' => $newline));
        }
        else
        {
            // Turn single array into multidimensional
            if (isset($property['property']))
            {
                $property = array($property);
            }
        }

        $str = '';
        foreach ($property as $meta)
        {
            $type       = ( ! isset($meta['type']) OR $meta['type'] == 'property') ? 'property' : 'http-equiv';
            $property       = ( ! isset($meta['property']))     ? ''    : $meta['property'];
            $content    = ( ! isset($meta['content']))  ? ''    : $meta['content'];
            $newline    = ( ! isset($meta['newline']))  ? "\n"  : $meta['newline'];

            $str .= '<meta '.$type.'="'.$property.'" content="'.$content.'" />'.$newline;
        }

        return $str;
    }
}

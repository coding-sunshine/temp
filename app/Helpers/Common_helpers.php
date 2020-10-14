<?php

include('Html_helper.php');

/**
* Error Handler
*
* This function lets us invoke the exception class and
* display errors using the standard error template located
* in application/errors/errors.php
* This function will send the error page directly to the
* browser and exit.
*
* @access	public
* @return	void
*/
if ( ! function_exists('show_error'))
{
	function show_error($message, $status_code = 500, $redirect_url = '')
	{
	    throw new App\Exceptions\ReallyFriendlyException($message, $status_code, $redirect_url);
	}
}

// ------------------------------------------------------------------------

/**
* 404 Page Handler
*
* This function is similar to the show_error() function above
* However, instead of the standard error template it displays
* 404 errors.
*
* @access	public
* @return	void
*/
if ( ! function_exists('show_404'))
{
	function show_404($page = '', $log_error = TRUE)
	{
        throw new \App\Exceptions\ModelNotFoundException($page, 404);
	}
}

if ( ! function_exists('debug_pre'))
{
    function debug_pre($var, $note = '', $exit = false) {

        if(DEVPC) {

            if($note!='') {
                echo '<h4>'.$note.'</h4>';
            }

            if(gettype($var)=='object' && get_class($var) == 'CI_DB_mysql_result') {

                if($var->num_rows > 3) {
                    // reduce to 1 row.
                    $res = $var->result_array();
                    if(!empty($res)) {
                        $row = array_shift($res);
                    }
                    else {
                        $row = 'Unexpected error in debug_helper :(';
                    }
                    unset($res);
                    $var->result_object_reduced_to_one_row_by_debug_pre =
                            'DEV NOTE !!!!!!!!! result_object_reduced_to_one_row_by_debug_pre !!!!!!!!!!!!';
                    $var->result_array = $row;
                }

            }


            if(is_string($var)) {
                if(strlen($var) >= 500) {
                    echo '<pre>';
                    print_r($var);
                    echo '</pre>';
                }
                else {
                    print_r($var);
                }
            }
            else {
                echo '<pre>';
                print_r($var);
                echo '</pre>';
            }


            if($exit) {
                if(Helpers::is_ajax_request()) {
                    // Do not exit if Ajax, else you won't see it on screen :(
                    // $stackTrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
                    // $CI =& get_instance();
                    // $CI->fire('*******************************************');
                    // $CI->fire('STACKTRACE',$stackTrace);
                    // $CI->fire('*******************************************');
                    // dev_note('**** Check FIRE for STACKTRACE Message //- debug_pre ****');
                }
                else {
                    // Not Ajax, OK to exit
                    echo Helpers::getLastTraceLocation();
                    show_error('debug_pre exit');
                }
            }
            else {
                echo Helpers::getLastTraceLocation();
            }

        }
    }
}
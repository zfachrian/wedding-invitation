<?php
    // declare in composer.json/autoload/files
    if (!function_exists('formatMoney')) {
   
        function formatMoney($number, $format=null, $separator=null, $offset=null, $offset_separator=null)
        {
            $return = $format.number_format($number, $offset, $offset_separator, $separator);
            return $return;
        }
    }
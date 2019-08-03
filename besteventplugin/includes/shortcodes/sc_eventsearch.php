<?php
/**
 * Shortcode: BEP_EVENTSEARCH
 *
 * PURPOSE: WILL DISPLAY A SEARCH FORM FOR EVENTS, AND ITS RESULTS.
 **/
defined('ABSPATH') or die();

function bep_eventsearch_shortcode( $atts ) {
  
   // capture atts...
   $atts = shortcode_atts( array(
      'name' => 'world'
   ), $atts );
  
   return 'Hello ' . $a['name'] . !';


}

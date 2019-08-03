<?php
defined('ABSPATH') or die();


class BestEventPluginCore {
 
  public function launch(){
      if( is_admin() ){
          // admin routes
      } else {
          // frontend routes
      }
  }
}

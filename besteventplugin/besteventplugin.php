<?php
/**
 * Best Event Plugin
 *
 * @package     besteventplugin
 * @author      Jody Fitzpatrick
 * @copyright   2019 BuzzTriad.com
 * @license     GPL-3.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Best Event Plugin
 * Plugin URI:  https://example.com/plugin-name
 * Description: Create your very own event website.
 * Version:     1.0.0
 * Author:      Jody Fitzpatrick
 * Author URI:  https://example.com
 * Text Domain: plugin-slug
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */
defined('ABSPATH') or die();
 
define('BEP_MAJOR_VERSION', '1');
define('BEP_MINOR_VERSION', '1');
define('BEP_PATCH_VERSON', '1');
define('BEP_DIR', dirname( __FILE__ )); 

// CORE INCLUDES
require_once(BEP_DIR . 'includes' . DIRECTORY_SEPERATOR . 'core.php');

class BestEventPlugin{

    public function run() {     
        
        // select correct display end
        if( is_admin() ){
            $bep = new BestEventPluginFrontend();
        } else {
            $bep = new BestEventPluginAdmin();
        }
         
         return $bep->display();
    }
 
    function __construct(){
    }
}

$bep = new BestEventPlugin();
$bep->run();



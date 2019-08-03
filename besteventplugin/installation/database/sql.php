<?php
defined('ABSPATH') or exit();

/**
 * SQL FOR VERSION 1.0.0
 */ 
 
###################################################################################
# Event Categories v1.0.0 
# Last Revision: Saturday, August 3, 2019
###################################################################################
$BEP_EVENT_CATEGORIES_TABLE_NAME = $wpdb->prefix . "bep_event_categories";

$BEP_EVENT_CATEGORIES = "CREATE TABLE `$BEP_EVENT_CATEGORIES_TABLE_NAME` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 
ALTER TABLE `$BEP_EVENT_CATEGORIES_TABLE_NAME`
  ADD PRIMARY KEY (`id`);";
  
#####################################################################################
# Events v1.0.0
# Last Revision: Saturday, August 3, 2019
#####################################################################################

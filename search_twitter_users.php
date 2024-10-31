<?php
/*
Plugin Name: Search Twitter Profiles
Plugin URI: http://wordpress.org/extend/plugins/search-people-on-twitter/
Description: Search Twitter profiles, If you want to customise please mail me at gaikwad.abhijit@gmail.com
Version: 1.0
Author: abhijit Gaikwad
Author URI: http://www.advertisablearena.com/blog1/twitter-profile-search/
*/

function samplesearchprofiles() 
{
  echo '<iframe src ="http://advertisablearena.com/twitter/search_twitter_users/search_twitter_user.html" width="250" height="320" frameBorder="0"> <p>Your browser does not support iframes.</p></iframe>';

}

function widget_searchprofiles($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Search Twitter Profiles<?php echo $after_title;
  samplesearchprofiles();
  echo $after_widget;
}

function mysearchprofiles_init()
{
  register_sidebar_widget(__('Search Twitter Profiles'), 'widget_searchprofiles');     
}
add_action("plugins_loaded", "mysearchprofiles_init");


 
?>
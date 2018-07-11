<?php

    /**************
    Adding Custom logo to wordpress login
    */
    
    function ab_login_modify() {
        ?> 
            <style type="text/css"> 
                body.login {
                    background: #0073aa;
                    background-image: url('http://redifnurel.com/wp-content/uploads/2018/05/login-bg.jpg'); 
                    background-size: cover;
                    background-repeat: no-repeat;
                }

             body.login div#login h1 a {

                background-image: url('http://redifnurel.com/wp-content/uploads/2018/05/login-logo.png'); 
                padding-bottom: 30px;
                background-size: contain;
                min-width: 200px;

                } 
            </style>
     <?php 
    }   

    add_action('login_enqueue_scripts', 'ab_login_modify');

    /***************
    Removing some notification metaboxes from Main Dashboard
    */

    function remove_dashboard_widgets() {
        global $wp_meta_boxes;
     
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
        // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
        // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
        //unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
     
    }
     
   add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );


    /***************
    Removing Wordpress logo from Admin Dashboard 
    */

     function ab_admin_bar_remove() {
         global $wp_admin_bar;

         //remove stuff
         $wp_admin_bar->remove_menu('wp-logo');
     }

     add_action('wp_before_admin_bar_render', 'ab_admin_bar_remove');

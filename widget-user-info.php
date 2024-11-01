<?php
/**
 * @package WP Widget User Info
 * @version 0.2
 */
/*
Plugin Name: WP Widget User Info
Plugin URI: http://wordpress.org/plugins/wp-widget-user-info/
Description: Выводит виджет зарегистрированного пользователя
Author: WProger.ru
Version: 0.2
Author URI: http://wproger.ru/
*/
 	
 	// Регистрация виджета консоли
    add_action('wp_dashboard_setup', 'add_dashboard_widgets' );


    // Используется в хуке
    function add_dashboard_widgets() {
        wp_add_dashboard_widget('dashboard_widget', 'Ваши данные', 'widget_user_info');
    }
    
    function widget_user_info(){

        $current_user = wp_get_current_user();
        if ( 0 == $current_user->ID ) {
            echo"Не авторизован.";
        } else {
            $current_user = wp_get_current_user();
            echo 'Имя пользователя: <b>' . $current_user->user_login . '</b><br />';
            echo 'email: <b>' . $current_user->user_email . '</b><br />';
            echo 'Имя: <b>' . $current_user->user_firstname . '</b><br />';
            echo 'Фамилия: <b>' . $current_user->user_lastname . '</b><br />';
            echo 'Отображаемое имя: <b>' . $current_user->display_name . '</b><br />';
            echo 'ID: <b>' . $current_user->ID . '</b><br />';
            echo '<a href="/wp-admin/profile.php">Редактировать</a><br>';
        }
    }
    function users_cabinet_registr(){
        echo '<a href="/wp-admin/profile.php">Зарегистрироваться</a><br>';

    }

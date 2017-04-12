<?php
if ( ! defined('FW') ){
    die('Forbidden');
}
$options = array(
    'main' => array(
        'type' => 'box',
        'title' => __('Данные о коте', MY_THEME_TEXTDOMAIN),
        'options' => array(
            'option_switch' => array(
		        'type'  => 'switch',
		        'value' => 'Девочка',
		        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		        'label' => __('Пол', MY_THEME_TEXTDOMAIN),
		        'help'  => __('Укажите пол', MY_THEME_TEXTDOMAIN),
		        'left-choice' => array(
		            'value' => 'Девочка',
		            'label' => __('Девочка', MY_THEME_TEXTDOMAIN),
		        ),
		        'right-choice' => array(
		            'value' => 'Мальчик',
		            'label' => __('Мальчик', MY_THEME_TEXTDOMAIN),
		        ),
		    ),
		    'option_slider' => array(
		        'type'  => 'slider',
		        'value' => 1,
		        'properties' => array(
		            'min' => 0,
		            'max' => 25,
		            'step' => 0.5, // Set slider step. Always > 0. Could be fractional.
		            
		        ),
		        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		        'label' => __('Возраст', MY_THEME_TEXTDOMAIN),
		        'help'  => __('Укажите возраст', MY_THEME_TEXTDOMAIN),
		    ),

        ),
    ),
);
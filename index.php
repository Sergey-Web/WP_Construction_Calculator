<?php
/**
 * Plugin Name: Construction Calculator
 * Description: Plug-in for calculating the cost of construction work
 * Version: 1.0
 * Author: Sergey Yarmoshuk
 * Author URI: https://github.com/Sergey-Web
 */

use App\Controller;
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

add_action('wp_enqueue_scripts', 'addScripts');
add_action('wp_ajax_constructionCalculator', 'cost');
add_action('wp_ajax_nopriv_constructionCalculator', 'cost');
add_action('wp_ajax_constructionCalculatorSave', 'saveCost');
add_action('wp_ajax_nopriv_constructionCalculatorSave', 'saveCost');
add_action('constructionCalculator', 'show');

function addScripts()
{
    wp_enqueue_style( 'jqueryMobileCss', 'https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css' );
    wp_enqueue_style( 'constructionCalculatorStyle', plugins_url('/css/constructionCalculator.css', __FILE__) );
    wp_enqueue_script('jqueryMobileScript', 'https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js', ['jquery'], false, true);
    wp_enqueue_script('constructionCalculatorScript', plugins_url('/js/constructionCalculator.js', __FILE__), ['jqueryMobileScript'], false, true);
    wp_localize_script('constructionCalculatorScript', 'constructionCalculator', [
        'ajaxUrl' => admin_url('admin-ajax.php'),
    ]);
}

function cost() {
    (new Controller())->getCost($_POST);
}

function saveCost() {
    (new Controller())->saveReport($_POST);
}

function show()
{
    (new Controller())->show();
}

<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">ONLINE AIRLINE RESERVATION</li>
          
          
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><a href="/users/login">LOGIN</a></li>
          <li><a href="/users/add">REGISTER</a></li>
          
          
        </ul>
      </div>
    </div>
    <!-- End Top Bar -->


    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
      <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
        <li class="orbit-slide is-active">
          <img src="./img/airport.jpg">
        </li>
        <li class="orbit-slide">
          <img src="./img/airline.jpg">
        </li>
        <li class="orbit-slide">
          <img src="./img/woman.jpg">
        </li>
        <li class="orbit-slide">
          <img src="./img/aircraft.jpg">
        </li>
      </ul>
    </div>

    <div class="row column text-center">
      <h2>Customer Review</h2>
      <hr>
    </div>

    <div class="row small-up-2 large-up-4">
      <div class="column">
        <img class="thumbnail" src="./img/girl.jpg">
        <h5>Anil Kumar</h5>
        <p>good services</p>
        
      </div>
      <div class="column">
        <img class="thumbnail" src="./img/woman.jpg">
        <h5>Anjana</h5>
        <p>best airline</p>
        
      </div>
      <div class="column">
        <img class="thumbnail" src="./img/workplace.jpg">
        <h5>Nagesh</h5>
        <p>wonderful help from staff</p>
        
      </div>
      <div class="column">
        <img class="thumbnail" src="./img/urban.jpg">
        <h5>Varna</h5>
        <p>An excellent choice to fly</p>
        
      </div>
    </div>

    <hr>

    

    <hr>

    <div class="row column text-center">
      <h2>Flight Informations</h2>
      <hr>
    </div>

    <div class="row small-up-2 medium-up-3 large-up-6">
      <div class="column">
        <img class="thumbnail" src="./img/eiffel-tower-.jpg">
        <h5> “Adventure is worthwhile"</h5>
        
      </div>
      <div class="column">
        <img class="thumbnail" src="./img/desert.jpg">
        <h5>“Jobs fill your pockets, adventures fill your soul.”</h5>
        
      </div>
      <div class="column">
        <img class="thumbnail" src="./img/globe.jpg">
        <h5>“The world is a book and those who do not travel read only one page.”</h5>
        
      </div>
      <div class="column">
        <img class="thumbnail" src="./img/india.jpg">
        <h5>“Remember that happiness is a way of travel, not a destination.”</h5>
        
      </div>
      <div class="column">
        <img class="thumbnail" src="./img/airbus.jpg">
        <h5>“Travel is the only thing you buy that makes you richer.”</h5>
      
      </div>
      <div class="column">
        <img class="thumbnail" src="./img/airline (2).jpg">
        <h5>“We travel, some of us forever, to seek other places, other lives, other souls.” </h5>
        
        
      </div>
    </div>

    <hr>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

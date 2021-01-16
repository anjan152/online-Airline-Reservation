
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    
  

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

  
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
   
</head>
<body>
<nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>ONLINE</span>AIRLINE RESERVATION</a>
        </div>
        <div class="top-nav-links">
            <a rel="noopener" href="/flights">FLIGHTS</a>
            <a  rel="noopener" href="/bookings">BOOKINGS</a>
            <a  rel="noopener" href="/users">USERS</a>
            <a  rel="noopener" href="/aircraft-types">AIRCRAFT TYPES</a>
            
        
            <a  rel="noopener" href="/flight-schedules">FLIGHT SCHEDULES</a>
            <a  rel="noopener" href="/users/logout">LOGOUT</a>
        </div>
    </nav>
 
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>

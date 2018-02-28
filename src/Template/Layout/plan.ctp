
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Login</title>

  <?= $this->Html->css('../assets/vendor/bootstrap/css/bootstrap.css') ?>
   <?= $this->Html->css('../assets/vendor/font-awesome/css/font-awesome.css') ?>
    <?= $this->Html->css('../assets/vendor/animate.css/animate.css') ?>
	 <?= $this->Html->css('../assets/css/chl.css') ?>
	  <?= $this->Html->css('../assets/css/theme-peter-river.css') ?>
	   <?= $this->Html->css('../assets/vendor/bootstrap/css/bootstrap.css') ?>
	    <?= $this->Html->css('../assets/vendor/bootstrap/css/bootstrap.css') ?>
		 <?= $this->Html->css('../assets/vendor/bootstrap/css/bootstrap.css') ?>





  <style media="screen">
    .app {
      background-image: url("../assets/images/bg.png");
      background-repeat: no-repeat;
      background-size: cover;
    }

  </style>
</head>

<body class="bg-clouds">
  <div class="app">
  
     <?= $this->fetch('content') ?>
	
	
  </div>

  
  <?= $this->Html->script('../assets/vendor/jquery/jquery.js') ?>
   <?= $this->Html->script('../assets/vendor/bootstrap/js/bootstrap.js') ?>
 

</body>
</html>

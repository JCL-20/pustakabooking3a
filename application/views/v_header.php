<!DOCTYPE html>

<head>
     <meta charset="UTF-8">
     <title>12.3A.04 | Simple Web Template</title>
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css" type="text/css">
</head>

<body>
     <dif id="wrapper">
          <header>
               <hgroup>
                    <h1>Simple Web Template</h1>
                    <h3>Test template sederhana</h3>
               </hgroup>
               <nav>
                    <ul>
                         <li><a href="<?php echo base_url() . 'index.php/web' ?>">Home</a></li>
                         <li><a href="<?php echo base_url() . 'index.php/web/about' ?>">About</a></li>
                    </ul>
              </nav>
              <div class='clear'></div>
         </header>
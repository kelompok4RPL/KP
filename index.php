<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <title></title>
    </head>
    <body>
        <?php
		include 'Autoload.php';
		use Core\App\Coba as Application;
                $app = new Application();
                $app->Run();
		
        ?>
    </body>
</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       // include 'IronMan.php';
       // include 'CaptainAmerica.php';
       // include 'Loki.php';
        include 'Flight.php';
        
        $IronMan = new IronMan();
        $CaptainAmerica = new CaptainAmerica();
        $Loki = new Loki();
        $Flight = new Flight();
        echo $Flight->power."<br>";
        echo $Flight->type."<br>";
        echo $Flight->made."<br>";
        echo $IronMan->superHeros()."<br>";
        echo $IronMan->color."<br>";
        echo $IronMan->flyingHero()."<br>";
        echo $CaptainAmerica->strong."<br>";
        echo $CaptainAmerica->firstHero()."<br>";
        echo $Loki->role."<br>";
        echo $Loki->funnyHero();
        ?>
    </body>
</html>

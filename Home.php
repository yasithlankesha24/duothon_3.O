<?php
    $pagename="Home"; 
    echo "<link rel=stylesheet type=text/css href=stylesheet_template.css>";  
    echo "<title>".$pagename."</title>";  
    echo "<body>";
        include("header_temp.html");
        echo"<h1>COBRA MEDI</h1>";
        echo "<h4 class='second-txt'></h4>";
        echo "<forme method=post action=menu.php>";
                echo"<input type=submit value='Serch Medicine' id ='medSerchBUT' name='medSerch'>";
                 
        echo "</form>";
        include("footfile.html");
    echo "</body>";
?>

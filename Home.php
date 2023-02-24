<?php
    $pagename="Home"; 
<<<<<<< HEAD
    echo "<link rel=stylesheet type=text/css href=styleSheet_template.css>";  
=======
    echo "<link rel=stylesheet type=text/css href=stylesheet_template.css>";  
>>>>>>> origin/main
    echo "<title>".$pagename."</title>";  
    echo "<body>";
        include("header_temp.html");
        echo"<h1>COBRA MEDI</h1>";
        echo "<h4 class='second-txt'></h4>";
        echo "<forme method=post action=menu.php>";
                echo"<input type=submit value='Serch Medicine' id ='medSerchBUT' name='medSerch'>";
<<<<<<< HEAD
                echo"<a href= index.php><input type=submit value='Log In' id ='logbut' name='logbut'></a>";
                echo"<a href= signup.html><input type=submit value='Sign up' id ='medSerchBUT' name='medSerch'></a>";
                echo "</form>";
=======
                 
>>>>>>> origin/main
        echo "</form>";
        include("footfile.html");
    echo "</body>";
?>

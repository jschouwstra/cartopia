<?php
error_reporting(E_ALL & ~E_NOTICE);
require "connection.php";
require "model/Search.php";
$search = new Search($db);
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">    
    <?php
    $getAllResults = $search->getAll($db);
    echo "<h1>Zoek geschiedenis</h1>";            
    while($row = $getAllResults->fetch_assoc() ){
        if($row['color'] == "blue"){
            $colorOutput = "blauw";
        }
        elseif($row['color'] == "red"){
            $colorOutput = "rood"; 
        }
        elseif($row['color'] == "white"){
            $colorOutput = "wit"; 
        }
        elseif($row['color'] == "black"){
            $colorOutput = "zwart"; 
        }
        echo "
         <div class=\"panel panel-default\">   
             <div class=\"row\">
                 <div class=\"col-md-3\">Voornaam</div>
                 <div class=\"col-md-3\">
                 ".$row['firstname']."
                 </div>
             </div>
             <div class=\"row\">
                 <div class=\"col-md-3\">Achternaam</div>
                 <div class=\"col-md-3\">
                 ".$row['lastname']."
                 </div>
             </div>
             <div class=\"row\">
                 <div class=\"col-md-3\">Geboorte datum</div>
                 <div class=\"col-md-3\">
                 ".$row['birthdate']."
                 </div>
             </div>
             <div class=\"row\">
                 <div class=\"col-md-3\">Email</div>
                 <div class=\"col-md-3\">
                 ".$row['email']."
                 </div>
             </div>
             <div class=\"row\">
                 <div class=\"col-md-3\">Merk auto</div>
                 <div class=\"col-md-3\">
                 ".$row['brand']."
                 </div>
             </div>
             <div class=\"row\">
                 <div class=\"col-md-3\">Kleur</div>
                 <div class=\"col-md-3\">
                 ".$colorOutput."
                 </div>
             </div>
             <div class=\"row\">
                 <div class=\"col-md-3\">Budget</div>
                 <div class=\"col-md-3\">
                 ".$row['budget']."
                 </div>
             </div>
         </div>";
    }
    ?>
    </div>    
    </body>
</html>

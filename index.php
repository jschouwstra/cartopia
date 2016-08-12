<?php
error_reporting(E_ALL & ~E_NOTICE);
require "connection.php";
require "model/Search.php";
$search = new Search($db);
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script src="validation_messages.js">
        </script>
        <style>
            .feedback{
                display:none !important; 
            }
        </style>
    </head>
    <body>
        <div class="container">
            <noscript>
            <br>
            <i>De functionaliteiten van dit formulier zijn beperkt omdat u Javascript niet ingeschakeld heeft.</i>
            </noscript>
            <h1>Zoek een auto</h1>
            <form method="post" id="searchCarForm" action="show_result.php" role="form" >
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">Voornaam</div>
                        <div class="col-md-2">
                            <input class="form-control" type="text" name="firstName" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">Achternaam *</div>
                    <div class="col-md-2">
                        <input class="form-control" type="text" name="lastName" value="">
                    </div>                             
                </div>

                <div class="row"> 
                    <div class="col-md-2">Geboorte datum *</div>                    
                    <div class="col-md-2">
                        <input class="form-control" id="birthdate" name="birthdate" type="text"  value="">
                    </div>   

                </div>

                <div class="row">
                    <div class="col-md-2">Email</div>
                    <div class="col-md-2">
                        <input id="email" name="email"  class="form-control" type="text" value="">
                    </div>   

                </div>
                <div class="row">
                    <div class="col-md-2">Merk auto *</div>
                    <div class="col-md-3">
                        <select class="form-control" onchange="getBrandColor()" id="selectBrand" name="brandName">
                            <option selected="selected" value="">Selecteer een merk</option>
                            <option value="audi">Audi</option>
                            <option value="bmw">BMW</option>
                            <option value="peugeot">Peugeot</option>
                            <option value="ferrari">Ferrari</option>
                            <option value="porsche">Porsche</option>
                        </select>
                    </div>   
                </div>

                <div class="row" id="colorAudi">
                    <div class="col-md-2">Kleur > Audi *</div>
                    <div class="col-md-2">
                        <select class="form-control required" name="colorAudi">
                            <option value="">---</option>
                            <option value="red">Rood</option>
                            <option value="white">Wit</option>
                            <option value="black">Zwart</option>
                        </select>
                    </div>                
                </div>
                <div class="row" id="colorBMW">
                    <div class="col-md-2">Kleur > BMW *</div>
                    <div class="col-md-2">
                        <select class="form-control required" name="colorBMW">
                            <option value="">---</option>
                            <option value="blue">Blauw</option>
                            <option value="white">Wit</option>
                        </select>
                    </div>                
                </div>
                <div class="row" id="colorPeugeot">
                    <div class="col-md-2">Kleur > Peugeot*</div>
                    <div class="col-md-2">
                        <select class="form-control required" name="colorPeugeot">
                            <option value="">---</option>
                            <option value="red">Rood</option>
                            <option value="blue">Blauw</option>
                            <option value="white">Wit</option>
                        </select>
                    </div>                
                </div>
                <div class="row" id="colorFerrari">
                    <div class="col-md-2">Kleur > Ferrari*</div>
                    <div class="col-md-2">
                        <select class="form-control required" name="colorFerrari">
                            <option value="">---</option>
                            <option value="red">Rood</option>
                            <option value="black">Zwart</option>
                        </select>
                    </div>                
                </div>
                <div class="row" id="colorPorsche">
                    <div class="col-md-2">Kleur > Porsche*</div>
                    <div class="col-md-2">
                        <select class="form-control required" name="colorPorsche">
                            <option value="">---</option>
                            <option value="red">Rood</option>
                            <option value="white">Wit</option>
                            <option value="blue">Blauw</option>
                            <option value="black">Zwart</option>
                        </select>
                    </div>                
                </div>

                <div class="row">
                    <div class="col-md-2">Budget *</div>
                    <div class="col-md-2">
                        <input class="form-control" type="text" id="budget" name="budget" value="">
                    </div>   

                </div>                


                <div class="row">
                    <div  class="col-md-2"><input class="form-control" name="submit" id="submit" type="submit" value="Bevestig"></div>

                </div>                
            </form>            
        </div>

        <script src="main.js"></script>
        <script src="validation_rules.js">
        </script>

    </body>
</html>




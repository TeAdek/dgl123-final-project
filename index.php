<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simpsons Archives</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<header id="masthead" class="site-header layout-container">
<a href="index.php">
    <img class="site-header__logo" src="images/logo.svg" alt="Logo">
</a>
</header>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <div id="main" class="site-main">
            
                <div class="form__container layout-container">
                    <div class="form__row layout-row">
                        <div class="form__itemsContainer">

                            <div class="form__imageContainer">
                                <img src="images/simpsons.jpg" alt="Simpsons" class="form__image">
                            </div>

                            <div class="form__card">

                                <h3 class="form__heading">
                                    Select characters to show
                                </h3>

                                <form method="post" action="index.php">

                                    <ul class="form__items">
                                        <li class="form__item">
                                            <label for="homer">Homer Simpson</label>
                                            <input id="homer" type="checkbox" name="simpson[]" value= "Homer"<?= checkBox('Homer', 'simpson'); ?> />                                
                                        </li>
                                        <li class="form__item">
                                            <label for="marge">Marge Simpson</label>
                                            <input id="marge" type="checkbox" name="simpson[]" value="Marge"<?= checkBox('Marge', 'simpson'); ?>>
                                        </li>
                                        <li class="form__item">
                                            <label for="bart">Bart Simpson</label>
                                            <input id="bart" type="checkbox" name="simpson[]" value="Bart"<?= checkBox('Bart', 'simpson'); ?>>                                
                                        </li>
                                        <li class="form__item">
                                            <label for="lisa">Lisa Simpson</label>
                                            <input id="lisa" type="checkbox" name="simpson[]" value="Lisa"<?= checkBox('Lisa', 'simpson'); ?>>                                
                                        </li>
                                        <li class="form__item">
                                            <label for="maggie">Maggie Simpson</label> 
                                            <input id="maggie" type="checkbox" name="simpson[]" value="Maggie"<?= checkBox('Maggie', 'simpson');; ?>>                                                                                  
                                        </li>
                                        <li class="form__item">
                                            <label for="moe">Moe Szyslak</label>
                                            <input id="moe" type="checkbox" name="simpson[]" value="Moe"<?= checkBox('Moe', 'simpson'); ?>>                                
                                        </li>
                                    </ul>
                                        <input class="form__button" type="submit" value="Show Characters">

                                </form>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="characters__container layout-container">
                    <div class="characters__row layout-row">
                        <ul class="characters__items">
                          <?php 

function checkBox($value, $array_name){
    if (!empty($_POST[$array_name]) && in_array($value, $_POST[$array_name])) 
    echo "checked='checked'";
}
                                

                            
$simpson = [
    [
        "first_name" => "Homer",
        "last_name" => "Simpson",
        "age" => "40",
        "occupation" => " Nuclear Safety Inspector",
        "voiced_by" => "Dan Castellaneta",
        "image_url" => "images/homer.png"
    ],
    [
        "first_name" => "Marge",
        "last_name" => "Simpson",
        "age" => "40",
        "occupation" => "Homemaker",
        "voiced_by" => "Julie Kavner",
        "image_url" => "images/marge.png"
    ],
    [
        "first_name" => "Bart",
        "last_name" => "Simpson",
        "age" => "10",
        "occupation" => "Student",
        "voiced_by" => "Nancy Cartwright",
        "image_url" => "images/bart.png"
    ],
    [
        "first_name" => "Lisa",
        "last_name" => "Simpson",
        "age" => "8",
        "occupation" => "Student",
        "voiced_by" => "Yeardley Smith",
        "image_url" => "images/lisa.png"
    ],
    [
        "first_name" => "Maggie",
        "last_name" => "Simpson",
        "age" => "8",
        "image_url" => "images/maggie.png"
    ],
    [
        "first_name" => "Moe",
        "last_name" => "Szyslak",
        "age" => "55",
        "occupation" => "Bartender",
        "voiced_by" => "",
        "image_url" => "images/moe.png"
    ]
];



if(!empty($_POST["simpson"]) && is_array($_POST["simpson"])){
    foreach($_POST["simpson"] as $simpson_char){
        for($row = 0; $row < count($simpson); $row++){

            if($simpson_char == $simpson[$row]["first_name"]){
                echo"<li class=\"characters__itemContainer\">";
                        echo"<div class=\"characters__item\">";
                            echo"<img src=" . $simpson[$row]['image_url'] . " alt=" . $simpson[$row]['first_name'] . " class=\"characters__image\">";                           
                        echo"<div class=\"characters__info\">";

                            echo"<h3 class=\"characters__name\">" . $simpson[$row]['first_name'] . "</h3>";
                        echo"<div class=\"characters__age characters__attribute\">";
                            print"<b>Age: </b>" . $simpson[$row]['age'];
                        echo"</div>";
                        if(isset($simpson[$row]["occupation"])){//Check If Occupation Description is set
                            echo"<div class=\"characters__occupation characters__attribute\">";
                                echo"<b>Occupation: </b>" . $simpson[$row]['occupation'];
                            echo"</div>"; 
                        if($simpson[$row]["voiced_by"] != ""){ //Check if Voiced By Description is a empty string                                     
                            echo"<div class=\"characters__voicedBy characters__attribute\">";
                                echo"<b>Voiced by: </b>" . $simpson[$row]['voiced_by'];                                                  
                            echo"</div>";  
                        }  
                        }                                   
                        echo"</div>";
                        echo"</div>";
                echo"</li>";
            }
        } /* Display Simpson Pictures */
    }
    
}
                         ?>                                                                                                                                                                                                                                                                                                                                                                                                </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>
</html>

<!DOCTYPE html>
<html>

<head>
    <?php
    
    $year = $_GET['year'];
    $month = $_GET['month'];
    $day = $_GET['day'];
    
    $variabel = $_GET['variabel'];
    $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $nr1 = $_GET['nr1'];
    $nr2 = $_GET['nr2'];
    ?>
        <style>
            body {
                background-color: <?php echo $_GET['color'] ?>;
            }
        </style>
</head>

<body> Hej
    <?php echo $variabel;
        echo  nl2br (" på webbadressen: \n ");
        echo $full_url;
        echo '<br> <br> <br>';
        echo "variabel nr1 = ", $nr1;
        echo '<br>';
        echo  "variabel nr2 = ", $nr2;
        echo '<br>';
        echo "de två variablerba multiplicerade är: ", '<br>';
        echo $nr1 * $nr2;
        echo '<br> <br> <br> <br> ';
        
                
                    
//Här är datumdelen-----------------------------------
            
        //&year=2017&month=2&day=7
       echo $year;
        echo "-";
        echo sprintf("%02d", $month);
        echo "-";
        echo sprintf("%02d", $day);
                    
        
       if($month = "4" && $day = "20"){ 
           $color = green;
             }        
    ?>
        <br>
        <br> </body>

</html>
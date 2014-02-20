<html>

<head>
    <link href='http://fonts.googleapis.com/css?family=Exo+2:400,100' rel='stylesheet' type='text/css'>
    <style>

    body {
        /*background-color: red;*/
        background-image: url(futurebackgroun.png);
    }

    .resultNew{
        font-size:6px;
        border-radius:10px;
        background-color: rgba(255, 255, 255, 0.8);
        position: relative;
        width: 20%;
        display: inline-block;
        margin-right: 50px;
        margin-left: 50px;
        /*font-family: Helvetica;*/
        font-family: 'Exo 2', sans-serif;
        z-index: 100;
    }

   /* .resultNew li{

        font-size:10px;
    }*/

    .res {

        font-size:14px;
    }

    a:link {color:#777777;}

    </style>
</head>
<?php

    function scrapeIt($siteUrl){

            $website= file_get_contents($siteUrl);


            $results = explode('<li>', $website);

            for($i=0; $i < count($results); $i++){
                if($i<6){

                }
                else{

                    echo('<div class="resultNew">');
                    echo($results[$i]); 

                    echo("</div>");
                }
                
            }
            //return($website);

    }


    $googSite= scrapeIt('https://search.yahoo.com/search;_ylt=AgO2FvcbKlxYW_qCzlzVUoCbvZx4?p=mighty+ducks&toggle=1&cop=mss&ei=UTF-8&fr=yfp-t-196');
    //echo($googSite);

    


    


?>


</html>
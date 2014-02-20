<html>

<head>
    <style>
    .resultNew{
        font-size:15px;
        border-radius:10px;
        color: white;
    }

   .resultNew{
        font-size:6px;
        border-radius:10px;
        
        position: relative;
        width: 20%;
        display: inline-block;
        margin-right: 50px;
        margin-left: 50px;
        /*font-family: Helvetica;*/
        font-family: 'Exo 2', sans-serif;
        z-index: 100;
    }


    img {

        

    }

    }

    body {

    background-image: url("http://timetoeatthedogs.files.wordpress.com/2010/02/mars-colonization.jpg");


    }

    </style>
</head>
<body>
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


    $googSite= scrapeIt('https://search.yahoo.com/search;_ylt=Ap2eJn2GjDxCu.todWqcgpGbvZx4?p=mars+colonization&toggle=1&cop=mss&ei=UTF-8&fr=yfp-t-901');
    //echo($googSite);

    


    


?>
</body>

</html>
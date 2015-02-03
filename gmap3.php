<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <script type="text/javascript"
        src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/gmap3.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#map_canvas').gmap3();
            });
        </script>
    </head>
    <body>
        <div id="map_canvas" style="height:350px; width:600px">
            
        </div>
    </body>
</html>

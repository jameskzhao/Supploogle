<!DOCTYPE html>
<html lang="en">
    <head>
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#slide').click(function(){
                var hidden = $('.hidden');
                if (hidden.hasClass('visible')){
                    hidden.animate({"left":"-1000px"}, "slow").removeClass('visible');
                } else {
                    hidden.animate({"left":"0px"}, "slow").addClass('visible');
                }
                });
            });
        </script>
        <style>
            .left, .hidden {
                float: left;
                height:350px;
            }

            .left {
                width: 50%;
                background: #fff;
                z-index:1;
            }

            .hidden {
                width:25%;
                z-index:-1000;
                position:absolute;
                left:-1000px;
                background:#f90;
                color:#000;
            }

            .right {
                width:50%;
                float: right;
                height:350px;
                background:#000;
                color:#fff;
            }

            .clear {
                clear:both;
            }
        </style>
    </head>
    <body>
        
        
        <div class="hidden">Here I am !</div>
        <a href="#" id="slide">Show/hide Slide Panel</a>
        <div class="clear"></div>

        
    </body>
</html>

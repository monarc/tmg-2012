<html>
    <head>
        <link href='css/main.css' type="text/css" rel="stylesheet"/>
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
        <title>3DS Monster</title>  

        <script>
            function doPopup1() 
            {
                window.open( "monster1.php", "myWindow", "status = 0, height = 300, width = 300, resizable = 0" )

            }
            function doPopup2() 
            {
                window.open( "monster2.php", "myWindow", "status = 0, height = 300, width = 300, resizable = 0" )

            }
            function doPopup3() 
            {
                window.open( "monster3.php", "myWindow", "status = 0, height = 300, width = 300, resizable = 0" )

            }
            function doPopup4() 
            {
                window.open( "monster4.php", "myWindow", "status = 0, height = 300, width = 300, resizable = 0" )

            }        
        
        </script>

    </head>
    <body> 

        <?php include "header.php"; ?>

        <div class="tic_body" align="center">
            <b>Choose your Monsters</b>

            <form action="battle2.php" method="post"> 
                <br><br>
                <table>
                    <tr>
                        <td width="60">
                            <div id="dLinks" style="width:50px; height:50px; border:2px #000 solid;" onclick="doPopup1(this);"></div>
                        </td>
                        <td width="60">
                            <div id="dLinks2" style="width:50px; height:50px; border:2px #000 solid;" onclick="doPopup2(this);"></div>
                        </td>
                        <td width="60">
                            <div id="dLinks3" style="width:50px; height:50px; border:2px #000 solid;" onclick="doPopup3(this);"></div>
                        </td>
                    </tr>
                </table>

                <br>

                <br>


                <a href="battle2.php">
                    <input type="submit" id="battle1" name="battle1" class="tic_button" value=" >> ">
                </a>
            </form>
            <br><br>
        </div>

        <?php include "footer.php"; ?>
    </body>
</html>

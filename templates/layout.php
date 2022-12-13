<html>
    <head>
        <title></title>
    </head>
    <body>
        <div class="header">
            <h1>Moje Notatki</h1>
        </div>
        <div class="container">
            <div class="menu">
                <ul>
                    <li><a href="/?action=lis5t">Lista notatek</a></li>
                    <li><a href="/?action=create">Nowa notatka</a></li>
                </ul>
            </div>
            <?php   
                require_once("templates/pages/$page.php");
         
            ?>
                
            <div class="content"></div>
        </div>
        <div class="footer"></div>       
    </body>
</html>

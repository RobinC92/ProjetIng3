<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <div id="page">
        <div id =header> 
            <?php
                require_once('barre_navigation.php');
            ?>
        </div>
        <div id =content> 
        </div>
        <div id =footer> 
            <?php
                require_once('footer.php');
            ?>
        </div>
    </body>
</html>

<style>
    #page {
        min-height:100vh; /* 1 */
        display:flex; /* 2 */
        flex-direction:column; /* 3 */
    }

    #content {
        flex-grow:1; /* 4 */
    }
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Galerie de Villes </title>
	<style type="text/css">

        #section {
            float: left;
            width: 100%;
            height: 100%;
            background-color: #eeeeee;
        }

        .ville {
            width: 20%;
            float: left;
            border: solid #bbbbbb 1px;

            padding: 5px;

        }
        img {
            width: 100%;
        }

	</style>
</head>
<body>
    
	<div id="section">
        <?php
        for ($i=0;$i<20;$i++){
            echo"
            <div class='ville'>
                <img src='https://static.fnac-static.com/multimedia/Images/FR/NR/ba/d8/1d/1956026/1540-1/tsp20180921093018/Harry-Potter-a-l-ecole-des-sorciers.jpg'>
                <h2>Londres</h2>
                <p>Londres est la capital du Royaume-Uni</p>
                <ul>
                    <li>Parlement britannique</li>
                    <li>Palais Buckingham</li>
                    <li>Rivières Thames</li>
                </ul>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, felis nec vulputate aliquam sagittis habitasse dui, molestie semper sodales</p>
                <center><a href='#' class='myButton'>Ajouter au Panier</a></center>
            </div>";
        }
        ?>
        </div>      
	</div>
</body>
</html>

<style>
    .myButton {
        -moz-box-shadow: 3px 4px 0px 0px #899599;
        -webkit-box-shadow: 3px 4px 0px 0px #899599;
        box-shadow: 3px 4px 0px 0px #899599;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #bab1ba));
        background:-moz-linear-gradient(top, #ededed 5%, #bab1ba 100%);
        background:-webkit-linear-gradient(top, #ededed 5%, #bab1ba 100%);
        background:-o-linear-gradient(top, #ededed 5%, #bab1ba 100%);
        background:-ms-linear-gradient(top, #ededed 5%, #bab1ba 100%);
        background:linear-gradient(to bottom, #ededed 5%, #bab1ba 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#bab1ba',GradientType=0);
        background-color:#ededed;
        -moz-border-radius:15px;
        -webkit-border-radius:15px;
        border-radius:15px;
        border:1px solid #d6bcd6;
        display:inline-block;
        cursor:pointer;
        color:#3a8a9e;
        font-family:Arial;
        font-size:17px;
        padding:7px 25px;
        text-decoration:none;
        text-shadow:0px 1px 0px #e1e2ed;
        -webkit-align-items : center;
    }
    .myButton:hover {
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bab1ba), color-stop(1, #ededed));
        background:-moz-linear-gradient(top, #bab1ba 5%, #ededed 100%);
        background:-webkit-linear-gradient(top, #bab1ba 5%, #ededed 100%);
        background:-o-linear-gradient(top, #bab1ba 5%, #ededed 100%);
        background:-ms-linear-gradient(top, #bab1ba 5%, #ededed 100%);
        background:linear-gradient(to bottom, #bab1ba 5%, #ededed 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bab1ba', endColorstr='#ededed',GradientType=0);
        background-color:#bab1ba;
    }
    .myButton:active {
        position:relative;
        top:1px;
    }
</style>


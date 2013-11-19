<!DOCTYPE HTML>
<html>
    <head>
        <meta name="HandheldFriendly" content="true" />
        <meta name="MobileOptimized" content="320" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link rel="stylesheet" href="jss/style.css" />
        <link rel="shortcut icon" href="img/favicon.ico" />
        <link rel="apple-touch-icon" href="img/logo-114.png"  sizes="114x114"/>
        <link rel="apple-touch-icon" href="img/logo-72.png"  sizes="72x72"/>
        <link rel="apple-touch-icon" href="img/logo-57.png"  sizes="57x57"/>
        <link rel="apple-touch-startup-image" href="img/splash-touch.png">
        <title></title>
    <body>
        <div class="wrapper">          
            <a id="header" href="index.html"><img src="img/logo-57.png" />
                <div class="titre">
                    <h1>MyBd.fr</h1>
                    <h2>plein d'infos sur les BD</h2>
                </div></a>
        </div>
        <br  class="clear"/>
        <div class="wrapper" >
            <div id="menu">
                <ul>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="last.php">Last</a></li>
                    <li><a href="legal.php">Legal</a></li>                  
                    <li><a href="random.php">Random</a></li>
                </ul>
            </div>
        </div>

        <br  class="clear"/>
        <div class="wrapper" >
            <div id="content">
                <form name="search" action="search.php">
                    <label>Auteur: </label><input type="text" name="Auteur"/><br/>
                    <label>Nationalit&eacute;: </label><input type="text" name="Nationalite" /><br/>
                     <label>Titre: </label><input type="text" name="Titre"/><br/>                    
                     <label>Ann&eacute;e: </label><input type="text" name="Annee"/><br/>
                    <label>Prix: </label><input type="text" name="Prix" /><br/>
                    <label>Disponibilit&eacute;: </label><input type="text" name="Disponibilite" />
                    <input type="submit" value="Validez" name="validez" />
                </form>
            </div>
        </div>
        <br  class="clear"/>
        <div class="wrapper" >
            <div id="footer">
                <ul>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="last.php">Last</a></li>
                    <li><a href="legal.php">Legal</a></li>                  
                    <li><a href="random.php">Random</a></li>
                </ul>
            </div>
        </div>
        <br  class="clear"/>


    </body>

</html> 

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
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
         <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
          <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
          <script src="http://jquery-ui-map.googlecode.com/svn/trunk/ui/min/jquery.ui.map.full.min.js"></script>
        <title></title>
    <body>
        <div id="jqm" data-role="page">
            <div data-role="header"><h1>MyBD.fr</h1></div>
            <div data-role="content">                
                <ul data-role="listview">
                    <li><a href="search.php">Search</a></li>
                    <li><a href="last.php">Last</a></li>
                    <li><a href="legal.php">Legal</a></li>                  
                    <li><a href="random.php">Random</a></li>
                </ul>
                
                <div id="form" data-role="fieldcontain">            
                    <label for="Auteur">Auteur: </label><input type="text" name="Auteur" id="Auteur" placeholder="Auteur"/><br/>
                    <label for="Nationalit&eacute;">Nationalit&eacute;: </label><input type="text" name="Nationalite"  placeholder="Nationalite"/><br/>
                    <label for="Titre">Titre: </label><input type="text" name="Titre" id="Titre"  placeholder="Titre"/><br/>                    
                    <label for="Ann&eacute;e">Ann&eacute;e: </label><input type="range" name="Annee" id="Annee" /><br/>
                    <label for="Prix">Prix: </label><input type="text" name="Prix"  id="Prix"  placeholder="Prix"/><br/>
                    <label for="Disponibilit&eacute;">Disponibilit&eacute;: </label><input type="text" name="Disponibilite" id="Disponibilite"  placeholder="Disponibilite"/>
                               
            </div>
                
                
            </div>
            <div data-role="footer" data-position="fixed" class="ui-bar">                         
            <div data-role="navbar">
                    <ul>
                        <li><a href="#" data-role="button" data-icon="back" data-theme="a" data-rel="back">Precedent</a>    </li>
                        <li> <a href="#" data-role="button"  data-icon="search" data-theme="b">Rechercher</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div>            
        </div>
        <br  class="clear"/>   
         
    </body>

</html> 

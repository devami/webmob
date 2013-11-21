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
        <script type="text/javascript" src="jss/library.js" >

        </script> 
        <script type="text/javascript" >
           
            function showcoord()
            {
                console.log(gps.get());
                var y = document.getElementById("coords");
                var coordonne = gps.get();
                y.innerHTML = coordonne;
            }
        </script>   
    <body>
        <div class="wrapper" >
            <header>          
                <a id="header" href="index.html"><img src="img/logo-57.png"/>
                    <hgroup>
                        <h1>MyBd.fr</h1>
                        <h2>plein d'infos sur les BD</h2>
                    </hgroup></a>
            </header>
        </div>
        <br  class="clear"/>
        <div class="wrapper" >
            <nav id="menu">               
                <ul>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="last.php">Last</a></li>
                    <li><a href="legal.php">Legal</a></li>                  
                    <li><a href="random.php">Random</a></li>
                </ul>
            </nav>            
        </div>

        <br  class="clear"/>
        <div class="wrapper" >
            <div id="content">
                <div id="coords"> <input type="button" value="click" onclick="showcoord();" /></div>

            </div>
           
        </div>
        <br  class="clear"/>
        <div class="wrapper" >
            <footer>
                <nav>
                    <ul>
                        <li><a href="search.php">Search</a></li>
                        <li><a href="last.php">Last</a></li>
                        <li><a href="legal.php">Legal</a></li>                  
                        <li><a href="random.php">Random</a></li>
                    </ul>
                </nav>
            </footer>
        </div>
        <br  class="clear"/>


    </body>

</html> 

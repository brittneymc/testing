<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link type="text/css" rel="stylesheet" href="css/main.css" />
        <title>Learn something new!</title>
    </head>
    <body>   
        <div id="content">
            <!-- Header-->
            <div id="header">
                <!-- Navigation Bar -->   
                <nav>
                    <a href="index.php">Home</a>                    
                    <a href="aboutme.html">About</a>
                    <a href="learn.php">Learn</a>
                    <a href="media.html">Media</a>
                    <a href="contactme.php">Contact Me</a>
                 </nav>
            <!-- header end -->
            </div>           
            <!--Learn something starts here.-->
            <div class="container">
                <div class="form">
                    <h1>Learn something new</h1>  
                    <p>I'm a huge fan of learning foreign languages... I'd like to share my knowledge of some basc phrases. Enjoy!</p>
                    <!-- Setting Up PHP -->
                    <form action="learn.php" method="post" >
                         <select name="greetings">
                            <option value="0">Hello</option>
                            <option value="1">Goodbye</option>
                            <option value="2">I love you</option>
                        </select>

                        <select name="language">
                            <option value="0">French</option>
                            <option value="1">Chinese</option>
                            <option value="2">Spanish</option>
                            <option value="3">Korean</option>
                        </select>
                             <br><br>
                        <input type="submit" name="submit" value="submit" />  
                    </form>  
                </div>             
                
            <!--PHP below -->  
            <?php

            if (isset($_POST['greetings'])){ 
                $french = array('Allo','Au Revoir','Je t\'aime');
                $chinese = array('Nî Hao','Zài Jiàn','Wô ai nî');
                $spanish = array('Hola', 'Adíos', 'Te amo');
                $korean = array('Annyeong', 'An nyoung', 'Saranghaeyo');

                    if ($_POST['language']==0) {    
                        $language="French";
                        $phrase = $french[$_POST['greetings']];
                    }

                    if ($_POST['language']==1) {      
                        $language="Chinese";
                        $phrase = $chinese[$_POST['greetings']];
                    }

                    if ($_POST['language']==2) {
                        $language="Spanish";
                        $phraseo = $spanish[$_POST['greetings']];
                    }

                    if ($_POST['language']==3) {
                        $language="Korean";
                        $phrase = $korean[$_POST['greetings']];
                    }

                echo " Congrats! You just learned how to say \"$phrase\" in $language!";
                }
            ?>
            <!-- end of container div -->
            </div>
        </div>
    </body>
</html>

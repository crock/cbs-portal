<?php
    include("config.php");
    include("functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php print($serverName); ?></title>
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/pure.min.css">
    <link rel="stylesheet" type="text/css" href="css/grids-responsive.min.css">
	<link rel="stylesheet" type="text/css" href="css/animations.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<style>
	body {
		background: <?php print($background_color); ?>;
	}
	#menu {
		background: <?php print($vote_menu_color); ?>;
	}
	#menu button {
		background: <?php print($vote_close_button_color); ?>;
	}
	#menu ul li a:hover {
		background: <?php print($vote_link_onhover); ?>;
	}
	#twitterfeed {
		background: <?php print($twitter_menu_color); ?>
	}
	#twitterfeed button {
		background: <?php print($twitter_close_button_color); ?>;
	}	
</style>	
<body>
		
    <div id="logo" class="pure-g">
        <div class="pure-u-1-1">
            <img src="img/logo.png" class="pure-img tossing" alt="logo">
        </div>
    </div>

    <nav class="pure-g">
        <div class="pure-u-1 pure-u-md-1-4">
            <a href="#" onclick="toggleMenu('twitterfeed');">
            <img src="<?php if( date("M") == "Dec" && $xmas_theme == TRUE) { print("img/xmas_theme/twitter.png"); } else { print("img/twittericon.png"); } ?>"class="hatch" width="150" height="150" alt="vote">
            <p>Twitter</p>
            </a>
        </div>
        <div class="pure-u-1 pure-u-md-1-4">
            <a href="<?php print($forum); ?>">
            <img src="<?php if( date("M") == "Dec" && $xmas_theme == TRUE) { print("img/xmas_theme/forum.png"); } else { print("img/forumicon.png"); } ?>"class="hatch" width="150" height="150" alt="forum">
            <p>Forum</p>
            </a>
        </div>
        <div class="pure-u-1 pure-u-md-1-4">
            <a href="<?php print($shop); ?>">
            <img src="<?php if( date("M") == "Dec" && $xmas_theme == TRUE) { print("img/xmas_theme/shop.png"); } else { print("img/shopicon.png"); } ?>"class="hatch" width="150" height="150" alt="shop">
            <p>Shop</p>
            </a>
        </div>
        <div class="pure-u-1 pure-u-md-1-4">
            <a href="#" onclick="toggleMenu('menu');">
            <img src="<?php if( date("M") == "Dec" && $xmas_theme == TRUE) { print("img/xmas_theme/vote.png"); } else { print("img/voteicon.png"); } ?>"class="hatch" width="150" height="150" alt="vote">
            <p>Vote</p>
            </a>
        </div>
    </nav>


    <div class="pure-g">
        <div class="pure-u-1-1">
            <h1></h1>
            <button class="pure-button pure-button-primary" id="serverip" data-clipboard-text="<?php print($serverIP); ?>"><?php print($serverIP); ?></button>
        </div>
    </div>

    <div id="menu" class="slideLeft">
        <button onclick="closeMenu('menu');">Close Menu</button>

        <ul>
            <li><a href="<?php print($votingLink1); ?>"><?php print($linkName1); ?></a></li>
            <li><a href="<?php print($votingLink2); ?>"><?php print($linkName2); ?></a></li>
            <li><a href="<?php print($votingLink3); ?>"><?php print($linkName3); ?></a></li>
            <li><a href="<?php print($votingLink4); ?>"><?php print($linkName4); ?></a></li>
            <li><a href="<?php print($votingLink5); ?>"><?php print($linkName5); ?></a></li>
        </ul>
    </div>

    <div id="twitterfeed" class="slideRight">
        <button onclick="closeMenu('twitterfeed');">Close Menu</button>

        <a class="twitter-timeline" href="https://twitter.com/<?php print($twitterUser); ?>" data-widget-id="<?php print($data_widget_id); ?>" data-chrome="noheader nofooter transparent noscrollbar"><?php print($serverName); ?></a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>

    <footer>
        <p>&copy;<?php echo date("Y"); ?> <?php print($serverName); ?></p>
    </footer>

    <?php
        if ($VideoBG == TRUE) {
            include("videos.php");
        } else {
            // do nothing
        }
    ?>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/clipboard.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
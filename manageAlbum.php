<!DOCTYPE html>

<html lang="en">
<head>
	<title>ARGAZKI BILDUMA</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	
	<script language="javascript" type="text/javascript" src="js/clientscript/prototype/prototype.js"></script>
    <script language="javascript" type="text/javascript" src="js/clientscript/prototype/scriptaculous.js?load=effects"></script>
    <script language="javascript" type="text/javascript" src="js/clientscript/os.js"></script>
    <script language="javascript" type="text/javascript" src="js/clientscript/model/carousel.js"></script>
    <script language="javascript" type="text/javascript" src="js/clientscript/behavior/application.js"></script>

	<?php include 'php/sesioa.php' ?>
	
</head>
<body>
<div id="container">
	<header>
		<div class="logo">
			<p><h1>BILDUMA KUDEAKETA</h1></p>
		</div>

		<div id="menu_icon"></div>
		<nav>
			<ul>
				<?php manageAlbumMenua()?>
			</ul>
		</nav><!-- end navigation menu -->

	</header><!-- end header -->

	<section class="main clearfix">

 <div id="Workspace">
			<div id="carousels">
            <div id="Carousel" class="carousel">
                <div class="button navButton previous" style="display:none;">Up</div>
                <div class="button navButton next" style="display:none;">Down</div>
                <div class="container">
                    <div class="items">
                        <?php include 'php/erab/nireAlbumerakutsi.php';?>					
                    </div>
                </div>
            </div>
        
            <div id="Carousel2" class="carousel">
                <div class="button navButton previous" style="display:none;">Back</div>
                <div class="button navButton next" style="display:none;">More</div>
                <div class="container">
                    <div class="items">
                        <div class="item">
                            <div class="key caption">Top</div>
                            <div class="icon">
                                <img width=65 height=65 src="images/gallery/top.small.jpg" />
                            </div>
                            <div class="picture">
                                <img width=500 height=400 src="images/gallery/top.big.jpg" />
                            </div>
                        </div>            
                        <div class="item">
                            <div class="key caption">Boxcvzdvzv zsfgdfasdfasd</div>
                            <div class="icon">
                                <img width=65 height=65 src="images/gallery/box.small.jpg" />
                            </div>
                            <div class="picture">
                                <img width="380px" height="320px" src="images/gallery/box.big.jpg" />
                            </div>
                        </div>            
                       
                    </div>
                </div>
				</div>
		</div>
		<div id="leftside">
			<div id="Viewer" >
				<h3>Album</h3>
				<div id="ViewerCaption" class="caption"></div>
				<div id="ViewerData" class="data"></div>
			</div>
			<div id="Viewer1" style="display:none;">
				<h3>Argazkia</h3>
				<div id="ViewerCaption1" class="caption"></div>
				<div id="ViewerData1" class="data"></div>
			</div>
		</div>
    </div>
	</section>
</div>
</body>
</html>
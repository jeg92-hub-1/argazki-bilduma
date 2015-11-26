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
                        <div class="item selected">
                            <div class="key caption">Adams, John</div>
                            <div class="icon">
                                <img alt="Profile" width="22" height="22" src="images/id.png" />
                            </div>
                            <div class="email">john.adams@somedomain.com</div>
                        </div>            
                        <div class="item">
                            <div class="key caption">Brookes, Steve</div>
                            <div class="icon">
                                <img alt="Profile" width="22" height="22" src="images/id.png" />
                            </div>
                            <div class="email">steve.brookes@somedomain.com</div>
                        </div>            
                        <div class="item">
                            <div class="key caption">Carter, Tracy</div>
                            <div class="icon">
                                <img alt="Profile" width="22" height="22" src="images/id.png" />
                            </div>
                            <div class="email">tracy.carter@somedomain.com</div>
                        </div>            
                        <div class="item">
                            <div class="key caption">Dugar, Natalya</div>
                            <div class="icon">
                                <img alt="Profile" width="22" height="22" src="images/id.png" />
                            </div>
                            <div class="email">natalya.dugar@somedomain.com</div>
                        </div>  
<div class="item">
                            <div class="key caption">Carter, Tracy</div>
                            <div class="icon">
                                <img alt="Profile" width="22" height="22" src="images/id.png" />
                            </div>
                            <div class="email">tracy.carter@somedomain.com</div>
                        </div>            
                        <div class="item">
                            <div class="key caption">Dugar, Natalya</div>
                            <div class="icon">
                                <img alt="Profile" width="22" height="22" src="images/id.png" />
                            </div>
                            <div class="email">natalya.dugar@somedomain.com</div>
                        </div>  
<div class="item">
                            <div class="key caption">Carter, Tracy</div>
                            <div class="icon">
                                <img alt="Profile" width="22" height="22" src="images/id.png" />
                            </div>
                            <div class="email">tracy.carter@somedomain.com</div>
                        </div>            
                        <div class="item">
                            <div class="key caption">Dugar, Natalya</div>
                            <div class="icon">
                                <img alt="Profile" width="22" height="22" src="images/id.png" />
                            </div>
                            <div class="email">natalya.dugar@somedomain.com</div>
                        </div>  						
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
                            <div class="key caption">Box</div>
                            <div class="icon">
                                <img width=65 height=65 src="images/gallery/box.small.jpg" />
                            </div>
                            <div class="picture">
                                <img width=500 height=400 src="images/gallery/box.big.jpg" />
                            </div>
                        </div>            
                       
                    </div>
                </div>
				</div>
		</div>
		
		<div id="Viewer" style="display:none;">
            <h2>Viewer</h2>
            <div id="ViewerCaption" class="caption"></div>
            <div id="ViewerData" class="data"></div>
        </div>
    </div>
	</section>
</div>
</body>
</html>
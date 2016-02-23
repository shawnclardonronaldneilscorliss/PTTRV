<?php

// Hiding notices:
error_reporting(E_ALL^E_NOTICE);

?>
<!DOCTYPE html>

<html lang="en">

    <head>
		 <!--[if lt IE 9]>
 		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

        <link rel="stylesheet" type="text/css" href="../CSS/AboutUS.css" />
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-darkness/jquery-ui.css" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="../scripts/Gallery/fancybox/jquery.fancybox-1.2.6.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../scripts/Gallery/fancybox/jquery.fancybox-1.2.6.pack.js"></script>
		<script type="text/javascript" src="../scripts/Gallery/script.js"></script>


        <meta charset="utf-8" />

        <title>Pro~Tech Truck & R.V. About US</title>
        <meta name="description" content="">
        <meta name="keywords" content="Pro~Tech,Whitecourt RV,ProTech, RV, New, Used, Sales, Service,
                                       Parts and Accessories, Financing, 5th wheel, Trade in,Whitecourt travel trailer, 
                                       truck camper, tent trailer,Vendors, Suppliers, Alberta">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40572218-1', 'pttrv.com');
  ga('send', 'pageview');

</script>

    </head>

    <body>

        <header>

            <nav>

                <a href='Home.html'>Home</a>

                  <a href='About_us.php'>About us</a>

                 <a href="Service.html">Service</a>

                  <a href="Sales.html">Sales</a>

                <a href="Contact_US.html">Contact Us</a>

            </nav>

            <h1> </h1>

        </header>
		<!--
        <section id='sidebar'>
            <h2>Notice</h2>

            <nav id='archive'>

                <ul>

                    <li id="navlist"> <span style="color:black">We are currnently Developing a new website to better server our cutomers.</span> </li>

                </ul>

            </nav>

        </section>
		-->
        <section id='articles'>
        <!--[if lt IE 9]> 
             <h2>Built on a Rock...We start with a great team.</h2>
             <![endif]-->
             
             <!--[if !IE]><!-->	 
             <h2 class="reflected">Built on a Rock...We start with a great team.</h2>
             <!--<![endif]-->
              
             <!--[if gte IE 9]>	 
             <h2 class="reflected">Built on a Rock...We start with a great team.</h2>
             <![endif]-->
             
            <article style="height:230px;">

             <div class="rectangle" style="left: -15px; top: -1px; width: 415px;"><h2 style="color:aliceblue;">This is what and why we Do it!</h2></div>
		   		<div class="triangle-l" style="left: -31px; top: 33px"></div>
		   		<br/>
                <img  class="figureL" src="../images/outside Pro tech.png" height="175px" width="399px">
             <p>

                Pro-Tech Truck and RV is a family business that started in 2000.<br />   

                We thrive to ensure that all aspects of business we do are with honesty, integrity, and value.  

                We are proud to have well trained staff to accommodate our customers  needs.

               <br/> Our repeat customers will agree that at Pro-Tech Truck + RV.  

                We can say<br />"FOR EXCELLENCE IN PRODUCT AND SERVICE.....WHAT EVER IT TAKES!".

                </p>
				
                <aside>

               </aside>
			<br/>
			<div class="clear"></div>
            </article>

            <article>

                  <div class="rectangle" style="left: -15px; top: -1px; width: 415px;"><h2 style="color:aliceblue;">Gallery</h2></div>
		   		<div class="triangle-l" style="left: -31px; top: 33px"></div>
		   		<br/>

                <!-- This is later converted to the modal window with the url of the image: -->
                 <div id="main">
			<div id="gallery">
    
<?php

/* Configuration Start */

$thumb_directory = '../images/Gallery/thumbs';
$orig_directory = '../images/Gallery/Orginal';

$stage_width=700;	// How big is the area the images are scattered on
$stage_height=400;

/* Configuration end */

$allowed_types=array('jpg','jpeg','gif','png');
$file_parts=array();
$ext='';
$title='';
$i=0;

/* Opening the thumbnail directory and looping through all the thumbs: */

$dir_handle = @opendir($thumb_directory) or die("There is an error with your image directory!");

$i=1;
while ($file = readdir($dir_handle)) 
{
	/* Skipping the system files: */
	if($file=='.' || $file == '..') continue;
	
	$file_parts = explode('.',$file);
	$ext = strtolower(array_pop($file_parts));

	/* Using the file name (withouth the extension) as a image title: */
	$title = implode('.',$file_parts);
	$title = htmlspecialchars($title);

	/* If the file extension is allowed: */	
	if(in_array($ext,$allowed_types))
	{
		/* Generating random values for the position and rotation: */
		$left=rand(0,$stage_width);
		$top=rand(0,400);
		$rot = rand(-40,40);
		
		if($top>$stage_height-130 && $left > $stage_width-230)
		{
			/* Prevent the images from hiding the drop box */
			$top-=120+130;
			$left-=230;
		}
		
		/* Outputting each image: */
		
		echo '
		<div id="pic-'.($i++).'" class="pic" style="top:'.$top.'px;left:'.$left.'px;background:url('.$thumb_directory.'/'.$file.') no-repeat 50% 50%; -moz-transform:rotate('.$rot.'deg); -webkit-transform:rotate('.$rot.'deg);">
		<a class="fancybox" rel="fncbx" href="'.$orig_directory.'/'.$file.'" target="_blank">'.$title.'</a>
		</div>';
	}
}

/* Closing the directory */
closedir($dir_handle);

?>    
	</div>
    
	<div class="clear"></div>
   </div>

<!-- This is later converted to the modal window with the url of the image: -->

<div id="modal" title="Share this picture">
	<form action="">
	<fieldset>
		<label for="url">URL of the image</label>
		<input type="text" name="url" id="url" class="text ui-widget-content ui-corner-all" onfocus="this.select()" />
	</fieldset>
	</form>

</div>

            </article>

            <!-- <article>

                 <h3></h3>

             <p>

            </article>

            -->

        </section>

        <footer>

        <nav>

                 <a href='Home.html'>Home</a>

                  <a href='About_us.php'>About us</a>

                 <a href="Service.html">Service</a>

                  <a href="Sales.html">Sales</a>

                <a href="Contact_US.html">Contact Us</a>

            </nav>
             <figure class="firefox">

            	<a href="http://www.mozilla.org/en-US/firefox/fx/"><img src="../images/Mozilla_Firefox_3.5_logo_256.png" width="38" height="61" alt="Works best on Firefox">

            	</a>

       	  </figure>


            <figure class="facebook">

            	<a href="http://www.facebook.com/pages/Pro-Tech-Truck-RV/323548707708254"><img src="../images/facebook-logo.png" width="38" height="61" alt="Join us on Facebook!">

            	</a>

       	  </figure>

            <figure class="html5">

				<a href="http://www.w3.org/html/logo/">

				<img src="http://www.w3.org/html/logo/badge/html5-badge-v-solo.png" width="38" height="61" alt="HTML5 Powered" title="HTML5 Powered">

				</a>           

			</figure>

        </footer>

    </body>

</html>


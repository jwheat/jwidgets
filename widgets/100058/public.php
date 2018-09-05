<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Pieces of Our Past - The Bridge</title>
		<script type="text/javascript" src="includes/jquery-1.5.min.js"></script>
                <style>
               /*  this is hiding all the feature images until the mouseover  */
.feature_detail_container {	display: none;}
.feature_detail_container .feature_detail { width: 300px; border: 1px solid #ccc; }

/* holds the entire map and it's absolute positioned components */
.map_container {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFF;
	background-image: url(http://www.messiah.edu/images/Pieces_of_Our_Past_2.jpg);
	height: 700px;
	width: 500px;
	margin-top: 0px;
	background-repeat: no-repeat;
	background-position: 0px 0px;
	position: relative;
}

/*  clear for the feature image / text */
.map_container .clear_both {
	clear: both;
}

/* all the leaf mouseover images */
.map_container a.dot {
	display: block;
	height: 90px;
	width: 90px;
	background-image: url(http://www.messiah.edu/images/new_dots.png);
	background-repeat: no-repeat;
	background-position: 0px 0px;
	cursor: pointer;
	position: absolute;
}


/*  this holds all the elements that pop up when mouseover occurs <we are only using the photo element> */
.map_container .detail_container {
	position: absolute;
	height: 303px;
	width: 877px;
	left: 40px;
	top: 404px;
}

.submenu_detail { 
	width: 300px; 
	border: 1px solid #ccc;
	background-color:#fff;
	display:none;
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border-radius: 8px;
	opacity:0.9;
	filter:alpha(opacity=90); /* For IE8 and earlier */
	padding: 10px;
	font-family: Verdana, Geneva, sans-serif;
	font-size:12px;
	position: relative;
}

/* cancel button */
.cancel {
	position: absolute;
	top: 10px;
	right: 10px;
	cursor: pointer;
}
</style></head>
	<body>

		
		<div class="map_container">
	       
   		<!-- Dots --> <!-- the numbers correspond to the numbers in the print version design -->
        <!-- 9--><a style="top:-15px; left: 208px;" class="dot" building="timecapsule"></a>
        <!-- 10 --><a style="top: 91px; left: 300px;" class="dot" building="telescope"></a>
        <!-- 11 --><a style="top: 275px; left: 305px;" class="dot" building="solarteamhat"></a>
	<!-- 12 --><a style="top: 316px; left: 395px;" class="dot" building="beanie"></a> 
	<!-- 13 --><a style="top: 460px; left: 374px;" class="dot" building="scarf"></a>
	<!-- 14 --><a style="top: 575px; left: 344px;" class="dot" building="currency"></a>
	<!-- 15--><a style="top: 524px; left: 210px;;" class="dot" building="scroll"></a> 
	<!-- 16--> <a style="top: 424px; left: 230px;" class="dot" building="license"></a>
        <!-- 17 --> <a style="top: 190px; left: 2px;" class="dot" building="blueprint"></a>


       


 	<!-- Feature details-->         

    
</div> <!-- end map_container -->


<!-- SubMenu detail -->

<!---------------------------- Time capsule ------------------------->

<div class="submenu_detail" id="timecapsule" style="position:relative;left: 140px; top: -600px;">
			<div class='hover_text'><strong>Time capsule</strong></div>
  <p>At the Centennial Celebration Homecoming in 2009, students gathered artifacts for this time capsule. The capsule is scheduled to be opened at Homecoming 2034.</p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
</div> 


 			 <!---------------------------- telescope ------------------------->
  
<div class="submenu_detail" id="telescope" style="position:relative;left: 140px; top: -500px;">
			<div class='hover_text'><strong>Telescope</strong></div>
  <p>This telescope was owned by S.R. Smith, the first president of Messiah College. He donated it, along with test tubes and a microscope, to the institution during his time here. Those supplies enabled the College to begin to offer science as a course of study. The telescope is currently on loan to the Oakes Museum of Natural History. </p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
</div> 
 		
        
        <!---------------------------- solar team hat ------------------------->

<div class="submenu_detail" id="solarteamhat" style="position:relative;left: 40px; top: -400px;">
			<div class='hover_text'><strong>Solar team hat</strong></div>
          <p>This cap is just one of the many artifacts given to the archives from Messiah’s Genesis Solar Race Car team. In 1995, Messiah’s engineering department sponsored an entry in Sunrayce, a national intercollegiate race of solar-powered cars. The College was one of 65 teams that registered for the race, making it (at the time) the largest and most competitive solar car race ever. The team went on to also race in the ’97, ’99 and ’01 races. The ’97 solar car shell is housed in the basement of Frey Hall. </p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
</div>

    <!---------------------------- Beanie  ------------------------->
            
           <div class="submenu_detail" id="beanie" style="position:relative;left: 140px; top: -550px;">
			<div class='hover_text'><strong>Beanie</strong></div>
            <p>Here is a patch from 1938 that members of Messiah College’s Penn Quartet would wear. That year, the men’s singing group was comprised of Hartman Landis, Earl Musser, Clair Hoffman and David Hoover. Accompanying the patch is a photo of the group.</p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
</div>

       
    <!---------------------------- Dresser scarf   ------------------------->
            
          <div class="submenu_detail" id="scarf" style="position:relative;left: 140px; top: -400px;">
			<div class='hover_text'><strong>Dresser scarf </strong></div>
             <p>This dresser scarf was made by Lois (Keefer) McCulloh. She asked fellow 1932 classmates to sign the scarf, and then she hand-embroidered over the ink. </p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
          </div> 
       
       
        <!---------------------------- Currency ------------------------->
        
          <div class="submenu_detail" id="currency" style="position:relative;left: 140px; top: -350px;">
			<div class='hover_text'><strong>Currency</strong></div>
            <p>President S.R. Smith and some of his associates founded a one-teller bank in Grantham in 1910 to handle the business generated by his noodle factory. The Grantham National Bank had its own currency printed by the government in Washington, D.C. The money would arrive in large sheets that the cashier would cut out into individual bills before use.  </p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
          </div> 


        <!---------------------------- Chinese scroll  ------------------------->
        
          <div class="submenu_detail" id="scroll" style="position:relative;left: 140px; top: -600px;">
			<div class='hover_text'><strong>Chinese scroll</strong></div>
            <p>College founder S.R. Smith started a noodle and macaroni manufacturing plant in Harrisburg, Pa., that eventually moved to Grantham. Because of new opportunities in Grantham, the Messiah Bible College also moved from Harrisburg to its current site. The noodle factory began when Smith’s wife supplemented the family’s income by making noodles and delivering them to neighbors. She did this without her husband’s knowledge until he came home one day and found her asleep beside a batch of noodles. He left his own pursuits and joined his wife in the kitchen. The enterprise quickly became a success and moved from her kitchen to a small factory on Cameron Street. After moving to Grantham, the Smith Company continued to expand. After Smith’s death in 1916, however, business matters were in a state of disarray, and the factory closed its doors in 1922. </p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
          </div> 


			  <!---------------------------- occupational license -------------------------> 
              
<div class="submenu_detail" id="license" style="position:relative;left: 140px; top: -500px;">
			<div class='hover_text'><strong>Occupational license</strong></div>
             <p>Did you know Messiah used to have cheerleaders? This sweater was worn by Donna (Niesley) Bert during her time at Messiah from 1965-1967. The cheerleaders pictured on page 21 used to cheer for basketball games. </p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
</div> 
         

			  <!---------------------------- Campus blueprint -------------------------> 
              
<div class="submenu_detail" id="blueprint" style="position:relative;left: 100px; top: -500px;">
			<div class='hover_text'><strong>Campus blueprint</strong></div>
             <p>Here is a blueprint of the Messiah College grounds and buildings from May 1938.</p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
</div> 
		
	</body>
</html>
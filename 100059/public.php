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
	background-image: url(http://www.messiah.edu/images/Pieces_of_Our_Past.jpg);
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
        <!-- 1 --><a style="top: 2px; left: 108px;" class="dot" building="soccerball"></a>
        <!-- 2 --><a style="top: 91px; left: 300px;" class="dot" building="artifacts"></a>
        <!-- 3 --><a style="top: 236px; left: 329px;" class="dot" building="noodle"></a>
		<!-- 6 --><a style="top: 432px; left: -4px;" class="dot" building="glass"></a>
		<!-- 7 --><a style="top: 298px; left: 74px;" class="dot" building="patch"></a>
		<!-- 8 --><a style="top: 225px; left: -4px;" class="dot" building="drawings"></a>
		<!-- 4 --><a style="top: 386px; left: 320px;" class="dot" building="clarion"></a>
		<!-- 5 --> <a style="top: 554px; left: 210px;" class="dot" building="sweater"></a>

 	<!-- Feature details-->         
	<!-- <div class="detail_container">

        
       <div class="feature_detail">
        <h3>Choose a building: Click on the leaf for a list of completed projects</h3>
        	<p>Environmental stewardship isn't just a trend at Messiah College. It's a way of life.</p> 

      </div> 
        
    </div>  -->
    
</div> <!-- end map_container -->


<!-- SubMenu detail -->

<!---------------------------- Soccer ball ------------------------->
            
          <div class="submenu_detail" id="soccerball" style="position:relative;left: 140px; top: -600px;">
			<div class='hover_text'><strong>Soccer ball</strong></div>
	<p>Before Messiah College joined the National Collegiate Athletic Association (NCAA), it was a member of the National Christian College Athletic Association (NCCAA). This soccer ball is from a men’s NCCAA Championship won in 1978.</p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
          </div> 


 			 <!---------------------------- Artifacts ------------------------->
  
<div class="submenu_detail" id="artifacts" style="position:relative;left: 100px; top: -500px;">
			<div class='hover_text'><strong>School spirit artifacts</strong></div>
  <p>A pin from 1948 Messiah Bible College and pennants from 1918, 1920 and 1946 represent various commemorative gear fashioned throughout the college’s history. </p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
</div> 
 		
        
        <!---------------------------- Broken glass ------------------------->

<div class="submenu_detail" id="glass" style="position:relative;left: 160px; top: -400px;">
			<div class='hover_text'><strong>Broken glass</strong></div>
          <p>These glass shards come from a dramatic climax in a dedication sermon preached by J.R. Zook on Jan. 6, 1912. During the dedication of Old Main, the College’s first building, Zook proclaimed against the entrance of certain evils into the school. As Zook proclaimed each evil (ranging from materialism to “murderous and gambling ball games,” among others), he held up a slip of paper and put each into a glass tumbler. After Zook received a resounding “yes” from the audience when he asked if they should “denounce and repel” such evils, he threw the tumbler to the floor and crushed it with his foot as a symbolic gesture.  </p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
</div>

    <!---------------------------- Penn Quartet patch  ------------------------->
            
           <div class="submenu_detail" id="patch" style="position:relative;left: 160px; top: -570px;">
			<div class='hover_text'><strong>Penn Quartet patch </strong></div>
            <p>Here is a patch from 1938 that members of Messiah College’s Penn Quartet would wear. That year, the men’s singing group was comprised of Hartman Landis, Earl Musser, Clair Hoffman and David Hoover. Accompanying the patch is a photo of the group.</p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
</div>

       
    <!---------------------------- S.R. Smith drawings  ------------------------->
            
          <div class="submenu_detail" id="drawings" style="position:relative;left: 140px; top: -600px;">
			<div class='hover_text'><strong>S.R. Smith drawings </strong></div>
             <p>President S.R. Smith became known for his talented penmanship and was asked to give public demonstrations, to write names of families in Bibles and to make greeting cards. Here are some examples of his work, including name cards. In his journal (initialed SRS on p. 20), he kept lists of some of the people he did Christmas cards for. </p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
          </div> 
       
       
        <!---------------------------- The Clarion ------------------------->
        
          <div class="submenu_detail" id="clarion" style="position:relative;left: 140px; top: -400px;">
			<div class='hover_text'><strong>The Clarion</strong></div>
            <p>A copy of the first ever Clarion Yearbook, printed in 1924.</p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
          </div> 


        <!---------------------------- Noodle advertisement  ------------------------->
        
          <div class="submenu_detail" id="noodle" style="position:relative;left: 14px; top: -600px;">
			<div class='hover_text'><strong>Noodle advertisement</strong></div>
            <p>College founder S.R. Smith started a noodle and macaroni manufacturing plant in Harrisburg, Pa., that eventually moved to Grantham. Because of new opportunities in Grantham, the Messiah Bible College also moved from Harrisburg to its current site. The noodle factory began when Smith’s wife supplemented the family’s income by making noodles and delivering them to neighbors. She did this without her husband’s knowledge until he came home one day and found her asleep beside a batch of noodles. He left his own pursuits and joined his wife in the kitchen. The enterprise quickly became a success and moved from her kitchen to a small factory on Cameron Street. After moving to Grantham, the Smith Company continued to expand. After Smith’s death in 1916, however, business matters were in a state of disarray, and the factory closed its doors in 1922. </p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
          </div> 


			  <!---------------------------- Cheerleader sweater -------------------------> 
              
<div class="submenu_detail" id="sweater" style="position:relative;left: 140px; top: -300px;";">
			<div class='hover_text'><strong>Cheerleader sweater</strong></div>
             <p>Did you know Messiah used to have cheerleaders? This sweater was worn by Donna (Niesley) Bert during her time at Messiah from 1965-1967. The cheerleaders pictured on page 21 used to cheer for basketball games. </p>
             <img class="cancel" src="http://www.messiah.edu/images/cancel.png" />
</div> 
         
		
	</body>
</html>
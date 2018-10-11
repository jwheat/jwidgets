<a name="church"></a>

<!--- Find your church --->
   
  <?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '1';
    $folder = '/site/custom_scripts/styles/';
  }
?>
 
<div class="faith-and-service" id="find-your-church">
        <div class="wrapper content">
            <h2 class="center">Find Your Church</h2>
            <div class="flexbox">
                <div class="col-50">
                    <p>The region surrounding Messiah College offers a variety of churches and worship communities. Local churches and parishes are eager to welcome Messiah College students to worship and serve in their congregations. A number of churches even provide transportation to and from campus on Sunday mornings.</p>
                    <p><a class="fs-button" href="https://ssb.messiah.edu/apex/f?p=2181:123">View Local Churches</a></p>
                </div>
                <div class="col-50 center">
                    <img src="<?php echo $folder; ?>img/faith-and-service/local-church.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

<a name="classroom"></a>

    <div class="faith-and-service" id="faith-in-the-classroom">
        <div class="wrapper content center">
            <h2>Faith in the Classroom</h2>
            <p>Because your college years are a significant time of learning, exploration and experience, we challenge you to apply your Christian values not only during chapel or ministry programs--but also in the classroom--in a way that strengthens your own academic and personal endeavors. Whether it's a class discussion or a service-learning opportunity that incorporates your academic knowledge into practical use serving others, faith is a key component that is integrated into all aspects of your Messiah education.</p>
        </div>
    </div>
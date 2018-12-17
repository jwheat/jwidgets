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
    <a name="dining"></a>
<!-- Dining widget -->
    <div class="student-life" id="dining">
        <div class="wrapper content center">
            <h2>Hungry?</h2>
            <p>Good food: an essential for college students. Messiah College provides a wide variety of great-tasting and nutritious foods in enjoyable environments to socialize, study and of course, eat. Our award-winning program offers fresh, tasty foods at each of our different locations. We take food very seriously here, which is why we have offer four different meal plan-approved locations. Bon Appétit!</p>
            <p><a class="sl-button" href="https://www.messiah.edu/dining">View Dining Services Website</a></p>
            <h3>Dining Facilities</h3>
            <hr>
            <div class="flexbox sl-dining">
                <div class="col-50 sl-left-col-dining">
                    <img src="<?php echo $folder; ?>img/student-life/hungry-1.jpg" alt="">
                    <div class="sl-dining-overlay">
                        <h4>Lottie Nelson</h4>
                        <p>With a wide range of fresh foods and menu options, Lottie Nelson Dining Hall, located on the second floor of Eisenhower, provides options for each meal of the day! A fruit and yogurt bar, create your own omelet station, make your own salad, made-to-order specialty sandwiches, homemade soups and other fresh and healthy menu options are available.</p>
                    </div>
                </div>
                <div class="col-50 center sl-right-col-dining">
                    <img src="<?php echo $folder; ?>img/student-life/hungry-2.jpg" alt="">
                    <div class="sl-dining-overlay">
                        <h4>The Falcon</h4>
                        <p>On the go? The Falcon is the perfect choice for you! Located on the ground floor of Eisenhower, the Falcon offers freshly made food choices. From the popular pre-chapel breakfast sandwiches, toasted flatbreads, rice bowls and more, each option is freshly made ready for you within minutes (you can even order ahead!). Operating from 7:30 a.m. to 3:30 p.m, the Falcon serves as a quick and delicious alternative for breakfast or lunch.</p>
                    </div>
                </div>
            </div>
            <div class="flexbox sl-dining">
                <div class="col-50 sl-left-col-dining">
                    <img src="<?php echo $folder; ?>img/student-life/hungry-3.jpg" alt="">
                    <div class="sl-dining-overlay">
                        <h4>Union Cafe</h4>
                        <p>In the mood to order pizza? The Union has a great variety of options such as pizzas, strombolis, salads, burgers, wraps, ice cream and more. Filled with booths and tables and cozy fireside seating, the Union is the ideal location to grab dinner and catch up with a friend after a long day of class. You can pre-order here, too! </p>
                    </div>
                </div>
                <div class="col-50 center sl-right-col-dining">
                    <img src="<?php echo $folder; ?>img/student-life/hungry-4.jpg" alt="">
                    <div class="sl-dining-overlay">
                        <h4>Cafe Diem</h4>
                        <p>Love coffee shops? Then stop by the Murray Library to pick up a good book and a fresh cup of coffee at Cafe Diem. Offering coffee, specialty drinks, pastries and additional grab n’ go items,  it’s the perfect place to stop for that pick-me-up in between classes. </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
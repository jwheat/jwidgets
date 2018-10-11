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

<!--- Faith community -->
<a name="faith"></a>
 <div class="about" id="faith-community">
        <div class="wrapper content center afc-info">
            <h2>An authentic faith community</h2>
            <p>Messiah College is an educational community profoundly committed to worshipping, loving and serving God. The College’s motto, “Christ Preeminent,” points to our community’s full, rich shared understanding of Jesus Christ and how the Christian faith is relevant to every dimension of life. At Messiah we’re committed to personal faith in Christ for the forgiveness of sin and to pursuing the exemplary nature of Christ's life as a model for our own lives. This common Christian conviction shapes every aspect of students’ experiences in the Messiah community.</p>
            <div id="fc-circle-flip">
                <div class="flexbox circle-flip">
                    <div class="col-33"><a href="https://www.messiah.edu/info/20003/faith_and_values/3844/mission_and_identity">
                        <div class="circle-container">
                            <img 
                                id="mission-image"
                                class="our-campus-image mission lazyload-img" 
                                src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/about/mission-a-identity.png"
                                alt="mission and identity image" />
                            <div class="circle-overlay"></div>
                        </div></a>
                        <h3 class="circle-blue-text">Mission and Identity</h3>
                    </div>
                    <div class="col-33"><a href="https://www.messiah.edu/info/20003/faith_and_values/5/statements_of_faith">
                        <div class="circle-container">
                            <img 
                                id="statements-of-faith"
                                class="our-campus-image statements-of-faith lazyload-img" 
                                src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/about/statements-of-faith.png"
                                alt="statements of faith image" />
                            <div class="circle-overlay"></div>
                        </div></a>
                        <h3 class="circle-blue-text">Statements of Faith</h3>
                    </div>
                    <div class="col-33"><a href="https://www.messiah.edu/info/20722/expectations/6/community_covenant">
                        <div class="circle-container">
                            <img 
                                id="community-covenant"
                                class="our-campus-image community-covenant lazyload-img" 
                                src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/about/community-covenant.png"
                                alt="community covenant image" />
                            <div class="circle-overlay"></div>
                        </div></a>
                        <h3 class="circle-blue-text">Community Covenant</h3>
                    </div>
                </div>
            </div>
        </div>  
    </div>
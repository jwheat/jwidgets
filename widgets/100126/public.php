<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '4';
    $folder = '/site/custom_scripts/styles/';
  }
?>
<a name="anew"></a>
 <div class="about" id="see-anew">
        <div class="wrapper content center about-sa-info"> 
            <h2>See anew at Messiah College</h2>
            <p class="see-anew-description">The heart of “see anew” is the concept of <b>transformation</b> and <b>reconciliation</b>. Our alumni consistently tell us that their experience at Messiah was <a href="https://www.messiah.edu/info/20254/transformed_lives">transforming</a>—that it helped them see themselves, their faith, their career, and the world in exciting new ways. They also share that a Messiah education equipped them to navigate life's <a href="https://www.messiah.edu/info/20255/what_happens_when">tensions and bring together seemingly incompatible people and ideas</a>. We believe that this is exactly what the college years should be like for students, especially a Christ-centered college experience that’s rooted in the transformation we undergo as we follow Jesus together.
</p>
            <div id="anew-circle-flip">
                <div class="flexbox circle-flip">
                    <div class="col-33">
                        <div class="circle-container">
                            <img 
                                id="discerning-spirit"
                                class="see-anew-image discerning-spirit lazyload-img" 
                                src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/about/see-anew-1.png"
                                alt="a discerning spirit image" />
                            <div class="circle-overlay discerning-spirit"></div>
                        </div>
                        <h3>Faith-intellect</h3>
                    </div>
                    <div class="col-33">
                        <div class="circle-container">
                            <img 
                                id="real-world-creativity"
                                class="see-anew-image real-world-creativity lazyload-img" 
                                src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/about/see-anew-2.png"
                                alt="real world creativity image" />
                            <div class="circle-overlay real-world-creativity"></div>
                        </div>
                        <h3>Discipline-imagination</h3>
                    </div>
                    <div class="col-33">
                        <div class="circle-container">
                            <img 
                                id="authentic-power-to-lead"
                                class="see-anew-image authentic-power-to-lead lazyload-img" 
                                src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/about/see-anew-3.png"
                                alt="authentic power to lead image" />
                            <div class="circle-overlay authentic-power-to-lead"></div>
                        </div>
                        <h3>Harmony-difference</h3>
                    </div>
                </div>
                <div class="flexbox circle-flip">
                    <div class="col-33">
                        <div class="circle-container">
                            <img 
                                id="an-ethic-of-servanthood"
                                class="see-anew-image an-ethic-of-servanthood lazyload-img" 
                                src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/about/see-anew-4.png"
                                alt="an ethic of servanthood image" />
                            <div class="circle-overlay an-ethic-of-servanthood"></div>
                        </div>
                        <h3>Wisdom-expertise</h3>
                    </div>
                    <div class="col-33">
                        <div class="circle-container">
                            <img 
                                id="passion-for-christian-community"
                                class="see-anew-image passion-for-christian-community lazyload-img" 
                                src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/about/see-anew-5.png"
                                alt="passion for christian community image" />
                            <div class="circle-overlay passion-for-christian-community"></div>
                        </div>
                        <h3>Worship-service</h3>
                    </div>
                    <div class="col-33">
                        <div class="circle-container">
                            <img 
                                id="sense-of-calling"
                                class="see-anew-image sense-of-calling lazyload-img" 
                                src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/about/see-anew-6.png"
                                alt="sense of calling image" />
                            <div class="circle-overlay sense-of-calling"></div>
                        </div>
                        <h3>Home-journey</h3>
                    </div>
                </div>
            </div>
            <div class="see-anew-btns">
                <a class="primary-button" href="https://www.messiah.edu/info/20252/our_promise">Our Promise</a>
                <a class="primary-button" href="https://www.messiah.edu/info/20253/the_messiah_metaphor">The Messiah Metaphor</a>
            </div>
        </div>

        <!-- Faith Intellect -->
        <div class="asa-overlay" id="faith-intellect-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>See anew</h2>
                    <ul class="asa-tabs">
                        <li><a class="active">faith-intellect</a></li>
                        <li><a class="real-world-creativity">discipline-imagination</a></li>
                        <li><a class="authentic-power-to-lead">harmony-difference</a></li>
                        <li><a class="an-ethic-of-servanthood">wisdom-expertise</a></li>
                        <li><a class="passion-for-christian-community">worship-service</a></li>
                        <li><a class="sense-of-calling">humility-aspiration</a></li>
                    </ul>
                </div>
                <div class="asa-content" id="faith-intellect">
                    <h3 class="center"><span>Faith intellect</span></h3>
                    <div class="asa-content-wrapper flexbox">
                        <div class="col-30">
                            <img src="<?php echo $folder; ?>img/about/f-i-img.png" alt="faith intellect image">
                        </div>
                       
                        <div class="col-70">
                            <p class="content-title">The “outcome” of bringing together faith and intellect is:</p>
                            <h2>A discerning spirit</h2>
                            <p class="content-text">
                                Philosophy class: Existentialism.</br>
                                I can see the problem</br>
                                the longing for meaning</br>
                                in a world reluctant to give it.</br>
                                The professor asks:</br>
                                As Christians, what do we do with this?</br>
                                At Messiah,</br>
                                I grapple with ideas from all angles</br>
                                until I see the world’s realities</br>
                                in a much deeper way.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Discipline Imagination -->
        <div class="asa-overlay" id="discipline-imagination-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>See anew</h2>
                    <ul class="asa-tabs">
                        <li><a class="discerning-spirit">faith-intellect</a></li>
                        <li><a class="active">discipline-imagination</a></li>
                        <li><a class="authentic-power-to-lead">harmony-difference</a></li>
                        <li><a class="an-ethic-of-servanthood">wisdom-expertise</a></li>
                        <li><a class="passion-for-christian-community">worship-service</a></li>
                        <li><a class="sense-of-calling">humility-aspiration</a></li>
                    </ul>
                </div>
                <div class="asa-content" id="discipline-imagination">
                    <h3 class="center"><span>Discipline imagination</span></h3>
                   
                    <div class="asa-content-wrapper flexbox">
                        <div class="col-30">
                            <img src="<?php echo $folder; ?>img/about/discipline-imagination.png" alt="Discipline imagination image">
                        </div>
                       
                        <div class="col-70">
                            <p class="content-title">The "outcome" of bringing
together discipline and imagination is:</p>
                            <h2>Real-world creativity</h2>
                            <p class="content-text">
Real problems.<br />
A real village in Africa<br />
needs a water pump.<br />

From our campus,<br />
we take it on.<br />
We brainstorm.<br />

We analyze, research, design.<br />
We fail and try again.<br />

We solve it.<br />

We don't just dream of all we'll do after we graduate from Messiah.<br />

We do it now.

                            </p>
                        </div>
                    </div>                </div>
            </div>
        </div>

        <!-- Harmony Difference -->
        <div class="asa-overlay" id="harmony-difference-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>See anew</h2>
                    <ul class="asa-tabs">
                        <li><a class="discerning-spirit">faith-intellect</a></li>
                        <li><a class="real-world-creativity">discipline-imagination</a></li>
                        <li><a class="active">harmony-difference</a></li>
                        <li><a class="an-ethic-of-servanthood">wisdom-expertise</a></li>
                        <li><a class="passion-for-christian-community">worship-service</a></li>
                        <li><a class="sense-of-calling">humility-aspiration</a></li>
                    </ul>
                </div>
                <div class="asa-content" id="harmony-difference">
                    <h3 class="center"><span>Harmony difference</span></h3>

                    <div class="asa-content-wrapper flexbox">
                        <div class="col-30">
                            <img src="<?php echo $folder; ?>img/about/harmony.png" alt="Harmony Difference image">
                        </div>
                       
                        <div class="col-70">
                            <p class="content-title">The "outcome" of bringing together harmony and difference is: </p>
                            <h2>A passion for Christian community</h2>
                            <p class="content-text">

Before I came to Messiah,<br />
I thought I had to agree<br />
before I could listen.<br />

But our conversations here<br />
are full of different perspectives.<br />

So when someone has something to say,<br />
I listen.<br />

Maybe I will agree with her,<br />
but even if I don't, I respond thought-<br />
fully, realizing she cares as deeply about her faith<br />
as I do about mine.<br />

At Messiah, our core<br />
Christian convictions are the same.

                            </p>
                        </div>
                    </div>                </div>
            </div>
        </div>

        <!-- Wisdom Expertise -->
        <div class="asa-overlay" id="wisdom-expertise-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>See anew</h2>
                    <ul class="asa-tabs">
                        <li><a class="discerning-spirit">faith-intellect</a></li>
                        <li><a class="real-world-creativity">discipline-imagination</a></li>
                        <li><a class="authentic-power-to-lead">harmony-difference</a></li>
                        <li><a class="active">wisdom-expertise</a></li>
                        <li><a class="passion-for-christian-community">worship-service</a></li>
                        <li><a class="sense-of-calling">humility-aspiration</a></li>
                    </ul>
                </div>
                <div class="asa-content" id="wisdom-expertise">
                    <h3 class="center"><span>Wisdom expertise</span></h3>

                    <div class="asa-content-wrapper flexbox">
                        <div class="col-30">
                            <img src="<?php echo $folder; ?>img/about/wisdom.png" alt="Wisdom Expertise image">
                        </div>
                       
                        <div class="col-70">
                            <p class="content-title">The “outcome” of bringing together wisdom and expertise is:</p>
                            <h2>Authentic power to lead</h2>
                            <p class="content-text">
Biology students<br />
explore art history;<br />
nursing students<br />
study practical theology.<br />

Because Messiah professors<br />
teach us how,<br />
rooted in the context of why,<br />
we learn to make<br />
deeply considered decisions.<br />

In other words,<br />
we learn to be leaders.
 </p>
                        </div>
                    </div>                </div>
            </div>
        </div>

        <!-- Worship Service -->
        <div class="asa-overlay" id="worship-service-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>See anew</h2>
                    <ul class="asa-tabs">
                        <li><a class="discerning-spirit">faith-intellect</a></li>
                        <li><a class="real-world-creativity">discipline-imagination</a></li>
                        <li><a class="authentic-power-to-lead">harmony-difference</a></li>
                        <li><a class="an-ethic-of-servanthood">wisdom-expertise</a></li>
                        <li><a class="active">worship-service</a></li>
                        <li><a class="sense-of-calling">humility-aspiration</a></li>
                    </ul>
                </div>
                <div class="asa-content" id="worship-service">
                    <h3 class="center"><span>Worship service</span></h3>

                    <div class="asa-content-wrapper flexbox">
                        <div class="col-30">
                            <img src="<?php echo $folder; ?>img/about/worship.png" alt="Worship service image">
                        </div>
                       
                        <div class="col-70">
                            <p class="content-title">The “outcome” of bringing together service and worship is:</p>
                            <h2>A sense of calling</h2>
                            <p class="content-text">
We gather to pray and sing,<br />
to stand before God<br />
and ask: How shall we live?<br />

In service learning,<br />
we find an answer.<br />

We discover that our lives<br />
are not theoretical<br />
that our gifts have a vital place,<br />
that our actions can be<br />
an influence for good.<br />
                            </p>
                        </div>
                    </div>                </div>
            </div>
        </div>

        <!-- Humility Aspiration -->
        <div class="asa-overlay" id="humility-aspiration-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>See anew</h2>
                    <ul class="asa-tabs">
                        <li><a class="discerning-spirit">faith-intellect</a></li>
                        <li><a class="real-world-creativity">discipline-imagination</a></li>
                        <li><a class="authentic-power-to-lead">harmony-difference</a></li>
                        <li><a class="an-ethic-of-servanthood">wisdom-expertise</a></li>
                        <li><a class="passion-for-christian-community">worship-service</a></li>
                        <li><a class="active">humility-aspiration</a></li>
                    </ul>
                </div>
                <div class="asa-content" id="humility-aspiration">
                    <h3 class="center"><span>Humility aspiration</span></h3>

                    <div class="asa-content-wrapper flexbox">
                        <div class="col-30">
                            <img src="<?php echo $folder; ?>img/about/humililty.png" alt="Humility aspiration image">
                        </div>
                       
                        <div class="col-70">
                            <p class="content-title">The “outcome” of bringing together faith and intellect is:</p>
                            <h2>An ethic of servanthood</h2>
                            <p class="content-text">
At Messiah, we ask:<br />
Why am I doing what I'm doing?<br />

The answer<br />
gets us up in the morning<br />
and keeps us going late at night.<br />

Our achievements<br />
are an offering to God.<br />

We hone our gifts,<br />
because the more capable we become,<br />
the more powerfully we serve.
  </p>
                        </div>
                    </div>                </div>
            </div>
        </div>

    </div>
body, html {
    margin: 0;
    padding: 0;
}

.move-btn {display: none !important; }

.carousel-2 {
    height: 100vh;
    max-height: 1000px;
    position: relative;
    overflow: hidden;
}

.carousel-2.car2-undergrad {
    /* background: url(img/homepage-carousel/undergrad-bg.png) 0 0 no-repeat scroll; */
    background-repeat: no-repeat;
    background-position: 0 0;
    background-attachment: scroll;
    background-size: cover;
}

.carousel-2.car2-grad {
    /* background: url(img/homepage-carousel/grad-bg.png) 0 0 no-repeat scroll; */
    background-repeat: no-repeat;
    background-position: 0 0;
    background-attachment: scroll;
    background-size: cover;
}

.carousel-2.car2-academics {
    /* background: url(img/homepage-carousel/academics-bg.jpg) 0 0 no-repeat scroll; */
    background-repeat: no-repeat;
    background-position: 80% 0;
    background-attachment: scroll;
    background-size: cover;
}

.carousel-2.car2-abroad {
    /* background: url(img/homepage-carousel/abroad-bg.png) 0 0 no-repeat scroll; */
    background-repeat: no-repeat;
    background-position: 0 100%;
    background-attachment: scroll;
    background-size: cover;
}

.carousel-2.car2-careers {
    /* background: url(img/homepage-carousel/careers-bg.png) 0 0 no-repeat scroll; */
    background-repeat: no-repeat;
    background-position: 30% 0;
    background-attachment: scroll;
    background-size: cover;
}

.car2-content {
    color: #fff;
    display: -webkit-flex;
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    height: calc(100% - 62px);
    position: relative;
}

.carousel-2.car2-grad .car2-content > div,
.carousel-2.car2-undergrad .car2-content > div {
    width: 50%;
}

.car2-content > div {
    box-sizing: border-box;
}

/*===== CONTENT =====*/

.car2-content-info {
    padding: 0 20px 0 100px;
    position: relative;
    top: 81px;
    opacity: 1;
    /*
    transition: .5s;
    transition-delay: 1s;
    */
}

.car2-content-info h2,
.car2-content-info p,
.car2-content-info a {
    color: #fff;
}

.car2-content-info h2 {
    font-family: 'priori-sans-bold', sans-serif;
    font-size: 64px;
    font-weight: 700;
    line-height: 1em;
    text-transform: uppercase;
    margin: 0;
}

.car2-content-info p {
    font-family: 'prior-sans-reg', sans-serif;
    font-size: 28px;
    font-weight: 300;
    line-height: 24px;
    margin: .5em 0 1em 0;
}

.car2-content-info .car2-button {
    background-color: #7CADCF;
    border-radius: 5px;
    display: inline-block;
    padding: 15px 30px;
    font-family: 'Aptifer Sans LT W01', sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 17px;
    text-transform: uppercase;
    text-decoration: none;
}

.car2-content-info .car2-button:nth-of-type(2) {
    margin-left: 15px;
}

/*===== SIDEBAR =====*/

.car2-sidebar {
    position: relative;
    top: 81px;
}

.car2-sidebar::after {
    content: "";
    display: block;
    clear: both;
}

.car2-sidebar > ul {
    list-style: none;
    float: right;
    width: 238px;
}

.car2-sidebar > ul li {
    background-color: #273d5e;
    height: 50px;
    line-height: 50px;
    border-bottom: 1px solid rgba(255,255,255,.95);
}

.car2-sidebar > ul li:first-child {
    background-color: rgba(255,255,255,.95);
    line-height: 20px;
    padding: 5px 18px;
    box-sizing: border-box;
    color: #273d5e;
    font-family: 'Aptifer Sans LT W01', sans-serif;
    font-weight: 500;
    font-size: 14px;
}

.car2-sidebar > ul li:first-child span {
    text-transform: uppercase;
    display: block;
    font-size: 18px;
}

.car2-sidebar > ul li:last-child {
    background-color: #403F3F;
    border-bottom: none;
}

.car2-sidebar > ul li:last-child span {
    position: relative;
    top: 6px;
}

.car2-sidebar > ul li:last-child span.car2-switch-to {
    display: block;
    font-size: .8em;
    line-height: 1em;
    position: absolute;
    top: -12px;
    left: 0;
}

.car2-sidebar > ul li a {
    color: #fff;
    font-family: 'Aptifer Sans LT W01', sans-serif;
    font-weight: 500;
    font-size: 14px;
    text-decoration: none;
    text-transform: uppercase;
    display: block;
    width: calc(100% - 36px);
    height: 100%;
    padding: 0 18px;
}

.car2-sidebar > ul li a i.fa {
    float: right;
    font-size: 24px;
    line-height: 50px;
    vertical-align: middle;
    width: 24px;
    text-align: center;
    margin-left: 15px;
}

/*===== SLIDEOUT =====*/

.car2-slideout {
    background-color: rgba(50, 69, 81, 0.85);
    width: 466px !important;
    height: auto;
    position: absolute;
    bottom: 120px;
    right: 0;
    transition: .5s;
    box-shadow: 0 0 10000px 10000px rgba(36,36,36,.75);
}

.car2-slideout.closed {
    background-color: rgba(66, 110, 138, 0.75);
    right: -391px;
    transition: .5s;
    transition-delay: 1.2s;
    box-shadow: none;
}

.car2-slideout.reopen {
    transition-delay: 1.2s;
}

.car2-slideout.no-delay {
    transition-delay: 0s;
}

.carousel-2.inactive .car2-slideout.closed {
    right: -466px;
    transition: .5s;
}

.car2-slideout .car2-slideout-header {
    background-color: #7CADCF;
    height: 78px;
    display: -webkit-flex;
    display: flex;
    align-items: center;
}

.car2-slideout .car2-slideout-header p {
    font-family: 'Aptifer Sans LT W01', sans-serif;
    font-weight: 500;
    font-size: 18px;
    margin: 0;
    padding: 0 25px 0 75px;
}

.car2-slideout .car2-slideout-header .fa {
    font-size: 36px;
    position: absolute;
    left: 25px;
    top: 20px;
    cursor: pointer;
}

.car2-slideout-content {
    padding: 25px 25px 25px 75px;
    position: relative;
}

.car2-slideout-content,
.car2-slideout-content p,
.car2-slideout-content a {
    color: #fff;
    font-family: 'Aptifer Sans LT W01', sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 22px;
    text-decoration: none;
}

.car2-slideout-content a:hover {
  color: #6697B8;
}

.car2-slideout-content::after,
.car2-links ul::after {
    content: "";
    display: block;
    clear: both;
}

/*===== ALIGNMENT =====*/

.car2-slideout .car2-read-v {
    position: absolute;
    top: 75px;
    left: -45px;
    transform: rotate(-90deg);
    font-size: 1.5em;
}

.align-text-left .car2-content .car2-content-info {
    width: 100%;
    text-align: left;
    padding: 0 0 0 65px;
}

.align-text-right .car2-content .car2-content-info {
    width: 100%;
    text-align: right;
    padding: 0 65px 0 0;
}

.align-text-center .car2-content .car2-content-info {
    width: 100%;
    text-align: center;
    padding: 0;
}

.align-text-right .car2-slideout {
    left: 0;
    /* transition: .5s; */
}

.align-text-right .car2-slideout.closed {
    left: -391px;
    /* transition: .5s; */
}

.carousel-2.align-text-right.inactive .car2-slideout.closed {
    left: -466px;
    transition: .5s;
}

.align-text-right .car2-slideout .car2-slideout-header .fa {
    left: initial;
    right: 25px;
}

.align-text-right .car2-slideout-content {
    padding: 25px 75px 25px 25px;
}

.align-text-right .car2-slideout .car2-slideout-header p {
    padding: 0 75px 0 25px;
}

.align-text-right .car2-slideout .car2-read-v {
    right: -45px;
    left: initial;
}

/*===== LINKS =====*/

.car2-links {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
}

.car2-links ul {
    margin: 0;
    padding: 0;
}

.car2-links ul li {
    background: -moz-linear-gradient(top, rgba(36,36,36,0) 0%, rgba(36,36,36,0.75) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgba(36,36,36,0) 0%,rgba(36,36,36,0.75) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgba(36,36,36,0) 0%,rgba(36,36,36,0.75) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00242424', endColorstr='#bf242424',GradientType=0 ); /* IE6-9 */
    display: block;
    width: calc(25% - 25px);
    float: left;
    text-align: center;
    height: 82px;
    line-height: 82px;
    box-sizing: border-box;
    cursor: pointer;
}

.car2-links ul li.active {
    cursor: default;
}

.car2-links ul li.active a {
    color: #75adcf;
    border-bottom: 8px solid #75adcf;
    padding-bottom: 5px;
}

.car2-links ul li a {
    color: #ffffff;
    font-family: 'Aptifer Sans LT W01', sans-serif;
    font-size: 16px;
    font-weight: 500;
    text-transform: uppercase;
    text-decoration: none;
}

.car2-links .car2-explore-button {
    width: 100px;
    background: #fff;
    line-height: 18px;
    padding-top: 12px;
}

.car2-links .car2-explore-button a {
    color: #273d5e;
}

.car2-links .car2-explore-button a img {
    margin-top: 10px;
}

#show-undergrad,
#show-grad {
  cursor: pointer;
}

/*===== ANIMATIONS =====*/

.carousel-2-wrapper {
    background-color: #242424;
    height: 100vh;
    max-height: 1000px;
}

.carousel-2 {
    position: absolute;
    visibility: visible;
    opacity: 1;
    left: 0;
    z-index: 3;
    width: 100%;
    transition: opacity 1.5s;
}

.carousel-2.inactive {
    visibility: hidden;
    opacity: 0;
    left: 100%;
    transition: opacity 1.5s;
}

.carousel-2.align-text-left .car2-content-info,
.carousel-2.align-text-right .car2-content-info,
.carousel-2.align-text-center .car2-content-info {
    left: 0;
    opacity: 1;
}

.carousel-2.align-text-left.inactive .car2-content-info {
    left: -25px;
    opacity: 0;
}

.carousel-2.align-text-right.inactive .car2-content-info {
    left: 25px;
    opacity: 0;
}

.carousel-2.align-text-center.inactive .car2-content-info {
    left: 25px;
    opacity: 0;
}

.carousel-2.align-text-left .car2-content-info,
.carousel-2.align-text-right .car2-content-info,
.carousel-2.align-text-center .car2-content-info,
.carousel-2.align-text-left.inactive .car2-content-info,
.carousel-2.align-text-right.inactive .car2-content-info,
.carousel-2.align-text-center.inactive .car2-content-info {
    transition: 1s;
    transition-delay: 0.6s;
}

.carousel-2 .car2-sidebar > ul {
    position: relative;
    right: 0;
    transition: 1s;
    transition-delay: 1.2s;
}

.carousel-2.inactive .car2-sidebar > ul {
    right: -250px;
    transition: 2s;
}

.car2-slideout .car2-read-v,
.car2-slideout .car2-slideout-header .fa.fa-info-circle,
.car2-slideout.closed .car2-slideout-header .fa.fa-times {
    opacity: 0;
    transition: .25s;
}

.car2-slideout.closed .car2-read-v,
.car2-slideout.closed .car2-slideout-header .fa.fa-info-circle,
.car2-slideout .car2-slideout-header .fa.fa-times {
    opacity: 1;
    transition: .25s;
}

@-moz-keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
      -moz-transform: translateY(0);
      transform: translateY(0);
    }
    40% {
      -moz-transform: translateY(-10px);
      transform: translateY(-10px);
    }
    60% {
      -moz-transform: translateY(-5px);
      transform: translateY(-5px);
    }
}

  @-webkit-keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
      -webkit-transform: translateY(0);
      transform: translateY(0);
    }
    40% {
      -webkit-transform: translateY(-10px);
      transform: translateY(-10px);
    }
    60% {
      -webkit-transform: translateY(-5px);
      transform: translateY(-5px);
    }
}

  @keyframes bounce {
    0%, 4%, 10%, 16%, 20% {
      -moz-transform: translateY(0);
      -ms-transform: translateY(0);
      -webkit-transform: translateY(0);
      transform: translateY(0);
    }
    8% {
      -moz-transform: translateY(-8px);
      -ms-transform: translateY(-8px);
      -webkit-transform: translateY(-8px);
      transform: translateY(-8px);
    }
    12% {
      -moz-transform: translateY(-4px);
      -ms-transform: translateY(-4px);
      -webkit-transform: translateY(-4px);
      transform: translateY(-4px);
    }
}

.car2-links .car2-explore-button a img {
    -moz-animation: bounce 6s infinite;
    -webkit-animation: bounce 6s infinite;
    animation: bounce 6s infinite;
}

@-moz-keyframes fadeinleft {
    from {
      opacity: 0;
      left: -50px;
    }
    to {
      opacity: 1;
      left: 0;
    }
}

@-webkit-keyframes fadeinleft {
    from {
      opacity: 0;
      left: -50px;
    }
    to {
      opacity: 1;
      left: 0;
    }
}

@keyframes fadeinleft {
    from {
      opacity: 0;
      left: -50px;
    }
    to {
      opacity: 1;
      left: 0;
    }
}

@-moz-keyframes fadeinright {
    from {
      opacity: 0;
      right: -250px;
    }
    to {
      opacity: 1;
      right: 0;
    }
}

@-webkit-keyframes fadeinright {
    from {
      opacity: 0;
      right: -250px;
    }
    to {
      opacity: 1;
      right: 0;
    }
}

@keyframes fadeinright {
    from {
      opacity: 0;
      right: -250px;
    }
    to {
      opacity: 1;
      right: 0;
    }
}

.car2-content .car2-content-info {
    opacity: 1;
    -moz-animation: fadeinleft 1s ease-in 1;
    -webkit-animation: fadeinleft 1s ease-in 1;
    animation: fadeinleft 1s ease-in 1;
}

.car2-content .car2-sidebar {
    opacity: 1;
    -moz-animation: fadeinright 1s ease-in 1;
    -webkit-animation: fadeinright 1s ease-in 1;
    animation: fadeinright 1s ease-in 1;
}

/*===== MOBILE =====*/

@media (max-width:1024px) {

    .carousel-2-wrapper,
    .carousel-2 {
        height: calc(100vh - 135px);
    }

    .car2-sidebar > ul {
        width: 58px;
    }

    .car2-sidebar > ul li:first-child {
        display: none;
    }

    .hide-on-mobile {
        display: none !important;
    }

    .carousel-2.car2-grad .car2-content .car2-content-info,
    .carousel-2.car2-undergrad .car2-content .car2-content-info {
        width: 80%;
    }

    .carousel-2.car2-grad .car2-content .car2-sidebar,
    .carousel-2.car2-undergrad .car2-content .car2-sidebar {
        width: 20%;
    }

    .car2-links .car2-explore-button {
        float: none;
        margin-left: auto;
        margin-right: auto;
    }

}

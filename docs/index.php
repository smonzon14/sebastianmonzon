<html class="js" lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <title>Sebastian Monzon - Portfolio</title>
  <meta name="robots" content="noindex, nofollow">
  <meta name="robots" content="noindex,nofollow">

  <!-- <style>
img.wp-smiley,
img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 .07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
}
</style> -->
  <link rel="stylesheet" id="all-css-0-1" href="https://s0.wp.com/_static/??-eJydkNFOwzAMRX+I1OuYJvGA+JYktTKPuIlihyp/T0o3mAAB4sGWfO1j6V5YsvFpVpwVuJoca6BZYMk+sRGmiO3TNHiRO7jBrkyofXRYQt8UhJdxNzwMI7hKcQIXk382kVyxpYFoi/iHR2+UwBk12xW3LVU1odD03xfFKs1BfsF9umD7obsYYSLRd9F8z96kt/rvOmer6wXjRBYjcj/7Cdtidi4XFDG9M1U2eurg19Q3GXJ1oEsX2tY/jD3x43jcH3a97o/nV9WLtto=?cssminify=yes"
  type="text/css" media="all">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@xz/fonts@1/serve/cascadia-code.min.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Abril+Fatface" />
  <link href='https://fonts.googleapis.com/css?family=Titillium Web' rel='stylesheet'>
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<?php

require_once __DIR__ . '/vendor/autoload.php';
$client = new \Github\Client();
$token = "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";
if(!isset($token)){
    dd("Github token is not set");
}
$client->authenticate($token, null, Github\Client::AUTH_ACCESS_TOKEN);
//$repositories = $client->api('current_user')->repositories();
$repositories = array();
//$repositories = $client->api('user')->repositories('smonzon14');
?>

  <body class="home page-template-default page page-id-68 wp-embed-responsive customizer-styles-applied singular enable-search-modal has-post-thumbnail has-no-pagination not-showing-comments show-avatars footer-top-visible highlander-enabled highlander-light"
  data-new-gr-c-s-loaded="14.988.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.12.0/devicon.min.css">

    <div id="skill-img-column" class="" data-rellax-speed="-8" style="font-size:100px;">


      <i class="devicon-javascript-plain "></i>
      <i class="devicon-css3-plain "></i>
      <i class="devicon-html5-plain "></i>
      <i class="devicon-github-original"></i>
      <i class="devicon-python-plain "></i>
      <!-- <img src="img/skills/big3.png" width="150px"></img>
<img src="img/skills/csharp.png" width="150px"></img>
<img src="img/skills/java.png" width="150px"></img> -->
      <i class="devicon-nodejs-plain "></i>
      <i class="devicon-visualstudio-plain "></i>
      <i class="devicon-mysql-plain "></i>
      <i class="devicon-csharp-plain "></i>
      <!-- <img src="img/skills/nodejs.png" width="150px"></img>
<img src="img/skills/python.png" width="150px"></img>
<img src="img/skills/react.png" width="150px"></img>
<img src="img/skills/firebase.png" width="150px"></img> -->
      <i class="devicon-linux-plain"></i>
      <i class="devicon-atom-original "></i>
      <i class="devicon-firebase-plain "></i>
      <i class="devicon-java-plain "></i>
      <i class="devicon-react-original"></i>
      <i class="devicon-php-plain"></i>
      <i class="devicon-raspberrypi-line"></i>
      <i class="devicon-xd-plain"></i>
      <i class="devicon-illustrator-plain"></i>
      <!-- <img src="img/skills/git.png" width="150px"></img>
<img src="img/skills/php.png" width="150px"></img>
<img src="img/skills/sql.png" width="150px"></img> -->

    </div>
    <style>
      #skill-img-column i {
        text-shadow: 0px 0px 20px black;
      }
      
      @media (max-width: 700px) {
        #skill-img-column i {
          font-size: 70px
        }
      }
    </style>
    <!-- <script>
function randomizeIcons() {
    
    //var particles = ['particle1', 'particle2', 'particle3']
    //var sizes = ['big', 'medium', 'small'];
    let skills = document.getElementById("skill-img-column");
    let docHeight = (document.height !== undefined) ? document.height : document.body.offsetHeight;
    
    let numParticles = skills.children.length;
    
    for (let i = 0; i < numParticles; ++i) {
        
        console.log(skills.children);
        var bubble = skills.children[i];
        bubble.setAttribute("data-rellax-percentage", 0.5);
        let z = Math.ceil(Math.random() * -3 - 2)
        bubble.setAttribute("data-rellax-speed", z);
        bubble.style.zIndex = z;
        bubble.classList.add('rellax');
        bubble.style.left = Math.floor(Math.random() * 90) + "%";
        // Math.floor(Math.random() * docHeight / numParticles) + (2 * docHeight * (i) / numParticles) + 100
        let yPos = i * 100 / numParticles ;
        bubble.style.top = yPos + "%";
    }
    var rellax = new Rellax();
}
randomizeIcons();
</script> -->
    <style>
      .skill-img-row {
        display: flex;
        flex-direction: row;
        width: 70%;
        height: 200px;
        justify-content: space-around;
      }
    </style>
    <div id="grid" class="dot-grid" data-rellax-speed="4">
    </div>
    <div class="vertical-line vl"></div>
    <div class="vertical-line vr"></div>
    <!-- <div class="vertical-line vlm"></div>
<div class="vertical-line vrm"></div> -->
    <div class="vertical-line vm"></div>
    <script>
      window.onload = function() {
        let grid = document.getElementById("grid");
        console.log('ok');
        let delay = 50;

        setTimeout(() => {
          grid.style.marginTop = "0px";
          grid.style.opacity = 1.0;
          setTimeout(() => {
            grid.style.opacity = 0;
            setTimeout(() => {
              grid.style.opacity = 1.0;
              setTimeout(() => {
                grid.style.opacity = 0;
                setTimeout(() => {
                  grid.style.opacity = 1.0;

                }, delay);
              }, delay);
            }, delay);
          }, delay);
        }, 750);
      }
    </script>
    <style>
      .dot-grid {
        opacity: 0;
        margin-top: 200px;
        background-image: radial-gradient(#fff 1px, transparent 0)!important;
        background-size: 3em 3em;
        background-position: -4.5em -4.5em;
        position: absolute;
        top: 25%;
        left: 3em;
        width: 50%;
        height: 40%;
        transition: margin-top 0.4s;
        transition-timing-function: ease-out;
        z-index: 5;
      }
      
      .vertical-line {
        border-left: 1px dashed #fff3;
        position: fixed;
        z-index: -1;
        top: 0;
        bottom: 0;
        width: 0;
      }
      
      .vm {
        left: 50%;
      }
      
      .vl {
        left: 3em;
      }
      
      .vlm {
        left: 25%;
      }
      
      .vr {
        right: 3em;
      }
      
      .vrm {
        left: 75%;
      }
      
      @media only screen and (max-width: 400px) {
        .vm {
          display: none;
        }
      }
    </style>
    <header id="site-header" class="header-footer-group transparent-header" role="banner" style="
z-index: 100;">

      <div class="header-inner section-inner">

        <div class="header-titles-wrapper">


          <button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
            <span class="toggle-inner">
<span class="toggle-icon">
<svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg"
width="23" height="23" viewBox="0 0 23 23">
<path
d="M38.710696,48.0601792 L43,52.3494831 L41.3494831,54 L37.0601792,49.710696 C35.2632422,51.1481185 32.9839107,52.0076499 30.5038249,52.0076499 C24.7027226,52.0076499 20,47.3049272 20,41.5038249 C20,35.7027226 24.7027226,31 30.5038249,31 C36.3049272,31 41.0076499,35.7027226 41.0076499,41.5038249 C41.0076499,43.9839107 40.1481185,46.2632422 38.710696,48.0601792 Z M36.3875844,47.1716785 C37.8030221,45.7026647 38.6734666,43.7048964 38.6734666,41.5038249 C38.6734666,36.9918565 35.0157934,33.3341833 30.5038249,33.3341833 C25.9918565,33.3341833 22.3341833,36.9918565 22.3341833,41.5038249 C22.3341833,46.0157934 25.9918565,49.6734666 30.5038249,49.6734666 C32.7048964,49.6734666 34.7026647,48.8030221 36.1716785,47.3875844 C36.2023931,47.347638 36.2360451,47.3092237 36.2726343,47.2726343 C36.3092237,47.2360451 36.347638,47.2023931 36.3875844,47.1716785 Z"
transform="translate(-20 -31)"></path>
</svg> </span>
            <span class="toggle-text">Search</span>
            </span>
          </button>
          <!-- .search-toggle -->


          <div class="header-titles">

            <div class="site-title faux-heading"><a href="#">/Sebastian Monzon_</a>
            </div>
            <div class="site-description">Personal Website and Portfolio</div>
            <!-- .site-description -->
          </div>
          <!-- .header-titles -->

          <button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
            <span class="toggle-inner">
<span class="toggle-icon">
<svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg"
width="26" height="7" viewBox="0 0 26 7">
<path fill-rule="evenodd"
d="M332.5,45 C330.567003,45 329,43.4329966 329,41.5 C329,39.5670034 330.567003,38 332.5,38 C334.432997,38 336,39.5670034 336,41.5 C336,43.4329966 334.432997,45 332.5,45 Z M342,45 C340.067003,45 338.5,43.4329966 338.5,41.5 C338.5,39.5670034 340.067003,38 342,38 C343.932997,38 345.5,39.5670034 345.5,41.5 C345.5,43.4329966 343.932997,45 342,45 Z M351.5,45 C349.567003,45 348,43.4329966 348,41.5 C348,39.5670034 349.567003,38 351.5,38 C353.432997,38 355,39.5670034 355,41.5 C355,43.4329966 353.432997,45 351.5,45 Z"
transform="translate(-329 -38)"></path>
</svg> </span>
            <span class="toggle-text">Menu</span>
            </span>
          </button>
          <!-- .nav-toggle -->

        </div>
        <!-- .header-titles-wrapper -->

        <div class="header-navigation-wrapper">


          <nav class="primary-menu-wrapper" aria-label="Horizontal" role="navigation">

            <ul class="primary-menu reset-list-style">

              <li id="menu-item-90" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-68 current_page_item menu-item-90">
                <a href="#intro">/Intro</a>
              </li>
              <li>
                <div class="menu-divider"></div>
              </li>
              <li id="menu-item-75" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75"><a href="#skills">/Skills</a></li>
              <li>
                <div class="menu-divider"></div>
              </li>
              <li id="menu-item-75" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75"><a href="#projects">/Projects</a></li>
              <li>
                <div class="menu-divider"></div>
              </li>
              <li id="menu-item-73" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75"><a href="#contact">/Contact Me</a></li>
            </ul>
            <style>
              .menu-divider {
                background-color: white;
                width: 1px;
                height: 100%;
              }
            </style>

          </nav>
          <!-- .primary-menu-wrapper -->


          <!-- .header-toggles -->

        </div>
        <!-- .header-navigation-wrapper -->

      </div>
      <!-- .header-inner -->


      <!-- .menu-modal -->

    </header>
    <!-- #site-header -->


    <div class="menu-modal cover-modal header-footer-group" data-modal-target-string=".menu-modal">

      <div class="menu-modal-inner modal-inner">

        <div class="menu-wrapper section-inner">

          <div class="menu-top">

            <button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".menu-modal">
              <span class="toggle-text">Close Menu</span>
              <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                <polygon fill="" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102">
                </polygon>
              </svg>
            </button>
            <!-- .nav-toggle -->


            <nav class="mobile-menu" aria-label="Mobile" role="navigation">

              <ul class="modal-menu reset-list-style">

                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-68 current_page_item menu-item-90">
                  <div class="ancestor-wrapper"><a href="#header" aria-current="page">Home</a></div>
                  <!-- .ancestor-wrapper -->
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75">
                  <div class="ancestor-wrapper"><a href="#skills">Skills</a></div>
                  <!-- .ancestor-wrapper -->
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-73">
                  <div class="ancestor-wrapper"><a href="#projects">Projects</a>
                    <button class="toggle sub-menu-toggle fill-children-current-color" data-toggle-target=".menu-modal .menu-item-73 > .sub-menu" data-toggle-type="slidetoggle" data-toggle-duration="250" aria-expanded="false"><span class="screen-reader-text">Show sub
menu</span>
                      <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12">
                        <polygon fill="" fill-rule="evenodd" points="1319.899 365.778 1327.678 358 1329.799 360.121 1319.899 370.021 1310 360.121 1312.121 358" transform="translate(-1310 -358)"></polygon>
                      </svg>
                    </button>
                  </div>
                  <!-- .ancestor-wrapper -->
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-76">
                      <div class="ancestor-wrapper"><a href="#contact">Contact Me</a></div>
                      <!-- .ancestor-wrapper -->
                    </li>
                  </ul>
                </li>

              </ul>

            </nav>


          </div>
          <!-- .menu-top -->

          <div class="menu-bottom">


            <nav aria-label="Expanded Social links" role="navigation">
              <ul class="social-menu reset-list-style social-icons fill-children-current-color">

                <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="https://www.facebook.com/wordpress"><span class="screen-reader-text">Facebook</span><svg
class="svg-icon" aria-hidden="true" role="img" focusable="false" width="24" height="24"
viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path
d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z">
</path>
</svg></a></li>
                <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a href="https://twitter.com/wordpress"><span class="screen-reader-text">Twitter</span><svg
class="svg-icon" aria-hidden="true" role="img" focusable="false" width="24" height="24"
viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path
d="M22.23,5.924c-0.736,0.326-1.527,0.547-2.357,0.646c0.847-0.508,1.498-1.312,1.804-2.27 c-0.793,0.47-1.671,0.812-2.606,0.996C18.324,4.498,17.257,4,16.077,4c-2.266,0-4.103,1.837-4.103,4.103 c0,0.322,0.036,0.635,0.106,0.935C8.67,8.867,5.647,7.234,3.623,4.751C3.27,5.357,3.067,6.062,3.067,6.814 c0,1.424,0.724,2.679,1.825,3.415c-0.673-0.021-1.305-0.206-1.859-0.513c0,0.017,0,0.034,0,0.052c0,1.988,1.414,3.647,3.292,4.023 c-0.344,0.094-0.707,0.144-1.081,0.144c-0.264,0-0.521-0.026-0.772-0.074c0.522,1.63,2.038,2.816,3.833,2.85 c-1.404,1.1-3.174,1.756-5.096,1.756c-0.331,0-0.658-0.019-0.979-0.057c1.816,1.164,3.973,1.843,6.29,1.843 c7.547,0,11.675-6.252,11.675-11.675c0-0.178-0.004-0.355-0.012-0.531C20.985,7.47,21.68,6.747,22.23,5.924z">
</path>
</svg></a></li>
                <li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="https://www.instagram.com/explore/tags/wordcamp/"><span
class="screen-reader-text">Instagram</span><svg class="svg-icon" aria-hidden="true" role="img"
focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path
d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z">
</path>
</svg></a></li>
                <li id="menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15"><a href="mailto:wordpress@example.com"><span class="screen-reader-text">Email</span><svg class="svg-icon"
aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24"
xmlns="http://www.w3.org/2000/svg">
<path
d="M20,4H4C2.895,4,2,4.895,2,6v12c0,1.105,0.895,2,2,2h16c1.105,0,2-0.895,2-2V6C22,4.895,21.105,4,20,4z M20,8.236l-8,4.882 L4,8.236V6h16V8.236z">
</path>
</svg></a></li>

              </ul>
            </nav>
            <!-- .social-menu -->


          </div>
          <!-- .menu-bottom -->

        </div>
        <!-- .menu-wrapper -->

      </div>
      <!-- .menu-modal-inner -->


    </div>
    <!-- .menu-modal -->
    <style>
      .top-container {
        background-color: #f1f1f1;
        padding: 30px;
        text-align: center;
      }
      /* #header-social-links a {
box-shadow: 0px 0px 10px 2px var(--rose-madder);
} */
      
      .sticky {
        background-color: #000a!important;
        position: fixed!important;
        top: -50px!important;
        width: 100%;
        border-bottom: 1px solid var(--dark-jungle-green);
        backdrop-filter: blur(2px);
      }
      
      .transparent-header {
        background-color: transparent!important;
      }
      
      .content {
        padding-top: 16px;
      }
      
      .sticky + .content {
        padding-top: 90px;
      }
    </style>

    <div id="header-social-links" style="z-index:9999; background-color: transparent;">
      <nav aria-label="Social links" class="header-social-wrapper">

        <ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color" style="justify-content: center; ">

          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a target="_blank" href="https://www.facebook.com/sebastian.monzon.9678/"><span class="screen-reader-text">Facebook</span><svg
class="svg-icon" aria-hidden="true" role="img" focusable="false" width="24" height="24"
viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path
d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z">
</path>
</svg></a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a target="_blank" href="https://www.linkedin.com/in/sebastian-monz%C3%B3n-9ab695102/"><span class="screen-reader-text">Twitter</span><svg
class="svg-icon" aria-hidden="true" role="img" focusable="false" width="24" height="24"
viewBox="0 50 512 512" xmlns="http://www.w3.org/2000/svg">
<path fill="#828282" d="M150.65,100.682c0,27.992-22.508,50.683-50.273,50.683c-27.765,0-50.273-22.691-50.273-50.683
C50.104,72.691,72.612,50,100.377,50C128.143,50,150.65,72.691,150.65,100.682z M143.294,187.333H58.277V462h85.017V187.333z
M279.195,187.333h-81.541V462h81.541c0,0,0-101.877,0-144.181c0-38.624,17.779-61.615,51.807-61.615
c31.268,0,46.289,22.071,46.289,61.615c0,39.545,0,144.181,0,144.181h84.605c0,0,0-100.344,0-173.915
s-41.689-109.131-99.934-109.131s-82.768,45.369-82.768,45.369V187.333z"/>
</svg></a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a target="_blank" href="https://www.instagram.com/"><span
class="screen-reader-text">Instagram</span><svg class="svg-icon" aria-hidden="true" role="img"
focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path
d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z">
</path>
</svg></a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15"><a href="mailto:smonzon@umass.edu"><span class="screen-reader-text">Email</span><svg class="svg-icon"
aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24"
xmlns="http://www.w3.org/2000/svg">
<path
d="M20,4H4C2.895,4,2,4.895,2,6v12c0,1.105,0.895,2,2,2h16c1.105,0,2-0.895,2-2V6C22,4.895,21.105,4,20,4z M20,8.236l-8,4.882 L4,8.236V6h16V8.236z">
</path>
</svg></a></li>

        </ul>
        <!-- .footer-social -->

      </nav>
    </div>


    <main id="site-content" class="content" role="main" style="
z-index: -1; ">




      <div class="slant rellax" data-rellax-speed="-2" style="
transform: skewY(-30deg);">
        <canvas id="canv" width="32" height="32"></canvas>
      </div>
      <div id="particles" style="transform:skewY(-20deg);">
      </div>

      <style>
        canvas {
          width: 100%;
          height: 100%;
        }
      </style>

      <script>
        var c = document.getElementById('canv');
        var context = c.getContext('2d');


        var col = function(x, y, r, g, b) {
          context.fillStyle = "rgb(" + r + "," + g + "," + b + ")";
          context.fillRect(x, y, 1, 1);
        }
        var R = function(x, y, t) {
          return (Math.floor(130 + 126 * Math.cos((x * x - y * y) / 300 + t)));
        }

        var G = function(x, y, t) {
          return (Math.floor(130 + 126 * Math.sin((x * x * Math.cos(t / 4) + y * y * Math.sin(t / 3)) / 300)));
        }

        var B = function(x, y, t) {
          return (Math.floor(130 + 126 * Math.sin(5 * Math.sin(t / 9) + ((x - 100) * (x - 100) + (y - 100) * (y - 100)) / 1100)));
        }

        var t = 0;

        var run = function() {
          for (x = 0; x <= 35; x++) {
            for (y = 0; y <= 35; y++) {
              col(x, y, R(x, y, t), G(x, y, t), B(x, y, t));
            }
          }
          t = t + 0.020;
          window.requestAnimationFrame(run);
        }

        run();
      </script>
      <div id="background-text-container">
        <h1 id="background-header-text" class="rellax" data-rellax-speed="-8">
ENTREPRENEUR</h1>

      </div>

      <img src="img/profile.jpg" width="150px" height="150px" class="profile-img" style="z-index: 10;"></img>

      <header id="header" class="entry-header has-text-align-center header-footer-group rellax" data-rellax-speed="2">
        <h1 id="waf-title"></h1>




        <script>
          var i = j = 0;
          let lines = ["Web Developer", "App Inventor", "Full Stack Coder"];
          let cursor = true;
          let elem = document.getElementById("waf-title");
          /* The text */
          var speed = 70; /* The speed/duration of the effect in milliseconds */
          let cursorElem = document.createElement('span');

          cursorElem.setAttribute("id", "cursor");

          function typeWriter() {

            if (j < lines.length) {
              if (i < lines[j].length) {
                elem.innerHTML = elem.innerHTML.slice(0, -1) + lines[j].charAt(i) + "_";

                i++;
                if (j === lines.length - 1 && i == lines[j].length) {
                  elem.innerHTML = elem.innerHTML.slice(0, -1);


                  elem.appendChild(cursorElem);
                }
                setTimeout(typeWriter, speed);
              } else {

                elem.innerHTML = elem.innerHTML.slice(0, -1) + "<br>_";
                j++;
                i = 0;


                setTimeout(typeWriter, speed);
              }

            } else {
              cursor = !cursor;
              document.getElementById('cursor').style.visibility = cursor ? "visible" : "hidden";
              //jQuery("cursor").fadeToggle();
              setTimeout(typeWriter, 500);
            }

          }
          typeWriter();
        </script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/particles.min.js"></script>

        <script>
          $(document).ready(function() {
            jQuery("#particles").hide();
            particlesJS.load('particles2', 'assets/particles2.json');
            particlesJS.load('particles', 'assets/particles.json');

            jQuery("#particles").fadeIn(3000);
          });
        </script>

        <!-- .footer-social-wrapper -->

      </header>

      <article class="post-68 page type-page status-publish has-post-thumbnail hentry" id="post-68" style="position:relative;z-index: 2;">




        <div id="intro">


          <div class="section-container">
            <div class="section-slant" style="
transform: skewY(-10deg);"></div>
            <div class="middle-section">

              <h2 class="section-header alignwide">Introduction_</h2>

              <p class="has-drop-cap">With years of experience coding apps, websites and other personal projects, I have worked in areas ranging from databases, RESTfull APIs, to frontend sugar like what you are seeing now! This website was built from a basic WordPress template
                and the rest I coded myself (which is a great way of minimizing cost by the way). The link to said template can be found
                <a target="_blank" href="https://wordpress.org/themes/twentytwenty/">here</a> - and you will notice I have made quite a few changes.</p>
              <p>
                As a self-taught freelance developer, I am currently studying <a target="_blank" href="https://www.cics.umass.edu/">Computer Science at the University of Massachussetts, Amherst</a> and at the University's <a target="_blank" href="https://www.umass.edu/honors/">Honors College</a>.
                Along with Computer Science I am also taking classes in Artificial Intelligence, Business, and Physics. Alongside my studies, I am always looking for ways to work on what I love doing most: making clean, intuitive and useful web and mobile
                applications.
              </p>
              <p>
                I take pride in what I code. I also believe the bugs I've squashed have only made me a better programmer, and because of this, each time I start a project it gets done a lot faster than the last one. <a href="#contact">Let's chat</a> soon
                so we can talk about your next big idea!

              </p>
            </div>
          </div>

        </div>
        <!-- .featured-media -->

        <div style="position:absolute; background-color: transparent; width:30%; height: 100% ;z-index:-2; opacity:1; top: 400px; right: 0px" id="particles2" class="rellax" data-rellax-speed="-2">
        </div>
        <div id="skills">


          <div class="section-container">


            <div class="middle-section">

              <h2 class="section-header alignwide">Skills_</h2>

              <p class="has-drop-cap">Many of my programming skills are self taught. Because of this I like to think that I have become a quick learner when it comes to working with new APIs and platforms. Below you will find a list of GitHub repositories I have worked on in
                the past.
                <br>I have coded:

              </p>
              <ul class="body-ul">
                <li>
                  <p>iOS applications with React Native, Swift, and C#.</p>
                </li>
                <li>
                  <p>APIs and Webhooks with NodeJS and PHP.</p>
                </li>
                <li>
                  <p>Databases with SQL and NoSQL.</p>
                </li>
                <li>
                  <p>Computer programs that run in C, Java, and Python.</p>
                </li>
                <li>
                  <p>Websites just like this one using HTML, CSS, Javascript, and PHP.</p>
                </li>
              </ul>
            </div>


          </div>

        </div>
        <div id="projects" class="section-container">
          <?php
foreach($repositories as $repo){
echo "<div><a target='_blank ' href=".$repo['html_url'].">".$repo['name']."</a></div>"; } ?>
        </div>
        <div class="post-inner thin section-container">

          <div class="middle-section half-column">


            <div id="contact">
              <div>
                <h2 class="section-header alignwide">Need a website? Thinking about an app? Get in touch!</h2>
                <p>> Use this form to send me an email, or connect via the links above.</p>
                <?php
if(isset($_POST["senderEmail"])){
    echo "Thanks for the email! I will get back to you ASAP!";
        mail("smonzon@umass.edu", $_POST["subject"], $_POST["message"], "From: ".$_POST["senderEmail"]);
}
?>
                  <div>
                    <form method="post" name="emailForm">


                      <input readonly type="text" size="19" name="senderEmail" placeholder="To: smonzon@umass.edu">
                      <input type="text" size="19" name="senderEmail" placeholder="From: (email)">
                      <input type="text" size="19" name="subject" placeholder="Subject">
                      <textarea name="message" rows="6" cols="20" placeholder="Message"></textarea>
                      <br>
                      <button type=”submit” value=”Submit” style="float:right;border-radius:40px;">Send</button>
                    </form>
                  </div>
                  <style type="text/css">
                    input[type=text],
                    textarea {
                      color: white;
                      border: none;
                      border-bottom: 1px solid var(--rose-madder);
                      background-color: black;
                      outline: none;
                    }
                  </style>
              </div>
            </div>

          </div>
          <!-- .entry-content -->
          <div class="half-column rellax" data-rellax-speed="3" data-rellax-percentage="0.5">
            <h2 class="has-text-color has-text-align-center alignwide" style="color:var(--maximum-yellow-red);font-style: italic;     font-weight: 100;">“Experience is the name everyone gives to their mistakes.” – Oscar Wilde</h2>
          </div>
        </div>
        <!-- .post-inner -->

        <div class="section-inner">

        </div>
        <!-- .section-inner -->


      </article>
      <!-- .post -->

    </main>
    <!-- #site-content -->


    <div class="footer-nav-widgets-wrapper header-footer-group" style="margin-top:0;background-color: black;">

      <div class="footer-inner section-inner">

        <div class="footer-top has-footer-menu has-social-menu">



          <nav aria-label="Social links" class="footer-social-wrapper">

            <ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color">

              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a target="_blank" href="https://www.facebook.com/sebastian.monzon.9678/"><span class="screen-reader-text">Facebook</span><svg
class="svg-icon" aria-hidden="true" role="img" focusable="false" width="24" height="24"
viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path
d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z">
</path>
</svg></a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a target="_blank" href="https://www.linkedin.com/in/sebastian-monz%C3%B3n-9ab695102/"><span class="screen-reader-text">Twitter</span><svg
class="svg-icon" aria-hidden="true" role="img" focusable="false" width="24" height="24"
viewBox="0 50 512 512" xmlns="http://www.w3.org/2000/svg">
<path fill="#828282" d="M150.65,100.682c0,27.992-22.508,50.683-50.273,50.683c-27.765,0-50.273-22.691-50.273-50.683
C50.104,72.691,72.612,50,100.377,50C128.143,50,150.65,72.691,150.65,100.682z M143.294,187.333H58.277V462h85.017V187.333z
M279.195,187.333h-81.541V462h81.541c0,0,0-101.877,0-144.181c0-38.624,17.779-61.615,51.807-61.615
c31.268,0,46.289,22.071,46.289,61.615c0,39.545,0,144.181,0,144.181h84.605c0,0,0-100.344,0-173.915
s-41.689-109.131-99.934-109.131s-82.768,45.369-82.768,45.369V187.333z"/>
</svg></a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a target="_blank" href="https://www.instagram.com/"><span
class="screen-reader-text">Instagram</span><svg class="svg-icon" aria-hidden="true" role="img"
focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path
d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z">
</path>
</svg></a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15"><a href="mailto:smonzon@umass.edu"><span class="screen-reader-text">Email</span><svg class="svg-icon"
aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24"
xmlns="http://www.w3.org/2000/svg">
<path
d="M20,4H4C2.895,4,2,4.895,2,6v12c0,1.105,0.895,2,2,2h16c1.105,0,2-0.895,2-2V6C22,4.895,21.105,4,20,4z M20,8.236l-8,4.882 L4,8.236V6h16V8.236z">
</path>
</svg></a></li>

            </ul>
            <!-- .footer-social -->

          </nav>
          <!-- .footer-social-wrapper -->

        </div>
        <!-- .footer-top -->




        <!-- .footer-widgets-outer-wrapper -->


      </div>
      <!-- .footer-inner -->

    </div>
    <!-- .footer-nav-widgets-wrapper -->


    <footer id="site-footer" role="contentinfo" class="header-footer-group" style="background-color: black;">

      <div class="section-inner">

        <div class="footer-credits">

          <p class="has-accent-color footer-copyright">© 2021 Sebastian Monzon
          </p>
          <!-- .footer-copyright -->

        </div>
        <!-- .footer-credits -->

        <a class="to-the-top" href="#site-header">
          <span class="to-the-top-long">
To the top <span class="arrow" aria-hidden="true">↑</span> </span>
          <!-- .to-the-top-long -->
          <span class="to-the-top-short">
Up <span class="arrow" aria-hidden="true">↑</span> </span>
          <!-- .to-the-top-short -->
        </a>
        <!-- .to-the-top -->

      </div>
      <!-- .section-inner -->

    </footer>
    <script type="text/javascript" src="js/rellax.min.js"></script>
    <script>
      var rellax = new Rellax();
    </script>
    <!-- #site-footer -->
    <script>
      window.onscroll = function() {
        myFunction()
      };

      var header = document.getElementById("site-header");
      var sticky = header.offsetTop + 50;

      function myFunction() {
        if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
          header.classList.remove("transparent-header");
        } else {
          header.classList.add("transparent-header");
          header.classList.remove("sticky");
        }
      }
    </script>
    <script>
      /*	-----------------------------------------------------------------------------------------------
      Namespace
      --------------------------------------------------------------------------------------------------- */

      var twentytwenty = twentytwenty || {};

      // Set a default value for scrolled.
      twentytwenty.scrolled = 0;

      // polyfill closest
      // https://developer.mozilla.org/en-US/docs/Web/API/Element/closest#Polyfill
      if (!Element.prototype.closest) {
        Element.prototype.closest = function(s) {
          var el = this;

          do {
            if (el.matches(s)) {
              return el;
            }

            el = el.parentElement || el.parentNode;
          } while (el !== null && el.nodeType === 1);

          return null;
        };
      }

      // polyfill forEach
      // https://developer.mozilla.org/en-US/docs/Web/API/NodeList/forEach#Polyfill
      if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = function(callback, thisArg) {
          var i;
          var len = this.length;

          thisArg = thisArg || window;

          for (i = 0; i < len; i++) {
            callback.call(thisArg, this[i], i, this);
          }
        };
      }

      // event "polyfill"
      twentytwenty.createEvent = function(eventName) {
        var event;
        if (typeof window.Event === 'function') {
          event = new Event(eventName);
        } else {
          event = document.createEvent('Event');
          event.initEvent(eventName, true, false);
        }
        return event;
      };

      // matches "polyfill"
      // https://developer.mozilla.org/es/docs/Web/API/Element/matches
      if (!Element.prototype.matches) {
        Element.prototype.matches =
          Element.prototype.matchesSelector ||
          Element.prototype.mozMatchesSelector ||
          Element.prototype.msMatchesSelector ||
          Element.prototype.oMatchesSelector ||
          Element.prototype.webkitMatchesSelector ||
          function(s) {
            var matches = (this.document || this.ownerDocument).querySelectorAll(s),
              i = matches.length;
            while (--i >= 0 && matches.item(i) !== this) {}
            return i > -1;
          };
      }

      // Add a class to the body for when touch is enabled for browsers that don't support media queries // for interaction media features. Adapted from <https://codepen.io/Ferie/pen/vQOMmO>.
      twentytwenty.touchEnabled = {
        init: function() {
          var matchMedia = function() { // Include the 'heartz' as a way to have a non-matching MQ to help terminate the join. See
            //< https: //git.io/vznFH>.
            var prefixes = ['-webkit-', '-moz-', '-o-', '-ms-'];
            var query = ['(', prefixes.join('touch-enabled),('), 'heartz', ')'].join('');
            return window.matchMedia && window.matchMedia(query).matches;
          };
          if (('ontouchstart' in window) || (window.DocumentTouch && document instanceof window.DocumentTouch) || matchMedia()) {
            document.body.classList.add('touch-enabled');
          }
        }
      }; // twentytwenty.touchEnabled /* -----------------------------------------------------------------------------------------------
      // Cover Modals-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- - * /
      twentytwenty.coverModals = {
        init: function() {
          if (document.querySelector('.cover-modal')) { // Handle cover modals
            // when they 're toggled.
            this.onToggle();
            // When toggled, untoggle if visitor clicks on the wrapping element of the modal.
            this.outsideUntoggle(); // Close on escape key press.
            this.closeOnEscape(); // Hide and show modals before and after
            // their animations have played out.
            this.hideAndShowModals();
          }
        }, // Handle cover modals when they're toggled.
        onToggle: function() {
          document.querySelectorAll('.cover-modal').forEach(function(element) {
            element.addEventListener('toggled',
              function(event) {
                var modal = event.target,
                  body = document.body;
                if (modal.classList.contains('active')) {
                  body.classList.add('showing-modal');
                } else {
                  body.classList.remove('showing-modal');
                  body.classList.add('hiding-modal'); //Remove the hiding class after a delay, when animations have been
                  run.setTimeout(function() {
                    body.classList.remove('hiding-modal');
                  }, 500);
                }
              });
          });
        }, // Close modal on outside click.
        outsideUntoggle: function() {
          document.addEventListener('click',
            function(event) {
              var target = event.target;
              var modal = document.querySelector('.cover-modal.active'); // if target onclick is <a> with # within the href attribute
              if (event.target.tagName.toLowerCase() === 'a' && event.target.hash.includes('#') && modal !== null) {
                // untoggle the modal
                this.untoggleModal(modal);
                // wait 550 and scroll to the anchor
                setTimeout(function() {
                  var anchor = document.getElementById(event.target.hash.slice(1));
                  anchor.scrollIntoView();
                }, 550);
              }

              if (target === modal) {
                this.untoggleModal(target);
              }
            }.bind(this));
        },

        // Close modal on escape key press.
        closeOnEscape: function() {
          document.addEventListener('keydown', function(event) {
            if (event.keyCode === 27) {
              event.preventDefault();
              document.querySelectorAll('.cover-modal.active').forEach(function(element) {
                this.untoggleModal(element);
              }.bind(this));
            }
          }.bind(this));
        },

        // Hide and show modals before and after their animations have played out.
        hideAndShowModals: function() {
          var _doc = document,
            _win = window,
            modals = _doc.querySelectorAll('.cover-modal'),
            htmlStyle = _doc.documentElement.style,
            adminBar = _doc.querySelector('#wpadminbar');

          function getAdminBarHeight(negativeValue) {
            var height,
              currentScroll = _win.pageYOffset;

            if (adminBar) {
              height = currentScroll + adminBar.getBoundingClientRect().height;

              return negativeValue ? -height : height;
            }

            return currentScroll === 0 ? 0 : -currentScroll;
          }

          function htmlStyles() {
            var overflow = _win.innerHeight > _doc.documentElement.getBoundingClientRect().height;

            return {
              'overflow-y': overflow ? 'hidden' : 'scroll',
              position: 'fixed',
              width: '100%',
              top: getAdminBarHeight(true) + 'px',
              left: 0
            };
          }

          // Show the modal.
          modals.forEach(function(modal) {
            modal.addEventListener('toggle-target-before-inactive', function(event) {
              var styles = htmlStyles(),
                offsetY = _win.pageYOffset,
                paddingTop = (Math.abs(getAdminBarHeight()) - offsetY) + 'px',
                mQuery = _win.matchMedia('(max-width: 600px)');

              if (event.target !== modal) {
                return;
              }

              Object.keys(styles).forEach(function(styleKey) {
                htmlStyle.setProperty(styleKey, styles[styleKey]);
              });

              _win.twentytwenty.scrolled = parseInt(styles.top, 10);

              if (adminBar) {
                _doc.body.style.setProperty('padding-top', paddingTop);

                if (mQuery.matches) {
                  if (offsetY >= getAdminBarHeight()) {
                    modal.style.setProperty('top', 0);
                  } else {
                    modal.style.setProperty('top', (getAdminBarHeight() - offsetY) + 'px');
                  }
                }
              }

              modal.classList.add('show-modal');
            });

            // Hide the modal after a delay, so animations have time to play out.
            modal.addEventListener('toggle-target-after-inactive', function(event) {
              if (event.target !== modal) {
                return;
              }

              setTimeout(function() {
                var clickedEl = twentytwenty.toggles.clickedEl;

                modal.classList.remove('show-modal');

                Object.keys(htmlStyles()).forEach(function(styleKey) {
                  htmlStyle.removeProperty(styleKey);
                });

                if (adminBar) {
                  _doc.body.style.removeProperty('padding-top');
                  modal.style.removeProperty('top');
                }

                if (clickedEl !== false) {
                  clickedEl.focus();
                  clickedEl = false;
                }

                _win.scrollTo(0, Math.abs(_win.twentytwenty.scrolled + getAdminBarHeight()));

                _win.twentytwenty.scrolled = 0;
              }, 500);
            });
          });
        },

        // Untoggle a modal.
        untoggleModal: function(modal) {
          var modalTargetClass,
            modalToggle = false;

          // If the modal has specified the string (ID or class) used by toggles to target it, untoggle the toggles with that target string.
          // The modal-target-string must match the string toggles use to target the modal.
          if (modal.dataset.modalTargetString) {
            modalTargetClass = modal.dataset.modalTargetString;

            modalToggle = document.querySelector('*[data-toggle-target="' + modalTargetClass + '"]');
          }

          // If a modal toggle exists, trigger it so all of the toggle options are included.
          if (modalToggle) {
            modalToggle.click();

            // If one doesn't exist, just hide the modal.
          } else {
            modal.classList.remove('active');
          }
        }

      }; // twentytwenty.coverModals

      /*	-----------------------------------------------------------------------------------------------
      Intrinsic Ratio Embeds
      --------------------------------------------------------------------------------------------------- */

      twentytwenty.intrinsicRatioVideos = {

        init: function() {
          this.makeFit();

          window.addEventListener('resize', function() {
            this.makeFit();
          }.bind(this));
        },

        makeFit: function() {
          document.querySelectorAll('iframe, object, video').forEach(function(video) {
            var ratio, iTargetWidth,
              container = video.parentNode;

            // Skip videos we want to ignore.
            if (video.classList.contains('intrinsic-ignore') || video.parentNode.classList.contains('intrinsic-ignore')) {
              return true;
            }

            if (!video.dataset.origwidth) {
              // Get the video element proportions.
              video.setAttribute('data-origwidth', video.width);
              video.setAttribute('data-origheight', video.height);
            }

            iTargetWidth = container.offsetWidth;

            // Get ratio from proportions.
            ratio = iTargetWidth / video.dataset.origwidth;

            // Scale based on ratio, thus retaining proportions.
            video.style.width = iTargetWidth + 'px';
            video.style.height = (video.dataset.origheight * ratio) + 'px';
          });
        }

      }; // twentytwenty.instrinsicRatioVideos

      /*	-----------------------------------------------------------------------------------------------
      Modal Menu
      --------------------------------------------------------------------------------------------------- */
      twentytwenty.modalMenu = {

        init: function() {
          // If the current menu item is in a sub level, expand all the levels higher up on load.
          this.expandLevel();
          this.keepFocusInModal();
        },

        expandLevel: function() {
          var modalMenus = document.querySelectorAll('.modal-menu');

          modalMenus.forEach(function(modalMenu) {
            var activeMenuItem = modalMenu.querySelector('.current-menu-item');

            if (activeMenuItem) {
              twentytwentyFindParents(activeMenuItem, 'li').forEach(function(element) {
                var subMenuToggle = element.querySelector('.sub-menu-toggle');
                if (subMenuToggle) {
                  twentytwenty.toggles.performToggle(subMenuToggle, true);
                }
              });
            }
          });
        },

        keepFocusInModal: function() {
          var _doc = document;

          _doc.addEventListener('keydown', function(event) {
            var toggleTarget, modal, selectors, elements, menuType, bottomMenu, activeEl, lastEl, firstEl, tabKey, shiftKey,
              clickedEl = twentytwenty.toggles.clickedEl;

            if (clickedEl && _doc.body.classList.contains('showing-modal')) {
              toggleTarget = clickedEl.dataset.toggleTarget;
              selectors = 'input, a, button';
              modal = _doc.querySelector(toggleTarget);

              elements = modal.querySelectorAll(selectors);
              elements = Array.prototype.slice.call(elements);

              if ('.menu-modal' === toggleTarget) {
                menuType = window.matchMedia('(min-width: 1000px)').matches;
                menuType = menuType ? '.expanded-menu' : '.mobile-menu';

                elements = elements.filter(function(element) {
                  return null !== element.closest(menuType) && null !== element.offsetParent;
                });

                elements.unshift(_doc.querySelector('.close-nav-toggle'));

                bottomMenu = _doc.querySelector('.menu-bottom > nav');

                if (bottomMenu) {
                  bottomMenu.querySelectorAll(selectors).forEach(function(element) {
                    elements.push(element);
                  });
                }
              }

              lastEl = elements[elements.length - 1];
              firstEl = elements[0];
              activeEl = _doc.activeElement;
              tabKey = event.keyCode === 9;
              shiftKey = event.shiftKey;

              if (!shiftKey && tabKey && lastEl === activeEl) {
                event.preventDefault();
                firstEl.focus();
              }

              if (shiftKey && tabKey && firstEl === activeEl) {
                event.preventDefault();
                lastEl.focus();
              }
            }
          });
        }
      }; // twentytwenty.modalMenu

      /*	-----------------------------------------------------------------------------------------------
      Primary Menu
      --------------------------------------------------------------------------------------------------- */

      twentytwenty.primaryMenu = {

        init: function() {
          this.focusMenuWithChildren();
        },

        // The focusMenuWithChildren() function implements Keyboard Navigation in the Primary Menu
        // by adding the '.focus' class to all 'li.menu-item-has-children' when the focus is on the 'a' element.
        focusMenuWithChildren: function() {
          // Get all the link elements within the primary menu.
          var links, i, len,
            menu = document.querySelector('.primary-menu-wrapper');

          if (!menu) {
            return false;
          }

          links = menu.getElementsByTagName('a');

          // Each time a menu link is focused or blurred, toggle focus.
          for (i = 0, len = links.length; i < len; i++) {
            links[i].addEventListener('focus', toggleFocus, true);
            links[i].addEventListener('blur', toggleFocus, true);
          }

          //Sets or removes the .focus class on an element.
          function toggleFocus() {
            var self = this;

            // Move up through the ancestors of the current link until we hit .primary-menu.
            while (-1 === self.className.indexOf('primary-menu')) {
              // On li elements toggle the class .focus.
              if ('li' === self.tagName.toLowerCase()) {
                if (-1 !== self.className.indexOf('focus')) {
                  self.className = self.className.replace(' focus', '');
                } else {
                  self.className += ' focus';
                }
              }
              self = self.parentElement;
            }
          }
        }
      }; // twentytwenty.primaryMenu

      /*	-----------------------------------------------------------------------------------------------
      Toggles
      --------------------------------------------------------------------------------------------------- */

      twentytwenty.toggles = {

        clickedEl: false,

        init: function() {
          // Do the toggle.
          this.toggle();

          // Check for toggle/untoggle on resize.
          this.resizeCheck();

          // Check for untoggle on escape key press.
          this.untoggleOnEscapeKeyPress();
        },

        performToggle: function(element, instantly) {
          var target, timeOutTime, classToToggle,
            self = this,
            _doc = document,
            // Get our targets.
            toggle = element,
            targetString = toggle.dataset.toggleTarget,
            activeClass = 'active';

          // Elements to focus after modals are closed.
          if (!_doc.querySelectorAll('.show-modal').length) {
            self.clickedEl = _doc.activeElement;
          }

          if (targetString === 'next') {
            target = toggle.nextSibling;
          } else {
            target = _doc.querySelector(targetString);
          }

          // Trigger events on the toggle targets before they are toggled.
          if (target.classList.contains(activeClass)) {
            target.dispatchEvent(twentytwenty.createEvent('toggle-target-before-active'));
          } else {
            target.dispatchEvent(twentytwenty.createEvent('toggle-target-before-inactive'));
          }

          // Get the class to toggle, if specified.
          classToToggle = toggle.dataset.classToToggle ? toggle.dataset.classToToggle : activeClass;

          // For cover modals, set a short timeout duration so the class animations have time to play out.
          timeOutTime = 0;

          if (target.classList.contains('cover-modal')) {
            timeOutTime = 10;
          }

          setTimeout(function() {
            var focusElement,
              subMenued = target.classList.contains('sub-menu'),
              newTarget = subMenued ? toggle.closest('.menu-item').querySelector('.sub-menu') : target,
              duration = toggle.dataset.toggleDuration;

            // Toggle the target of the clicked toggle.
            if (toggle.dataset.toggleType === 'slidetoggle' && !instantly && duration !== '0') {
              twentytwentyMenuToggle(newTarget, duration);
            } else {
              newTarget.classList.toggle(classToToggle);
            }

            // If the toggle target is 'next', only give the clicked toggle the active class.
            if (targetString === 'next') {
              toggle.classList.toggle(activeClass);
            } else if (target.classList.contains('sub-menu')) {
              toggle.classList.toggle(activeClass);
            } else {
              // If not, toggle all toggles with this toggle target.
              _doc.querySelector('*[data-toggle-target="' + targetString + '"]').classList.toggle(activeClass);
            }

            // Toggle aria-expanded on the toggle.
            twentytwentyToggleAttribute(toggle, 'aria-expanded', 'true', 'false');

            if (self.clickedEl && -1 !== toggle.getAttribute('class').indexOf('close-')) {
              twentytwentyToggleAttribute(self.clickedEl, 'aria-expanded', 'true', 'false');
            }

            // Toggle body class.
            if (toggle.dataset.toggleBodyClass) {
              _doc.body.classList.toggle(toggle.dataset.toggleBodyClass);
            }

            // Check whether to set focus.
            if (toggle.dataset.setFocus) {
              focusElement = _doc.querySelector(toggle.dataset.setFocus);

              if (focusElement) {
                if (target.classList.contains(activeClass)) {
                  focusElement.focus();
                } else {
                  focusElement.blur();
                }
              }
            }

            // Trigger the toggled event on the toggle target.
            target.dispatchEvent(twentytwenty.createEvent('toggled'));

            // Trigger events on the toggle targets after they are toggled.
            if (target.classList.contains(activeClass)) {
              target.dispatchEvent(twentytwenty.createEvent('toggle-target-after-active'));
            } else {
              target.dispatchEvent(twentytwenty.createEvent('toggle-target-after-inactive'));
            }
          }, timeOutTime);
        },

        // Do the toggle.
        toggle: function() {
          var self = this;

          document.querySelectorAll('*[data-toggle-target]').forEach(function(element) {
            element.addEventListener('click', function(event) {
              event.preventDefault();
              self.performToggle(element);
            });
          });
        },

        // Check for toggle/untoggle on screen resize.
        resizeCheck: function() {
          if (document.querySelectorAll('*[data-untoggle-above], *[data-untoggle-below], *[data-toggle-above], *[data-toggle-below]').length) {
            window.addEventListener('resize', function() {
              var winWidth = window.innerWidth,
                toggles = document.querySelectorAll('.toggle');

              toggles.forEach(function(toggle) {
                var unToggleAbove = toggle.dataset.untoggleAbove,
                  unToggleBelow = toggle.dataset.untoggleBelow,
                  toggleAbove = toggle.dataset.toggleAbove,
                  toggleBelow = toggle.dataset.toggleBelow;

                // If no width comparison is set, continue.
                if (!unToggleAbove && !unToggleBelow && !toggleAbove && !toggleBelow) {
                  return;
                }

                // If the toggle width comparison is true, toggle the toggle.
                if (
                  (((unToggleAbove && winWidth > unToggleAbove) ||
                      (unToggleBelow && winWidth < unToggleBelow)) &&
                    toggle.classList.contains('active')) ||
                  (((toggleAbove && winWidth > toggleAbove) ||
                      (toggleBelow && winWidth < toggleBelow)) &&
                    !toggle.classList.contains('active'))
                ) {
                  toggle.click();
                }
              });
            });
          }
        },

        // Close toggle on escape key press.
        untoggleOnEscapeKeyPress: function() {
          document.addEventListener('keyup', function(event) {
            if (event.key === 'Escape') {
              document.querySelectorAll('*[data-untoggle-on-escape].active').forEach(function(element) {
                if (element.classList.contains('active')) {
                  element.click();
                }
              });
            }
          });
        }

      }; // twentytwenty.toggles

      /**
       * Is the DOM ready?
       *
       * This implementation is coming from https://gomakethings.com/a-native-javascript-equivalent-of-jquerys-ready-method/
       *
       * @param {Function} fn Callback function to run.
       */
      function twentytwentyDomReady(fn) {
        if (typeof fn !== 'function') {
          return;
        }

        if (document.readyState === 'interactive' || document.readyState === 'complete') {
          return fn();
        }

        document.addEventListener('DOMContentLoaded', fn, false);
      }

      twentytwentyDomReady(function() {
        twentytwenty.toggles.init(); // Handle toggles.
        twentytwenty.coverModals.init(); // Handle cover modals.
        twentytwenty.intrinsicRatioVideos.init(); // Retain aspect ratio of videos on window resize.
        twentytwenty.modalMenu.init(); // Modal Menu.
        twentytwenty.primaryMenu.init(); // Primary Menu.
        twentytwenty.touchEnabled.init(); // Add class to body if device is touch-enabled.
      });

      /*	-----------------------------------------------------------------------------------------------
      Helper functions
      --------------------------------------------------------------------------------------------------- */

      /* Toggle an attribute ----------------------- */

      function twentytwentyToggleAttribute(element, attribute, trueVal, falseVal) {
        if (element.classList.contains('close-search-toggle')) {
          return;
        }
        if (trueVal === undefined) {
          trueVal = true;
        }
        if (falseVal === undefined) {
          falseVal = false;
        }
        if (element.getAttribute(attribute) !== trueVal) {
          element.setAttribute(attribute, trueVal);
        } else {
          element.setAttribute(attribute, falseVal);
        }
      }

      /**
       * Toggle a menu item on or off.
       *
       * @param {HTMLElement} target
       * @param {number} duration
       */
      function twentytwentyMenuToggle(target, duration) {
        var initialParentHeight, finalParentHeight, menu, menuItems, transitionListener,
          initialPositions = [],
          finalPositions = [];

        if (!target) {
          return;
        }

        menu = target.closest('.menu-wrapper');

        // Step 1: look at the initial positions of every menu item.
        menuItems = menu.querySelectorAll('.menu-item');

        menuItems.forEach(function(menuItem, index) {
          initialPositions[index] = {
            x: menuItem.offsetLeft,
            y: menuItem.offsetTop
          };
        });
        initialParentHeight = target.parentElement.offsetHeight;

        target.classList.add('toggling-target');

        // Step 2: toggle target menu item and look at the final positions of every menu item.
        target.classList.toggle('active');

        menuItems.forEach(function(menuItem, index) {
          finalPositions[index] = {
            x: menuItem.offsetLeft,
            y: menuItem.offsetTop
          };
        });
        finalParentHeight = target.parentElement.offsetHeight;

        // Step 3: close target menu item again.
        // The whole process happens without giving the browser a chance to render, so it's invisible.
        target.classList.toggle('active');

        /*
         * Step 4: prepare animation.
         * Position all the items with absolute offsets, at the same starting position.
         * Shouldn't result in any visual changes if done right.
         */
        menu.classList.add('is-toggling');
        target.classList.toggle('active');
        menuItems.forEach(function(menuItem, index) {
          var initialPosition = initialPositions[index];
          if (initialPosition.y === 0 && menuItem.parentElement === target) {
            initialPosition.y = initialParentHeight;
          }
          menuItem.style.transform = 'translate(' + initialPosition.x + 'px, ' + initialPosition.y + 'px)';
        });

        /*
         * The double rAF is unfortunately needed, since we're toggling CSS classes, and
         * the only way to ensure layout completion here across browsers is to wait twice.
         * This just delays the start of the animation by 2 frames and is thus not an issue.
         */
        requestAnimationFrame(function() {
          requestAnimationFrame(function() {
            /*
             * Step 5: start animation by moving everything to final position.
             * All the layout work has already happened, while we were preparing for the animation.
             * The animation now runs entirely in CSS, using cheap CSS properties (opacity and transform)
             * that don't trigger the layout or paint stages.
             */
            menu.classList.add('is-animating');
            menuItems.forEach(function(menuItem, index) {
              var finalPosition = finalPositions[index];
              if (finalPosition.y === 0 && menuItem.parentElement === target) {
                finalPosition.y = finalParentHeight;
              }
              if (duration !== undefined) {
                menuItem.style.transitionDuration = duration + 'ms';
              }
              menuItem.style.transform = 'translate(' + finalPosition.x + 'px, ' + finalPosition.y + 'px)';
            });
            if (duration !== undefined) {
              target.style.transitionDuration = duration + 'ms';
            }
          });

          // Step 6: finish toggling.
          // Remove all transient classes when the animation ends.
          transitionListener = function() {
            menu.classList.remove('is-animating');
            menu.classList.remove('is-toggling');
            target.classList.remove('toggling-target');
            menuItems.forEach(function(menuItem) {
              menuItem.style.transform = '';
              menuItem.style.transitionDuration = '';
            });
            target.style.transitionDuration = '';
            target.removeEventListener('transitionend', transitionListener);
          };

          target.addEventListener('transitionend', transitionListener);
        });
      }

      /**
       * Traverses the DOM up to find elements matching the query.
       *
       * @param {HTMLElement} target
       * @param {string} query
       * @return {NodeList} parents matching query
       */
      function twentytwentyFindParents(target, query) {
        var parents = [];

        // Recursively go up the DOM adding matches to the parents array.
        function traverse(item) {
          var parent = item.parentNode;
          if (parent instanceof HTMLElement) {
            if (parent.matches(query)) {
              parents.push(parent);
            }
            traverse(parent);
          }
        }

        traverse(target);

        return parents;
      }
    </script>


  </body>

</html>
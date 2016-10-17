<?php include("svg.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  
  <head>
    <title>Thomas Cober's Design and Web Development portfolio</title>
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_url'); ?>/images/favicon.ico">
    <meta name="description" content="A portfolio site for Thomas Cober of Portland Oregon. Works include front end development illustration, layout, and graphic design examples." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//use.typekit.net/blv1xtl.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  </head>
  
  <body>
    <div class="backgroundContain">
      <!-- SVG CODE BELOW IS STORED IN A SEPARATE PHP FILE IN A VARIABLE! -->
      <?php echo $svgcode; ?>
    </div>
    
    <div class="container">
      
      <div class="name">
        <a href="mailto:tcober5@gmail.com">
          <img src="<?php echo get_bloginfo('template_url'); ?>/images/mail.svg">
        </a>
        <h1>THOMAS&nbsp;COBER</h1>
      </div>
       
      <div class="contentHolder">
        <!-- THIS IS WHERE THE IMAGES AND DECRIPTION LOAD TO -->
      </div>
            
      <div class="player">
        <div class="musicCloser">
          <p>X</p>
        </div>
        <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/12351544&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
      </div>
      
      <div class="twitter">
        <div class="twittersize">
          <p>
            <?php echo do_shortcode('[statictweets skin="default" resource="usertimeline" user="ThomasCober" list="" query="" count="1" retweets="off" replies="off" show="time"/]') ?>
          </p>
        </div>
      </div>
      
      <div class="worklist">
        
        <ul>
          <li class="loader" data="getlytics-com">Getlytics.com</li>
          <li class="loader" data="lytics-landing">Lytics Landing Page</li>
          <li class="loader" data="cwh">Creativity Works Here</li>
          <li class="loader" data="pnca-updates">PNCA.EDU Updates</li>
          <li class="loader" data="511presskit">511 Presskit</li>
          <li class="loader" data="pnca-tumblr-theme">PNCA Tumblr Theme</li>
          <li class="loader" data="fogd3x3">Fogd 3x3</li>
          <li class="loader" data="library-exhibition-poster">Library Exhibition Posters</li>
          <li class="loader" data="library-box">Library Info Arcade</li>
          <li class="loader" data="adx-projects">ADX Projects</li>
        </ul>
        
      </div>
      
      <div class="menu">
        
        <div class="design button">
          <h2>WORK</h2>
        </div>
        
        <div class="music button">
          <h2>MUSIC</h2>
        </div>
                 
        <a href="https://github.com/tcober" target="_blank">
          <div class="code button">
            <h2>CODE</h2>
          </div>
        </a>
        
      </div>
      <!-- END OF CONTAINER DIV -->
    </div>
    
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/portfolio.js"></script>
  
</html>
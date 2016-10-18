<?php get_header(); ?>
<?php include("svg.php"); ?>
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
        <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/12351544&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=false"></iframe>
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
<?php get_footer(); ?>
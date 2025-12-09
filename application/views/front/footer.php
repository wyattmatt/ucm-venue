  <footer style="background-color: #ecf0f1; padding: 40px 0 20px 0; margin-top: 50px; width: 100%;">
  <div class="container">
    <!-- First Row: Social Media and Contact Us -->
    <div class="row">
      <!-- Social Media -->
      <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
        <div class="bs-callout bs-callout-primary">
          <h4><i class="fa fa-search"></i> <?php echo $this->lang->line('footer_social_media'); ?></h4>
        </div>
        <div class="mb-3">
          <button type="button" class="btn btn-sm btn-primary" onclick="window.open('https://www.facebook.com/UCMakassarOfficial/','_blank')"><i class="fa fa-facebook"></i></button>&nbsp;
          <button type="button" class="btn btn-sm btn-primary" onclick="window.open('https://www.instagram.com/uc_makassar/','_blank')"><i class="fa fa-instagram"></i></button>&nbsp;
          <button type="button" class="btn btn-sm btn-primary" onclick="window.open('https://x.com/UCMakassar','_blank')"><i class="fa fa-twitter"></i></button>&nbsp;
          <button type="button" class="btn btn-sm btn-primary" onclick="window.open('https://www.youtube.com/c/UCMakassar','_blank')"><i class="fa fa-youtube-play"></i></button>
        </div>
      </div>

      <!-- Contact Us -->
      <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
        <div class="bs-callout bs-callout-primary">
          <h4><i class="fa fa-phone"></i> <?php echo $this->lang->line('footer_contact_us'); ?></h4>
        </div>
        <div class="mb-3">
          <?php 
          if (isset($kontak_sidebar) && is_array($kontak_sidebar)) {
            foreach($kontak_sidebar as $kontak){
          ?>
            <a href="https://api.whatsapp.com/send?phone=+<?php echo $kontak->nohp ?>&text=Hai%20Kak%2C%20saya%20mau%20tanya-tanya%20seputar%20informasi%20booking%20tempat%20di%20UC%20Makassar" target="_blank" style="text-decoration: none;">
              <button class="btn btn-success btn-sm" type="button" style="margin-bottom: 5px;">
                <i class="fa fa-whatsapp"></i> <?php echo $kontak->nama_kontak ?>
              </button>
            </a>
          <?php 
            }
          }
          ?>
        </div>
      </div>
    </div>

    <!-- Second Row: Latest Events -->
    <div class="row">
      <div class="col-lg-12">
        <div class="bs-callout bs-callout-primary">
          <h4><i class="fa fa-newspaper-o"></i> <?php echo $this->lang->line('footer_latest_events'); ?></h4>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      if (isset($event_sidebar) && is_array($event_sidebar)) {
        $event_count = 0;
        foreach ($event_sidebar as $event_sidebar_item) {
          if ($event_count >= 9) break;
          $event_count++;
      ?>
        <div class="col-lg-4 col-md-4 col-sm-6 mb-3">
          <div style="background: white; padding: 10px; border-radius: 5px; border: 1px solid #ddd;">
            <?php echo anchor('event/read/' . $event_sidebar_item->slug_event . '', '' . $event_sidebar_item->nama_event . '') ?>
            <span class="badge" style="float: right;">NEW</span>
          </div>
        </div>
      <?php 
        }
      } else {
        echo '<div class="col-lg-12"><p>' . $this->lang->line('footer_no_events') . '</p></div>';
      }
      ?>
    </div>

    <!-- Copyright -->
    <div class="row">
      <div class="col-lg-12">
        <!-- <hr> -->
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 text-center" style="margin-top: 20px;">
        <p>&copy; <?php echo date('Y'); ?> UCM Venue. By <a href="https://wyattmatt.github.io/" target="_blank">WyattMatt</a></p>
      </div>
    </div>
  </div>
</footer>

<!-- Back to Top Button - Fixed -->
<a href="#top" id="back-to-top" style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 9999; background-color: #2c3e50; color: white; width: 50px; height: 50px; text-align: center; line-height: 50px; border-radius: 50%; box-shadow: 0 2px 5px rgba(0,0,0,0.3); transition: all 0.3s ease;">
  <i class="fa fa-chevron-up" style="font-size: 24px;"></i>
</a>

<script>
// Back to Top Button functionality
(function() {
  var backToTop = document.getElementById('back-to-top');
  
  window.addEventListener('scroll', function() {
    if (window.pageYOffset > 300) {
      backToTop.style.display = 'block';
    } else {
      backToTop.style.display = 'none';
    }
  });
  
  backToTop.addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({top: 0, behavior: 'smooth'});
  });
  
  // Hover effect
  backToTop.addEventListener('mouseenter', function() {
    this.style.backgroundColor = '#3b5168';
    this.style.transform = 'scale(1.1)';
  });
  
  backToTop.addEventListener('mouseleave', function() {
    this.style.backgroundColor = '#2c3e50';
    this.style.transform = 'scale(1)';
  });
})();
</script>

  </body>

  </html>
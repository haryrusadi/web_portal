<!--================ start footer Area  =================-->	
<footer class="footer-area mt-5">
   <div class="container">
      <div class="row f_widgets_inner">
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget ab_widgets">
               <div class="f_title">
                  <h3>Omahaksoro.com</h3>
               </div>
               <p>OmahaksoroNews merupakan portal berita kekinian</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                  <div class="f_title">
                  <h3>Quick Links</h3>
                  </div>
                  <div class="row">
                     <div class="col-6">
                        <h4 style="color: white">Category</h4>
                        <ul class="list mt-3">
                           <?php foreach($category as $c) : ?>
                              <li><a href="<?= base_url("blog/category/$c->slug") ?>"><?= $c->category_name ?></a></li>
                           <?php endforeach ?>
                        </ul>
                     </div>
                     <div class="col-6">
                        <h4 style="color: white">Info</h4>
                        <ul class="list">
                              <li><a href="<?= base_url('contact') ?>">About</a></li>
                              <li><a href="#">Contact</a></li>
                        </ul>
                     </div>										
                  </div>							
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="single-footer-widget m_news_widgets">
               <div class="f_title">
                  <h3>Social Networks</h3>
               </div>
               <div class="col-lg-4 col-md-4 footer-social icon mx-auto">
                  <a href="https://www.instagram.com/omahaksoro/"><i class="fa fa-instagram"></i></a>
                  <a href="https://www.facebook.com/omahaksoro/"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com/omahaksoro_id"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.youtube.com/channel/UCUh8AVnWm-crf52g6RusyCA"><i class="fa fa-youtube-play"></i></a>
               </div>
            </div>
         </div>	
      </div>
      <div class="row footer-bottom d-flex justify-content-between align-items-center">
         <div class="col-lg-12">
            <div class="f_boder"></div>
         </div>
         <p class="col-lg-8 col-md-8 footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Garsansnews</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
   </div>
</footer>
<!--================ End footer Area  =================-->

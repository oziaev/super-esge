    <footer id="footer">
      <div class="container">
        <div class="left">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-bk-footer.svg" alt="ロゴ">
          <p>COPYRIGHT © ADFINITYS. All rights Reserved.</p>
        </div>
        <div class="right">

        <?php global $lang_switch_url; ?>
          <nav>
            <ul class="page-links">
              <li class="item"><a href="<?php echo esc_url( home_url('/services-en/') ); ?>">SERVICES</a></li>
              <li class="item"><a href="<?php echo esc_url( home_url('/news/') ); ?>">NEWS</a></li>
              <li class="item"><a href="<?php echo esc_url( home_url('/company-en/') ); ?>">COMPANY</a></li>
              <li class="item"><a href="<?php echo esc_url( home_url('/recruitment-en/') ); ?>">RECRUITMENT</a></li>
              <li class="item"><a href="<?php echo esc_url( home_url('/contact-en/') ); ?>">CONTACT</a></li>
              <li class="item jp-en"><a href="<?php echo esc_url( isset($lang_switch_url) ? $lang_switch_url : home_url('/top-jp/') ); ?>">JP \ EN</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>

  </body>
</html>

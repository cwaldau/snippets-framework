
    <?php if ($share == false): // dont show menu on shared links ?>
      <?php include(PARTIALS_PATH . '_sidebar.php');  ?>
    <?php endif; ?>

    </div> <!-- /Wrapper -->

    <?php if ($share == true): // show copyright info when sidebar is removed ?>
      <!-- Footer -->
      <footer id="footer" style="text-align:center;">
        <p class="copyright">
          &copy; <a href="https://indexdigital.ca" target="_blank">Index Digital</a>. All rights reserved.<br>
          Design: <a href="https://html5up.net">HTML5 UP</a>.
        </p>
      </footer>
    <?php endif; ?>

    <!-- Scripts -->
    <script src="<?php echo SITE_ROOT; ?>js/jquery.min.js"></script>
    <script src="<?php echo SITE_ROOT; ?>js/browser.min.js"></script>
    <script src="<?php echo SITE_ROOT; ?>js/breakpoints.min.js"></script>
    <script src="<?php echo SITE_ROOT; ?>js/util.js?v=<?php echo filemtime(ABS_SITE_ROOT . '/js/util.js'); ?>"></script>
    <script src="<?php echo SITE_ROOT; ?>js/main.js?v=<?php echo filemtime(ABS_SITE_ROOT . '/js/main.js'); ?>"></script>

  </body>
</html>

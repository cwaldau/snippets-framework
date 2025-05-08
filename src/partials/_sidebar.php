<!-- Sidebar -->
<div id="sidebar">
  <div class="inner">

    <!-- Menu -->
    <nav id="menu" style="margin-top:20%">
      <header class="major">
        <h2>Table of Contents</h2>
      </header>
      <ul>
        <?php foreach ($snippets as $snippet): ?>
        <li><a href="<?php echo SITE_PATH; ?><?php echo $snippet['slug']; ?>"><?php echo $snippet['name']; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>

    <!-- Footer -->
    <footer id="footer">
      <p class="copyright">
        &copy; <a href="https://indexdigital.ca" target="_blank">Index Digital</a>. All rights reserved.<br>
        Design: <a href="https://html5up.net">HTML5 UP</a>.
      </p>
    </footer>

  </div>
</div>

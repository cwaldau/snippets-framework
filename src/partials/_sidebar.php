<!-- Sidebar -->
<div id="sidebar">
  <div class="inner">

    <!-- Menu -->
    <nav id="menu" style="margin-top:20%">
      <header class="major">
        <h2>Table of Contents</h2>
      </header>

       <div id="searchlist">
        <div class="search"><input class="search" placeholder="Search..." type="text" /></div>
          <ul class="list">
            <?php foreach ($snippets as $snippet): ?>
              <?php if(isset($snippet['folder'])): ?>
                <li class="folder-name"><span class="opener custom"><?php echo $snippet['folder']; ?></span></li>
                <?php foreach ($snippet['children'] as $childSnippet): ?>
                      <li class="subfolder-item"><a href="<?php echo SITE_PATH; ?><?php echo $childSnippet['slug']; ?>" class="<?php echo is_current_page($childSnippet['slug']) ? 'current' : 'not-current'; ?>"><div class="folder"><?php echo $snippet['folder']; ?> /</div><div class="name"><?php echo $childSnippet['name']; ?></div></a></li>
                  <?php endforeach; ?>
                <?php else: ?>
                  <li><a href="<?php echo SITE_PATH; ?><?php echo $snippet['slug']; ?>" class="<?php echo is_current_page($snippet['slug']) ? 'current' : 'not-current'; ?>"><div class="name"><?php echo $snippet['name']; ?></div></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
      </div>
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

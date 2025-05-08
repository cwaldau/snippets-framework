<?php include('./config/config.php'); // relative path; must be included on all pages ?>
<?php include(PARTIALS_PATH . '_header.php');  ?>

  <!-- Main -->
  <div id="main">
    <div class="inner">

      <!-- Header -->
      <header id="header">
        <a href="<?php echo SITE_ROOT; ?>" class="logo"><strong>SNIPPETS</strong></a>
      </header>

      <!-- Banner -->
      <section id="banner">
        <div class="content">
          <header>
            <h1>Snippets</h1>
            <p>A central place for documentation, instructions, code snippets and cheat sheets.</p>
          </header>
          <p>Use the menu to view the different snippets available. All snippets are written in markdown and only require for them to be added to the <code>/snippets</code> folder.</p>

          <p>Share an individual snippet by adding <code>?share</code> to the URL. No sidebar menu is shown to avoid the user browsing other snippets.</p>
        </div>
      </section>

    </div> <!-- /inner -->
  </div> <!-- /main -->

<?php include(PARTIALS_PATH . '_footer.php');  ?>

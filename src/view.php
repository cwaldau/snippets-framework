<?php include('./config/config.php'); // relative path; must be included on all pages ?>
<?php require_once './vendor/parsedown/Parsedown.php'; // markdown parser ?>
<?php $snippet = $_GET['snippet']; ?>
<?php include(PARTIALS_PATH . '_header.php');  ?>

  <!-- Main -->
  <div id="main">
    <div class="inner">

      <!-- Header -->
      <header id="header">
        <a href="<?php echo SITE_ROOT; ?>" class="logo"><strong>SNIPPETS</strong> > <?php echo strtoupper($snippet); ?></a>
      </header>

      <!-- Content -->
      <section>
        <?php
        // Init Parsedown
        $Parsedown = new Parsedown();

        // Read file and pass content through the Markdown parser
        $text = file_get_contents('./snippets/' . $snippet . '.md');
        $html = $Parsedown->text($text);

        echo $html; // echo html formatted markdown inside the section
        ?>
      </section>

    </div> <!-- /inner -->
  </div> <!-- /main -->

<?php include(PARTIALS_PATH . '_footer.php');  ?>

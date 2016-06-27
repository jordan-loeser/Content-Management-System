<?php include 'includes/header.php'; ?>
<!-- START BODY -->
<!-- DASHBOARD HEADER --><header>
  <div class="logo">
    <h1>Developer Panel</h1>
  </div>
  <div class="page-info">
    <h2>Homepage Template</h2>
    <h3>example.com/team/john-doe</h3>
  </div>
</header><!--/DASHBOARD HEADER -->
<div class="sidebar">
  <ul>
    <li><span>Pages</span></li>
    <li><span>CSS</span></li>
    <li class="open"><span>Templates</span>
      <ul class="sub-menu">
        <li><span>Homepage</span></li>
        <li><span>Blog</span></li>
      </ul>
    </li>
  </ul>
</div><!--/SIDEBAR -->
<div class="main-panel with-sidebar">
  <form>
    <textarea id="codeEditor"><div>Hey</div></textarea>
  </form>
</div><!--/MAIN PANEL -->
<!--/END BODY -->
<?php include 'includes/footer.php'; ?>

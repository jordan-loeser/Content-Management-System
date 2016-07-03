<?php include 'includes/header.php'; ?>
<!-- START BODY -->
<div id="section-nav">
  <ul>
    <a href="#"><li><i class="fa fa-file-text"></i>
      <div class="label">Files</div></li></a>
    <a href="#"><li><i class="fa fa-bar-chart"></i>
      <div class="label">Stats</div></li></a>
    <a href="#"><li><i class="fa fa-plug"></i>
      <div class="label">Plugins</div></li></a>
    <a href="#"><li><i class="fa fa-cog"></i>
      <div class="label">Settings</div></li></a>
  </ul>
</div><!--/SECTION NAV -->
<div class="sidebar">
  <ul>
    <li class="has-children"><span>CSS</span>
      <ul class="sub-menu">
        <li><span>Home</span></li>
        <li><span>Blog</span></li>
      </ul>
    </li>
    <li><span>Pages</span></li>
    <li class="has-children"><span>Templates</span>
      <ul class="sub-menu">
        <li><span>Homepage</span></li>
        <li><span>Blog</span></li>
      </ul>
    </li>
  </ul>
</div><!--/SIDEBAR -->
<div class="right">
  <!-- DASHBOARD HEADER -->
  <header>
    <div class="logo">
      <h1>Developer Panel</h1>
    </div>
    <div class="page-info">
      <h2>Homepage Template</h2>
      <div class="url">http://example.com/<span contenteditable="true">team/john-doe</span></div>
      <a href="#" class="button">Save</a>
    </div>
  </header><!--/DASHBOARD HEADER -->
  <div class="main-panel with-sidebar">
    <form>
      <textarea id="codeEditor"><div>Hey</div></textarea>
    </form>
  </div><!--/MAIN PANEL -->
</div><!--/RIGHT -->
<!--/END BODY -->
<?php include 'includes/footer.php'; ?>

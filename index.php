<?php include 'includes/header.php'; ?>
<!-- START BODY -->
<!-- DASHBOARD HEADER --><header>
  <div class="logo">
    <h1>Developer Panel</h1>
  </div>
  <div class="page-info">
    <h2>Homepage Template</h2>
    <div class="url" contenteditable="true">http://example.com/team/john-doe</div>
  </div>
</header><!--/DASHBOARD HEADER -->
<div class="sidebar">
  <ul>
    <li><span>Pages</span></li>
    <li class="has-children"><span>CSS</span>
      <ul class="sub-menu">
        <li><span>Homepage</span></li>
        <li><span>Blog</span></li>
      </ul>
    </li>
    <li class="has-children"><span>Templates</span>
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

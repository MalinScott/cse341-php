<div class="topnav">
  <a class=<?php echo ((isset($pageTitle) &&  $pageTitle ==='Keep Track') ? 'active' : 'not_active')?>  href="index.php">Home</a>
  <a class=<?php echo ((isset($pageTitle) &&  $pageTitle ==='Client List') ? 'active' : 'not_active')?>  href="client-list">Client List</a>
  <a class=<?php echo (isset($pageTitle) &&  $pageTitle ==='Client Search') ? 'active' : 'not_active'?>  href="client-search">Client Search</a>
  <a class=<?php echo (isset($pageTitle) &&  $pageTitle ==='Add Clients') ? 'active' : 'not_active'?>  href="client-add">Add Clients</a>
  <a style="float:right" class=<?php echo (isset($pageTitle) &&  $pageTitle ==='Log Out') ? 'active' : 'not_active'?>  href="#log-out">Log Out</a>
  <a style="float:right" class=<?php echo (isset($pageTitle) &&  $pageTitle ==='Sign In') ? 'active' : 'not_active'?>  href="#sign-in">Sign In</a>
</div>
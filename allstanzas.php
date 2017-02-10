<?php
include("includes/header.php");
include "includes/functions.php";

if(isset($_POST['sort-select'])) {
  $default = $_POST['sort-select'];
} else {
  $default = "title-asc";
}
/*if(isset($_GET['removed'])) {
  $removed_message = "<div class='removed-message'><p class='removed-message-text'>Successfully removed " . $_GET['removed'] . "</p></div>";
}
*/?>
<div class="lower-title-bar">
  <p class="lower-title">All Databases</p>
  <div class="search-container">
  <input type="text" name="search-stanzas" id="searchbox" placeholder="Search stanzas"><a href="javascript:{}" onclick="document.getElementById('search-stanza').submit(getSearchValue());"><img class="search-icon" src="imgs/search-12-xxl.png"></a>
  </div>
</div>
<?php /*if(isset($removed_message)) { echo $removed_message;}*/?>
<div class="breadcrumb-container">
  <ol class="breadcrumb">
    <li class="active"><a href="allstanzas.php">Home</a></li>
  </ol>
</div>
<div class="main-container">
  <a class="create-new-button"href="newstanza.php"><span class="plus">+</span> Add New Resource</a>
  <div class="sort-container">
    <form method="post" action="allstanzas.php" name="sortform" class="sort-form">
      Sort by <select name="sort-select" onchange="sortform.submit();" >
        <?php defaultSelected($default); ?>
      </select>
    </form>
    <form id="edit-stanza-form" method="POST" action="editstanza.php">
    </form>
    <form name="search-stanza" method="POST" action="allstanzas.php" id="search-stanza">
      <input type="hidden" name="isSearch" value="true">
    </form>
    <form name="remove-stanza-form" method="POST" action="form-action.php" id="remove-stanza-form">
      <input type="hidden" name="remove-stanza" id="remove-stanza-boolean" value="false">
    </form>
  </div>
  <?php
    if(isset($_POST['search-val'])) {
      searchStanzas($_POST['search-val']);
    } else {
      getAllStanzas($default);
    }
  ?>
</div>
<?php /*include("includes/footer.php"); */?>

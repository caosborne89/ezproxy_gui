<?php
include "includes/header.php";
include "includes/functions.php";
$directives = "";
if(isset($_POST['title-edit'])) {
  $stanza = getExistingStanzaInfo($_POST['title-edit']);
  $orig_title = $stanza[0];
  $title = $stanza[0];
  $url = $stanza[1];
  $directives_string = $stanza[2];
  ?>
  <div class="lower-title-bar">
    <p class="lower-title">Edit Resource</p>
  </div>
  <div class="breadcrumb-container">
    <ol class="breadcrumb">
      <li><a href="allstanzas.php">Home</a></li>
      <li class="active"><a href="editstanza.php">Edit Resource</a></li>
    </ol>
  </div>
  <div class="main-container">
    <form id="new-stanza-form" method="POST" action="form-action.php">
      <button type="submit" class="add-rm-button add-directive add-stanza"><span class="plus">+</span> Save stanza</button>
      <div class="directive-block">
        <label class="directive-label">Title</label><br>
        <input type="text" name="title" id="title" value="<?php echo $title; ?>">
      </div>
      <div class="directive-block">
        <label class="directive-label">Url</label><br>
        <input type="text" name="url" id="url" value="<?php echo $url; ?>">
      </div>
      <input type="hidden" name="directives-string" value="<?php echo $directives_string; ?>" id="directives-string">
      <div class="directive-block">
        <label class="directive-label">Directives</label><br>
        <select id="dtype">
          <option value="DomainJavascript">DomainJavascript</option>
          <option value="HostJavascript">HostJavascript</option>
          <option value="Domain">Domain</option>
          <option value="Host">Host</option>
        </select><br>
        <input type="text" id="directive"><br>
        <a class="add-rm-button add-directive" href="javascript:addDirective();">Add</a>
      </div>
      <input type="hidden" name="edit-function" value="1">
      <input type="hidden" name="orig-title" value="<?php echo $orig_title; ?>">
      <input type="hidden" id="directives-list" name="directives" value="">
    </form>
  </div>
  <script src="js/editStanza.js"></script>
  <?php
/*  include "includes/footer.php";*/
} else {
  echo "error";
}
  ?>
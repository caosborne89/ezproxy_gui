<?php 
include "includes/header.php";
$directives = "";
?>
<div class="lower-title-bar">
  <p class="lower-title">New Resource</p>
</div>
<div class="breadcrumb-container">
  <ol class="breadcrumb">
    <li><a href="allstanzas.php">Home</a></li>
    <li class="active">Add New Resource</li>

  </ol>
</div>
<div class="main-container">
  <form id="new-stanza-form" method="POST" action="form-action.php">
    <button type="submit" class="add-rm-button add-directive add-stanza" id="new-stanza-submit"><span class="plus">+</span>Add Stanza</button>
    <div class="directive-block">
      <label class="directive-label">Title</label><br>
      <input type="text" name="title" id="title" required>
    </div>
    <div class="directive-block">
      <label class="directive-label">Url</label><br>
      <input type="text" name="url" id="url" required>
    </div>
    <input type="hidden" id="directives-list" name="directives" value="">
  </form>
  <div class="directive-block">
    <label class="directive-label">Directives</label><br>
    <select id="dtype">
      <option value="DomainJavascript">DomainJavascript</option>
      <option value="HostJavascript">HostJavascript</option>
      <option value="Domain">Domain</option>
      <option value="Host">Host</option>
    </select><br>
    <input type="text" id="directive" name="directive"><br>
    <a class="add-rm-button add-directive" href="javascript:addDirective();">Add</a>
  </div>
</div>
<?php /*include "includes/footer.php"; */?>

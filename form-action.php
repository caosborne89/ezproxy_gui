<?php
include("includes/functions.php");

if(isset($_POST['edit-function'])) {
  alterStanza($_POST['title'], $_POST['url'], $_POST['directives'], $_POST['orig-title']);
  echo "<script> alert('Alterations to " . $_POST['title'] . " have been successfully saved!');window.location='allstanzas.php'</script>";
} else if(isset($_POST['remove-stanza']) && $_POST['remove-stanza'] === "true") {
  removeStanze($_POST['title-remove']);
  echo "<script>window.location='allstanzas.php'</script>";
} else {
  insertStanza($_POST['title'], $_POST['url'], $_POST['directives']);
  echo "<script> alert('" . $_POST['title'] . " has been successfully saved as a new stanza!');window.location='allstanzas.php'</script>";
}



<?php

function insertStanza($title, $url, $directives) {
  include("dbconnect.php");
  try {
    date_default_timezone_set('America/Phoenix');
    $dateStamp = date("F j, Y h:i:s A");
    $sql = "INSERT INTO stanzas (title, url, additional_directives, time_updated) VALUES ('" . $title . "', '" . $url . "', '" . $directives . "', '" . $dateStamp . "')";
    $dbh->query($sql);
  }
  catch (Exception $e) {
    echo "Unable to add database";
    exit;
  }
}

function getAllStanzas($sort) {
  include("dbconnect.php");
  switch ($sort) {
    case "title-asc":
      $sql = "SELECT * FROM stanzas ORDER BY title ASC";
      break;
    default:
      $sql = "SELECT * FROM stanzas ORDER BY title DESC";
      break;
  }
  
  try {
    $stanzas = $dbh->query($sql);
  }
  catch (Exception $e) {
    echo "Unable to add database";
    exit;
  }
  
  if($stanzas->rowCount() === 0) {
    print("<h1 class='no_stanzas'>There are currently no stanzas in the configuration file</h1>");
  }
  foreach($stanzas as $stanza) {
    $title = $stanza[0];
    $updated = $stanza[3];
    $url = $stanza[1];
    print(
      "<div class='directive-block stanza-list' onclick='collapseStanza(this)'>" .
        "<p class='stanza-title'>$title</p>" .
      "</div>" .
      "<div class='dropdown-stanza-info'>" .
        "<a class=\"add-rm-button add-directive edit-remove-stanza\" onclick=\"document.getElementById('edit-stanza-form').submit(getStanzaTitle(this));\">Edit</a>" .
        "<a class=\"add-rm-button add-directive edit-remove-stanza\" onclick=\"document.getElementById('remove-stanza-form').submit(confirmRemove(this));\">Remove</a>" .
        "<p>Updated last on " . $updated ."</p>" .
        "<p>Ezproxy Url: <a href='http://ezproxy.library.arizona.edu/login?url=$url'>http://ezproxy.library.arizona.edu/login?url=$url</a></p>" .
      "</div>"
    );
  }
}
function defaultSelected($selected) {
  $options = array(
    "<option value=\"title-asc\">Title &uarr;</option>",
    "<option value=\"title-dsc\">Title &darr;</option>"
  );

  switch ($selected) {
    case "title-asc":
      $options[0] = "<option selected='selected' value=\"title-asc\">Title &uarr;</option>";
      break;
    case "title-dsc":
      $options[1] = "<option selected='selected' value=\"title-dsc\">Title &darr;</option>";
      break;
  }

  echo $options[0], $options[1];
}
function getExistingStanzaInfo($title) {
  include("dbconnect.php");
  $sql = "SELECT * FROM stanzas WHERE title='$title' AND removed=0";
  $stanzas = $dbh->query($sql);
  $info = [];
  foreach($stanzas as $stanza) {
    $info =  $stanza;
  }
  return $info;
}
function alterStanza($title, $url, $directives, $orig_title) {
  include("dbconnect.php");

  date_default_timezone_set('America/Phoenix');
  $dateStamp = date("F j, Y h:i:s A");
  $sql = "UPDATE stanzas SET title='$title', url='$url', additional_directives='$directives', time_updated='$dateStamp' WHERE title='$orig_title'";

  try {
    $dbh->query($sql);
  }
  catch (Exception $e) {
    echo "Unable to add database";
    exit;
  }
}

function searchStanzas($search) {
  include("dbconnect.php");
  $sql = "SELECT * FROM stanzas WHERE title='$search'";


  $stanzas = $dbh->query($sql);
  if($stanzas === null) {
    print(
      "<p class='no-results'>No results found</p>"
    );
  } else {
    foreach ($stanzas as $stanza) {
      $title = $stanza[0];
      $updated = $stanza[3];
      $url = $stanza[1];
      print(
        "<div class='directive-block stanza-list' onclick='collapseStanza(this)'>" .
        "<p class='stanza-title'>$title</p>" .
        "</div>" .
        "<div class='dropdown-stanza-info'>" .
        "<a class=\"add-rm-button add-directive edit-remove-stanza\" onclick=\"document.getElementById('edit-stanza-form').submit(getStanzaTitle(this));\">Edit</a>" .
        "<a class=\"add-rm-button add-directive edit-remove-stanza\" onclick=\"document.getElementById('remove-stanza-form').submit(confirmRemove(this));\">Remove</a>" .
        "<p>Updated last on " . $updated . "</p>" .
        "<p>Ezproxy Url: <a href='http://ezproxy.library.arizona.edu/login?url=$url'>http://ezproxy.library.arizona.edu/login?url=$url</a></p>" .
        "</div>"
      );
    }
  }
}
function removeStanze($title) {
  include("dbconnect.php");

  $sql = "DELETE from stanzas WHERE title='$title'";

  try {
    $dbh->query($sql);
  }
  catch (Exception $e) {
    echo "Unable to add database";
    exit;
  }
}
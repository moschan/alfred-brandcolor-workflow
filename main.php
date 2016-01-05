<?php
/* alfred-cage-workflow
* @moschan
*/

// create workflow object
require('workflows.php');
require('index.php');

$wf = new Workflows();

foreach( $_brandColors as $name => $color_code ) {
  if (count($color_code) == 0) { continue; }
  if (preg_match('/.*' . $query . '.*/', $name)) {
    $wf->result( time(), $color_code, "$name", $color_code, "./icons/$name.png" );
  }
}

// Return the result xml
echo $wf->toxml();

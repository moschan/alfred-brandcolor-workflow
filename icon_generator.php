<?php
header("Content-type: image/png");

foreach($_brandColors as $name => $color_code) {
  $img = imagecreatetruecolor(100, 100);
  $red = hexdec(100); $green = hexdec(100); $blue = hexdec(100); 

  if( eregi( "[#]?([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})", $color_code, $ret ) ) { 
    $red = hexdec( $ret[1] ); 
    $green = hexdec( $ret[2] ); 
    $blue = hexdec( $ret[3] ); 
  } 

  $background_color = imagecolorallocate($img, $red, $green, $blue);
  imagefilledrectangle($img, 0, 0, 300, 300, $background_color);
  imagepng($img, './icons/' . $name . '.png');
  imagedestroy($img);
}

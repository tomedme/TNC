<?php

$args = $argv;

// print_r($args); exit;

// convert img/p0_entrance_w4000.jpg -crop 200x200 img/p_%d.jpg
// php rename.php p_ p0 5 4000

// convert img/p0_entrance_w2000.jpg -crop 200x200 img/p_%d.jpg
// php rename.php p_ p0 4 2000

$p = 'p_'; // $args[1]; // file pattern
$pano = $args[2]; // pano id
$z = $args[3]; // zoom level

$world_size_w = $args[4]; // the x
$world_size_h = $args[4] / 2; // the y

$tile_w = $tile_h = 200;

$tile_i = 0;

for ($y = 0, $h_max = $world_size_h / $tile_h; $y < $h_max; $y++) {
  for ($x = 0, $w_max = $world_size_w / $tile_w; $x < $w_max; $x++) {
    
    echo "tile $tile_i: Z:$z X:$x - Y:$y \n";

    rename("img/$p$tile_i.jpg", "img/$pano/$z-$x-$y.jpg");

    $tile_i++;
  }
}

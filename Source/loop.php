<?php
function loop() {
  $sum = 0;
  for ($i = 0; $i < 1000000; $i++) {
    $sum += $i * 2;
  }
}

function loop_test() {
  $startTime = microtime(true);
  loop();
  $endTime = microtime(true);
  echo $endTime - $startTime . " sec\n";
}
function main() {
  loop_test();
  loop_test();
  loop_test();
}

main();

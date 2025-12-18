<?php
  $ledStatus = $_POST['LEDStatus'];
  $ledValue = isset($ledStatus);
  if(isset($_POST['LEDStatus'])) {
    echo "<p>LED is enabled</p>";
    shell_exec("gpio mode 7 out");
    $output = shell_exec("gpio write 7 1");
    $output = shell_exec("gpio read 7");
    echo "<br><p>$output</p>";
  }else{
    echo "<p>LED is disabled</p>";
    shell_exec("gpio mode 7 out");
    $output = shell_exec("gpio write 7 0");
    $output = shell_exec("gpio read 7");
    echo "<br><p>$output</p>";
  }

?>

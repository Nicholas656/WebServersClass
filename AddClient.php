<?php
  
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $countryCode = htmlspecialchars($_POST["countryCode"]);
    $machineName = htmlspecialchars($_POST["machineName"]);
    $machineOS= htmlspecialchars($_POST["machineOS"]);
    $lastOnline = htmlspecialchars($_POST["lastOnline"]);
    $uptime = htmlspecialchars($_POST["uptime"]);
  }
  $conn = mysqli_connect("localhost", "php", "ThatDamnElephant", "clients"); #Connect to SQL database
  if(!$conn){
    die("Connection failed: {mysqli_connect_error()}");
  }

  $dateTimeProcessor = new DateTime(htmlspecialchars($lastOnline)); #Necessary for formatting our supplied string
  $lOnlineString = rtrim(rtrim($dateTimeProcessor->format('Y-m-d H:i:s'), '0'), ':'); #format the supplied date time string with a format
  #that we're looking for and trim off the seconds counter
  $uptimeString = ltrim($uptime, '0'); #Trim the leading zeros on the left side

  #Visualization of data to be sent to the databse, mostly for debugging purposes
  #echo "<p>{$countryCode}</p> </br>";
  #echo "<p>{$machineName}</p> </br>";
  #echo "<p>{$machineOS}</p> </br>";
  #echo "<p>{$lOnlineString}</p> </br>";
  #echo "<p>{$uptimeString}</p> </br>";

  $command = "INSERT INTO client_list (country,client_name,operating_system,lastContact,uptime) VALUES ('$countryCode', '$machineName', '$machineOS', '$lOnlineString', '$uptimeString')";
  

  $result = mysqli_query($conn, $command);

  if($result == TRUE)
  {
    echo "<p>Client successfully added!</p> </br>";
    echo "<p>You can now close this page and please refresh the main panel to view your changes</p></br>";
  }

  mysqli_close($conn);
?>

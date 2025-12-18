<!DOCTYPE html>
<html>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <head>
    <script>
    function openFixedSizePopup(url, windowName, width, height) {
      const features = `width=${width},height=${height},toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no`;
      window.open(url, windowName, features);
      return false; // Prevents the default link behavior
    }
    </script>
        <style>
            html, body, div{
                margin: 0;
                padding: 0;
                border: 0;
                outline: 0;
                font-size: 100%;
                vertical-align: baseline;
                background: transparent;
            }
            .sidenav {
                width: 15%;
                height: 100%;
                background-color: #000000;
                float: left;
                margin-top: auto;
            }
            th, td {
                border:1px solid white;
                box-shadow: 1 1 3px white;
                color: white;
            }
            table {
                border-color: #FFFFFF;
                box-shadow: 0 0 3px white;
                color: white;
            }
            tbody tr:hover td{
                border-color: #00FBFF;
                box-shadow: 0px 1px 15px #00FBFF;
            }
            tbody tr:hover {
                border-color: #00FBFF;
                box-shadow: 0px 1px 15px #00FBFF;
            }
            .bgrnd {
              width: 85%;
              height: 100%;
              background-color: #222222;
              float: left;
            }
            html,
            body {
                height: 100%;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                width: 100%;
                background-color: #000000;
            }

            li a {
              display: block;
              color: white;
              padding: 8px 16px;
              text-decoration: none;
            }

            li a.active {
              background-color: #00AA00;
              color: white;
            }

            li a:hover:not(.active) {
              background-color: #555555;
              color: white;
            }
        </style>
        <script>
            jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });
        </script>
    </head>
    <title>Panel</title>
    <body style="padding: 0;">
        <div class="sidenav">
            <div style="height: 10px;"></div>
            <div style="width: 100%; height: 200px;">
                <img src="img/banner.jpg" style="height: 200px; width: 200px; display: block;  margin-left: auto; margin-right: auto;"/>
            </div>
            <ul>
                <li><a href="#home">Overview</a></li>
                <li><a href="#Detailed">Detail</a></li>
                <li><a href="" onclick="openFixedSizePopup('/WebServersClass/AddClient.html', 'Add a client',700, 400);">Add Client</a></li>
              </ul>              
        </div>
        <div class="bgrnd">
            <table style="width: 100%;">
                <tr>
                    <th style="width: 150px;">Client ID</th>
                    <th style="width: 100px;">Country</th>
                    <th>Client Name</th>
                    <th>Operating System</th>
                    <th>Last Contact</th>
                    <th>Uptime</th>
                </tr>
<?php
  #error_reporting(E_ALL);
  ini_set('display errors', '1');
  $conn =  mysqli_connect("localhost", "php", "ThatDamnElephant", "clients");
  if(!$conn){
    die("Connection failed: {myqsli_connect_error()}");
  }
  $result = mysqli_query($conn, "SELECT * FROM client_list;");

  foreach($result as $key=>$row) {
    echo "<tbody class='clickable-row data-href='?client='{$key}'>";
    echo "<td>{$row["id"]}</td>";
    echo "<td>{$row["country"]}</td>";
    echo "<td>{$row["client_name"]}</td>";
    echo "<td>{$row["operating_system"]}</td>";
    echo "<td>{$row["lastcontact"]}</td>";
    echo "<td>{$row["uptime"]}</td>";
    echo "</tbody>";
  }
?>
            </table>
        </div>
    </body>
<html>

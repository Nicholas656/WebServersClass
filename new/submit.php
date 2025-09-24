<p>GET: <?= var_dump($_GET) ?></p>
<p>POST: <?= var_dump($_POST) ?></p>

<!DOCTYPE html>
<html>
<head>
<title>Submission</title>
</head>
<body>
    <?php
    if(isset($_POST['reason']))
    {
        $reason=htmlspecialchars($_POST['reason']);
        $email=htmlspecialchars($_POST['email']);
        $additional=htmlspecialchars($_POST['additional']);
        echo "Reason for submission: {$reason}";
        echo "<br>";
        echo "Email address: {$email}";
        echo "<br><br>";
        echo "Additional information:";
        echo "{$additional}";
    }
    ?>
</body>
</html>
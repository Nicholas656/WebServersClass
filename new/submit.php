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
        echo "Reason for submission: {$reason}";

        
    }
    ?>
</body>
</html>
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
        echo "Reason for submission: {$reason}\n";
        echo "Email address: {$email}\n\n";
        echo "Additional information:";
        echo "<br>";
        echo "{$additional}\n";
    }
    ?>
</body>
</html>
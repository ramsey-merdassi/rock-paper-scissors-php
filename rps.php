<!DOCTYPE html>
<html>
<head>
    <style>

        form {
            display: flex;
            justify-content: center;
        }

        input {
            padding: 2rem;
            margin: 0.4rem;
        }

        h4 {
            display: flex;
            justify-content: center;
        }

        h2 {
            display: flex;
            justify-content: center;
        }

        .rock {
            background-color: #df20b6;
        }

        .scissors {
            background-color: #1ecbe1;
        }

        .paper {
            background-color: #e1d81e;
        }

    </style>
</head>
<body>
<form action="rps.php" method="post">
    <input class='rock' type="submit" value="rock" name="guess">
    <input class='paper' type="submit" value="paper" name="guess">
    <input class='scissors' type="submit" value="scissors" name="guess">
</form>
</body>
</html>

<?php

$userGuess = $_POST['guess'] ?? null;
$options = ['rock', 'paper', 'scissors'];


if (isset($_POST['guess'])) {
    echo "<br><h4>You choose ".$userGuess.'</h4>';
    $computerGuess = $options[rand(0, 1)];

    if ($userGuess === $computerGuess)
    {
        echo "<br><h4>Computer chooses $computerGuess.</h4><br>"
            ."<h2>It's a draw</h2>";
    }
    elseif (($userGuess === $options[0] && $computerGuess === $options[1]) ||
        ($userGuess === $options[1] && $computerGuess === $options[2]) ||
        ($userGuess === $options[2] && $computerGuess === $options[0]))
    {
        echo "<br><h4>Computer chooses $computerGuess</h4><br>"
            ."<h2>Computer wins</h2>";
    }
    else
    {
        echo "<br><h4>Computer chooses $computerGuess</h4><br>"
            ."<h2>You win</h2>";
    }
}


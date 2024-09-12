<!DOCTYPE html>
<html>
<body>
<form action="rps.php" method="post">
    <input type="submit" value="rock" name="guess">
    <input type="submit" value="paper" name="guess">
    <input type="submit" value="scissors" name="guess">
</form>
</body>
</html>

<?php

if (isset($_POST['guess'])) {
    $userGuess = $_POST['guess'];
    echo "<br>You choose ".$userGuess;
}


$options = ['rock', 'paper', 'scissors'];

$computerGuess = $options[rand(0, 1)];

if ($userGuess === $computerGuess)
{
    echo "<br>Computer chooses $computerGuess<br>"
    ."It's a draw";
}
elseif (($userGuess === $options[0] && $computerGuess === $options[1]) ||
        ($userGuess === $options[1] && $computerGuess === $options[2]) ||
        ($userGuess === $options[2] && $computerGuess === $options[0]))
{
    echo "<br>Computer chooses $computerGuess<br>"
    ."Computer wins";
}
else
{
    echo "<br>Computer chooses $computerGuess<br>"
    ."You win";
}
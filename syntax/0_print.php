<?php
echo "Hi! ", "I am from NUS.", "<br>";
echo "Hi! " . "I am from NUS." . "<br>";
echo ("Hi! I am from NUS.<br>");
echo ("Hi! "), ("I am from NUS."), ("<br>");
// Invalid: echo("Hi! ", "I am from NUS.", "<br>");

print "Hi! " . "I am from NUS." . "<br>";
print("Hi! " . "I am from NUS." . "<br>");
// Invalid: print "Hi! ", "I am from NUS.", "<br>";

$result = print("Hello world!<br>");
echo $result, "<br>";


echo "\n\n\n";
echo "<br><br><br>";


echo "This is the first line.<br>";
echo "This is the second line.<br>";


echo "\n\n\n";
echo "<br><br><br>";


echo "User cannot see the line break.\n";
echo "User cannot see the line break.\n";

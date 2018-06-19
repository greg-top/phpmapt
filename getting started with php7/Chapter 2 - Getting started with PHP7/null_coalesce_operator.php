<?php

# long way of checking if super variable is set
echo (isset( $_GET['id'] ) ? $_GET['id'] : 0) . '<br>';
echo (isset( $_GET['name'] ) ? $_GET['name'] : 0) . '<br>';
echo (isset( $_GET['age'] ) ? $_GET['age'] : 0) . '<br>';
echo (isset( $_GET['year'] ) ? $_GET['year'] : 0) . '<br>';

# Null Coelesce Operator
echo ($_GET['id'] ?? 0) . '<br>';
echo ($_GET['name'] ?? 0) . '<br>';
echo ($_GET['name'] ?? 0) . '<br>';
echo ($_GET['name'] ?? 0) . '<br>';

# Example 2
$firstName = 'Ted'; // assign this var to null and see the output of below will be Greg
$lastName = null;

# Output first name if exists > (if not) output second name if exists > (if not) output Greg
echo $firstName ?? $lastName ?? 'Greg';
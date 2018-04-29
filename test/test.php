<?php

require_once "testModel.php";

// -- Get Test
$result = TestUser::Get(1);
echo "Get Test. Result: " . $result['firstName']." ".$result['lastName'];
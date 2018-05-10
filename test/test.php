<?php

require_once "testModel.php";

echo "<PRE>";

// -- Get Test
// -------------------------------------------------------------------------------------------------------------------------
$result = TestUser::Get(1);
echo "Get Test. Result: ";
echo var_dump($result);

// -- GetList Test
// -------------------------------------------------------------------------------------------------------------------------
$result = TestUser::GetList(); // All
echo "GetList All Test. Result: ";
echo var_dump($result);

$result = TestUser::GetList(['firstName' => 'Tyler']); // Single filter
echo "GetList Single Filter Test. Result: ";
echo var_dump($result);

$result = TestUser::GetList(['firstName' => 'Tyler', 'lastName' => 'Guy']); // Multi filter
echo "GetList Multi Filter Test. Result: ";
echo var_dump($result);

// -- GetOne Test
// -------------------------------------------------------------------------------------------------------------------------
$result = TestUser::GetOne(['firstName' => 'Tyler']); // Single filter
echo "GetOne Single Filter Test. Result: ";
echo var_dump($result);

$result = TestUser::GetOne(['firstName' => 'Tyler', 'lastName' => 'Guy']); // Multi filter
echo "GetOne Multi Filter Test. Result: ";
echo var_dump($result);

$result = TestUser::GetOne(); // No filter
echo "GetOne No Filter Test. Result: ";
echo var_dump($result);

// -- Add Test
// -------------------------------------------------------------------------------------------------------------------------
$result = TestUser::Add([
    'firstName' => 'Jennifer',
    'lastName' => 'Smith',
    'userName' => 'jennifer.smith'
]); // No filter
echo "Add test. Result: ";
echo var_dump($result);
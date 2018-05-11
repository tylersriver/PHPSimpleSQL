<?php
require_once "../SimpleORM.php";
class TestUser extends SimpleORM
{
    protected static $table = "testUser";
    protected static $key = "id";
    protected static $fields = "id, firstName, lastName, startDate, isActive";
}
<?php
require_once "../SimpleORM.php";
class testUser extends SimpleORM
{
    protected static $table = "testUSer";
    protected static $key = "id";
    protected static $fields = "id, firstName, lastName, startDate, isActive";
}
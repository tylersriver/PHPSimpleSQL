<?php
/**
 * Class SimpleORM
 *
 * Adds simple ORM functionality, designed to
 * be extended by another class defining table
 * properties
 *
 * Created By: Tyler Sriver
 * @author <tyler.w.sriver@eagles.oc.edu>
 */
require_once "SimpleSQL.php";
class SimpleORM
{
    // -- Class Fields
    protected static $table = "";
    protected static $key = "";
    protected static $fields = "";

    /**
     * @param int $id
     * @return array
     */
    public function Get($id)
    {
        $selectFields = (self::$fields == "") ? "*" : self::$fields;
        $sql = "SELECT ".$selectFields." from ".self::$table." WHERE ".self::$key." = ? LIMIT 1";
        $result = query($sql, [$id]);
        return $result[0];
    }

}
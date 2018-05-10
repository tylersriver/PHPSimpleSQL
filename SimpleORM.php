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
    // -- DB Table Details
    protected static $table;
    protected static $key;
    protected static $fields = "*";

    /**
     * Get record by primary key
     * @param int $id
     * @return array
     */
    public static function Get($id)
    {
        $sql = "SELECT ".static::$fields." FROM ".static::$table." WHERE ".static::$key." = ? LIMIT 1";
        $result = query($sql, [$id]);
        return $result[0];
    }

    /**
     * Get list of records filtered
     * @param array $where
     * @return array
     */
    public static function GetList($where = array())
    {
        $sql = "SELECT ".static::$fields." FROM ".static::$table." ";

        // Add where if set
        if(count($where) > 0) {
            $sql .= " WHERE ";
        }

        // Add where clause
        $params = array();
        $i = 0;
        foreach($where as $key => $val)
        {
            $sql .= $key ." = ? ";
            $params[] = $val;

            $i++;
            if($i < count($where)) {
                $sql .= " AND ";
            }
        }

        return query($sql, $params);
    }

    /**
     * Get one record filtered
     * @param array $where
     * @return array
     */
    public static function GetOne($where = array())
    {
        $result = static::GetList($where);
        return $result[0];
    }

}
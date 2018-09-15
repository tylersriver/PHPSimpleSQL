# 1 SimpleSQL
A simple self managed wrapper for MySQLi in PHP.
This class is useful for small websites with a single DB connection. 

## 1.1 Why?
I have been making some small personal websites and I wanted a way to minimize the amount of code
it took to use MySQLi and still have the security to help prevent sql injection. 
I have reduced it to a single function call with this class.

## 1.2 Features
 * Singleton maintains single connection
 * Simple to use
 * single flexible query function
 * It runs any query (Select, Update, Delete, Insert) and it will parameterize the query
 * Inserts return the insert id
 
## 1.3 Example

### 1.3.1 Defining MySQL Server Constants
```php
define("MYSQL_SERVER", "localhost");
define("MYSQL_USER", "testUser");
define("MYSQL_PASSWORD", "test");
define("MYSQL_DB", "test");
```

### 1.3.2 Using the class
```php
<?php
require_once "SimpleSQL.php";
use SimpleSQL\SQL as SQL;
$sql = 'select * from test where field = ? and field2 = ?';
$params = ['fieldValue', 'field2Value']; // Params added in order of '?' placement in query
$result = SQL::query($sql, $params);
```

# 2 SimpleORM
A simple extendable class for making Database calls. 
Using a model you can encapsulate your SQL queries to a class. It also provides basic CRUD functions.

## 2.1 Features
 * CRUD Functions
   * Get - Gets a record from the table by id
   * GetList - Gets a list of records by a simple where filter
   * GetOne - Returns 1 record from GetList
   * Add - Inserts a record
   * Update - updates a record by id
   * UpdateMany - updates records by simple where filter
   * Delete - deletes record by id
   * DeleteMany - deletes records by where filter
 * Easy to use a setup
 * Simple encapsulation for Database operations
 * Wraps the SimpleSQL class for MySQLi
 
## 2.2 Example
This is a quick use case. More examples of each CRUD Function in the test directory.
```php
require_once "SimpleSQL.php";
use SimpleSQL\SQL as SQL;
require_once "SimpleORM.php";

// This class will hold all operations for 1 DB table
class TestUser extends SimpleSQL\ORM
{
    protected static $table = "testUser"; // Exact mysql table name
    protected static $key = "id"; // the primary key field name
    protected static $fields = "id, firstName, lastName, startDate, isActive"; // the fields you want returned fromt the table

    public static function GetUsersForStuff()
    {
        // Additional functions can be added for custom operations
        $sql = "SELECT * FROM testUser ... ";
        return query($sql);
    }
}

// Using the class
$results = TestUser::Get(123) // parameter is id of record
$newRecord = TestUser::Add(['firstName' => 'Tyler']);
``` 

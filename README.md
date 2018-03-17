# PHPSimpleSQL
A simple self managed wrapper for MySQLi in PHP

# Features
 * Singleton maintains single connection
 * Simple to use
 * single flexible query function
 
# Example
```php
<?php
require_once "SimpleSQL.php";
$sql = 'select * from test where field = ? and field2 = ?';
$params = ['fieldValue', 'field2Value']; // Params added in order of '?' placement in query
$result = query($sql, $params);
```

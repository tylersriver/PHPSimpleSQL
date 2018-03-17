# PHPSimpleSQL
A simple self managed wrapper for MySQLi in PHP.
This class is useful for small websites with a single DB connection. 

# Why?
I have been making some small personal websites and I wanted a way to minimize the amount of code
it took to use MySQLi. I have reduced it to a single function call.

# Features
 * Singleton maintains single connection
 * Simple to use
 * single flexible query function
 * It runs any query (Select, Update, Delete, Insert) and will parameterize 
 
# Example
```php
<?php
require_once "SimpleSQL.php";
$sql = 'select * from test where field = ? and field2 = ?';
$params = ['fieldValue', 'field2Value']; // Params added in order of '?' placement in query
$result = query($sql, $params);
```

# objectivePDO
#### objectivePDO is a PHP object for connection to database using PDO



#How to install
- copy, clone or download the files to your directory .
- creat an index.php file.
- copy and paste this code at the top of the file.

```php
require_once (Config.php");
require_once (init.php"); 
require_once (DB.php");
```

- NOTE: The folder path may vary pending on the structure of your directory.


#How to Open Connection with the database
- Use this to open connection with the database

```php
$newConnection = DB::getInstance();

var_dump($newConnection);
```


#How to query the database
- Use this to query the database

```php
$newConnection = DB::getInstance()->query("SELECT * FROM [table_name]");

var_dump($newConnection);
```

- Use this to get all the records

```php
var_dump($newConnection->results());
```

- Use this to get the first record

```php
var_dump($newConnection->first());
```

- Use this to get the record count

```php
var_dump($newConnection->count());
```

- Use this to get the error status

```php
var_dump($newConnection->error());
```

- Use this to get the error message

```php
var_dump($newConnection->error_message());
```

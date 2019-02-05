# objectivePDO
#### objectivePDO is a PHP object for connecting and manipulating database using PDO



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

- NOTE: Open the init.php file to set database credentials.


#How to Open Connection with the database
- Use this to open connection with the database

```php
$newConnection = DB::getInstance();

var_dump($newConnection);
```


#How to query tables in the database
- Use this to query the database

```php
$getData = $newConnection->query("SELECT * FROM [table_name]");

var_dump($getData);
```
NOTE: You can write any query statement inbetween the query brackets i.e  "->query([any query string goes in here])"


- Use this to get all the records

```php
var_dump($getData->results());
```

- Use this to get the first record

```php
var_dump($getData->first());
```

- Use this to get the record count

```php
var_dump($getData->count());
```

- Use this to get the error status

```php
var_dump($getData->error());
```

- Use this to get the error message

```php
var_dump($getData->error_message());
```



#How to update tables in the database
- Use this to update a record

```php
$updateRecord = $newConnection->update([table_name],[name_of_primary_key_column],[record_id],[fields_to_update]);
```
Example:
Given a table user containing user data: <br><br>
userid | name  | sex | age<br>
1	   | David | M   | 20<br>
2	   | MIKE  | M   | 22<br><br>
We would update the record Mike this way:
```php
$updateRecord = $newConnection->update(user,userid,2,array("name" => mike2, "age" => 34));
```



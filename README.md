# Midterm-project

## Programming language, library and framwork
- PHP
- Mysqli
- HTML
- CSS 
- JavaScript
- Bootstrap

## Get start

```bash
   $ git clone https://github.com/Apisit250aps/midterm-sskru-1.git 
```

### 1. Move folder to xampp  ``` :\xampp\htdoc\ ``` and run xampp
   - Folder ``` 'upload' ``` move to  ``` :\xampp\htdoc\ ```

### 2. Create your database on [phpmyadmin](http://localhost/phpmyadmin/)
   - Create new database
   - `file.sql` import to your database

### 3. config your database connect `config.php`
```php
<?php 

$HostName = 'localhost';      // your host name
$UserName = 'root';           // your username
$PassWord = '';               // your password
$DataBase = 'EcommerceStore'; // databasename 
$con = mysqli_connect($HostName, $UserName, $PassWord, $DataBase);

?>
```

### 4. Run xampp `apache admin`  and  `MySQL admin`

#### Facebook [YU](https://web.facebook.com/aps.apisit.250/)

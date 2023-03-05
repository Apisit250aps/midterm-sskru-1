# Midterm-project

## Programming language, library and framwork
- PHP
- Mysqli
- HTML
- CSS 
- JavaScript
- Bootstrap

## Get start
ใช้คำสั่งนี้ ใน cmd หรือ PowerShell

```bash
   $ git clone https://github.com/Apisit250aps/midterm-sskru-1.git 
```

### 1. ย้าย โฟลเดอร์ ทั้งหมดไปที่  ``` :\xampp\htdoc\ ``` and run xampp
   - ในโปรเจค `comstore` ให้ย้าย ``` 'upload' ``` ออกมาที่  ``` :\xampp\htdoc\ ```

### 2. สร้างฐานข้อมูลใน [phpmyadmin](http://localhost/phpmyadmin/)
   - สร้างฐานข้อมูล และตั้งชื่อฐานข้อมูล
   - จากนั้นนำเข้า  `file.sql` ของแต่ละโปรเจค 
   - กด Import และหา `file.sql` ที่อยู่ในโปรเจค และเลือก

### 3. ให้แก้ไขไฟล์ `config.php` ของแต่ละโปรเจค 
```php
<?php 

$HostName = 'localhost';      // your host name
$UserName = 'root';           // your username
$PassWord = '';               // your password
$DataBase = ''; // databasename 
$con = mysqli_connect($HostName, $UserName, $PassWord, $DataBase);

?>
```
เปลี่ยน `$DataBase = ''` เป็นชื่อที่เราตั้งในข้อ 2 

### 4. Run xampp [comstore](http://localhost/comstore/)  or  [note](http://localhost/note/)

#### Facebook [YU](https://web.facebook.com/aps.apisit.250/)

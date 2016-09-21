
<?php
class SimpleClass
{

    public static $var = 2;

    // method declaration
    public function displayVar() {

        echo self::$var;
        self::$var++;
    }
}


$s = new SimpleClass();
$s->displayVar();

$s->displayVar();

$s->displayVar();



?>

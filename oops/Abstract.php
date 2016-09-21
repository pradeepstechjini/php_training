
<?php
interface A
{
  public function display($name);
}

interface B
{
  public function prefixName($name);
}

class ConcreteClass implements A,B
{

    // Our child class may define optional arguments not in the parent's signature
    public function prefixName($name, $separator = ".") {
        if ($name == "Pacman") {
            $prefix = "Mr";
        } elseif ($name == "Pacwoman") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        $this->display("{$prefix}{$separator} {$name}". "\n");
    }

    public function display($name){
      echo $name;
    }
}

$class = new ConcreteClass;
$class->prefixName("Pacman");
$class->prefixName("Pacwoman");
$class->prefixName("Vijay");
?>

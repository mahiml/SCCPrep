<?php
class Foo{
    public $bar ;

    public function bar() {
        return 'method';
    }

    public static $prop = 'asdf';
    public $prop1 = 'qwerty';

    public function showStatik(){
        echo $this->prop1;
        echo self::$prop;
    }

    public function printSelf() {
        echo self::class;
    }

    public function isSelfEqualsGetClass() {
        var_dump(self::class === get_class($this));
    }
 function foobar() {
    if(isset($this)) {
        echo 'this is defined!!!';
    }else {
        echo 'this is not defined';
    }
 }
}

 interface iTemplate
 {
     public function setVariable($name, $var);
     public function getHtml($template);

 }



    class MyDestructableClass {
        function __construct() {
            print "In constructor\n";
            $this->name = "MyDestructableClass";
        }
        var $foofoofoo = __CLASS__;
        function __destruct() {
            print "Destroying " . $this->name . "\n";
        }


}

$ref = new Foo();
echo $ref->foobar(), PHP_EOL, $ref->bar, PHP_EOL, $ref->bar(), PHP_EOL, $ref->showStatik(), "END";

echo $ref->printSelf(), PHP_EOL, $ref->isSelfEqualsGetClass();

$desctrutableclass = new MyDestructableClass();

echo 'calling foofoofoo',$desctrutableclass->foofoofoo,PHP_EOL ;

$o1 = '4'; $o2 = 4; echo 'double equals ',$o1==$o2, PHP_EOL, "triple equals",$o1===$o2;
?>
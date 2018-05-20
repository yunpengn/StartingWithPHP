<?php
class Person {
	protected $name;
	private $age;
	
	function __construct(string $name, int $age) {
		$this->name = $name;
		$this->age = $age;
	}

	function greet(): string {
		return "Hi! My name is " . $this->name . ".<br>\n";
	}
}

$tom = new Person("Tom", 45);
echo $tom->greet();

class Student extends Person {
	public static $type = "Student";

	function __construct(string $name, int $age) {
		parent::__construct($name, $age);
		echo "A new student has been created.<br>\n";
	}

	function greet(): string {
		return "Hi! My name is " . $this->name . ". I am a student.<br>\n";
	}
}

$jerry = new Student("Jerry", 21);
echo Student::$type . "<br>\n";
echo $jerry->greet();

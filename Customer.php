<?php 
namespace ramadhan\belajar;

class Customer 
{
 public function __construct(private string $name)
 {
    
 }
 public function sayHello(string $name):string
 {
    return "hello $name, My name is $this->name";
 }
}



?>
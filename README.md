# PHP | Learning php from scratch

* php dosen't supports method overloading but it supports method overriding
* method overloading means functions with same name but different type and number of arguments in same class and 
  method overriding means function with same name and same arguments but in different classes (child and parent)
* in php we dont have to specify return type of a function
* in php we use `::` for accessing static methods and properties and -> to access instances | const
* we can also call parent class constructor from child class constructor using `Parent::__construct();`
* in php we can initialize variable inside constructor using `this` keyword
* in php we can create properties of an class using object outside the class
  * in php 8.2 this feature is deprecated
  * if you want to dyamically generate properties you have to use `stdClass` which is an empty dynamic class
* we can check if a object is instance of a class or not using `var_dump($object instanceof class);`
* The `final` keyword can be used to prevent class inheritance or to prevent method overriding.
* in php we can concat string in echo using `.` or `,`
* abstraction is same as interface but we declare in same file i think so and abstract methods are same as pure virtual functions
* associative array in php is same as map in other languages
* if we use namespace inside some other file the echo's of the file whose namespace it is will be printed
* `mysql -u root -p` to use sql in terminal
* A callback is a function which is passed as an argument into another function.
* We can create connection with database using two methods in php `MySqli` & `PDO(php object data)`
* Super Global Varibales
  * `GLOBALS['']` is used to access global variables anywhare from the php script even inside functions
  * `_SERVER` holds information about headers, paths, and script locations 
  * `_REQUEST` is used to collect data after submitting an HTML form
  * `_POST` is also used to collect data after submitting an HTML form
  * `_GET` is also used to collect data after submitting an HTML form and this can also collect data which is sent in URL
* Design Patterns -  P
  * Factory Pattern - Builds an onject not creates. In this we use interface and an function to create an object
  * Adapter Pattern - this uses 
  * Singleton Pattern - In order to limit the instantiation of a class to a single object, a singleton pattern in PHP is used.
  * Observer Pattern - The PHP Observer pattern is used to alert the rest of the system about particular events in certain places.
  * Decorater Patter - The Decorator pattern is used when you want to alter the character of an object at run-time   



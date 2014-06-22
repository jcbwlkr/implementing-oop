# Implementing OOP
By: Jacob Walker

![devICT](/img/devict-logo.png)
-----------------------------
# About Me
<div class="pull-left">
![Baby Jacob](http://jacob-walker.com/img/old_machine.jpg)
</div>

* Full stack developer; Prefers back end
* About 5 years professional experience
* Focused is modern OO PHP

-----------------------------
# What Is OOP?
Object Oriented Programming
---
# Common Programming Paradigms
* Procedural
* Functional
* OOP
---
# Language Support
150+ of languages with different degrees / implementations. *

This talk focuses on PHP and Ruby.

<div class="citations">
\* [Wikipedia: Object-oriented programming languages](http://en.wikipedia.org/wiki/Category:Object-oriented_programming_languages)
</div>
---
# Why use OOP?
* Encourages structure
* Smaller modular components
* Testability
* Code more closely resembles life
* Keeps data and methods that manipulate it together
-----------------------------
# Components of OOP
Goal is to be literate in OOP verbiage
-----------------------------
# Objects and Classes
A **class** defines the information and behavior of a thing.

An **object** is a specific instance of a **class**.
---
# Objects and Classes
If *Developer* is a **class**...

Then *Bob* and *Joe* are **objects** or **instances** of *Developer*.
---
# Defining Classes
~~~php
class Developer {
}
~~~

~~~ruby
class Developer
end
~~~

---
# Getting an instance
~~~php
$jacob = new Developer;
~~~

~~~ruby
seth = Developer.new
~~~
-----------------------------
# Methods
A function on a class.

Provides access to data and/or performs actions (behavior).
---
# Learn to Code in PHP
~~~php
class Developer {
    function code() {
        print "1337 c0d3r";
    }
}

$jacob = new Developer;
$jacob->code();
// Output: "1337 c0d3r"
~~~
---
# Learn to Code in Ruby
~~~ruby
class Developer
    def code
        puts "1337 c0d3r"
    end
end

seth = Developer.new
seth.code
# Output: "1337 c0d3r"
~~~
-----------------------------
# Constructors
A method that is automatically called for new instances.
---
# Constructors in PHP
~~~php
class Developer {
    function __construct() {
        print "Hello, world!";
    }
}

$jacob = new Developer;
// Output: "Hello, world!"
~~~
---
# Constructors in Ruby
~~~ruby
class Developer
    def initialize
        puts "Hello, world!"
    end
end

seth = Developer.new
# Output: "Hello, world!"
~~~
-----------------------------
# Properties
Defines the data about the object.
---
# Thy Name is PHP
~~~php
class Developer {
    function __construct($name) {
        $this->name = $name;
    }

    function greet() {
        print "Hi, I'm " . $this->name . ".";
    }
}

$jacob = new Developer("Jacob");
$jacob->greet();
// Output: "Hi, I'm Jacob."
~~~
---
# Thy Name is Ruby
~~~ruby
class Developer
    def initialize name
        @name = name
    end

    def greet
        puts "Hi, I'm #{@name}."
    end
end

seth = Developer.new("Seth")
seth.greet
# Output: "Hi, I'm Seth."
~~~
-----------------------------
# Access modifiers
Control who can get to properties / methods.

* Public: Anybody
* Private: Nobody except this class
* Protected: Nobody except this class and children
---
# Private PHP
~~~php
class Developer {
    public $name;
    private $secret = "Foo";
}

$jacob = new Developer;

$jacob->name = "Jacob";
print $jacob->name; // Output: "Jacob."

$jacob->secret = "Bar";
// PHP Fatal error:  Cannot access private property Developer::$secret
print $jacob->secret;
// PHP Fatal error:  Cannot access private property Developer::$secret
~~~
---
# Restricting Ruby
~~~ruby
class Developer
    def initialize name
        @name = name
    end

    def greet
        puts "Hi, I'm #{@name}."
    end
end

seth = Developer.new("Seth")
seth.greet
# Output: "Hi, I'm Seth."
~~~
-----------------------------
# The Final keyword
-----------------------------
# Constants
-----------------------------
# Static properties
-----------------------------
# Static methods
-----------------------------
# Inheritance
-----------------------------
# Abstract classes
-----------------------------
# Interfaces
-----------------------------
# Best Practices
* SOLID
* Dependency Injection
* Composition over inheritance
-----------------------------
# If there's time
* Method overriding

# Implementing OOP
By: Jacob Walker

![devICT](/img/devict-logo.png)
'''''''''''''''''''''''''''''
# About Me
<div class="pull-left col">
![Baby Jacob](http://jacob-walker.com/img/old-machine-big.jpg)
</div>

* Full stack developer; Prefers back end
* About 5 years professional experience
* Focused on modern OO PHP
'''''''''''''''''''''''''''''
# What Is OOP?
Object Oriented Programming
'''
# Common Programming Paradigms
* Procedural
* Functional
* OOP
'''
# Language Support
150+ languages with different degrees / implementations. *

This talk focuses on PHP and Ruby.

<div class="citations">
\* [Wikipedia: Object-oriented programming languages](http://en.wikipedia.org/wiki/Category:Object-oriented_programming_languages)
</div>
'''
# Why use OOP?
* Encourages structure
* Smaller modular components
* Testability
* Code more closely resembles life
* Keeps data and methods that manipulate it together
'''''''''''''''''''''''''''''
# Components of OOP
Goal is to be literate in OOP verbiage
'''''''''''''''''''''''''''''
# Objects and Classes
A **class** defines the information and behavior of a thing.

An **object** is a specific instance of a **class**.
'''
# Objects and Classes
If *Developer* is a **class**...

Then *Jacob* and *Seth* are **objects** or **instances** of *Developer*.
'''
# Defining Classes
~~~php
class Developer {
}
~~~

~~~ruby
class Developer
end
~~~

'''
# Getting an instance
~~~php
$jacob = new Developer;
~~~

~~~ruby
seth = Developer.new
~~~
'''''''''''''''''''''''''''''
# Methods
A function on a class.

Provides access to data and/or performs actions (behavior).
'''
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
'''
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
'''''''''''''''''''''''''''''
# Constructors
A method that is automatically called for new instances.
'''
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
'''
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
'''''''''''''''''''''''''''''
# Properties
Defines the data about the object.
'''
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
'''
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
'''''''''''''''''''''''''''''
# Inheritance
One class can **extend** another class. The child class **inherits** properties
and methods of the parent class.
'''
# Inheritance in PHP
~~~php
class Coder {
    function code() {
        print "Code!";
    }
}

class Developer extends Coder {
    function develop() {
        print "Develop!";
    }
}

$jacob = new Developer;
print $jacob->code(); // Output: "Code!"
print $jacob->develop(); // Output: "Develop!"
~~~
'''
# Inheritance in Ruby
~~~ruby
class Coder
    def code
        puts "Code!"
    end
end

class Developer < Coder
    def develop
        puts "Develop!"
    end
end

seth = Developer.new
seth.code    # Output: "Code!"
seth.develop # Output: "Develop!"
~~~
'''
# Inheriting Types
A child class inherits the **type** of all parent classes.
'''
# Inheriting Types
~~~php
class Coder {
}

class Developer extends Coder {
}

$dev   = new Developer;
$coder = new Coder;

$dev instanceof Coder && print "Dev is a Coder";
$dev instanceof Developer && print "Dev is a Developer";

$coder instanceof Coder && print "Coder is a Coder";
$coder instanceof Developer || print "Coder is not a Developer";
~~~

'''''''''''''''''''''''''''''
# Access modifiers
Control who can get to properties / methods (visibility).

* **Public**: Available for anyone
* **Private**: Not available for public consumption
* **Protected**: Private but with exceptions \*

'''
# Access modifiers

Different meanings in different languages.

We'll cover PHP then Ruby

'''
# Visibility in PHP
Control who can get to properties / methods.

* **Public**: Anyone can access
* **Private**: Only available in that class, not even child classes.
* **Protected**: Only available in that class and children
'''
# Private Properties
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
'''
# Private Properties
Getters and Setters
~~~php
class Developer {
    private $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$jacob = new Developer;
$jacob->setName("Jacob");
print $jacob->getName(); // Output: "Jacob"
~~~
'''
# Protected Properties
~~~php
class Coder {
    private $name;
    protected $TODO;
}

class Developer extends Coder {
    // Can access 
}
~~~
'''
# Private Methods
~~~php
class Developer {
    public function greet() {
        print "Hello there!";
    }

    private function revealSecret() {
        print "I code in MS Word";
    }
}

$jacob = new Developer;

$jacob->greet(); // Output: "Hello there!"

$jacob->revealSecret();
// PHP Fatal error:  Call to private method Developer::revealSecret()
~~~
'''
# Protected Methods
~~~php
class Coder {
    private function secret() {
        return "secret";
    }
    protected function kind_of_secret() {
        return "slightly less secret";
    }
}

class Developer extends Coder {
    // Can call kind_of_secret but not secret
}

// Can not call either method
~~~
'''
# Private Properties
Ruby properties can not be accessed directly from outside a class. Make available through methods.
~~~ruby
class Developer
    def initialize
        @secret = "Foo"
    end
    def name
        @name
    end
    def name=(name)
        @name = name
    end
end

seth = Developer.new
seth.name = "Seth"
puts seth.name # Output: "Seth"
puts seth.secret
# NoMethodError: undefined method `secret'
~~~
'''
# Private Properties
Ruby provides shorthands
TODO better practice for "privates"?
~~~ruby
class Developer
    attr_accessor :name

    def initialize
        @secret = "Foo"
    end
end

seth = Developer.new
seth.name = "Seth"
puts seth.name # Output: "Seth"
~~~
'''
# Private Methods
~~~php
class Developer {
    public function greet() {
        print "Hello there!";
    }

    private function revealSecret() {
        print "I code in MS Word";
    }
}

$jacob = new Developer;

$jacob->greet(); // Output: "Hello there!"

$jacob->revealSecret();
// PHP Fatal error:  Call to private method Developer::revealSecret()
~~~
'''
# Private Methods
~~~ruby
class Developer
    def greet
        puts "Hello there!"
    end

    private

    def revealSecret
        puts "I code in MS Word"
    end
end

seth = Developer.new
seth.greet # Output: "Hello there!"
seth.revealSecret
# NoMethodError: private method `revealSecret' called
~~~
'''
# Private Methods
~~~ruby
class Developer
    def greet
        puts "Hello there!"
    end

    def revealSecret
        puts "I code in MS Word"
    end

    private :revealSecret
end
~~~
'''
TODO protected properties / methods
'''''''''''''''''''''''''''''
# The Final keyword
'''''''''''''''''''''''''''''
# Constants
'''''''''''''''''''''''''''''
# Static properties
'''''''''''''''''''''''''''''
# Static methods
'''''''''''''''''''''''''''''
# Abstract classes
'''''''''''''''''''''''''''''
# Interfaces
'''''''''''''''''''''''''''''
# Best Practices
* SOLID
* Dependency Injection
* Composition over inheritance
'''''''''''''''''''''''''''''
# If there's time
* Method overriding

# Implementing OOP
By: Jacob Walker

![devICT](https://raw.githubusercontent.com/devict/devict-presentation-template/master/presentation/img/devict-logo.png)
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

Then *Jacob* and *Seth* are **objects** or **instances** of class *Developer*.
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
$jacob->code(); // Output: 1337 c0d3r
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
seth.code # Output: 1337 c0d3r
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

$jacob = new Developer; // Output: Hello, world!
~~~
'''
# Constructors in Ruby
~~~ruby
class Developer
    def initialize
        puts "Hello, world!"
    end
end

seth = Developer.new # Output: Hello, world!
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
$jacob->greet(); // Output: Hi, I'm Jacob.
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
seth.greet # Output: Hi, I'm Seth.
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
print $jacob->code(); // Output: Code!
print $jacob->develop(); // Output: Develop!
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
seth.code    # Output: Code!
seth.develop # Output: Develop!
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
'''
# Hierarchies
* There is no limit on the number of superclasses upstream from any given class.
* Multiple classes can extend from the same base class.
* PHP, Ruby, and many other OO languages only allow a single parent per class (
  **single inheritance**) but some languages allow more than one (**multiple
  inheritance**)
'''
# Hierarchies
~~~php
class Human {}                         //             Human
                                       //               |
class Coder extends Human {}           //             Coder
                                       //              / \
class Developer extends Coder {}       //             /   \
                                       //            /     \
class Designer extends Coder {}        //       Developer Designer
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

'''''''''''''''''''''''''''''
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
print $jacob->name; // Output: Jacob

$jacob->secret = "Bar"; // PHP Fatal error:  Cannot access private property Developer::$secret
print $jacob->secret;   // PHP Fatal error:  Cannot access private property Developer::$secret
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
print $jacob->getName(); // Output: Jacob
~~~
'''
# Protected Properties
~~~php
class Coder {
    private $code_style;
    protected $name;
}

class Developer extends Coder {
    // Can access $this->name but not $this->code_style
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

$jacob->greet(); // Output: Hello there!

$jacob->revealSecret(); // PHP Fatal error:  Call to private method Developer::revealSecret()
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
'''''''''''''''''''''''''''''
# Visibility in Ruby
Control who can call methods.

* **Public**: Available to everyone.
* **Private**: Only available in class and subclasses and only that instance.
* **Protected**: Like private, but available to other instances.
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
puts seth.name # Output: Seth
puts seth.secret # NoMethodError: undefined method `secret'
~~~
'''
# Private Properties
Ruby provides shorthands
~~~ruby
class Developer
    attr_accessor :name # Makes a getter and setter
    attr_reader   :name # Makes a getter
    attr_writer   :name # Makes a setter

    def initialize
        @secret = "Foo"
    end
end

seth = Developer.new
seth.name = "Seth"
puts seth.name # Output: Seth
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
seth.greet # Output: Hello there!
seth.revealSecret # NoMethodError: private method `revealSecret' called
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
# Private Methods
Unlike in PHP, private methods available to children
~~~ruby
class Coder
    attr_accessor :password
    private :password

    def initialize password
        @password = password
    end
end

class Developer < Coder
    def revealPassword
        password
    end
end

seth = Developer.new("Banana")

puts seth.revealPassword # Banana
puts seth.password # NoMethodError private method `password' called
~~~
'''
# Protected Vs Private
~~~ruby
class Developer
    attr_reader :hacks, :power
    protected :power
    private :hacks

    def initialize hacks, power
        @hacks = hacks
        @power = power
    end

    def is_stronger_than? other_dev
        power > other_dev.power
    end

    def is_hackier_than? other_dev
        hacks > other_dev.hacks
    end
end

seth  = Developer.new(83,  9001)
jacob = Developer.new(174, 8999)

seth.is_stronger_than? jacob # true
seth.is_hackier_than? jacob # NoMethodError: private method `hacks' called
~~~
'''''''''''''''''''''''''''''
# Method Overriding
A child class can **override** or redefine a method that was defined in a parent class
'''
# Method Overriding
~~~php
class Coder {
    public function type() {
        print "I type like this!";
    }
}

class Developer extends Coder {
    public function type() {
        print "JK, I type like this!";
    }
}

$jacob = new Developer;
$jacob->type(); // Output: JK, I type like this!
~~~
'''
# Method Overriding
Can call your parent's version of a method by using the `parent::` prefix.
~~~php
class TestingBase extends PHPUnit_Framework_TestCase {
    protected $logger;

    public function setUp() {
        $this->logger = new Logger();
    }
}

class PayrollTest extends TestingBase {
    protected $payroll_engine;

    public function setUp() {
        parent::setUp();
        $this->payroll_engine = new Payroll_Engine();
    }
}
~~~
'''
# Overriding Ruby
Use `super` to call the same method in a parent class. 
~~~ruby
class Dancer
    def dance
        puts "Boogie!"
    end
end

class DiscoDancer < Dancer
    def dance
        super
        puts "Boogie Woogie!"
    end
end

seth = DiscoDancer.new
seth.dance # Output: Boogie! Boogie Woogie!
~~~
Side note, `super` will automatically pass all args unless you specify otherwise
'''
# Override on the Fly
Ruby can redefine methods at run time
~~~ruby
class Developer
    def code
        puts "Bits!"
    end
end

# Some time later

class Developer
    def code
        puts "Hacks!"
    end
end

seth = Developer.new
seth.code # Output: Hacks!
~~~
'''''''''''''''''''''''''''''
# The Final Keyword
In PHP a method marked `final` can not be overriden by subclasses. Use with
caution.
~~~php
class Foo {
    final public function bar() {
    }
}
~~~

Final methods are not natively supported in Ruby as it goes against the spirit
of the language.
'''''''''''''''''''''''''''''
# Constants
* Constant values that are scoped within a class.
* Like global constants they cannot be changed.
* Always public
* Should be ALL CAPS
'''
# Constants in PHP
~~~php
class Developer {
    const EDITOR_VIM   = "vim";
    const EDITOR_EMACS = "emacs";
}

print Developer::EDITOR_VIM;   // Output: vim
print Developer::EDITOR_EMACS; // Output: emacs
~~~
'''
# Constants in Ruby
~~~ruby
class Developer
    EDITOR_VIM   = "vim";
    EDITOR_EMACS = "emacs";
end

puts Developer::EDITOR_VIM;   # Output: vim
puts Developer::EDITOR_EMACS; # Output: emacs
~~~
'''''''''''''''''''''''''''''
# Statics
Properties / methods that are associated with a class, not any particular instance.
'''
# Statics in PHP
## Properties
From within a class, access with `static::` or `self::`

Use class name when outside of the class
~~~php
class Developer {
    public static $devs_made = 0;

    public function __construct() {
        static::$devs_made++;
    }
}

print Developer::$devs_made; // Output: 0

$jacob = new Developer;
print Developer::$devs_made; // Output: 1

$matthew = new Developer;
print Developer::$devs_made; // Output: 2
~~~
'''
# Statics in PHP
## Methods
~~~php
class Config {
    private static $instance;

    public static function getInstance() {
        return static::$instance ?: new static();
    }

    // Only this class can call "new Config"
    private function __construct() {}
}

$config = Config::getInstance();

$same_config = Config::getInstance();
~~~
'''
# Statics in Ruby
~~~ruby
class Developer
    @@devs_made = 0    # Class variable

    def self.devs_made # Class method
        @@devs_made
    end

    def initialize
        @@devs_made += 1
    end
end

seth = Developer.new
puts Developer.devs_made # Output: 1

jarrett = Developer.new
puts Developer.devs_made # Output: 2
~~~
'''''''''''''''''''''''''''''
# Abstract Classes / Methods
A class can be declared **abstract** which means it can not be directly instantiated. Another class must extend it.

**Methods** on an abstract class can also be declared abstract which means a child class must **implement** them.
'''
# Abstract PHP
~~~php
abstract class Model {
    abstract public function getTable();

    public function formattedTable() {
        return strtoupper($this->getTable());
    }
}

class User extends Model {
    public function getTable() {
        return "users";
    }
}

$joe = new User;
print $joe->formattedTable(); // Output: USERS
~~~
'''
# Abstract Ruby
Not directly supported. Can simulate with some hackery if needed, but it doesn't really fit the style of Ruby.
'''''''''''''''''''''''''''''
# Traits / Mixins
TODO?
'''''''''''''''''''''''''''''
# Namespaces / Modules
TODO?
'''''''''''''''''''''''''''''
# Interfaces
* An OO **interface** is a contract. A class that **implements** that interface
  guarantees it has the public methods of the interface.
* Can be used instead of or in conjunction with inheritance.
* Not a feature of Ruby (it uses duck typing)
'''
# Interfaces
~~~php
interface WordTyper {
    public function type();
}

class Designer implements WordTyper {
    public function type() {
        print "CSS!";
    }
}

class Developer implements WordTyper {
    public function type() {
        print "PHP!";
    }
}
~~~
~~~php
if ($object instanceof WordTyper) {
    $object->type();
}
~~~
'''''''''''''''''''''''''''''
# An Example
Writing software to run an automated pizza joint
## of the **future**!
'''
# An Example
Starting with classes **Pizza** and **Oven**
~~~php
class Pizza {
}

class Oven {
    public function bake(Pizza $pizza) {
        $bake_time = 17;
        $bake_temp = 425;
    }
}
~~~
'''
# Diversification!
Boss decides to maximize oven time by offering cakes
'''
# Diversification!
~~~php
abstract class Food {
    abstract public function getBakeTime();
    abstract public function getBakeTemp();
}

class Cake extends Food {
    public function getBakeTime() { return 30; }
    public function getBakeTemp() { return 350; }
}

class Pizza extends Food {
    public function getBakeTime() { return 17; }
    public function getBakeTemp() { return 425; }
}
~~~
~~~php
class Oven {
    public function bake(Food $food) {
        $bake_time = $food->getBakeTime();
        $bake_temp = $food->getBakeTemp();
    }
}
~~~
'''
# Branching Out
Boss acquire the pottery / craft business next door

Need to expand our software to run the kiln.
'''
# Branching Out
~~~php
interface Bakeable {
    public function getCookTime();
    public function getCookTemp();
}

class ClayPot implements Bakeable {
    public function getCookTime() { return 300; }
    public function getCookTemp() { return 950; }
}

class Cake implements Bakeable {
    public function getCookTime() { return 18; }
    public function getCookTemp() { return 350; }
}

class Pizza implements Bakeable {
    public function getCookTime() { return 18; }
    public function getCookTemp() { return 350; }
}
~~~
~~~php
class Oven {
    public function bake(Bakeable $bakeable) {
        $cook_time = $bakeable->getCookTime();
        $cook_temp = $bakeable->getCookTemp();
    }
}
~~~

'''''''''''''''''''''''''''''
# Best Practices
* SOLID
* Design Patterns
* Dependency Injection
* Composition over Inheritance

# PHP Beech framework (LTS)
##### #Make it by yourself

[![N|Solid](https://image.ibb.co/gfbtQe/beech_LTSx1.png)](https://github.com/bombkiml/phpbeech)

### # Environment Requirements

    PHP >= 7.1.11

#
### # Installing Beech
The Beech use ``` composer ``` to manage its dependencies. So, before using ``` Beech ``` make sure you have [Composer](https://getcomposer.org/) installed on your machine.

    $ composer create-project bombkiml/phpbeech {yourProjectName}

#
### # Local development server
If you have PHP installed locally and you would like to use PHP's built-in development server to your application, 
You may use the `` serve `` command. This command will start a development server at [`` http://localhost:8000 ``](http://localhost:8000)

    $ php beech serve

#
### # Defining Controllers
Below is an example of a basic controller class. **Note that** the `` controller `` extends the `` base controller `` class. 
Controller are stored in the modules/controllers/ directory. A simple controller ``` modules/controllers/foo/fooController.php ``` might look something like this:
```php
    <?php

    class FooController extends Controller {
    
        /**
         * @Rule: consturctor class it's call __construct of parent class
         *
         * Call parent class
         *
         */
        public function __construct() {
        
            parent::__construct();
            
        }
    }
```
#
### # Passing data to views
You may use the `` $this->view->{yourVariable} `` and assign data this one for passing the data to ``` views ```. A simple passing the data might look something like this:
```php
    <?php

    class FooController extends Controller {
    
        /**
         * @Rule: consturctor class it's call __construct of parent class
         *
         * Call parent class
         *
         */
        public function __construct() {
        
            parent::__construct();
            
        }
        
        /**
         * Simple passing the data to `views/foo/foo.view.php`
         * 
         * @var title
         * @var hello
         * @var data
         *
         * @return Response view
         */
        public function foo() {
        
            // Passing the data to view
            $this->view->title = "foo page";
            $this->view->hello = "Hello foo.";
            $this->view->data   = [];
            
            // Return response view
            return $this->view->render("foo/foo.view");
            
        }
        
    }
```
#
### # Creating Views
Below is an simple of a basic views contain the HTML served, The ``` views ``` are stored in the ``` views/ ``` directory. A simple view ``` views/foo/foo.view.php ``` might look something like this:
```html
    <html>
        <head>
    
            <title>Document</title>
    
        </head>
        <body>
            
            <h1>Hello world</h1>
    
        </body>
    </html>
```
#
### # Accessing the data passed
You may use the `$this` for accessing the data passed to views. A simple accessing the data passed might look something like this:
```html
    <html>
        <head>
    
            <!-- Accessing the data passed of @var title -->
            <title><?php echo $this->title; ?></title>
    
        </head>
        <body>
    
            <!-- Accessing the data passed of @var hello -->
            <h1><?php echo $this->hello; ?></h1>
            
            <!-- Accessing the data passed of @var data -->
            <?php print_r($this->data); ?>
    
        </body>
    </html>
```
#
### # Defining Models
Below is an example of a basic create an ``` model ``` class. **Note that** the `` model `` extends the `` base model `` class. 
The ``` model ``` are stored in the `` modules/models/ `` directory. A simple model `` modules/models/Foo.php `` might look something like this:

```php
    <?php 

    class Foo extends Model {
        
        /**
         * @Rule: consturctor class it's call __construct of parent class
         *
         * Call parent class
         *
         */
        public function __construct() {
        
            parent::__construct();
            
        }

        /**
         * Simple method using MySQL get data
         *
         */
         public function getFoo() {
            
            // Preparing sql statements
            $foo = $this->db->prepare("SELECT * FROM fruits");
            
            // Execute statements
            $foo->execute();
            
            // Return response rows
            return $foo->fetch_all();
            
         }
    }
```
#
### # Database
The Beech database (MySQL supported) using by ``` $this->db ``` it's query builder provides a convenient, fluent interface to creating and running database queries. It can be used to perform most database operations in your application.
#
### # Retrieving Results
You may use the ``` prepare ``` method on the ```php $this->db ``` facade to begin a query. The ``` prepare ``` method returns a object query builder instance for the given table, allowing you to using sql statements for query by the ``` execute ``` method then finally get the results using the ``` fetch ``` method. So, 3 step easy usage you may retrieving results by use the methods like this:

**One:** Specify statements, First you must specify your sql statements for get something by using ``` prepare() ``` Then prepare function will return new object for call next actions, So following basic for get data something like this:
```php
    $foo = $this->db->prepare("SELECT * FROM foo");
```
**Two:** Execute statements, After specify statements you must execute your sql statements by using object ``` $foo ``` as above:
```php
    $foo->execute();
```
**Finalize:** Response data, Response data using by object ``` $foo ``` for return your result data. So, Have a response are available for using:
```php
    $foo->fetch_all();
    // result: array
    
    $foo->fetch_assoc();
    // result: array
    
    $foo->fetch_array();
    // result: array
    
    $foo->fetch_object();
    // result: object
    
    $foo->num_rows();
    // result: int
```

:grey_question: Tips: You can show your sql statements before execute: ``` $foo->show(); ``` |
------------ |


### # Inserts
The query builder also provides an ``` insert ``` method for inserting records into the database table. The insert method accepts an array of column names and values: 
```php
    $this->db->insert("foo", array("id" => "1", "name" => "john"));
```
#
### # Updates
The query builder can also update existing records using the ``` update ``` method. The ``` update ``` method accepts an array of column and new value pairs containing the columns to be updated. You may constrain the update query using where clauses:
```php
    $this->db->update("foo", array("name" => "john smith"), array("id" => 1));
```
#
### # Deletes
The query builder may also be used to ``` delete ``` records from the table via the delete method. You may constrain the ``` delete ``` query using where clauses:
```php
    $this->db->delete("foo", array("id" => 1));
```
#
### # Beech-cli console
[Document PHP beech command line interface (CLI)](https://github.com/bombkiml/beech-cli)
#
### # Development
Want to contribute or join for Great Job!. You can contact to me via
  - GitHub: [bombkiml/phpbeech - issues](https://github.com/bombkiml/phpbeech/issues)
  - E-mail: nattapat.jquery@gmail.com 
  - Facebook: [https://www.facebook.com/bombkiml](https://www.facebook.com/bombkiml)
#
### # License
PHP Beech framework is open-sourced software licensed under the [MIT license.](https://opensource.org/licenses/MIT)

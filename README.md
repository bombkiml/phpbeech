# PHP Beech framework (LTS)
##### #Make it by yourself

[![N|Solid](https://image.ibb.co/gfbtQe/beech_LTSx1.png)](https://github.com/bombkiml/phpbeech)

## # Environment Requirements

    PHP >= 5.3.0

## # Installing Beech
> Beech use Composer to manage its dependencies. So, before using Beech, make sure you have [Composer](https://getcomposer.org/) installed on your machine.
> Download the Beech installer using Composer.

    $ composer create-project bombkiml/phpbeech {yourProjectName}

## # Local development server
If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, 
you may use the `` $ beech serve `` command. This command will start a development server at `` http://localhost:8000: ``

    $ php beech serve
    
## # Defining Controllers
> Below is an example of a basic controller class. Note that the controller extends the base controller class. 
Controller are stored in the modules/controllers/ directory. A simple controller might look something like this:
```php
    <!-- Controller stored in `modules/controllers/fooController.php` -->
    
    <?php

    class FooController extends Controller {
    
        /**
         * [Rule] Consturctor class it's call __construct of controller class
         *
         */
        public function __construct() {
        
            parent::__construct();
            
        }
        
        /**
         * Show the foo.view data
         *
         * @param  int  $id
         * @return Response
         */
        public function foo() {
        
            /**
             * Prepare variable(s) for send to view
             *
             * @title Text
             * @hello Text
             * @data Array
             *
             */
            $this->view->title = "foo page";
            $this->view->hello = "Hello foo.";
            this->view->data   = [];
            
            // response view
            $this->view->render('foo/foo.view');
            
        }
        
    }
```
## # Creating Views
> Below is an example of a basic views contain the HTML served by your application and separate your controller. 
Views are stored in the views/ directory. A simple view might look something like this:
```html
    <!-- View stored in `views/foo/foo.view.php` -->

    <html>
        <head>
            <title><?php echo $this->title; ?></title>
        </head>
        <body>
        
            <h1><?php echo $this->hello; ?></h1>
    
            <?php print_r($this->data); ?>
    
        </body>
    </html>
```

## # Defining Models
Below is an example of a basic create an model class. Note that the model extends the base model class. 
Model are stored in the modules/models/ directory. A simple model might look something like this:
```php
    <?php 

    class fooModel extends Model {
        
        /**
         * [Rule] Consturctor class it's call __construct of model class
         *
         */
        public function __construct() {
        
            parent::__construct();
            
        }

        /**
         * For example method using MySQL get data
         *
         */
         public function getFruits() {
            
            // $this->db is extends from Model
            $sth = $this->db->prepare("SELECT * FROM fruits");
            
            // execute statement
            $sth->execute();
            
            // response rows
            return $sth->fetch_all();
            
         }
    }
```
## # Beech console
> [Document PHP beech command line interface (CLI)](https://github.com/bombkiml/beech-cli)

## # Development
> Want to contribute or join for Great Job!. You can contact to me via
  - GitHub: [bombkiml/phpbeech - issues](https://github.com/bombkiml/phpbeech/issues)
  - E-mail: nattapat.jquery@gmail.com 
  - Facebook: [https://www.facebook.com/bombkiml](https://www.facebook.com/bombkiml)

## # License
> PHP Beech framework is open-sourced software licensed under the [MIT license.](https://opensource.org/licenses/MIT)

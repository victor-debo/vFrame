# vFrame
### PHP MVC Framework.

[vFrame](https://github.com/victor-iyiola/vFrame#readme) is a PHP MVC Framework built to make your life as a developer a lot fun and stress free.
**vFrame** also provides a RESTful API that allows you to easily write your API in an efficient and stressful way. Trust me! This is one of the coolest RESTful API I've ever worked with! :)
**vFrame** is suitable for small and medium sized enterprise applications.
----------

### What vFrame provides.
1. A RESTful API.
2. Code re-use.
3. Modularity.
4. Layouts to allow for easy and dynamic web interface.
5. Database abstraction.
6. Lots of helpful classes and methods.
7. Constants to various paths in your project.
8. Great error handler.
9. Class autoloader.
10. Right-out-of-the-box assets and resources.
11. `.htaccess` to prevent unauthorized access to private files.
12. Awesome programming experience.
13. Easy bug trace.
14. Namespacing for code organisation.
15. Lightweight development
----------

### Getting Started.
- Clone this repository `git clone https://github.com/victor-iyiola/vFrame.git` or download zip into your web server directory (e.g. _htdocs_).
- Change directory into your project folder `cd path/to/project`.
- Open up the `config.ini` file located at `vFrame/app/libs/config.ini`.
- Change the `project_path` as appropriate and the database configurations.
- Open up your favorite web browser _(hopefully Google Chrome)_ :) and enter the url `localhost/vFrame/` (depending on your server set up, you might need to change that as appropriate).
- Voila! Enjoy development.
----------

### About MVC Frameworks.
**vFrame** is an MVC Framework, meaning the views are seprated from your models and they both go through the controller to pass information back and forth.
MVC (or Model View Controller) is one of the design patterns created by _the Gang of four_.
----------

### Creating Controllers.
- Create a new PHP Class in `vFrame/app/controllers`.
- Naming convention is really important here.
- It is important your start with UpperCase and every other word starts with an uppercase. All of your controllers must end with the word `Controller` e.g `HomeController`, `AboutController`, `FrequentlyAskedQuestionController`.
- All controllers must extend the super class `Controller` located @ `vFrame/app/core/Controller.php`.
- After extending the `App\Libs\Controller`, you must override the abstract method `index()`.
----------

#### Example
Create a new PHP Class and name it `HomeController.php`
```PHP
<?php

/**
 * @author
 * Created by victor.
 * A.I. engineer & Software developer
 * javafolabi@gmail.com
 * On 06 09, 2017 @ 3:45 PM
 * Copyright victor © 2017. All rights reserved.
 */
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{

  /**
   * HomeController constructor.
   */
  public function __construct()
  {
    parent::__construct();
    $this->view->title = "Home";	// the title of the page
    $this->view->css = ["home"];	// loads a custom css file (home.css)
  }

  /**
   * Controller responsible for "/"
	 * @endpoint localhost/vFrame/
   * @param null $type
   * @param string $status
   * @return mixed|void
   */
  public function index()
  {
		// renders the home view located @ vFrame/app/views/home/index.php
    $this->view->render('home/index'); 
  }

	 /**
   * Controller responsible for "/about"
	 * @endpoint localhost/vFrame/about
   * @param null $type
   * @param string $status
   * @return mixed|void
   */
  public function about()
  {
		// renders the about view located @ vFrame/app/views/home/about.php
    $this->view->render('home/about'); 
  }

	 /**
   * Controller responsible for "/contact"
	 * @endpoint localhost/vFrame/contact
   * @param null $type
   * @param string $status
   * @return mixed|void
   */
  public function contact()
  {
		// renders the contact view located @ vFrame/app/views/home/contact.php
    $this->view->render('home/contact'); 
  }
	
}
```
<?php
/**
 * @author
 * Created by victor.
 * A.I. engineer & Software developer
 * javafolabi@gmail.com
 * On 13 07, 2017 @ 7:00 PM
 * Copyright victor © 2017. All rights reserved.
 */

namespace App\Models;


use App\Core\Model;

class LoginModel extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Handles login for the users
   * @credit: Victor I. Afolabi
   */
  public function userLogin()
  {
    // logic for login the admin in goes here...
    // but to enable proper abstraction.
    // Why don't we create a separate User class
    // to handle all the activities of the user
  }

  /**
   * Handles login for the admins
   * @credit: Victor I. Afolabi
   */
  public function adminLogin()
  {
    // logic for login the admin in goes here...
    // but to enable proper abstraction.
    // Why don't we create a separate Admin class
    // to handle all the activities of the admin ( Single Responsibility Principle)

  }

}
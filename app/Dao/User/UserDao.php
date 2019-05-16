<?php

namespace App\Dao\User;

use App\Contracts\Dao\User\UserDaoInterface;
use App\Models\User;

class UserDao implements UserDaoInterface
{
  /**
   * Get Operator List
   * @param Int $id, String $str
   * @return ObjectArray
   */
  public function getUserList($id)
  {
    return User::get();
  }
}

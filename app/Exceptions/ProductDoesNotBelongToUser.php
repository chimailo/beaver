<?php

namespace App\Exceptions;

use Exception;

class ProductDoesNotBelongToUser extends Exception
{
    public function render()
    {
    	return ['errors' => 'Product does not belong to user'];
    }
}

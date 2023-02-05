<?php 
namespace App\Controllers;

use App\Libraries\GroceryCrud;

class Examples extends BaseController
{
	public function usuarios()
	{
	    $crud = new GroceryCrud();

	    $crud->setTable('usuario');

	    $output = $crud->render();

		return $this->_exampleOutput($output);
	}

	

    private function _exampleOutput($output = null) {
        return view('example', (array)$output);
    }


}

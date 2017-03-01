<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SMSRepCrudRequest as StoreRequest;
use App\Http\Requests\SMSRepCrudRequest as UpdateRequest;

class SMSRepCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Models\SMSRep");
        $this->crud->setRoute("admin/smsrep");
        $this->crud->setEntityNameStrings('smsrep', 'smsereps');

        $this->crud->setColumns(['org','rep']);
		
		$this->crud->addField([
			'name' => 'org',
			'label' => "Original Text",
			'type' => 'text',
			'suffix' => 'eg. SRI.REJI GEORGE'
		]);
		$this->crud->addField([
			'name' => 'rep',
			'label' => "Replacement Text",
			'type' => 'text',
			'suffix' => 'eg. Reji'
		]);
    }

	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
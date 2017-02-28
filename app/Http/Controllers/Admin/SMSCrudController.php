<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SMSCrudRequest as StoreRequest;
use App\Http\Requests\SMSCrudRequest as UpdateRequest;

class SMSCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Models\SMS");
        $this->crud->setRoute("admin/sms");
        $this->crud->setEntityNameStrings('sms', 'smses');

        $this->crud->setColumns(['adname','advcid','number']);
		
		$this->crud->addField([
			'name' => 'adname',
			'label' => "Advocate Name",
			'type' => 'text',
			'suffix' => 'eg. Reji George'
		]);
		$this->crud->addField([
			'name' => 'advcid',
			'label' => "Advocate ID",
			'type' => 'text',
			'suffix' => 'eg. SRI.REJI GEORGE'
		]);
		$this->crud->addField([
			'name' => 'number',
			'label' => "Mobile Number",
			'type' => 'number',
			'suffix' => 'eg, 9632456789'
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
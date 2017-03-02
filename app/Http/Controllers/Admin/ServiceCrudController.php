<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ServiceCrudRequest as StoreRequest;
use App\Http\Requests\ServiceCrudRequest as UpdateRequest;

class ServiceCrudController extends CrudController {
	public function setup() {
        $this->crud->setModel("App\Models\Service");
        $this->crud->setRoute("admin/service");
        $this->crud->setEntityNameStrings('service', 'services');
        $this->crud->setColumns([
        	"name",
        	[
        		"name"=>"enabled",
        		"label"=>"Featured",
        		"type"=>'boolean'
        	]
        ]);
        //"name","enabled","image","info"
        $this->crud->addField([
			'name' => 'name',
			'label' => "Service Name",
			'type' => 'text',
		]);
		$this->crud->addField([
		    'name' => 'enabled',
		    'label' => 'Enabled',
		    'type' => 'checkbox'
		]);
		$this->crud->addField([ // image
		    'label' => "Serive Photo",
		    'name' => "image",
		    'type' => 'browse',
		]);
		$this->crud->addField([
			'name' => 'info',
			'label' => "Service Details",
			'type' => 'wysiwyg'
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
<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ClientCrudRequest as StoreRequest;
use App\Http\Requests\ClientCrudRequest as UpdateRequest;

class ClientCrudController extends CrudController {
	//"title","photo","content","stamp","author"
	public function setup() {
        $this->crud->setModel("App\Models\Client");
        $this->crud->setRoute("admin/client");
        $this->crud->setEntityNameStrings('client', 'clients');

        $this->crud->setColumns([
        	"company",
        	[
        		"name"=>"poc",
        		"label"=>"Person of Contact"
			],
        	[
        		"name"=>"featured",
        		"label"=>"Featured",
        		"type"=>'boolean'
        	]
        ]);
        $this->crud->addField([
			'name' => 'company',
			'label' => "Company Name",
			'type' => 'text',
			'suffix' => 'eg. Wayne Enterprises Pvt Ltd'
		]);
		$this->crud->addField([
		    'label' => "Company Logo",
		    'name' => "logo",
		    'type' => 'browse',
		]);
		$this->crud->addField([
		    'name' => 'featured',
		    'label' => 'Featured',
		    'type' => 'checkbox'
		]);
		$this->crud->addField([
			'name' => 'poc',
			'label' => "Person of Contact",
			'type' => 'text',
			'suffix' => 'eg. Athul Raj'
		]);
		$this->crud->addField([
			'name' => 'post',
			'label' => "POC's Post",
			'type' => 'text',
			'suffix' => 'eg. Managing Director'
		]);
		$this->crud->addField([ // image
		    'label' => "POC's Picture",
		    'name' => "pocpic",
		    'type' => 'browse',
		]);
		$this->crud->addField([
			'name' => 'category',
			'label' => "Company Category",
			'type' => 'select2_from_array',
    		'options' => [
    			'Corporates'=>'Corporates',
    			'Builders' => 'Builders',
    			'Banks'=>'Banks'    			
    		],
    		'allows_null' => false,
		]);
		$this->crud->addField([
			'name' => 'year',
			'label' => "Year of Engagement",
			'type' => 'number',
			'suffix' => 'eg. 2014'
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
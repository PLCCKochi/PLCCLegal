<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TestimonialCrudRequest as StoreRequest;
use App\Http\Requests\TestimonialCrudRequest as UpdateRequest;

class TestimonialCrudController extends CrudController {
	//"title","photo","content","stamp","author"
	public function setup() {
        $this->crud->setModel("App\Models\Testimonial");
        $this->crud->setRoute("admin/testimonial");
        $this->crud->setEntityNameStrings('testimonial', 'testimonials');
        $this->crud->setColumns([
        	[
				'label' => "Company", // Table column heading
				'type' => "select",
				'name' => 'client_id', // the column that contains the ID of that connected entity;
				'entity' => 'client', // the method that defines the relationship in your Model
				'attribute' => "company", // foreign key attribute that is shown to user
				'model' => "App\Models\Client", // foreign key model
			],
        	[
        		"name"=>"featured",
        		"label"=>"Featured",
        		"type"=>'boolean'
        	]
        ]);
        //$this->crud->removeColumn('client_id');
        //"client_id","testimonial","featured","priority"
        $this->crud->addField([
			'name' => 'client_id',
			'label' => "Company",
			'type' => 'select2',
			'entity' => 'client', // the method that defines the relationship in your Model
			'attribute' => 'company', // foreign key attribute that is shown to user
			'model' => "App\Models\Client" // foreign key model
		]);
		$this->crud->addField([
		    'name' => 'featured',
		    'label' => 'Featured',
		    'type' => 'checkbox'
		]);
		$this->crud->addField([
			'name' => 'priority',
			'label' => "Priority[0-9]",
			'type' => 'number',
			'suffix' => 'eg. 2'
		]);
		$this->crud->addField([
			'name' => 'testimonial',
			'label' => "Testimonial",
			'type' => 'wysiwyg'
		]);
		$this->crud->enableExportButtons();
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
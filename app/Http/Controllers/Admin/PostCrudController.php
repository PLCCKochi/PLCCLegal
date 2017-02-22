<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PostCrudRequest as StoreRequest;
use App\Http\Requests\PostCrudRequest as UpdateRequest;

class PostCrudController extends CrudController {
	//"title","photo","content","stamp","author"
	public function setup() {
        $this->crud->setModel("App\Models\Post");
        $this->crud->setRoute("admin/post");
        $this->crud->setEntityNameStrings('post', 'posts');

        $this->crud->setColumns([
        	'title',
        	/*[
        		'name'=>'advocate_id',
				'label' => "Author", // Table column heading
				'type' => "select",
				'entity' => 'Advocates', // the method that defines the relationship in your Model
				'attribute' => "shortname", // foreign key attribute that is shown to user
				'model' => "App\Models\Advocate", // foreign key model
        	],*/
        	[
        		'name'=>'stamp',
        		'label'=>'Date'
        	]
        ]);
        $this->crud->addField([
			'name' => 'title',
			'label' => "Post Title",
			'type' => 'text',
			'suffix' => 'eg. How to evade TAX !'
		]);
		$this->crud->addField([ // image
		    'label' => "Post Image",
		    'name' => "photo",
		    'type' => 'browse',
		]);
		$this->crud->addField([
			'name' => 'content',
			'label' => "The post",
			'type' => 'summernote'
		]);
		$this->crud->addField([
			'name' => 'stamp',
			'label' => "Date",
			'type' => 'date_picker',
			'date_picker_options' => [
				//'todayBtn' => true,
				'format' => 'yyyy-mm-dd',
				'language' => 'en'
			],
		]);
		$this->crud->addField([
			'name' => 'advocate_id',
			'label' => "Post Author",
			'type' => 'select2',
			'entity' => 'Advocates', // the method that defines the relationship in your Model
			'attribute' => 'name', // foreign key attribute that is shown to user
			'model' => "App\Models\Advocate" // foreign key model
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
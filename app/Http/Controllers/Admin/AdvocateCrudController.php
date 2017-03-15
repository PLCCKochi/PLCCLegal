<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\AdvocateCrudRequest as StoreRequest;
use App\Http\Requests\AdvocateCrudRequest as UpdateRequest;

class AdvocateCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Models\Advocate");
        $this->crud->setRoute("admin/advocate");
        $this->crud->setEntityNameStrings('advocate', 'advocates');

        $this->crud->setColumns(['name']);
        $this->crud->addField([
			'name' => 'name',
			'label' => "Advocate name",
			'type' => 'text',
			'suffix' => 'eg. Reji George'
		]);
        $this->crud->addField([
			'name' => 'shortname',
			'label' => "Short name",
			'type' => 'text',
			'suffix' => 'eg. Reji'
		]);
		$this->crud->addField([
			'name' => 'username',
			'label' => "User name (all lowercase)",
			'type' => 'text',
			'suffix' => 'eg. reji'
		]);
		$this->crud->addField([
			'name' => 'title',
			'label' => "Title",
			'type' => 'text',
			'suffix' => 'eg, Senior Advocate'
		]);
		$this->crud->addField([ // image
		    'label' => "Profile Image",
		    'name' => "photo",
		    'type' => 'browse',
		]);
		$this->crud->addField([
			'name' => 'department',
			'label' => "Department",
			'type' => 'text',
			'suffix' => 'eg, Corporate Law'
		]);
		$this->crud->addField([
			'name' => 'proexp',
			'label' => "Professional Experience",
			'type' => 'simplemde'
		]);
		/*
		wysiwyg
		tinymce
		ckeditor
		summernote
		simplemde
		*/
		$this->crud->addField([
			'name' => 'caption',
			'label' => "Caption",
			'type' => 'text',
			'suffix' => 'eg, An energetic man'
		]);
		$this->crud->addField([
			'name' => 'fb',
			'label' => "Facebook Username",
			'type' => 'text',
			'suffix' => 'eg, rejigeorge223'
		]);
		$this->crud->addField([
			'name' => 'tw',
			'label' => "Twitter Username",
			'type' => 'text',
			'suffix' => 'eg, rejigeorge223'
		]);
		$this->crud->addField([
			'name' => 'li',
			'label' => "LinkedIn Username",
			'type' => 'text',
			'suffix' => 'eg, rejigeorge223'
		]);
		$this->crud->addField([
			'name' => 'skype',
			'label' => "Skype identifier",
			'type' => 'text',
			'suffix' => 'eg, reji@plcclegal.com | rejigeorge223'
		]);
		$this->crud->addField([
			'name' => 'mobile',
			'label' => "Mobile Number",
			'type' => 'number',
			'prefix' => '+91',
			'suffix' => 'eg, 9632456789'
		]);
		$this->crud->addField([
			'name' => 'office',
			'label' => "Office Number",
			'type' => 'number',
			'prefix' => '+91',
			'suffix' => 'eg, 4845023157'
		]);
		$this->crud->addField([
			'name' => 'email',
			'label' => "E Mail ID",
			'type' => 'email',
			'suffix' => 'eg, reji@plcclegal.com'
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
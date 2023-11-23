<?php
namespace App\Controllers;


defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends BaseController {
	
	
	public function index() {
		$data['subview'] = 'index';
		return view('_blog_layout', $data);
	}
}
<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Blog extends BaseController
{
	public function index()
	{
    echo '<h2>LIst of blog posts</h2>';
		//return view('shop');
	}

  public function createNew() {
    return view('blog_form');
  }

  public function saveBlog() {
    echo '<pre></pre>';
      print_r($_POST);
    echo '<pre></pre>';
  }
}
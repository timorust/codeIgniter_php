<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Shop extends BaseController
{
	public function index()
	{
    echo '<h2>This is => Admin shop area</h2>';
		//return view('shop');
	}

  public function product($type, $prod_id) {
    echo '<h2>This is an Admin product => '.$type.' with and id => '.$prod_id.'</h2>';
    //return view('product');
  }
}
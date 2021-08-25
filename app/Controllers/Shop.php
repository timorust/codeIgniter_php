<?php

namespace App\Controllers;

class Shop extends BaseController
{
	public function index()
	{
		return view('shop');
	}

  public function product($type = 'laptop', $prod_id = 'Dell') {
    echo '<h2>This is a product => '.$type.' with and id => '.$prod_id.'</h2>';
    //return view('product');
  }
}
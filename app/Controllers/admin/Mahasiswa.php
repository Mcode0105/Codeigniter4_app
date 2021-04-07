<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Mahasiswa extends BaseController
{
	public function index()
	{
		return view('admin/mahasiswa');
	}
}

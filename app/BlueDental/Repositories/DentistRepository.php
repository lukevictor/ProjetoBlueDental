<?php

namespace App\BlueDental\Repositories;

use App\Http\Requests;

use App\BlueDental\Models\Dentist;

use DB;

class DentistRepository
{

	public function getAll()
	{
		return Dentist::all();
	}

}
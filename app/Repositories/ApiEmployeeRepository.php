<?php

namespace App\Repositories;

use App\Interfaces\EmployeeInterface;
use Illuminate\Support\Facades\Http;


class ApiEmployeeRepository implements EmployeeInterface
{
	/**
	 * Gets all.
	 *
	 * @return     array.
	 */
	public function getAll(): array
	{

		$token = session('access_token');
		$url = config('api.url') . 'employee/list/';
		$header = ['Access-Token' => $token];

		$response = Http::withHeaders($header)->get($url)->json();

        $employees = $response['data'];

	    return $employees;

	}
}
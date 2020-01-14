<?php


namespace App\Http\Controllers;


use App\Models\Crud;
use http\Env\Request;

class CrudController
{
    public function index()
    {
        return Crud::all();
    }
}

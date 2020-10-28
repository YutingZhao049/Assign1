<?php namespace App\Controllers;

class Character extends \CodeIgniter\Controller
{
    public function index()
    {
       // connect to the model
       $character = new \App\Models\Character();
       // retrieve all the records
       $records = $character->findAll();
       // JSON encode and return the result
       return json_encode($records);
    }
}

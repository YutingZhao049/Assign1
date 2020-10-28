<?php namespace App\Controllers;

class Twilightcharacters extends BaseController
{
    public function index()
    {
        // connect to the model
    $character = new \App\Models\Character();
        // retrieve all the records
    $records = $character->findAll();
    
        // get a template parser
    $parser = \Config\Services::parser();
        // tell it about the substitions
    return $parser->setData(['records' => $records])
        // and have it render the template with those
    ->render('characterlist');
    }
    public function showme($id)
    {
        // connect to the model
      $places = new \App\Models\Character();
        // retrieve all the records
      $record = $places->find($id);
      // get a template parser
      $parser = \Config\Services::parser();
      // tell it about the substitions
      return $parser->setData($record)
      // and have it render the template with those
      ->render('onecharacter');
    }
}
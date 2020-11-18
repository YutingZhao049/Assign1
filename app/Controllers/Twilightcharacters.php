<?php namespace App\Controllers;

class Twilightcharacters extends BaseController
{
    public function index()
    {
        // connect to the model
    $Character = new \App\Models\Character();
    $records = $Character->findAll();
    $parser = \Config\Services::parser();

    $table = new \CodeIgniter\View\Table();
    $headings = $Character->fields;
    $table->setHeading($headings[1],$headings[7],"details");
    
    foreach ($records as $record) 
    {
    $nameLink = anchor("Twilightcharacters/showme/$record->id","details");
    $table->addRow($record->name,"<img src=\"/image/".$record->image."\"/>",$nameLink);
    }

    $template = [
    'table_open' => '<table cellpadding="5px">',
    'cell_start' => '<td style="border: 1px solid #dddddd;">',
    'row_alt_start' => '<tr style="background-color:#dddddd">',
    ];
    $table->setTemplate($template);
    $fields = [
    'title' => 'Twilightcharacters introduction',
    'heading' => 'Twilightcharacters introduction',
    'footer' => 'Copyright Yuting_Zhao'
    ];
    return $parser->setData($fields)
    ->render('templates\top') .
    $table->generate() .
    $parser->setData($fields)->render('templates\bottom');
    }
    
    /*return $parser->setData(['records' => $records])
        // and have it render the template with those
    ->render('Characterlist');
    }*/
    public function showme($id)
    {
        // connect to the model
      $Character = new \App\Models\Character();
        // retrieve all the records
      $record = $Character->find($id);
      // get a template parser
      $parser = \Config\Services::parser();
      // tell it about the substitions
      $table = new \CodeIgniter\View\Table();
      $headings = $Character->fields;
      $table->addRow($headings[0],$record['id'])
      ->addRow($headings[1],$record['name'])
      ->addRow($headings[2],$record['description'])
      ->addRow($headings[3],$record['gender'])
      ->addRow($headings[4],$record['age'])
      ->addRow($headings[5],$record['address'])
      ->addRow($headings[6],$record['race'])
      ->addRow($headings[7],"<img src=\"/image/".$record['image']."\"/>");
      
    $template = [
    'table_open' => '<table cellpadding="5px">',
    'cell_start' => '<td style="border: 1px solid #dddddd;">',
    'row_alt_start' => '<tr style="background-color:#dddddd">',
    ];
    $table->setTemplate($template);
    $fields = [
    'title' => 'Twilightcharacters introduction',
    'heading' => 'Twilightcharacters introduction',
    'footer' => 'Copyright Yuting_Zhao'
    ];
      
  return $parser->setData($fields)
 ->render('templates\top') .
 $table->generate() .
 $parser->setData($fields)
 ->render('templates\bottom');

    }
}
      /*return $parser->setData($record)
      // and have it render the template with those
      ->render('onecharacter');
    }
}*/
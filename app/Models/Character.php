<?php
namespace App\Models;

use App\Models\Simple\JSONModel;

class Character extends JSONModel {
    protected $origin = WRITEPATH . 'data/TwilightcharactersData.json';
    protected $keyField = 'id';
    protected $validationRules = [];
}

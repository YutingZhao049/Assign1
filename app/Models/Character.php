<?php
 namespace App\Models;
 class  Character 
 {
  protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Isabella',
            'description' => 'Her thoughts are impenetrable;No one can read her mind unless she lets them.She is able to defend against all types of psychological attacks and has learned to protect those around her from such attacks.',
            'gender' => 'Female',
            'age' => 17,
            'address' => 'Forks, Washington',
            'race' => 'The vampire',
            'image' => '1.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Edward',
            'description' => 'He could read the mind of anyone who came near him, but Bella Cullen was an exception',
            'gender' => 'Male',
            'age' => 17,
            'address' => 'Chicago, Illinois',
            'race' => 'The vampire',
            'image' => '2.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Jacob Black',
            'description' => 'Alpha breed of wolves, super fast.',
            'gender' => 'Male',
            'age' => 20,
            'address' => 'Chicago, Illinois',
            'race' => 'A werewolf',
            'image' => '3.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Alice Cullen',
            'description' => 'Seeing things that might happen and things that might happen.',
            'gender' => 'Female',
            'age' => 17,
            'address' => 'Chicago, Illinois',
            'race' => 'The vampire',
            'image' => '4.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Victoria',
            'description' => 'Special anti-tracking and escape ability.',
            'gender' => 'Female',
            'age' => 1700,
            'address' => 'Chicago, Illinois',
            'race' => 'The vampire',
            'image' => '5.jpg',
        ],
              '6' => [
            'id' => 6,
            'name' => 'Aro',
            'description' => 'The head of the Volturi family.Learn all the thoughts of others by the touch of their hands except Bella.',
            'gender' => 'Male',
            'age' => 3000,
            'address' => 'Chicago, Illinois',
            'race' => 'The vampire',
            'image' => '6.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }
 }


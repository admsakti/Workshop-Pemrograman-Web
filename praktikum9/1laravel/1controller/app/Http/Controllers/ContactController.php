<?php

namespace App\Http\Controllers;

class ContactController extends Controller {
    public function index() {
        $companies = [
            1 => ['name' => 'Company One', 'contacts' => 3],
            2 => ['name' => 'Company Two', 'contacts' => 5],
        ];
    
    $contacts = $this->getContacts();
    return view('contacts.index', compact('contacts', 'companies'));
    }

    protected function getContacts() {
        return [
            1 => ['id' => 1, 'name' => 'Name 1', 'phone' => '085123456789'],
            2 => ['id' => 2, 'name' => 'Name 2', 'phone' => '085987654321'],
            3 => ['id' => 3, 'name' => 'Name 3', 'phone' => '081567891234'],
        ];
    }
}
<?php

namespace App\Http\Controllers;
use App\Repositories\CompanyRepository;


class ContactController extends Controller {
    public function __construct(protected CompanyRepository $company) {
        // 
    }

    public function index() {
        $companies = $this->company->pluck();
        $contacts = $this->getContacts();
        return view('contacts.index', compact('contacts', 'companies'));
    }

    public function create() {
        return view('contacts.create');
    }

    public function show($id) {
        $contacts = $this->getContacts();
        abort_unless(isset($contacts[$id]), 404);
        $contact = $contacts[$id];
        return view('contacts.show')->with('contact', $contact);
    }

    protected function getContacts() {
        return [
            1 => ['id' => 1, 'name' => 'Name 1', 'phone' => '085123456789'],
            2 => ['id' => 2, 'name' => 'Name 2', 'phone' => '085987654321'],
            3 => ['id' => 3, 'name' => 'Name 3', 'phone' => '081567891234'],
        ];
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            // Name of the page
            $titlePage = 'Dashboard';

            // Get all contacts
            $contacts = Contact::getContactsByUser(auth()->user()->id);

            return view('dashboard.index', ['contacts' => $contacts]);
        } catch (\Throwable $th) {
            session()->flash('warningMsg', 'Error accessing page.');

            return redirect()->back();
        }
    }
}

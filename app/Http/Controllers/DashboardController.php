<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Dashboard
     *
     * @return View|RedirectResponse
     */
    public function index(): View|RedirectResponse
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

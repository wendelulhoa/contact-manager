<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
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
            $qtdUsers = User::count();

            return view('dashboard.index', ['titlePage' => $titlePage , 'contacts' => $contacts, 'qtdUsers' => $qtdUsers]);
        } catch (\Throwable $th) {
            session()->flash('warningMsg', 'Error accessing page.');

            return redirect()->back();
        }
    }
}

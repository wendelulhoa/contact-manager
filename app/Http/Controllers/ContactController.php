<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Return saved contacts 
     *
     * @return View
     */
    public function index(): View
    {
        return view('admin.contact.index');
    }

    /**
     * Create new contact
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.contact.create');
    }

    /**
     * Store new contact
     *
     * @return View
     */
    public function store(ContactRequest $request)
    {
        try {
            DB::beginTransaction();

            // Create new contact
            $contact = Contact::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'notes' => $request->note,
                // 'user_id' => auth()->user()->id
            ]);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            abort(400);
        }
    }

    /**
     * Edit contact
     *
     * @return View
     */
    public function edit(Contact $contact): View
    {
        return view('admin.contact.edit');
    }

    /**
     * Update contact
     *
     * @return View
     */
    public function update(Request $request, Contact $contact)
    {
        try {
            DB::beginTransaction();
            dd($contact);
            // Update contact
            $contact->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'notes' => $request->note,
                // 'user_id' => auth()->user()->id
            ]);

            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    /**
     * Return saved contacts 
     *
     * @return View
     */
    public function index(): View|RedirectResponse
    {
        try {
            // Define o título da página
            $titlePage = 'Contacts';

            return view('contact.index', ['titlePage' => $titlePage]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Erro ao carregar a página de clientes.');
        }
    }

    /**
     * Create new contact
     *
     * @return View
     */
    public function create(): View|RedirectResponse
    {
        try {
            // Define o título da página
            $titlePage = 'Create contact';

            return view('contact.create');
        } catch (\Throwable $th) {
            session()->flash('warningMsg', 'Error accessing page.');

            return redirect()->back();
        }
    }

    /**
     * Store new contact
     *
     * @return RedirectResponse
     */
    public function store(ContactRequest $request): RedirectResponse
    {
        try {
            DB::beginTransaction();

            // Create new contact
            Contact::create([
                'name' => $request['name'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'notes' => $request['notes'],
                'user_id' => auth()->user()->id
            ]);

            DB::commit();

            // Flash message
            session()->flash('successMsg', 'Contact created successfully.');

            return redirect()->route('admin.contact.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            // Flash message
            session()->flash('warningMsg', 'Error creating contact.');

            return redirect()->route('admin.contact.index');
        }
    }

    /**
     * Edit contact
     *
     * @return View
     */
    public function edit(Contact $contact): View|RedirectResponse
    {
        try {
            // Define o título da página
            $titlePage = 'edit contact';

            return view('contact.edit', ['contact' => $contact, 'titlePage' => $titlePage]);
        } catch (\Throwable $th) {
            session()->flash('warningMsg', 'Error accessing page.');

            return redirect()->back();
        }
    }

    /**
     * Update contact
     *
     * @return RedirectResponse
     */
    public function update(ContactRequest $request, Contact $contact): RedirectResponse
    {
        try {
            DB::beginTransaction();

            // Update contact
            $contact->update([
                'name' => $request['name'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'notes' => $request['notes']
            ]);

            DB::commit();

            // Flash message
            session()->flash('successMsg', 'Contact updated successfully.');

            return redirect()->route('admin.contact.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            
            // Flash message
            session()->flash('warningMsg', 'Error updating contact.');

            return redirect()->back();
        }
    }

    /**
     * Delete contact
     *
     * @param int $clientId
     * 
     * @return JsonResponse
     */
    public function delete(int $clientId): JsonResponse
    {
        try {
            // Get contact
            $client = Contact::where(['id' => $clientId, 'user_id' => auth()->user()->id])->first();

            // Delete contact
            $client->delete();

            return response()->json(['success' => 'Client deleted successfully.'], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Error deleting client.', 'message' => $th->getMessage()], 400);
        }
    }

    /**
     * Get contacts by datatable
     *
     * @param string $month
     * @param string $year
     * 
     * @return JsonResponse
     */
    public function getContactsByUserDatatable(): JsonResponse
    {
        try {
            // Busca as produtos
            $contacts = Contact::getContactsByUser(auth()->user()->id);

            return DataTables::of($contacts)
                ->addIndexColumn()
                ->addColumn('name', function ($contact) {
                    return $contact->name;
                })
                ->addColumn('actions', function ($contact) {
                    return view('contact.components.actions-contact', ['contact' => $contact]);
                })
                ->make(true);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Error loading contacts.'], 500);
        }
    }
}

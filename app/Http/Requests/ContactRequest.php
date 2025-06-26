<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Get contact id
        $contactId = $this->route('contact')?->id; // ou $this->contact se for implicit binding

        return [
            'name' => 'required',
            'phone' => 'required|min:9',
            'email' => 'required|email|unique:contacts,email,' . $contactId,
            'notes' => 'nullable',
        ];
    }
}

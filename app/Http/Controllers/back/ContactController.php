<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\contact\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::all();
        return view("back.contact.contact", ['contacts' => $contacts]);
    }
    public function add() {
        return view("back.contact.contact_add");
    }
    public function create(ContactRequest $request) {

        $created = Contact::create($request->all());
        IF($created) {
            return redirect()->route('admin.contact.index')->with("message", "verilənlər uğurla əlavə edildi");
        }

    }
    public function delete($id) {
        $contact = Contact::findOrFail($id);
        if (!$contact) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        $deleted = $contact->delete();

        if ($deleted) {
            return redirect()->route('admin.contact.index')->with("message", "verilənlər uğurla silindi");
        }
    }

    public function change($id) {
        $contact = Contact::findOrFail($id);
        if (!$contact) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        return view("back.contact.contact_change", ['id' => $id, 'contact' => $contact]);
    }

    public function update( ContactRequest $request, $id) {
        $contact = Contact::findOrFail($id);
        $updated = $contact->update($request->all());
        IF($updated) {
            return redirect()->route('admin.contact.index')->with("message", "verilənlər uğurla güncəlləndi");
        }
    }
}

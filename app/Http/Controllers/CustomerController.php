<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer() {
        $cus = Customer::paginate('10');
        return view('customer.data', compact('cus'));
    }

    public function tambah_customer(Request $request) {
        $request->validate([
            'kode' => 'required',
            'name' => 'required',
            'telp' => 'required'
        ]);

        Customer::create([
            'kode' => $request->kode,
            'name' => $request->name,
            'telp' => $request->telp,
        ]);
    
        return redirect('customer')->with('success', 'Customer berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = Customer::find($id);
        $data->update($request->all());
        return redirect('/customer')->with('DATA WAS UPDATED');
    }

    public function delete($id)
    {
        $Customer = Customer::find($id);
        if (!$Customer) {
            return redirect('/customer')->with('error', 'Customer not found.');
        }
        $Customer->delete();
        return redirect('/customer')->with('success', 'Customer deleted successfully.');
    }
}

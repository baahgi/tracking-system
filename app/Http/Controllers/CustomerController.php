<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customer.index', [
            'customers' => $customers
        ]);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'company_name' => ['required'],
            'email' => ['required', 'string', 'email'],
            'phone' => ['required', 'min:10', 'max:13'],
            'password' => ['required', 'confirmed' ,Rules\password::default()]
        ]);

        $cus = Customer::latest()->first();
        $cus_code = $cus->code;
        $code = $cus_code + 1;

        $password = Hash::make($request->password);

        Customer::create([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'code' => $code,
            'password' => $password,
            'address' => $request->address,
        ]);

        return redirect()->to('/customer')
            ->with('success', 'Customer saves successfully');
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }


    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $this->validate($request, [
            'name' => ['required'],
            'company_name' => ['required'],
            'email' => ['required', 'string', 'email'],
            'phone' => ['required', 'min:10', 'max:13'],
            'password' => ['nullable', 'confirmed' ,Rules\password::default()]
        ]);

        $customer->update($request->merge(['password' => Hash::make($request->get('password'))])
            ->except([$request->get('password') ? '' : 'password']));


        return redirect()->back()->with('success', 'Customer updated successfully');
    }
}

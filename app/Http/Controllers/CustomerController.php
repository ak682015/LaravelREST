<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Customer;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;


class CustomerController extends Controller
{
    public function index(Request $request)
    {
        // $customers = Customer::where('active',1)->get();
        $customers = Customer::where('active', $request->query('active', 1))->get();


        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store()
    {
      $customer = Customer::create($this->validatedData());

    //   dd($customer->email);
      Mail::to($customer->email)->send(new WelcomeMail());

       return redirect('/customers/' . $customer->id);
    }


    public function show(Customer $customer)
    {
        //  $customer = Customer::findOrFail($customerId);

         return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        //  $customer = Customer::findOrFail($customerId);

         return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer)
    {

            
        $customer->update($this->validatedData());
    
 
        return redirect('\customers');

    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('/customers');
    }


    protected function validatedData()
    {
       return request()->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
class CustomerController
{
    public function showAll(Request $request)
    {
        $customers = Zoo::all();


        return view('customers', ['customerList' => $customers]);
    }

    public function showCustomerData(Request $request, Zoo $customer)
    {
        $customerData = $customer->data;
        dd($customerData->toArray());
    }
}

public function TestAction(Request $request, int $id)
{
    $model = Customer::findOrFail($id);

    if (!$model) {
        //...
        return;
    }

    $name = $model->name;
}

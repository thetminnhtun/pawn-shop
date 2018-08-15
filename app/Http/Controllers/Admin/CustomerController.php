<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Exports\CustomerFormExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerName    = Input::get('customerName'); // Input or \Request
        $category        = \Request::get('category');
        $id              = \Request::get('id');
        $customerAddress = \Request::get('customerAddress');
        $updated_at      = \Request::get('updated_at');
        $loan            = \Request::get('loan');
        $q               = Input::get('q');
        if ($customerName) {
            $customers  = Customer::where('customer_name', $customerName)->orWhere('customer_name', 'like', '%' . $customerName . '%')->orderBy('id', 'desc')->paginate(10);
            $pagination = $customers->appends(['customerName' => $customerName]);
        } elseif ($category) {
            $customers  = Customer::where('category', 'like', '%' . $category . '%')->orderBy('id', 'desc')->paginate(10);
            $pagination = $customers->appends(['category' => $category]);
        } elseif ($id) {
            $customers = Customer::where('id', $id)->paginate(10);
        } elseif ($customerAddress) {
            $customers  = Customer::where('customer_address', 'like', '%' . $customerAddress . '%')->orderBy('id', 'desc')->paginate(10);
            $pagination = $customers->appends(['customerAddress' => $customerAddress]);
        } elseif ($updated_at) {
            $customers  = Customer::where('updated_at', 'like', '%' . $updated_at . '%')->orderBy('id', 'desc')->paginate(10);
            $pagination = $customers->appends(['updated_at' => $updated_at]);
        } elseif ($loan) {
            $customers  = Customer::where('loan', 'like', '%' . $loan . '%')->orderBy('id', 'desc')->paginate(10);
            $pagination = $customers->appends(['loan' => $loan]);
        } elseif ($q) {
            $customers = Customer::where('category', 'like', '%' . $q . '%')
                ->orWhere('customer_name', 'like', '%' . $q . '%')
                ->orderBy('id', 'desc')->paginate(10);
            $pagination = $customers->appends(['q' => $q]);
        } else {
            $customers = Customer::orderBy('id', 'desc')->paginate(10);
        }

        return view('admin.customer.list', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        if ($request->validated()) {
            $date = $request->date ? $request->date : Carbon::now();
            $customer = new Customer();
            $customer->category         = $request->category;
            $customer->kyat             = $request->kyat;
            $customer->pae              = $request->pae;
            $customer->yway             = $request->yway;
            $customer->loan             = $request->loan;
            $customer->customer_name    = $request->customerName;
            $customer->customer_address = $request->customerAddress;
            $customer->created_at       = $date;
            $customer->updated_at       = $date;
            $result                     = $customer->save();
        }
        if ($result) {
            return redirect()->route('customer.index')->with('status', 'New Customer was created successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        if ($request->validated()) {
            $customer                   = Customer::find($id);
            $customer->category         = $request->category;
            $customer->kyat             = $request->kyat;
            $customer->pae              = $request->pae;
            $customer->yway             = $request->yway;
            $customer->loan             = $request->loan;
            $customer->customer_name    = $request->customerName;
            $customer->customer_address = $request->customerAddress;
            $customer->updated_at       = $request->date;
            $result                     = $customer->save();
        }
        if ($result) {
            return redirect()->route('customer.index')->with('status', ' Customer was updated successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);

        $result = $customer->delete();

        if ($result) {
            return redirect()->route('customer.index')->with('status', ' Customer was deleted successfully!');
        }
    }

    public function restore($id)
    {
        $customer = Customer::onlyTrashed()->find($id);
        $result   = $customer->restore();
        if ($result) {
            return redirect()->route('customer.index')->with('status', ' Customer was restored successfully!');
        }
    }

    public function trash()
    {
        $customers = Customer::onlyTrashed()->get();
        return view('admin.customer.trash', compact('customers'));
    }

    public function forceDelete($id)
    {
        $customer = Customer::onlyTrashed()->find($id);
        $result   = $customer->forceDelete();
        if ($result) {
            return redirect('customer/trash')->with('status', ' Customer was deleted successfully!');
        }
    }

    public function export()
    {
        // return Excel::download(new CustomersExport, 'customers.xlsx');
        return Excel::download(new CustomerFormExport, 'customers.xlsx');
    }

    public function search($customers = '')
    {
        if ($customers) {

            return view('admin.customer.list', compact('customers'));
        }
        return view('admin.customer.search');
    }

}

<?php 

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Customer;

class CustomerFormExport implements FromView
{
    public function view(): View
    {
        return view('admin.customer.export', [
            'customers' => Customer::all()
        ]);
    }
}
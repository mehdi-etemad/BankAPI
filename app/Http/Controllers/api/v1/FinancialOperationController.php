<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Account;

class FinancialOperationController extends Controller
{
    public function card2card(Request $request) {
        //$result = Customer::find(1)->accounts;
        //$result = Account::find(1)->customer;
        $result = 'Result - JSON - Data';
        return response()->json([
            'code' => 1,
            'message' => 'Successfully',
            'data' => $result
        ]);
    }
}

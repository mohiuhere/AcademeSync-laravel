<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function feeTypeIndex(){
        return view('admin.pages.fees.fee-type');
    }

    public function createFeeTypeIndex(){
        return view('admin.pages.fees.fee-type-create');
    }

    public function feeMasterIndex(){
        return view('admin.pages.fees.fee-master');
    }

    public function createFeeMasterIndex(){
        return view('admin.pages.fees.fee-master-create');
    }

    public function feeAssingIndex(){
        return view('admin.pages.fees.fee-assign');
    }
    public function createFeeAssingIndex(){
        return view('admin.pages.fees.fee-assign-create');
    }

    public function feeCollectIndex(){
        return view('admin.pages.fees.fee-collect');
    }

    public function createFeeCollectIndex(){
        return view('admin.pages.fees.fee-collect-create');
    }

    public function collectFeeCollectIndex(){
        return view('admin.pages.fees.fee-collect-individual');
    }
}

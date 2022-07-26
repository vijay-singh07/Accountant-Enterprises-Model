<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;
use App\Http\Requests\TransactionRequest;
use PDF;

class TransactionController extends Controller
{
    public function index(){
        return view('dashboard.create_transaction');
    }

    public function show(){
        return view('dashboard.transaction_list');
    }

    public function save(TransactionRequest $request){
            $Transaction= new Transaction();
            $Transaction->date = $request->date;
            $Transaction->description = $request->description;
            $Transaction->paid = $request->paid;
            $Transaction->unit_amount = $request->unit_amount;
            $Transaction->unit_quantity = $request->unit_quantity ;
            $Transaction->unit_name = $request->unit_name;
            $Transaction->type = $request->type;
            $Transaction->status = $request->status;
            $Transaction->utr = $request->utr;
            $Transaction->comments = $request->comments;
            $Transaction->project = $request->project;
            $res= $Transaction-> save();
            if ($res){
                return redirect()->route('transaction-list');
            } else {
                return back()->with('fail','Something went wrong.');
            }
    }

    public function list(){
        $transaction_data = Transaction::latest('updated_at')->get();
        return view('dashboard.transaction_list', ['lists' => $transaction_data]);
    }

    public function edit($id){
        $editable = Transaction::find($id);
        return view('dashboard.edit_transaction', compact('editable'));
    }

    public function delete($id){
        $editable = Transaction::find($id);
        if(!is_null($editable)){
            $editable->delete();
        }
        return redirect()->route('transaction-list');
    }

    public function update( Request $request){

            $Transaction= Transaction::find($request->tid);
            $Transaction-> date= $request->date;
            $Transaction->description = $request->description;
            $Transaction->paid = $request->paid;
            $Transaction->unit_amount = $request->unit_amount;
            $Transaction->unit_quantity = $request->unit_quantity ;
            $Transaction->unit_name = $request->unit_name;
            $Transaction->type = $request->type;
            $Transaction->status = $request->status;
            $Transaction->comments = $request->comments;
            $Transaction->project = $request->project;
            $res= $Transaction-> save();

            return redirect()->route('transaction-list');
    }

    public function receipt ($id)
    {
        $editable = Transaction::find($id);
        $reciept = [
            'editable' => $editable,
        ];

        $pdf = PDF::loadView('invoice.reciept', $reciept);

        return $pdf->download('reciept.pdf');
    }

}

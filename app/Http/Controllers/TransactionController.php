<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;
use PDF;

class TransactionController extends Controller
{
    public function index(){
        return view('dashboard.createTransaction');
    }

    public function show(){
        return view('dashboard.transactionList');
    }

    public function save(Request $request){
        $request->validate([
            'date'=>'required',
            'description'=>'required',
            'paid'=>'required',
            'unit_amount'=>'required|max:10',
            'unit_quantity'=>'required|max:10',
            'unit_name'=>'required',
            'type'=>'required',
            'status'=>'required',
            'utr'=>'required',
            'comments'=>'required',
            'project'=>'required'
            ]);
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
        return view('dashboard.transactionList', ['lists' => $transaction_data]);
    }

    public function edit($id){
        $editable = Transaction::find($id);
        return view('dashboard.editTransaction', compact('editable'));
    }

    public function delete($id){
        $editable = Transaction::find($id);
        if(!is_null($editable)){
            $editable->delete();
        }
        return redirect()->route('transaction-list');
    }

    public function update( Request $request){
        $request->validate([
            'date'=>'required',
            'description'=>'required',
            'paid'=>'required',
            'unit_amount'=>'required|max:10',
            'unit_quantity'=>'required|max:10',
            'unit_name'=>'required',
            'type'=>'required',
            'status'=>'required',
            'comments'=>'required',
            'project'=>'required'
            ]);

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
        // return view('receipt',['data'=>$data]);
    }

}

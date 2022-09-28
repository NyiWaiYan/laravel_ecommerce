<?php

namespace App\Http\Controllers;

use App\Models\Supplierdetail;
use Illuminate\Http\Request;

class SupplierdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
        $suppliers=Supplierdetail::all();
        return view('admin.supplier.index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = new Supplierdetail();
        $supplier->name=$request->input('name');
        $supplier->company=$request->input('company');
        $supplier->phone=$request->input('phone');
        $supplier->email=$request->input('email');
        $supplier->address=$request->input('address');
        $supplier->save();
        return redirect('suppliers')->with('status',"Supplier Added Successfully");
        
    }


    public function edit($id){
            $supplier = Supplierdetail::findOrFail($id);
            return view('admin.supplier.edit',compact('supplier'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplierdetail  $supplierdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Supplierdetail $supplierdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplierdetail  $supplierdetail
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplierdetail  $supplierdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier=Supplierdetail::find($id);
        $supplier->name=$request->input('name');
        $supplier->company=$request->input('company');
        $supplier->phone=$request->input('phone');
        $supplier->email=$request->input('email');
        $supplier->address=$request->input('address');
        $supplier->update();
        return redirect('suppliers')->with('status',"Supplier Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplierdetail  $supplierdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier=Supplierdetail::find($id);
        $supplier->delete();
        return redirect('suppliers')->with('status',"Supplier Deleted Successfully");
    }
}

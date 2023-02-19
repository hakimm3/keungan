<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncomeCategoryRequest;
use App\Models\IncomeCategory;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Http\Request;

class IncomeCategoryController extends Controller
{
    public function index(Request $request){
        $data = \App\Models\IncomeCategory::all();
        if($request->ajax()){
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function($row){
                    if($row->status == 1){
                        return '<span class="badge badge-success">Active</span>';
                    }else{
                        return '<span class="badge badge-danger">Non Active</span>';
                    }
                })
                ->addColumn('action', 'pemasukan.category.action')
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
        return view('pemasukan.category.index');
    }

    public function store(IncomeCategoryRequest $request){
        IncomeCategory::updateOrCreate(['id' => $request->id], $request->validated());
        return response(200);
    }

    public function edit($id){
        $category = IncomeCategory::find($id);
        return response()->json([
            'data' => $category,
        ]);
    }

    public function destroy($id){
        IncomeCategory::find($id)->delete();
        return response(200);
    }
}
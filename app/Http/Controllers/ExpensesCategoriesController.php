<?php

namespace App\Http\Controllers;

use App\ExpensesCategories;
use Illuminate\Http\Request;
use DB;

class ExpensesCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('currentUser')){
    		$employees = DB::table('employees')->get(); //here i take example table for result purpose
			return view('admin.expense_categories.index', ['employees' => $employees]);
        }
        else{
            return view('errors/unauthorized');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        // ]);
        // ExpensesCategories::create($request->all());
        // return 'success';
        // return redirect()->route('admin.expense_categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExpensesCategories  $expensesCategories
     * @return \Illuminate\Http\Response
     */
    public function show(ExpensesCategories $expensesCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExpensesCategories  $expensesCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpensesCategories $expensesCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExpensesCategories  $expensesCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpensesCategories $expensesCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExpensesCategories  $expensesCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpensesCategories $expensesCategories)
    {
        //
    }
}

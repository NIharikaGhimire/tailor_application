<?php

namespace App\Http\Controllers;

use App\Models\PersonalDetail;
use Illuminate\Http\Request;

class PersonalDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personaldetails = PersonalDetail::latest()->paginate(50);
        return view('admin.personaldetail.index',['personaldetails' => $personaldetails, 'page_title' =>'Personal Details']);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $personaldetails=PersonalDetail::all();
        return view('admin.personaldetail.create', [ 'page_title' =>'Create personaldetails','personaldetails' =>$personaldetails]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate= $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',

        ]);



        $personaldetail = new PersonalDetail;
        $personaldetail->name = $request->name;
        $personaldetail->address = $request->address;
        $personaldetail->phone = $request->phone;

        $personaldetail->save();
        return redirect('admin/personaldetail/index')->with(['successMessage' => 'Success!! Personal Details created']);



        // if ($post->save()) {
        //     $post->getCategories()->sync($request->categories);
        //     return redirect('admin/post/index')->with(['successMessage' => 'Success!! Post created']);
        // } else {
        //     return redirect()->back()->with(['errorMessage' => 'Error!! Post not created']);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalDetail  $personalDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalDetail $personalDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalDetail  $personalDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalDetail $personalDetail,$id)
    {
        //
        $personaldetail = PersonalDetail::find($id);
        return view('admin.personaldetail.update', ['personaldetail' => $personaldetail, 'page_title' =>'Update personaldetail']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalDetail  $personalDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalDetail $personalDetail)
    {
        //
        $validate= $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',

        ]);


        $personaldetail = PersonalDetail::find($request->id);
        $personaldetail->name = $request->name;
        $personaldetail->address = $request->address;
        $personaldetail->phone = $request->phone;

        $personaldetail->save();
        return redirect('admin/personaldetail/index')->with(['successMessage' => 'Success!! Personal Details updated']);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalDetail  $personalDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalDetail $personalDetail, $id)
    {
        //
        $personaldetail = PersonalDetail::find($id);

        if ($personaldetail->delete()) {

            return redirect('admin/personaldetail/index')->with(['successMessage' => 'Success !! personaldetail Deleted']);
        } else {
            return redirect()->back()->with(['errorMessage' => 'Error personaldetail not Deleted']);
    }
}
}

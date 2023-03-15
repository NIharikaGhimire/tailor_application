<?php

namespace App\Http\Controllers;

use App\Models\MeasurementDetail;
use App\Models\PersonalDetail;
use Illuminate\Http\Request;

class MeasurementDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $measurementdetails = MeasurementDetail::with('getPersonalDetail')->latest()->paginate(5);
        // $measurementdetails = MeasurementDetail::all();
        return view('admin.measurementdetail.index',['measurementdetails' => $measurementdetails, 'page_title' =>'Measurement Details']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $personaldetail=PersonalDetail::all();
        $personaldetail=PersonalDetail::all();
        $measurementdetails=MeasurementDetail::all();
        return view('admin.measurementdetail.create', [
            'page_title' =>'Create measurementdetails',
            'measurementdetails' =>$measurementdetails,
            'personaldetail' =>$personaldetail,
        ]);
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
            'title' => 'required|string',
            'personaldetails' => 'required',
        ]);
        $personaldetail = PersonalDetail::find(1);
        $measurementdetail = new MeasurementDetail;
        // $measurementdetail->personal_details_id = $request->personal_details_id;
        $measurementdetail->title = $request->title;



         $measurementdetail->getPersonalDetail()->associate($personaldetail);

         $measurementdetail->save();

        //  if ($measurementdetail->save()) {

        //     return redirect('admin/measurementdetail/index')->with(['successMessage' => 'Success!! measurement created']);
        // } else {
        //     return redirect()->back()->with(['errorMessage' => 'Error!! measurement not created']);
        // }

        // $measurementdetail->save();
        // return redirect('admin/measurementdetail/index')->with(['successMessage' => 'Success!! measurement Details created']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MeasurementDetail  $measurementDetail
     * @return \Illuminate\Http\Response
     */
    public function show(MeasurementDetail $measurementDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MeasurementDetail  $measurementDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(MeasurementDetail $measurementDetail,$id)
    {
        //
        // $personaldetail=PersonalDetail::all();
        $measurementdetail = MeasurementDetail::find($id);
        return view('admin.measurementdetail.update', ['measurementdetail' => $measurementdetail, 'page_title' =>'Update measurementdetail']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MeasurementDetail  $measurementDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MeasurementDetail $measurementDetail)
    {

        $validate= $request->validate([
            'title' => 'required|string',
            // 'personaldetail' => 'required|string',
        ]);

        $measurementdetail = MeasurementDetail::find($request->id);
        $measurementdetail->title = $request->title;
        $measurementdetail->save();
        return redirect('admin/measurementdetail/index')->with(['successMessage' => 'Success!! measurement Details updated']);
        // if ($measurementdetail->save()) {
        //     // $measurementdetail->Personaldetail()->sync($request->personal_details);
        //     return redirect('admin/measurementdetail/index')->with(['successMessage' => 'Success!! measurement created']);
        // } else {
        //     return redirect()->back()->with(['errorMessage' => 'Error!! measurement not created']);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MeasurementDetail  $measurementDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(MeasurementDetail $measurementDetail, $id)
    {
        //
        $measurementdetail = MeasurementDetail::find($id);

        if ($measurementdetail->delete()) {
            // $measurementdetail->Personaldetail()->detach();

            return redirect('admin/measurementdetail/index')->with(['successMessage' => 'Success !! measurementdetail Deleted']);
        } else {
            return redirect()->back()->with(['errorMessage' => 'Error measurementdetail not Deleted']);
    }
    }
}

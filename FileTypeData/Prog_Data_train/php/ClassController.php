<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Classmaster;
use Auth;
use Flash;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index=Classmaster::paginate(10);
        return view('class.index',compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validation=$this->validate($request, [
          'name' => 'required|max:60',

      ]);
      $data= new Classmaster();
      $data->name=$request->name;
      $data->school_id=Auth::user()->school_id;

      $data->save();
     Flash::overlay('New Class has been Added Successfully','Success');
     return redirect('class');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show=Classmaster::findOrFail($id);
        return view('class.show')->withShow($show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $edit=Classmaster::findOrFail($id);
      return view('class.edit')->withEdit($edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validation=$this->validate($request, [
          'name' => 'required|max:60',

      ]);
      $data=Classmaster::find($id);
      $data->name=$request->name;
      $data->school_id=Auth::user()->school_id;

      $data->update();
     Flash::overlay('Class has been Updated Successfully','Success');
     return redirect('class');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $session = Classmaster::findOrFail($id);
      $session->delete();
      Flash::overlay('Class has been Deleted Successfully','Success');
      return redirect('class');
    }
}

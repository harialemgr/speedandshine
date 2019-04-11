<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Service;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index')->with('services',$services);
    }

    /**
     * Show the form for creating a new resource.
     *(
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'-'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/service/',$fileNameToStore);
        }

        $services = new Service();
        $services->name = $request->name;
        if($request->hasFile('image')){
        $services->image= $fileNameToStore;
        }
        else{
            $services->image = 'noimage.jpg';
        }
        if( $services->save()){
           return redirect()->back()->with('successMsg','File Saved!!');
        }
        else{
          return  redirect()->back()->with('errorMsg','File Not Saved!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service.edit',compact('service'));   
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
        // if($request->hasFile('image')){
        //     $fileNameWithExt = $request->file('image')->getClientOriginalName();
        //     $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     $fileNameToStore = $fileName.'-'.time().'.'.$extension;
        //     $path = $request->file('image')->storeAs('public/car/',$fileNameToStore);
        // }

        $service = Service::find($id);
        $service->name = $request->name;
        // if($request->hasFile('image')){
        // $cars->image= $fileNameToStore;
        // }
        // else{
        //     $cars->image = 'noimage.jpg';
        // }
        if($service->save()){
           return redirect()->back()->with('successMsg','File Updated!!');
        }
        else{
          return  redirect()->back()->with('errorMsg','File Not Not!!');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $service = Service::findOrFail($id);
        Storage::delete('/public/service/'.$service->image);
           $service->delete();
           return redirect(route('service.index'));
    }
}

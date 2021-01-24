<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::paginate(10);

        return view('companies.index')->with('companies',$companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'logo' => 'image',
            'website' => 'url'
        ]);

        if($request->hasFile('logo')){

            $imagePath = request('logo')->store('logos','public');
        }
        else{
            $imagePath = 'logos/'.'noimage.png';
        }
        //$image = Image::make(public_path("storage/{$imagePath}"))->fit(100, 100);
       // $image->save(); 

       $company = new Company;

       //$path = Storage::putFile('public', $request->file('logo'));
       
      // $url = Storage::url($path);

       $company->logo = $imagePath;
       $company->name = $request->name;
       $company->email = $request->email;
       $company->website = $request->website;

       $company->save();

       /* Company::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'logo' => $url,
            'website' => $data['website'],
        ]);*/

        return redirect('/companies')->with('success','Company Created');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);

        return view('companies.show')->with('company' ,$company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);

        return view('companies.edit',compact('company'));
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
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'logo' => 'image',
            'website' => 'url'
        ]);

        if($request->hasFile('logo')){

            $imagePath = request('logo')->store('logos','public');

        }

       $company = Company::find($id);

       //$company->logo = $imagePath;
       if($request->hasFile('logo')){
        $company->logo = $imagePath;
    }
       $company->name = $request->name;
       $company->email = $request->email;
       $company->website = $request->website;

       $company->save();


        return redirect('/companies')->with('success','Company Edited');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect('/companies')->with('error','Company Deleted');
    }
}

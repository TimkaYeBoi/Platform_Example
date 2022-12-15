<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompaniesController extends Controller
{
    public function index()
    {
//        $companies = Companies::latest()->paginate(30);
        if (auth()->user()->role == 'admin'){
            $companies = Companies::all();
        }
        if (auth()->user()->role == 'company'){
            $companies = Companies::where('employee_id',auth()->user()->employee_id)->get()->all();
        }

        return view('admin.Form.index', ['companies' => $companies ]);

    }
    public function app()
    {
        return view("admin.layouts.app");
    }
    public function create()
    {
        return view("admin.Form.create");
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            "company_name" => "string",
            "director_name" => "string",
            "logo" => "file",
            "email" => "string",
            "address" => "string",
            "phone_number" => "string",
            "website" => "string",
        ]);

        // Upload image to database with image name

        if($request->hasFile("logo")) {
            $image = $request->file("logo");
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/Image'), $filename);
        }

        $data['logo'] = $image->getClientOriginalName();
        Companies::create($data);
            return redirect()->route("index");
        }


    public function show(Companies $post)
    {
        return view("admin.Form.show", compact("post") );
    }

    public function edit(Companies $post)
    {
        return view("admin.Form.edit", compact("post") );

    }
    public function update(Companies $post , Request $request){

        $data = request()->validate([
            "company_name"=>"string",
            "director_name"=>"string",
            "logo"=>"file",
            "email"=>"string",
            "address"=>"string",
            "phone_number"=>"string",
            "website"=>"string"
        ]);

        if($request->hasFile("logo")) {
            $image = $request->file("logo");
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/Image'), $filename);

        }
        $data['logo'] = $image->getClientOriginalName();
        $post->update($data);
        return redirect()->route("form.show" , $post->id);
    }

    public function delete(Companies $post)
    {
        return view("admin.Form.delete", compact("post"));

    }

    public function destroy(Companies $post )
    {
        $post->employees()->delete();
        $post->delete();
        return redirect()->route("index");
    }


}


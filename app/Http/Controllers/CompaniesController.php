<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

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
    public function store()
    {
        $data = request()->validate([
            "company_name"=>"string",
            "director_name"=>"string",
            "email"=>"string",
            "address"=>"string",
            "phone_number"=>"string",
            "website"=>"string"
        ]);
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
    public function update(Companies $post){
        $data = request()->validate([
            "company_name"=>"string",
            "director_name"=>"string",
            "email"=>"string",
            "address"=>"string",
            "phone_number"=>"string",
            "website"=>"string"
        ]);
        $post->update($data);
        return redirect()->route("form.show" , $post->id);
    }
    public function delete(Companies $post)
    {
        return view("admin.Form.delete", compact("post"));

    }

    public function destroy(Companies $post )
    {
        $post->delete();
        return redirect()->route("index");
    }


}


<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Traits\Message_Trait;
use App\Models\dashboard\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackagesController extends Controller
{
    use Message_Trait;
    public function index()
    {
        $packages = Package::all();

        return view('dashboard.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('dashboard.packages.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $rules = [];
        $messages = [];
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $package = Package::create($data);
        return $this->success_message(' تم اضافة الباقة بنجاح');
    }

    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('dashboard.packages.edit', compact('package'));
    }

    public function update(Request $request, $id)
    {
        $package = Package::findOrFail($id);
        $data = $request->all();

        $package->update($data);

        return $this->success_message(' تم تعديل الباقة بنجاح');
    }

    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();
        return $this->success_message(' تم حذف الباقة بنجاح');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SystemSetting\StoreSystemSettingRequest;
use App\Http\Requests\SystemSetting\UpdateSystemSettingRequest;
use App\Models\SystemSetting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SystemSettingController extends Controller
{
    public function index()
    {
        $systemSettings = SystemSetting::all();

        return view('admin.systemSetting.index',compact('systemSettings'));
    }

    public function create()
    {
        return view('admin.systemSetting.create');
    }

    public function store(StoreSystemSettingRequest $request)
    {
        SystemSetting::create($request->validated());
        Alert::success('System Setting created successfully');
        return back();
    }
    public function edit(SystemSetting $systemSetting)
    {

        return view('admin.systemSetting.edit',compact('systemSetting'));
    }
    public function update(UpdateSystemSettingRequest $request, SystemSetting $systemSetting)
    {
        $systemSetting->update($request->validated());
        Alert::success('System Setting updated successfully');
        return redirect(route('admin.systemSetting.index'));
    }

    public function destroy(SystemSetting $systemSetting)

    {
        $systemSetting->delete();
        return back();
    }
}

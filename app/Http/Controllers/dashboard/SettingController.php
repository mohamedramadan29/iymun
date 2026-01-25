<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Models\dashboard\Setting;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('dashboard.setting.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'full_address' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'facebook_url' => 'nullable|url|max:255',
            'x_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'youtube_url' => 'nullable|url|max:255',
        ]);

        Setting::updateOrCreate(['id' => 1], $data);

        return redirect()->back()->with('success', 'تم تحديث الاعدادات بنجاح');
    }
}

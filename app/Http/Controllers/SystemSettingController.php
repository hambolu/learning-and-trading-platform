<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SystemSetting;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class SystemSettingController extends Controller
{
    use ImageUploadTrait;
    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation rules
            'contact_info' => 'required|string',
            'commission_percentage' => 'required|numeric',
        ]);

        // Update the system settings
        $systemSetting = SystemSetting::firstOrCreate([]);
        $imagePath = $this->uploadImage($request, 'thumbnail', 'course_thumbnail');
            $systemSetting->logo = $imagePath;
        
        $systemSetting->contact_info = $request->input('contact_info');
        $systemSetting->commission_percentage = $request->input('commission_percentage');
        $systemSetting->save();

        return redirect()->back()->with('success', 'System settings updated successfully.');
    }
}

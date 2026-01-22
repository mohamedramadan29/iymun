<?php

namespace App\Http\Controllers\dashboard\content;

use App\Http\Controllers\Controller;
use App\Http\Traits\Message_Trait;
use App\Models\dashboard\AboutPage;
use App\Http\Traits\Upload_Images;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    use Message_Trait;
    use Upload_Images;

    public function index()
    {
        $content = AboutPage::first();
        return view('dashboard.content.about', compact('content'));
    }

    public function update(Request $request)
    {
        $content = AboutPage::first();

        $path = public_path('assets/uploads/content/about');
        $imageFields = ['about_image'];

        $updateData = $request->except(['_token', '_method']);

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $oldImage = $content->{$field};
                $newImageName = $this->saveImage($request->file($field), $path);
                $updateData[$field] = $newImageName;

                if ($oldImage && file_exists($path . '/' . $oldImage)) {
                    @unlink($path . '/' . $oldImage);
                }
            } else {
                $updateData[$field] = $content->{$field};
            }
        }

        $content->update($updateData);
        return $this->success_message(' تم تعديل البيانات بنجاح  ');
    }
}

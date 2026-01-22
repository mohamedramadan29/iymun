<?php

namespace App\Http\Controllers\dashboard\content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Traits\Message_Trait;
use App\Http\Traits\Upload_Images;
use App\Models\dashboard\WhyJoin;

class WhyJoinController extends Controller
{
    use Message_Trait;
    use Upload_Images;

    public function index()
    {
        $content = WhyJoin::first();
        return view('dashboard.content.why-join', compact('content'));
    }

    public function update(Request $request)
    {
        $content = WhyJoin::first();

        $path = public_path('assets/uploads/content/why-join');
        $imageFields = ['hero_image'];

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

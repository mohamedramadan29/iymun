<?php

namespace App\Http\Controllers\dashboard\content;

use App\Http\Controllers\Controller;
use App\Http\Traits\Message_Trait;
use App\Http\Traits\Upload_Images;
use App\Models\dashboard\PartenerPage;
use Illuminate\Http\Request;

class PartenerController extends Controller
{
    use Message_Trait;
    use Upload_Images;

    public function index()
    {
        $content = PartenerPage::first();
        return view('dashboard.content.partner', compact('content'));
    }

    public function update(Request $request)
    {
        $content = PartenerPage::first();
        if (!$content) {
            $content = new PartenerPage();
        }

        $path = public_path('assets/uploads/content/partener');
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
                $updateData[$field] = $content->{$field} ?? '';
            }
        }

        if ($content->exists) {
            $content->update($updateData);
        } else {
            $content->fill($updateData)->save();
        }

        return $this->success_message(' تم تعديل البيانات بنجاح  ');
    }
}

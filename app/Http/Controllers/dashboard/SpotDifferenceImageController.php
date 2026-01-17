<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Traits\Message_Trait;
use App\Http\Traits\Upload_Images;
use App\Models\dashboard\spotDifferenceGame;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SpotDifferenceImageController extends Controller
{
    use Message_Trait;
    use Upload_Images;
    public function index()
    {
        $diffs = spotDifferenceGame::latest()->get();
        return view('dashboard.images-difference.index', compact('diffs'));
    }

    public function add()
    {
        return view('dashboard.images-difference.add');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $rules = [
            'title' => 'required',
            'image_one' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_two' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
        $messages = [
            'title.required' => 'هذا الحقل مطلوب',
            'image_one.required' => 'الصورة الاولي مطلوبة',
            'image_one.image' => 'يجب ان تكون صورة',
            'image_one.mimes' => 'يجب ان تكون الصورة من نوع : jpeg,png,jpg,gif,svg',
            'image_one.max' => 'اقصى حجم للصورة 2048 كيلوبايت',
            'image_two.required' => 'الصورة الثانية مطلوبة',
            'image_two.image' => 'يجب ان تكون صورة',
            'image_two.mimes' => 'يجب ان تكون الصورة من نوع : jpeg,png,jpg,gif,svg',
            'image_two.max' => 'اقصى حجم للصورة 2048 كيلوبايت',
        ];

        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        };
        $image_one_path = $this->saveImage($request->file('image_one'), public_path('assets/uploads/images'));
        $image_two_path = $this->saveImage($request->file('image_two'), public_path('assets/uploads/images'));
        try {
            $diffrence = new spotDifferenceGame();
            $diffrence->title = $data['title'];
            $diffrence->main_image = $image_one_path;
            $diffrence->difference_image = $image_two_path;
            $diffrence->save();
            return $this->success_message(' تم اضــافة القالب بنجاح  ');
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function edit($id)
    {
        $diff = spotDifferenceGame::find($id);
        if (!$diff) {
            abort(404);
        }
        return view('dashboard.images-difference.edit', compact('diff'));
    }

    public function update(Request $request, $id)
    {
        $diff = spotDifferenceGame::find($id);
        if (!$diff) {
            abort(404);
        }

        $data = $request->all();

        if (isset($data['image_one']) && $data['image_one'] != null) {
            ########## Delete Old Image

            $old_one_image = public_path('assets/uploads/images/' . $diff['main_image']);
            if (file_exists($old_one_image)) {
                unlink($old_one_image);
            }
            $image_one_path = $this->saveImage($request->file('image_one'), public_path('assets/uploads/images/'));
            $diff->main_image = $image_one_path;
            $diff->save();
        }

        if (isset($data['image_two']) && $data['image_two'] != null) {
            ########## Delete Old Image

            $old_two_image = public_path('assets/uploads/images/' . $diff['difference_image']);
            if (file_exists($old_two_image)) {
                unlink($old_two_image);
            }
            $image_two_path = $this->saveImage($request->file('image_two'), public_path('assets/uploads/images/'));
            $diff->difference_image = $image_two_path;
            $diff->save();
        }

        $diff->title = $data['title'];
        $diff->save();
        return $this->success_message(' تم تحديث القالب بنجاح  ');
    }

    public function delete($id)
    {
        $diff = spotDifferenceGame::find($id);
        ######## Delete Images

        $old_one_image = public_path(asset('assets/uploads/images/' . $diff['main_image']));
        if (file_exists($old_one_image)) {
            unlink($old_one_image);
        }
        $old_two_image = public_path(asset('assets/uploads/images/' . $diff['difference_image']));
        if (file_exists($old_two_image)) {
            unlink($old_two_image);
        }
        $diff->delete();
        return $this->success_message(' تم حذف القالب بنجاح  ');
    }
}

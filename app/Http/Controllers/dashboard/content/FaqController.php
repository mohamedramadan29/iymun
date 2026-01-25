<?php

namespace App\Http\Controllers\dashboard\content;

use App\Http\Controllers\Controller;
use App\Http\Traits\Message_Trait;
use App\Models\dashboard\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    use Message_Trait;

    public function index()
    {
        $faqs = Faq::orderBy('category')->orderBy('order')->get();
        return view('dashboard.content.faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('dashboard.content.faq.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'category' => 'required|string|in:general,registration,logistics,schedule,safety',
            'order' => 'nullable|integer',
        ]);

        Faq::create($data);
        return $this->success_message('تمت إضافة السؤال بنجاح');
    }

    public function edit(Faq $faq)
    {
        return view('dashboard.content.faq.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $data = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'category' => 'required|string|in:general,registration,logistics,schedule,safety',
            'order' => 'nullable|integer',
        ]);

        $faq->update($data);
        return $this->success_message('تمت تحديث السؤال بنجاح');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return $this->success_message('تم حذف السؤال بنجاح');
    }
}

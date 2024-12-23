<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $faq = new Faq();
        $faq->question = $request->title;
        $faq->answer = $request->short_description;
        if ($faq->save()){
            return redirect()->route('admin.faq.index')->with('response', [
                'status' => 'success',
                'message' => 'Soru Başarıyla Eklendi'
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('admin.faq.edit.index', compact('faq'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        $faq->question = $request->title;
        $faq->answer = $request->short_description;
        if ($faq->save()){
            return redirect()->route('admin.faq.index')->with('response', [
                'status' => 'success',
                'message' => 'Soru Başarıyla Güncellendi'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        //
    }

    public function datatable()
    {
        $data = Faq::latest();

        return DataTables::of($data)
            ->editColumn('id', function ($q) {
                return createCheckbox($q->id, 'Faq', 'Soruları');
            })
            ->editColumn('question', function ($q) {
                return Str::limit($q->getQuestion(), 50);
            })
            ->editColumn('status', function ($q) {
                return create_switch($q->id, $q->status == 1 ? true : false, 'Faq', 'status');
            })
            ->editColumn('is_main_page', function ($q) {
                return create_switch($q->id, $q->is_main_page == 1 ? true : false, 'Faq', 'is_main_page');
            })
            ->editColumn('created_at', function ($q) {
                return $q->created_at->format('d.m.Y H:i:s');
            })
            ->addColumn('action', function ($q) {
                $html = "";
                $html .= create_edit_button(route('admin.faq.edit', $q->id));
                $html .= create_delete_button('Faq', $q->id, 'Soruları', 'Sorularn Kaydını Silmek İstediğinize Eminmisiniz?');
                return $html;
            })
            ->rawColumns(['id', 'action', 'is_main_page'])
            ->make(true);
    }

}

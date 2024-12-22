<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use App\Models\RoadMap;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RoadMapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.roadmap.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roadmap.create.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$request->dd();
        $roadmap = new RoadMap();
        $roadmap->title = $request->title;
        $roadmap->description = $request->short_description;
        $roadmap->year = $request->year;
        $roadmap->number = $request->number;
        if ($roadmap->save()){
            return redirect()->route('admin.roadmap.index')->with('response', [
                'status' => 'success',
                'message' => 'Yol Haritası Adımı Başarıyla Eklendi'
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(RoadMap $roadMap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoadMap $roadmap)
    {
        return view('admin.roadmap.edit.index', compact('roadmap'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoadMap $roadmap)
    {

        $roadmap->title = $request->title;
        $roadmap->description = $request->short_description;
        $roadmap->year = $request->year;
        $roadmap->number = $request->number;
        if ($roadmap->save()){
            return redirect()->route('admin.roadmap.index')->with('response', [
                'status' => 'success',
                'message' => 'Yol Haritası Adımı Başarıyla Eklendi'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoadMap $roadMap)
    {
        //
    }

    public function datatable()
    {
        $data = RoadMap::latest();

        return DataTables::of($data)
            ->editColumn('id', function ($q) {
                return createCheckbox($q->id, 'RoadMap', 'Alanları');
            })
            ->editColumn('title', function ($q) {
                return $q->getTitle();
            })
            ->editColumn('status', function ($q) {
                return create_switch($q->id, $q->status == 1 ? true : false, 'RoadMap', 'status');
            })
            ->editColumn('created_at', function ($q) {
                return $q->created_at->format('d.m.Y H:i:s');
            })
            ->addColumn('action', function ($q) {
                $html = "";
                $html .= create_edit_button(route('admin.roadmap.edit', $q->id));
                $html .= create_delete_button('RoadMap', $q->id, 'Alan', 'Alanların Kaydını Silmek İstediğinize Eminmisiniz?');
                return $html;
            })
            ->rawColumns(['id', 'action'])
            ->make(true);
    }

}

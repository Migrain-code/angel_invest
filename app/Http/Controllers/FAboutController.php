<?php

namespace App\Http\Controllers;

use App\Models\AboutGallery;
use App\Models\DownloadableContent;
use App\Models\Faq;
use App\Models\NewsPaper;
use App\Models\Reference;
use App\Models\RoadMap;
use App\Models\Team;
use App\Models\Video;
use Illuminate\Http\Request;

class FAboutController extends Controller
{
    public function index()
    {
        $galleries = AboutGallery::orderBy('id', 'asc')->get();
        $teams = Team::where('status', 1)->get();
        return view('frontend.about.index', compact('galleries', 'teams'));
    }

    public function team()
    {
        $teams = Team::where('status', 1)->get();
        return view('frontend.team.index', compact('teams'));
    }

    public function video()
    {
        $videos = Video::where('status', 1)->get();
        return view('frontend.video.index', compact('videos'));
    }

    public function roadmap()
    {
        $roadMaps = RoadMap::where('status', 1)->get();
        return view('frontend.roadmap.index', compact('roadMaps'));
    }


    public function tokenomics()
    {
        return view('frontend.tocenomics.index');
    }

    public function faq()
    {
        $faqs = Faq::where('status', 1)->get();
        return view('frontend.faq.index', compact('faqs'));
    }

    public function info()
    {
        return view('frontend.info.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /*
     * SELECT DISTINCT(source), COUNT(id) as total FROM kapsel_1000 GROUP by source;
     * */
    public function index() {
        $data = Anime::select( DB::raw('id, rating, COUNT(id) as total')  )
            ->groupBy('rating')
            ->get();
        $data_studio = Anime::select( DB::raw('id, studio, COUNT(id) as total')  )
            ->groupBy('studio')
            ->get();
        $data_total_studio = Anime::select( DB::raw('COUNT(DISTINCT(studio)) as studio_total')  )
            ->get();
        $data_status_anime = Anime::select( DB::raw('status, COUNT(id) as total')  )
            ->groupBy('status')
            ->get();

        return view('index',[
            'data_rating' => $data,
            'data_studio' => $data_studio,
            'data_total_studio' => $data_total_studio,
            'data_status_anime' => $data_status_anime,
        ]);
    }


    public function dataSource() {
        $data = Anime::select( DB::raw('source, COUNT(id) as total')  )
            ->orderBy('total', 'DESC')
            ->groupBy('source')
            ->get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function dataSourcePost(Request $request) {
        $data = Anime::select( DB::raw('source, COUNT(id) as total')  )
            ->where('rating','LIKE', '%'.$request->rating.'%')
            ->orderBy('total', 'DESC')
            ->groupBy('source')
            ->get();
        return response()->json([
            'data' => $data
        ]);
    }


    // rating
    public function dataRatingAll(){
        $data = Anime::select( DB::raw('rating, COUNT(id) as total')  )
            ->orderBy('total', 'DESC')
            ->groupBy('rating')
            ->get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function dataRatingByStudio(Request $request){
        $data = Anime::select( DB::raw('rating, COUNT(id) as total')  )
            ->where('studio','LIKE', '%'.$request->studio.'%')
            ->orderBy('total', 'DESC')
            ->groupBy('rating')
            ->get();
        return response()->json([
            'data' => $data
        ]);
    }

    //studio member
    public function studioMember() {
        $data = Anime::select( DB::raw('DISTINCT(studio) as studios, SUM(member) as members')  )
            ->orderBy('members', 'DESC')
            ->groupBy('studios')
            ->havingRaw('SUM(member) > 100')
            ->LIMIT(40)
            ->get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function studioMemberByRating(Request $request){
    $data = Anime::select( DB::raw('DISTINCT(studio) as studios, SUM(member) as members')  )
    ->where('rating','LIKE', '%'.$request->data.'%')
            ->orderBy('members', 'DESC')
            ->groupBy('studios')
            ->havingRaw('SUM(member) > 100')
            ->LIMIT(40)
            ->get();
        return response()->json([
            'data' => $data
        ]);

    }

    //studio avg score
    public function studioScore() {
        $data = Anime::select( DB::raw('DISTINCT(studio) as studios, AVG(score) as scores')  )
            ->orderBy('scores', 'DESC')
            ->groupBy('studios')
            ->LIMIT(40)
            ->get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function studioScoreByRating(Request $request){
        $data = Anime::select( DB::raw('DISTINCT(studio) as studios, AVG(score) as scores')  )
            ->where('rating','LIKE', '%'.$request->data.'%')
            ->orderBy('scores', 'DESC')
            ->groupBy('studios')
            ->LIMIT(40)
            ->get();
        return response()->json([
            'data' => $data
        ]);

    }
}

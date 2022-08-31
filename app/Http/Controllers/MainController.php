<?php

namespace App\Http\Controllers;

use App\Models\Ganre;
use App\Models\ganre as ModelsGanre;
use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function home()
    {
        $reviews = new posts();
        $reviews2 = new ganre();
        return view("welcome", ["reviews" => $reviews->all(),"reviews2" => $reviews2->all()]);
    }
    public function about()
    {
        return view("about");
    }
    public function addchek(Request $req)
    {
        $review = new posts();
        $review2 = new ganre();
        $review->title = $req->input("title");
        $review->description = $req->input("description");
        $review->imgsrc = $req->input("imgsrc");
        $review->date = $req->input("date");
        $review2->сomedy = $req->input("comedy");
        $review2->cartoons = $req->input("cartoons");
        $review2->fiction = $req->input("fiction");
        $review2->thrillers = $req->input("thrillers");
        $review2->militants = $req->input("militants");
        $review2->melodramas = $req->input("melodramas");
        $review2->adventure = $req->input("adventure");
        $review2->anime = $req->input("anime");
        $review2->dramas = $req->input("dramas");
        $review2->сomedy = $req->input("comedy");


        $review->save();
        $review2->save();
        return redirect()->route('add');
        
    }

    public function random()
    {
        $reviews = new posts();
        $reviews2 = new ganre();
        return view("random", ["reviews" => $reviews->all(),"reviews2" => $reviews2->all()]);
    }

    public function add()
    {
      
        return view("add");
    }

    


    static function getGanre($idFilm)
    {
        $ganre = DB::table('ganres')->where('id', $idFilm)->first();

return $ganre;
    }



    

}

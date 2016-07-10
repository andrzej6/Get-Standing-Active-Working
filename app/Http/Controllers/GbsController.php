<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\GbsRegRequest;
use App\HelpClasses\gbs\Menu as Menu;
use App\Gbs_reg;
use App\Article;
use Session;
use DB;
use Mail;
use Log;
use App\Jobs\Send2Emails;


class GbsController extends Controller
{
    public function index($page='index'){

        if (!view()->exists('gbs.'.$page)) {
            $page ='error_page';
            $mainMenuOutput = Menu::getMenu($page);
            list ($trail1, $trail2) = Menu::TrailLink($page);
            return view('gbs.error', compact('mainMenuOutput', 'trail1', 'trail2', 'page'));
        }
        else {
            $mainMenuOutput = Menu::getMenu($page);
            list ($trail1, $trail2) = Menu::TrailLink($page);

            if ($page == 'media') {
                //$articles =DB::table('articles')->where('country','LIKE','1%')->orderby('date_posted','desc')->get();
                $articles = Article::where('country', 'LIKE', '1%')->orderby('date_posted', 'desc')->paginate(3);

                return view('gbs.' . $page, compact('mainMenuOutput', 'trail1', 'trail2', 'articles'));
            } else {
                return view('gbs.' . $page, compact('mainMenuOutput', 'trail1', 'trail2', 'page'));
            }
        }
    }


    public function store(GbsRegRequest $request){

        $gbsreg = new Gbs_reg($request->except('offer'));
        $gbsreg->country = 'gb';
        $gbsreg->extras = $request->offer;
        if ($gbsreg->save())
        {
            $gbs = Gbs_reg::findOrFail($gbsreg->id);
            Log::info("Request cycle with Queues started -gbs reg");
            $this->dispatch(new Send2Emails($gbs));
            Log::info("Request cycle with Queues finished -gbs reg");

            flash('Thank you for your enquiry, we will be in touch shortly.', 'success');
        }
        else {flash('Cannot register at the moment. Please try again later', 'danger');}

        return redirect('/contact');

    }





    /*
    public function vue(){
        return view('gbs.vue');
    }
    */

}

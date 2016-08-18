<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Requests\GbsRegRequest;
use App\HelpClasses\gaus\Menu as Menu;
use App\Gbs_reg;
use App\Article;
use Session;
use DB;
use Mail;
use Log;
use App\Jobs\AuSend2Emails;


class GausController extends Controller
{
    public function index($page='index'){

        if (!view()->exists('gaus.'.$page)) {
            $page ='error_page';
            $mainMenuOutput = Menu::getMenu($page);
            list ($trail1, $trail2) = Menu::TrailLink($page);
            return view('gaus.error', compact('mainMenuOutput', 'trail1', 'trail2', 'page'));
        }
        else {
            $mainMenuOutput = Menu::getMenu($page);
            list ($trail1, $trail2) = Menu::TrailLink($page);

            if ($page == 'media') {
                //1-gb, 2-aus, 3-can, 4-usa
                $articles = Article::where('country', 'LIKE', '%2%')->orderby('date_posted', 'desc')->paginate(10);

                return view('gaus.' . $page, compact('mainMenuOutput', 'trail1', 'trail2', 'articles'));
            } else {
                return view('gaus.' . $page, compact('mainMenuOutput', 'trail1', 'trail2', 'page'));
            }
        }
    }


    public function store(GbsRegRequest $request){

        $gausreg = new Gbs_reg($request->except('offer'));
        $gausreg->country = 'au';

        /**
        $extras='';
        if (!empty($request->offer))
            foreach($request->offer as $add)
                $extras .= $add.', ';
        $gausreg->extras = $extras;
         * */
        $gausreg->extras = $request->offer;

        if ($gausreg->save())
        {
            $gaus = Gbs_reg::findOrFail($gausreg->id);
            Log::info("Request cycle with Queues started -gaus reg");
            $this->dispatch(new AuSend2Emails($gaus));
            Log::info("Request cycle with Queues finished -gaus reg");


            flash('Thank you for your enquiry, we will be in touch shortly.', 'success');
        }
        else {flash('Cannot register at the moment. Please try again later', 'danger');}


        return redirect('/contact');

    }
}

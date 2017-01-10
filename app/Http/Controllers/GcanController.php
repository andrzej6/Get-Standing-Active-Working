<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Requests\GbsRegRequest;
use App\HelpClasses\gcan\Menu as Menu;
use App\Gbs_reg;
use App\Article;
use Log;
use App\Jobs\CanSend2Emails;


class GcanController extends Controller
{

    //was constructor with middleware for sitemap here below

    public function index($page='index'){

        if (!view()->exists('gcan.'.$page)) {
            $page ='error_page';
            $mainMenuOutput = Menu::getMenu($page);
            list ($trail1, $trail2) = Menu::TrailLink($page);
            return view('errors.getstanding.can', compact('mainMenuOutput', 'trail1', 'trail2', 'page'));
        }
        else {
            $mainMenuOutput = Menu::getMenu($page);
            list ($trail1, $trail2) = Menu::TrailLink($page);

            if ($page == 'media') {
                //1-gb, 2-aus, 3-can, 4-usa
                $articles = Article::where('country', 'LIKE', '%3%')->orderby('date_posted', 'desc')->paginate(10);

                return view('gcan.' . $page, compact('mainMenuOutput', 'trail1', 'trail2', 'articles'));
            } else {
                return view('gcan.' . $page, compact('mainMenuOutput', 'trail1', 'trail2', 'page'));
            }
        }
    }


    public function store(GbsRegRequest $request){

        $reg = new Gbs_reg($request->except('offer'));
        $reg->country = 'can';

        /**
        $reg->extras = $request->offer;
         * */

        $extras='';
        if (!empty($request->offer))
            foreach($request->offer as $add)
                $extras .= $add.', ';
        $reg->extras = $extras;


        if ($reg->save())
        {
            $to_send = Gbs_reg::findOrFail($reg->id);
            Log::info("Request cycle with Queues started -gaus reg");
            $this->dispatch(new CanSend2Emails($to_send));
            Log::info("Request cycle with Queues finished -gaus reg");


            flash('Thank you for your enquiry, we will be in touch shortly.', 'success');
        }
        else {flash('Cannot register at the moment. Please try again later', 'danger');}


        return redirect('/contact');

    }
}

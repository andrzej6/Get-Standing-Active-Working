<?php
namespace App\HelpClasses\aw;
use Illuminate\Support\Facades\URL;

class Menu {

    protected static $menu = [
        'Home' => ['link' => 'index', 'sub' => '', 'class' => ''],

        'Employers' => ['link' => '#', 'sub' =>
            ['Top Tips' => ['link' => 'top_tips', 'class' => ''],
                'Assessments' => ['link' => 'assessments', 'class' => ''],
                'Accreditation' => ['link' => 'accreditation', 'class' => ''],
                'Regulations' => ['link' => 'regulations', 'class' => ''],
            ], 'class' => ''
        ],

        'Little Nudge' => ['link' => '#', 'sub' =>
            ['Introduction' => ['link' => 'littlenudge', 'class' => ''],
                'Free Trial' => ['link' => 'nudge_trial', 'class' => ''],
                'Order' => ['link' => 'nudge_order', 'class' => ''],
                'FAQ' => ['link' => 'nudge_faq', 'class' => '']
            ], 'class' => ''
        ],

        'Our Services' => ['link' => '#', 'sub' =>
            ['Introduction' => ['link' => 'introduction', 'class' => ''],
                'Seminars' => ['link' => 'seminars', 'class' => ''],
                'Consultancy' => ['link' => 'consultancy', 'class' => ''],
                'Posters' => ['link' => 'posters', 'class' => '']
            ], 'class' => ''
        ],

        'Summit' => ['link' => '#', 'sub' =>
            ['2017' => ['link' => 'summit/2017/book', 'class' => ''],
                '2016' => ['link' => 'summit/2016/index', 'class' => ''],
                '2015' => ['link' => 'summit/2015/index', 'class' => '']
            ], 'class' => ''
        ],


        'Activities' => ['link' => '#', 'sub' =>
            [ 'Expert Statement' => ['link' => 'expert_statement', 'class' => ''],
                'Active Working Summit' => ['link' => 'summit', 'class' => ''],
                'Innovation Center' => ['link' => 'innovation_center', 'class' => ''],
                'Get Britain Standing' => ['link' => 'gbs', 'class' => ''],
                'On Your Feet Britain' => ['link' => 'oyf', 'class' => '']
            ], 'class' => ''],

        'Contact' => ['link' => '#', 'sub' =>
            ['Contact Us' => ['link' => 'contact', 'class' => ''],
                'Careers' => ['link' => 'careers', 'class' => '']
            ], 'class' => ''
        ],
    ];



    public static function getMenu($link) {
        $baseurl =URL::to('/');
        foreach (Menu::$menu as $key => $value) {
            if ($value['link'] == $link) {
                Menu::$menu[$key]['class'] = 'current-menu-parent';
            }
            if (!empty($value['sub'])) {
                foreach ($value['sub'] as $key2 => $value2) {
                    if ($value2['link'] == $link) {
                        Menu::$menu[$key]['class'] = 'current-menu-parent';
                        Menu::$menu[$key]['sub'][$key2]['class'] = 'current-menu-item';
                    }
                }
            }
        }

        $output = "<ul class=\"menu\">";
        foreach (Menu::$menu as $key => $value) {
            $output .= "<li class=\"{$value['class']}\"><a href=\"{$baseurl}/{$value['link']}\">$key</a>";
            if (!empty($value['sub'])) {
                $output .= "<ul class=\"sub-menu\">";
                foreach ($value['sub'] as $key2 => $value2) {
                    $output .= "<li class=\"{$value2['class']}\"><a href=\"{$baseurl}/{$value2['link']}\">$key2</a></li>";
                }
                $output .= "</ul>";
            }
            $output .= "</li>";
        }
        $output .= "</ul>";

        return $output;
    }


    public static function TrailLink($link) {
        $trail1=$trail2=array();

        foreach (Menu::$menu as $key => $value) {
            if ($value['link'] == $link) {
                $trail1['name'] = $key;
                $trail1['link'] = $value['link'];
            }
            if (!empty($value['sub'])) {
                foreach ($value['sub'] as $key2 => $value2) {
                    if ($value2['link'] == $link) {

                        $trail1['name'] = $key;
                        $trail1['link'] = $value['link'];

                        $trail2['name'] = $key2;
                        $trail2['link'] = $value2['link'];
                    }
                }
            }
        }
        if (empty($trail1))
            $trail1['name'] = ucwords(str_replace('_', ' ', $link));

        return array($trail1, $trail2);
    }


}
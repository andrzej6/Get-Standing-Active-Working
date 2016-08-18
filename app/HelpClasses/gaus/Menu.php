<?php
namespace App\HelpClasses\gaus;

class Menu {

protected static $menu = [
    'Home' => ['link' => 'index', 'sub' => '', 'class' => ''],
    'Health Risks' => ['link' => '#', 'sub' =>
        ['The Sitting Problem' => ['link' => 'sitting_problem', 'class' => ''],
            'Top 10 Risks' => ['link' => 'top10risks', 'class' => ''],
            'Research' => ['link' => 'research', 'class' => '']
        ], 'class' => ''
    ],
    'Active Working' => ['link' => '#', 'sub' =>
        [ 'Introduction' => ['link' => 'introduction', 'class' => ''],
            'Crowd Funding' => ['link' => 'crowd_funding', 'class' => ''],
            'Top Tips' => ['link' => 'top_tips', 'class' => ''],
            'Seminars' => ['link' => 'seminars', 'class' => ''],
            'Consulatancy' => ['link' => 'consultancy', 'class' => ''],
            'Innovation Center' => ['link' => 'innovation_center', 'class' => ''],
            'Register Project' => ['link' => 'project_support', 'class' => ''],
            'Official Supporters' => ['link' => 'supporters', 'class' => ''],
            'Summit 2016' => ['link' => 'aw_summit', 'class' => ''],

        ], 'class' => ''],
    'Employers' => ['link' => '#', 'sub' =>
        ['Key Information' => ['link' => 'key_info', 'class' => ''],
            'Cost Of Sitting' => ['link' => 'sitting_cost', 'class' => ''],
            'New To Sit-Stand' => ['link' => 'get_started', 'class' => ''],
            'Supporters & Adopters' => ['link' => 'companies', 'class' => ''],
            'Regulations' => ['link' => 'regulations', 'class' => ''],
        ], 'class' => ''
    ],
    'Solutions' => ['link' => '#', 'sub' =>
        [   'Get Started' => ['link' => 'start', 'class' => ''],
            'Sit-Stand Solutions' => ['link' => 'solutions', 'class' => ''],
            'Q & A' => ['link' => 'questions', 'class' => ''],
        ], 'class' => ''
    ],
    'Media' => ['link' => '#', 'sub' =>
        ['Media Coverage' => ['link' => 'media', 'class' => ''],
            'Expert Statement' => ['link' => 'expert_statement', 'class' => '']
        ], 'class' => ''
    ],
    'Contact Us' => ['link' => '#', 'sub' =>
        ['Register' => ['link' => 'contact', 'class' => ''],
            'Official Supporters' => ['link' => 'official_supporters', 'class' => '']
        ], 'class' => ''
    ],
];



    public static function getMenu($link) {
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
            $output .= "<li class=\"{$value['class']}\"><a href=\"{$value['link']}\">$key</a>";
            if (!empty($value['sub'])) {
                $output .= "<ul class=\"sub-menu\">";
                foreach ($value['sub'] as $key2 => $value2) {
                    $output .= "<li class=\"{$value2['class']}\"><a href=\"{$value2['link']}\">$key2</a></li>";
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
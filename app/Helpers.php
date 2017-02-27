<?php

namespace App;

use Session;
use App\Model\Settings;
use App\Model\Sermon;
use App\Model\Event;
use App\Model\Gallery;
use App\Model\SundaySchedule;

class Helpers {

    public static function createNestableList($entertainments) {
        $_this = new self;
        if (count($entertainments) < 1) {
            return '';
        }


        $list = '';
        foreach ($entertainments as $entertainment) {
            if ($entertainment->parent_id == 0) {
                /*                 * the parent* */
                $list .= '<li class="dd-item" data-id="' . $entertainment->id . '"><div class="dd-handle">';
                $list .= '<span class="label label-info"><i class="fa fa-cog"></i></span> ' . $entertainment->name . '</div>';
                $list .= '<div class="content"><a class="text-warning editItem" itemId="' . $entertainment->id . '" operationType="update" itemName="' . $entertainment->name . '">
                          <i class="fa fa-edit"></i> Edit
                          </a>';
                $list .='<a class="text-success fa fa-image" data-toggle="modal" data-target="#ent-file-upload-' . $entertainment->id . '">Edit Image</a>';
                if ($entertainment->blocked == 0) {
                    $list .='<a class="text-warning blockingItem" itemId="' . $entertainment->id . '" operationType="update" itemName="' . $entertainment->name . '" itemBlocked="' . $entertainment->blocked . '"><i class="fa fa-eye-slash"></i> Block</a>';
                } else {
                    $list .='    <a class="text-warning blockingItem" itemId="' . $entertainment->id . '" operationType="update" itemName="' . $entertainment->name . '" itemBlocked="' . $entertainment->blocked . '"><i class="fa fa-eye"></i> UnBlock</a>';
                }
                $list .= '  <a class="text-warning deleteItem" itemId="' . $entertainment->id . '" operationType="delete" itemName="' . $entertainment->name . '"><i class="fa fa-remove"></i> Delete</a></div>';


                /*                 * child elements* */

                $childList = $_this->nestableChildrenList($entertainments, $entertainment->id);
                if (strlen($childList) > 0) {
                    $list .= '<ol class="dd-list">';
                    $list .= $childList;
                    $list .= '</ol>';
                }

                $list .= '</li>';
            }
        }


        /*         * open the entire ol list* */
        $parentlist = '';
        if (strlen($list) > 0) {
            $parentlist = '<ol class="dd-list">';
            $parentlist .= $list;
            $parentlist .= '</ol>';
        }


        return $parentlist;
    }

    public static function nestableChildrenList($entertainmentArray, $parent_id) {

        $childList = '';
        foreach ($entertainmentArray as $entertainment) {
            if ($entertainment->parent_id == $parent_id) {

                $childList .= '<li class="dd-item" data-id="' . $entertainment->id . '"><div class="dd-handle">';
                $childList .= '<span class="label label-info"><i class="fa fa-cog"></i></span> ' . $entertainment->name . '</div>';
                $childList .= '<div class="content"><a class="text-warning editItem" itemId="' . $entertainment->id . '" operationType="update" itemName="' . $entertainment->name . '">
                          <i class="fa fa-edit"></i> Edit
                          </a>';
                $childList .='<a class="text-success fa fa-image" data-toggle="modal" data-target="#ent-file-upload-' . $entertainment->id . '">Edit Image</a>';
                if ($entertainment->blocked == 0) {
                    $childList .='<a class="text-warning blockingItem" itemId="' . $entertainment->id . '" operationType="update" itemName="' . $entertainment->name . '" itemBlocked="' . $entertainment->blocked . '"><i class="fa fa-eye-slash"></i> Block</a>';
                } else {
                    $childList .='   <a class="text-warning blockingItem" itemId="' . $entertainment->id . '" operationType="update" itemName="' . $entertainment->name . '" itemBlocked="' . $entertainment->blocked . '"><i class="fa fa-eye"></i> UnBlock</a>';
                }
                $childList .= ' <a class="text-warning deleteItem" itemId="' . $entertainment->id . '" operationType="delete" itemName="' . $entertainment->name . '"><i class="fa fa-remove"></i> Delete</a></div>';
                $childList .= '</li>';
            }
        }

        return $childList;
    }

    public static function money($amount, $symbol = 'Ksh') {

        return $symbol . ' ' . number_format($amount, 2);
    }

    public static function strToSlug($str) {
        return strtolower(str_slug($str, '-'));
    }

    public static function stringFromArray($arrayObj, $key = 'slug', $delimeter = ',') {
        $generatedString = '';
        $arrayObjCount = count($arrayObj);
        $i = 0;
        foreach ($arrayObj as $arrayItem) {
            $i++;
            if ($i !== $arrayObjCount) {
                $generatedString .= $arrayItem->$key . $delimeter;
            } else {
                $generatedString .= $arrayItem->$key;
            }
        }
        return $generatedString;
    }

    public static function dropdownItems($array, $emptyOption = false, $arrayKeyValue = 'name', $arrayKey = 'id') {

        $arrayItem = array();

        if ($emptyOption === true) {
            $arrayItem[''] = '';
        }

        foreach ($array as $item) {
            if (array_key_exists('parent_id', $item)) {
                if ($item['parent_id'] != 0) {
                    $arrayItem[$item[$arrayKey]] = ucfirst($item[$arrayKeyValue]);
                }
            } else {
                $arrayItem[$item[$arrayKey]] = ucfirst($item[$arrayKeyValue]);
            }
        }
        return $arrayItem;
    }

    public static function formatDateBasic($dateString, $dateonly = true) {

        if ($dateonly == true) {
            return date("Y-m-d", strtotime($dateString));
//            date("F d, Y", strtotime($dateString))
        }
        if ($dateonly == false) {
            return date("Y-m-d H:i:s", strtotime($dateString));
        }
    }

    public static function redirectWithMessage($routeName, $status, $message, $uriValues = array()) {

        if ($status == 200) {
//            session(['successCustom' => $message]);
            Session::flash('successCustom', $message);
        }

        if ($status != 200) {
//            session(['errorCustom' => $message]);
            Session::flash('errorCustom', $message);
        }
        if ($uriValues != null) {
            $stringUriValues = implode(',', $uriValues);
            return redirect(route($routeName, $stringUriValues));
        }
        return redirect(route($routeName));
    }

    public static function fileExists($filesPathString) {

        $filepath = public_path() . '/' . $filesPathString;
        if (file_exists($filepath)) {
            return true;
        } else {
            return false;
        }
    }

    public static function settingsVal($key = null, $all = false) {
        //if asking for all
        if ($all == true) {
            $settings = Settings::first();
            if (count($settings) != 1) {
                return false;
            } else {
                return $settings;
            }
        }

        //***//
        $settings = Settings::first();
        if (count($settings) != 1) {
            return false;
        } else {
            if (isset($settings->$key)) {
                return $settings->$key;
            } else {
                return false;
            }
        }
    }

    public static function recentSermons($limit = 2) {
        return Sermon::orderBy('sermon_date', 'desc')->where('visible', 1)->limit($limit)->get();
    }

    public static function previousEvents($limit = 3) {
        return Event::where('visible', 1)->where('event_date', '<', date('Y-m-d'))->limit($limit)->orderBy('event_date', 'desc')->get();
    }

    public static function imageSidebar($limit = 9) {
        return Gallery::where('visible', 1)->orderBy('id', 'desc')->limit($limit)->whereHas('gallerycategory', function ($query) {
                    $query->where('url_key', '!=', 'slideshow');
                })->get();
    }
    
    public static function sundaySchedule(){
        $sundayschedule = SundaySchedule::where('sunday_date', '>=', date('Y-m-d'))->where('visible',1)->whereHas('sundaypages', function ($query) {
                    $query->where('visible', '=', '1');
                })->orderBy('sunday_date', 'desc')->first();
        if (count($sundayschedule) != 1) {
            return array('status'=>500);
        }
        if (count($sundayschedule->sundaypages) < 1) {
            return array('status'=>500);
        }
        
        if(date("Y-m-d", strtotime($sundayschedule->sunday_date)) == date('Y-m-d')){
            return array('status'=>200,'today'=>true);
        }else{
            return array('status'=>200,'today'=>false);
        }
    }

}

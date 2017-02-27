<?php

namespace App\Entertainment\Repo;

use App\models\Entertainment;
use App\models\Artist;
use App\User;
use App\models\Location;
use App\models\Event;
use App\models\Country;
use App\models\Fayl;
use App\models\Ops;
use App\models\Payment;
use App\models\Package;
use App\models\AdvertFeatured;
use Request;
use Illuminate\Support\Facades\Event as MyEvent;
use App\Events\FileWasCreated;

class EntOperations {
    /*     * 200-success,404--failure,401--alert something* */

    /*     * does the necessary routing according to operation type(order,update,create,delete,block)* */

    public static function nestableOps($model, $operationType, $orderedarray = null, $itemId = null, $itemName = null) {

        $_this = new self;

        if ($model == null || $operationType == null) {
            return $_this->createStatus(404, 'Either Operation Type or Model is NULL !');
        }

        if ($operationType == 'order') {
            //ensure the orderedarray is not null else return false with necessary message
            if ($orderedarray == null) {
                return $_this->createStatus(404, 'List ordering failed.Array is NULL ! Provide data');
            }

            return $_this->_orderNestable($model, $orderedarray);
        } elseif ($operationType == 'update') {
            //ensure itemid is not null and itemtitle also not null
            if ($itemId == null || $itemName == null) {
                return $_this->createStatus(404, 'Sorry item id or name cannot be null');
            }
            $data['name'] = $itemName;

            return $_this->updateModel($model, array('id' => $itemId), $data, true, ['name' => $itemName]);
        } elseif ($operationType == 'block') {
            //ensure itemid is not null
        } elseif ($operationType == 'delete') {
            //ensure itemid is not null
        } elseif ($operationType == 'create') {
            
        }
    }

    /*     * perfoms the nestable list order updates* */

    public static function _orderNestable($model, $orderedArray) {
        $_this = new self;

        foreach ($orderedArray as $order => $orderArray) {

            $firstListId = $orderArray['id'];
            $dataa['order'] = $order + 1;
            $dataa['parent_id'] = 0;
            //perform an update here
            $response = $_this->updateModel($model, ['id' => $firstListId], $dataa);
            if ($response['status'] != 200) {
                return $response;
            }

            if (array_key_exists('children', $orderArray)) {
                foreach ($orderArray['children'] as $childOrder => $child) {

                    $secondListId = $child['id'];
                    $data['order'] = $childOrder + 1;
                    $data['parent_id'] = $firstListId;
                    //perform an update here
                    $response = $_this->updateModel($model, array('id' => $secondListId), $data);
                    if ($response['status'] != 200) {
                        return $response;
                    }
                }
            }
        }


        return $_this->createStatus(200, 'Successfuly updated the list ordering');
    }

    public static function updateModel($model, $arrayWhere, $dataArray, $exists = false, $existsWhere = null,$existsUniqueId=null) {
        $_this = new self;


        /** if status true check if item exists using existswhere * */
        if ($exists === true) {

            $response = $_this->checkItemExistence($model, $existsWhere,$existsUniqueId);
            //the item already exists

            if ($response['status'] === 404) {
                return $response;
            }
        }


        $modell = strtolower($model);
        $model_selected = $_this->selectModel($modell, $arrayWhere);

        if ($model_selected != false) {

            //ensure the object is not null
            if ($model_selected === null) {

                /*                 * model was not found* */
                return $_this->createStatus(404, 'Execution error occurred.Item does not exist.');
            } else {
                //dd($dataArray);
                $model_selected->fill($dataArray)->save();

                /*                 * insert this operation if id value exists* */
                if (array_key_exists('id', $arrayWhere)) {
                    /*                     * update the operations module by checking whether it's a block/unblock or edit operation* */
                    $dataArray['id'] = $arrayWhere['id'];
                    $_this->checkTypeOfOperation($dataArray, $model);
                }
            }

            return $_this->createStatus(200, 'Successful update.');
        } else {

            /*             * model was not found* */
            return $_this->createStatus(404, 'Execution error occurred.Model not found.');
        }
    }

    /*     * checks if item exists in db* */

    public static function checkItemExistence($model, $existsWhere,$existsUniqueId=null) {
        $_this = new self;
        /*         * check that the model exists* */
        $response = $_this->selectModel($model, $existsWhere,$existsUniqueId);
        if ($response === false) {
            return createStatus(404, 'Error Occurred.Model not Found !');
        }
        if ($response != null) {
            return $_this->createStatus(404, 'Item already exists.');
        } else {
            return $_this->createStatus(200, 'Item does not exist.');
        }
    }

    /*     * include new model here* */

    public static function selectModel($model, $whereArray,$existsUniqueId=null) {

        $model = strtolower($model);

        if ($model == 'entertainment') {
            
            if($existsUniqueId !== null){
             $entertainment = Entertainment::where($whereArray)->where('id','!==',$existsUniqueId)->first();
            return $entertainment;   
            }
            $entertainment = Entertainment::where($whereArray)->first();
            return $entertainment;
        }


        if ($model == 'fayl') {

             if($existsUniqueId !== null){
              $fayl = Fayl::where($whereArray)->where('id','!==',$existsUniqueId)->first();
            return $fayl;   
            }
            $fayl = Fayl::where($whereArray)->first();
            return $fayl;
        }


        if ($model == 'artist') {

             if($existsUniqueId !== null){
              $artist = Artist::where($whereArray)->where('id','!==',$existsUniqueId)->first();
            return $artist;  
            }
            $artist = Artist::where($whereArray)->first();
            return $artist;
        }


        if ($model == 'event') {

             if($existsUniqueId !== null){
             $event = Event::where($whereArray->where('id','!==',$existsUniqueId))->first();
            return $event;   
            }
            $event = Event::where($whereArray)->first();
            return $event;
        }


        if ($model == 'location') {

             if($existsUniqueId !== null){
                $location = Location::where($whereArray)->where('id','!==',$existsUniqueId)->first();
            return $location;
            }
            $location = Location::where($whereArray)->first();
            return $location;
        }


        if ($model == 'country') {

             if($existsUniqueId !== null){
              $country = Country::where($whereArray)->where('id','!==',$existsUniqueId)->first();
            return $country;  
            }
            $country = Country::where($whereArray)->first();
            return $country;
        }


        if ($model == 'payment') {
             if($existsUniqueId !== null){

                 $payment = Payment::where($whereArray)->where('id','!=',$existsUniqueId)->first();
             return $payment;   
            }

            $payment = Payment::where($whereArray)->first();
            return $payment;
        }


        if ($model == 'package') {
             if($existsUniqueId !== null){

                 $modelObj = Package::where($whereArray)->where('id','!=',$existsUniqueId)->first();
             return $modelObj;   
            }

            $modelObj = Package::where($whereArray)->first();
            return $modelObj;
        }


        if ($model == 'advertfeatured') {
             if($existsUniqueId !== null){

                 $modelObj = AdvertFeatured::where($whereArray)->where('id','!=',$existsUniqueId)->first();
             return $modelObj;   
            }

            $modelObj = AdvertFeatured::where($whereArray)->first();
            return $modelObj;
        }


        //model does not exist return false
        return false;
    }

    /*     * include new model here* */

    public static function createModel($model, $dataArray, $exists = false, $existsWhere = null) {
        $_this = new self;
        $model = strtolower($model);
        /** if status true check if item exists using existswhere * */
        if ($exists === true) {

            $response = $_this->checkItemExistence($model, $existsWhere);
            //the item already exists
            if ($response['status'] === 404) {
                return $response;
            }
        }

        /*         * perform an insert* */
        if ($model == 'entertainment') {

            $entObj = Entertainment::create($dataArray);

            /*             * Insert this operation* */
            $opsArray['model_id'] = $entObj->id;
            $opsArray['model_name'] = 'Entertainment';
            $opsArray['user_id'] = Request::user()->id;
            $opsArray['operation'] = 'add';
            $_this->storeOperation($opsArray);

            return $_this->createStatus(200, 'Successfuly created a record');
        }


        if ($model == 'fayl') {

            $faylObj = Fayl::create($dataArray);
            /*             * Insert this operation* */
            $opsArray['model_id'] = $faylObj->id;
            $opsArray['model_name'] = 'Fayl';
            $opsArray['user_id'] = $_this->requesUserId();
            $opsArray['operation'] = 'add';
            $_this->storeOperation($opsArray);
            //Map this file to a domain
            MyEvent::fire(new FileWasCreated($faylObj));

            return $_this->createStatus(200, 'Successfuly created a record.');
        }



        if ($model == 'artist') {

            $artistObj = Artist::create($dataArray);
            /*             * Insert this operation* */
            $opsArray['model_id'] = $artistObj->id;
            $opsArray['model_name'] = 'Artist';
            $opsArray['user_id'] = $_this->requesUserId();
            $opsArray['operation'] = 'add';
            $_this->storeOperation($opsArray);

            return $_this->createStatus(200, 'Successfuly created a record');
        }



        if ($model == 'event') {

            $eventObj = Event::create($dataArray);
            /*             * Insert this operation* */
            $opsArray['model_id'] = $eventObj->id;
            $opsArray['model_name'] = 'Event';
            $opsArray['user_id'] = $_this->requesUserId();
            $opsArray['operation'] = 'add';
            $_this->storeOperation($opsArray);

            return $_this->createStatus(200, 'Successfuly created a record');
        }



        if ($model == 'location') {

            $locationObj = Location::create($dataArray);
            /*             * Insert this operation* */
            $opsArray['model_id'] = $locationObj->id;
            $opsArray['model_name'] = 'Location';
            $opsArray['user_id'] = $_this->requesUserId();
            $opsArray['operation'] = 'add';
            $_this->storeOperation($opsArray);

            return $_this->createStatus(200, 'Successfuly created a record');
        }



        if ($model == 'country') {

            $countryObj = Country::create($dataArray);
            /*             * Insert this operation* */
            $opsArray['model_id'] = $countryObj->id;
            $opsArray['model_name'] = 'Country';
            $opsArray['user_id'] = $_this->requesUserId();
            $opsArray['operation'] = 'add';
            $_this->storeOperation($opsArray);

            return $_this->createStatus(200, 'Successfuly created a record');
        }



        if ($model == 'payment') {

            $paymentObj = Payment::create($dataArray);
            /*             * Insert this operation* */
            $opsArray['model_id'] = $paymentObj->id;
            $opsArray['model_name'] = 'Payment';
            $opsArray['user_id'] = $_this->requesUserId();
            $opsArray['operation'] = 'add';
            $_this->storeOperation($opsArray);

            return $_this->createStatus(200, 'Successfuly created a record');
        }



        if ($model == 'package') {

            $modelObj = Package::create($dataArray);
            /*             * Insert this operation* */
            $opsArray['model_id'] = $modelObj->id;
            $opsArray['model_name'] = 'Payment';
            $opsArray['user_id'] = $_this->requesUserId();
            $opsArray['operation'] = 'add';
            $_this->storeOperation($opsArray);

            return $_this->createStatus(200, 'Successfuly created a record');
        }



        if ($model == 'advertfeatured') {

            $modelObj = AdvertFeatured::create($dataArray);
            /*             * Insert this operation* */
            $opsArray['model_id'] = $modelObj->id;
            $opsArray['model_name'] = 'AdvertFeatured';
            $opsArray['user_id'] = $_this->requesUserId();
            $opsArray['operation'] = 'add';
            $_this->storeOperation($opsArray);

            return $_this->createStatus(200, 'Successfuly created a record');
        }


        //model does not exist return false
        return $_this->createStatus(404, 'Model does not exist.Contact system administrator.');
    }

    /*     * include new model here* */

    public function deleteModel($model, $arrayWhere) {

        $_this = new self;
        $model = strtolower($model);
        /*         * perform an insert* */
        if ($model == 'entertainment') {

            $entertainment = Entertainment::where($arrayWhere)->get()->first();
            if (count($entertainment) > 0) {
                /*                 * Insert this operation* */
                $opsArray['model_id'] = $entertainment->id;
                $opsArray['model_name'] = 'Entertainment';
                $opsArray['user_id'] = Request::user()->id;
                $opsArray['operation'] = 'delete';
                $_this->storeOperation($opsArray);

                $entertainment->delete();
            }
            return $_this->createStatus(200, 'Successfuly deleted a record');
        }

        if ($model == 'fayl') {

            $fayl = Fayl::where($arrayWhere)->get()->first();
            if (count($fayl) > 0) {
                /*                 * Insert this operation* */
                $opsArray['model_id'] = $fayl->id;
                $opsArray['model_name'] = 'Fayl';
                $opsArray['user_id'] = Request::user()->id;
                $opsArray['operation'] = 'delete';
                $_this->storeOperation($opsArray);

                $fayl->delete();
            }

            return $_this->createStatus(200, 'Successfuly deleted a record');
        }

        if ($model == 'user') {

            $user = User::where($arrayWhere)->get()->first();
            if (count($user) > 0) {
                /*                 * Insert this operation* */
                $opsArray['model_id'] = $user->id;
                $opsArray['model_name'] = 'User';
                $opsArray['user_id'] = Request::user()->id;
                $opsArray['operation'] = 'delete';
                $_this->storeOperation($opsArray);

                $user->delete();
            }
            return $_this->createStatus(200, 'Successfuly deleted a record');
        }

        if ($model == 'artist') {

            $artist = Artist::where($arrayWhere)->get()->first();
            if (count($artist) > 0) {
                /**delete also from the user model**/
                $_this->deleteModel('user', array('id'=>$artist->user_id));
                /*                 * Insert this operation* */
                $opsArray['model_id'] = $artist->id;
                $opsArray['model_name'] = 'Artist';
                $opsArray['user_id'] = Request::user()->id;
                $opsArray['operation'] = 'delete';
                $_this->storeOperation($opsArray);

                $artist->delete();
            }
            return $_this->createStatus(200, 'Successfuly deleted a record');
        }

        if ($model == 'event') {

            $event = MyEvent::where($arrayWhere)->get()->first();
            if (count($event) > 0) {
                /*                 * Insert this operation* */
                $opsArray['model_id'] = $event->id;
                $opsArray['model_name'] = 'Event';
                $opsArray['user_id'] = Request::user()->id;
                $opsArray['operation'] = 'delete';
                $_this->storeOperation($opsArray);

                $event->delete();
            }
            return $_this->createStatus(200, 'Successfuly deleted a record');
        }

        if ($model == 'location') {

            $location = Location::where($arrayWhere)->get()->first();
            if (count($location) > 0) {
                /*                 * Insert this operation* */
                $opsArray['model_id'] = $location->id;
                $opsArray['model_name'] = 'Location';
                $opsArray['user_id'] = Request::user()->id;
                $opsArray['operation'] = 'delete';
                $_this->storeOperation($opsArray);

                $location->delete();
            }
            return $_this->createStatus(200, 'Successfuly deleted a record');
        }

        if ($model == 'country') {

            $country = Country::where($arrayWhere)->get()->first();
            if (count($country) > 0) {
                /*                 * Insert this operation* */
                $opsArray['model_id'] = $country->id;
                $opsArray['model_name'] = 'Country';
                $opsArray['user_id'] = Request::user()->id;
                $opsArray['operation'] = 'delete';
                $_this->storeOperation($opsArray);

                $country->delete();
            }
            return $_this->createStatus(200, 'Successfuly deleted a record');
        }

        if ($model == 'payment') {

            $payment = Payment::where($arrayWhere)->get()->first();
            if (count($payment) > 0) {
                /*                 * Insert this operation* */
                $opsArray['model_id'] = $payment->id;
                $opsArray['model_name'] = 'Payment';
                $opsArray['user_id'] = Request::user()->id;
                $opsArray['operation'] = 'delete';
                $_this->storeOperation($opsArray);

                $payment->delete();
            }
            return $_this->createStatus(200, 'Successfuly deleted a record');
        }

        if ($model == 'package') {

            $modelObj = Package::where($arrayWhere)->get()->first();
            if (count($modelObj) > 0) {
                /*                 * Insert this operation* */
                $opsArray['model_id'] = $modelObj->id;
                $opsArray['model_name'] = 'Payment';
                $opsArray['user_id'] = Request::user()->id;
                $opsArray['operation'] = 'delete';
                $_this->storeOperation($opsArray);

                $modelObj->delete();
            }
            return $_this->createStatus(200, 'Successfuly deleted a record');
        }

        if ($model == 'advertfeatured') {

            $modelObj = AdvertFeatured::where($arrayWhere)->get()->first();
            if (count($modelObj) > 0) {
                /*                 * Insert this operation* */
                $opsArray['model_id'] = $modelObj->id;
                $opsArray['model_name'] = 'AdvertFeatured';
                $opsArray['user_id'] = Request::user()->id;
                $opsArray['operation'] = 'delete';
                $_this->storeOperation($opsArray);

                $modelObj->delete();
            }
            return $_this->createStatus(200, 'Successfuly deleted a record');
        }

        //model does not exist return false
        return $_this->createStatus(404, 'Model does not exist.Contact system administrator.');
    }

    /*     * Generate an input request* */

    public static function generateRequestInput($arrayValues) {

        $_this = new self;
        if (count($arrayValues) < 1) {
            return false;
        }

        $_this->data = array();
        //$arrayValues = array('name','email');
        foreach ($arrayValues as $arrayValue) {
            $_this->data[$arrayValue] = Request::Input($arrayValue);
        }
        return $_this->data;
    }

    /*     * used by the update method to determine type of operation* */

    public static function checkTypeOfOperation($dataArray, $modell) {

        $_this = new self;
        $model = ucfirst(strtolower(trim($modell)));

        if (array_key_exists('blocked', $dataArray)) {
            /*             * its either a block or unblock operation* */
            if ($dataArray['blocked'] == 0) {
                $opsArray['operation'] = 'unblock';
            } else {
                $opsArray['operation'] = 'block';
            }
        } else {
            /*             * its an edit operation* */
            $opsArray['operation'] = 'edit';
        }


        /*         * Insert this operation* */
        $opsArray['model_id'] = $dataArray['id'];
        $opsArray['model_name'] = $model;
        $opsArray['user_id'] = Request::user()->id;

        $_this->storeOperation($opsArray);
    }

    /*     * store an operation ie add,delete,restore,block,unblock* */

    public static function storeOperation($opsArray) {

        /*         * =============check the documentation:
         * The array $opsArray must contain the following values 
         * model_name,model_id,user_id,operation=================* */
        $_this = new self;
        if (count($opsArray) < 1) {
            return $_this->createStatus(404, 'The Operations array is empty.');
        }
        /*         * perfome and insertion* */
        Ops::create($opsArray);
        return $_this->createStatus(200, 'Successfuly created an ops record.');
    }

    /*     * create a status* */

    public static function createStatus($statuscode, $statusmessage) {

        $_this = new self;
        $_this->data['status'] = $statuscode;
        $_this->data['message'] = $statusmessage;
        return $_this->data;
    }

    public function requesUserId() {
        //$_this->request = $request;
        return Request::user()->id;
    }

//    public function makeSlugFromTitle($title)
//{
//    $slug = Str::slug($title);
//
//    $count = Conversation::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
//
//    return $count ? "{$slug}-{$count}" : $slug;
//}
}

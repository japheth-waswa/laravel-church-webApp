<?php

namespace App\Entertainment\Repo;

use Validator;
use Response;
use EntOps;

class FileManipulations {
    /*     * =============validate the file passed to it=================* */

    public static function fileValidator($fileInArray, $fileType) {
        /*         * file type determines the kind of rules it will process* */
        $_this = new self();

        /*         * image file* */
        if ($fileType === 'image') {
            $rules = array(
                'file' => 'required|image|max:100000'
            );

            $validator = Validator::make($fileInArray, $rules);

            if ($validator->fails()) {

                return Response::make($validator->errors()->first(), 400);
            }
        }

        /*         * audio file* */
        if ($fileType === 'audio') {
            $rules = array(
                'file' => 'required|mimes:aac,mp4,m4a,mp1,mp2,mp3,mpg,mpeg,mpga,oga,ogg,wav,webm|max:100000'
            );

            $validator = Validator::make($fileInArray, $rules);

            if ($validator->fails()) {

                return Response::make($validator->errors()->first(), 400);
            }
        }


        /*         * video file* */
        if ($fileType === 'video') {
            $rules = array(
                'file' => 'required|mimes:mp4,webm,mpeg|max:100000'
            );

            $validator = Validator::make($fileInArray, $rules);

            if ($validator->fails()) {

                return Response::make($validator->errors()->first(), 400);
            }
        }


        /*         * document file* */
        if ($fileType === 'document') {
            $rules = array(
                'file' => 'required|mimes:pdf,doc,docx,xls,xlsx,ppt|max:100000'
            );

            $validator = Validator::make($fileInArray, $rules);

            if ($validator->fails()) {

                return Response::make($validator->errors()->first(), 400);
            }
        }

        return true;
    }

    /*     * ===========perfoms the actual upload of files===================* */

    public static function uploadFile($fileObject, $fileType) {
        $_this = new self();

        /*         * ensure the file is valid* */
        if ($fileObject->isValid()) {

            /*             * upload path* */
            $destinationPath = $_this->getFileDir($fileType);
            /*             * file extension* */
            $extenstion = $fileObject->getClientOriginalExtension();
            $originalName = $fileObject->getClientOriginalName();
            $originalFileName = str_slug(str_replace('.' . $extenstion, '', $originalName), '-');
            /*             * renaming file* */
            $fileName = rand(111111111, 999999999) . '.' . $extenstion;
            //$fileName = $originalFileName. '.' . $extenstion;
            /*             * upload file to given path* */
            $success_upload = $fileObject->move($destinationPath, $fileName);
            $fileLocationName = $destinationPath . '/' . $fileName;

            $_this->data['dbFieldName'] = $_this->getDbFieldName($fileType);
//            $_this->data['fileName'] = str_replace('.' . $extenstion, '', $originalName);
            $_this->data['fileName'] = $originalFileName;
            $_this->data['fileLocationName'] = $fileLocationName;

            if ($success_upload) {
                $_this->data['status'] = 200;
                return $_this->data;
            } else {
                return EntOps::createStatus(404, 'Error during upload');
            }
        } else {
            return EntOps::createStatus(404, 'UPloaded file is not valid');
        }
    }

    /*     * =========sets the location of file types ie images,videos,audios etc=====================* */

    public static function getFileDir($fileType) {

        if ($fileType === 'image') {

            return 'assets/uploads/images';
        }

        if ($fileType === 'audio') {

            return 'assets/uploads/audios';
        }

        if ($fileType === 'video') {

            return 'assets/uploads/videos';
        }

        if ($fileType === 'document') {

            return 'assets/uploads/documents';
        }
    }

    public static function getDeletedFileDir($fileType) {

        if ($fileType === 'image') {

            return 'assets/uploads/deleted_images';
        }

        if ($fileType === 'audio') {

            return 'assets/uploads/deleted_audios';
        }

        if ($fileType === 'video') {

            return 'assets/uploads/deleted_videos';
        }

        if ($fileType === 'document') {

            return 'assets/uploads/deleted_documents';
        }
    }

    /*     * adding or editing the database field name consequently change here* */

    public static function getDbFieldName($fileType) {

        if ($fileType === 'image') {

            return 'image_url';
        }

        if ($fileType === 'audio') {

            return 'audio_url';
        }

        if ($fileType === 'video') {

            return 'video_url';
        }

        if ($fileType === 'document') {

            return 'document_url';
        }
    }

    public static function checkRequiredInputs($input) {

        /*         * ensure the array is not empty* */
        if (count($input) < 1) {
            return Response::json('Failed.Check the file size,upload another file or upload one file at a time since larger files might not be uploaded as a batch.', 404);
        }

        /*         * check that type key is set ie the model ie artist,client,product etc key exists in the array* */
        if (!array_key_exists('type', $input)) {
            return Response::json('Please define an input named "type" with a value ie artist,client.', 404);
        }

        /*         * check that fileUserId key exists in the array* */
        if (!array_key_exists('fileUserId', $input)) {
            return Response::json('This implementation requires the inclusion of fileUserId input.', 404);
        }


        /*         * check that location ie local,remote key exists in the array* */
        if (!array_key_exists('location', $input)) {
            return Response::json('Please note the location must be set ie local or remote.Check the documentation for more info', 404);
        }

        /*         * check that file key exists in the array* */
        if (!array_key_exists('file', $input)) {
            return Response::json('File input field is null', 404);
        }


        return true;
    }

    public static function deleteFiles($filesPathStringArray) {
        $_this = new self();
        if (count($filesPathStringArray) == 0) {
            return EntOps::createStatus(500, 'File path array is empty.');
        }

        foreach ($filesPathStringArray as $filePathStringArray) {
            $filePathStringArray = trim($filePathStringArray);
            if($filePathStringArray != null){
            $filepath  = public_path() . '/' . $filePathStringArray;
            if (file_exists($filepath)) {
                unlink($filepath);
                EntOps::createStatus(200, 'success deleted');
            } else {
                return EntOps::createStatus(500, 'File does not exist.');
            }
        }else {
                return EntOps::createStatus(500, 'File does not exist.');
            }
        }
    }

}

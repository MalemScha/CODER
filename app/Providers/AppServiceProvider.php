<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\facades\schema;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
     public function boot()
     {
        Validator::extend('is_mime', function($attribute, $value, $parameters, $validator) {
            $acceptedTypes = [
                "application/pdf",             

                "image/vnd.adobe.photoshop",
                "image/png",
                "image/tiff",
                "image/jpeg",
                "image/gif",
                "image/svg+xml",
                "image/x-icon",

                "application/cdr",
                "application/coreldraw",
                "application/x-cdr",
                "application/x-coreldraw",
                "image/cdr",
                "image/x-cdr",
                "zz-application/zz-winassoc-cdr",

                "application/vnd.ms-excel",
                "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
                "application/vnd.ms-powerpoint",
                "application/vnd.openxmlformats-officedocument.presentationml.presentation",
                "application/vnd.openxmlformats-officedocument.presentationml.slideshow",
                "application/msword",
                "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
                "application/rtf",

                "application/xml",
                "application/vnd.oasis.opendocument.text",
                "application/vnd.oasis.opendocument.spreadsheet",
                "application/vnd.oasis.opendocument.presentation	",

                "text/plain",

                "application/zip",
                "application/x-rar-compressed",
                "application/x-7z-compressed",

                "video/mpeg",
                "video/mp4",
                "video/x-ms-wmv",

            ];
            $mimetype = "";
            foreach ($value as $file) {
                $mimetype = $file->getClientMimeType();
            }
            if(in_array($mimetype,$acceptedTypes)){
                return true;
            }
                return false;
        });
     }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

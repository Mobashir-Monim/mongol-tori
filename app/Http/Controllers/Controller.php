<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadImage ($request, $name)
    {
        $filenameWithExt = $request->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);            
        $extension = $request->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;                       
        $path = $request->storeAs('/public/'.$name, $fileNameToStore);

        return '/storage/'.$name.'/'.$fileNameToStore;
    }
}

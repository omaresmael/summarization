<?php

namespace App\Http\Controllers;
use App\Traits\Filable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SummarizationController extends Controller
{
   use Filable;



    public function test(Request $request)
    {
        $fileName = 'test'.date("Y-m-d").time();
        $text = $request->text;

        Storage::put('test/'.$fileName.'.txt', $text);
        $url = Storage::url('test/'.$fileName);
         while(1)
         {
             if(Storage::exists('test/'.$fileName.'.txt'))
                 return Storage::disk('local')->get('test/'.$fileName.'.txt');
             set_time_limit(30);
         }




    }
}

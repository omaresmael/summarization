<?php

namespace App\Http\Controllers;
use App\Traits\Filable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SummarizationController extends Controller
{
   use Filable;



    public function test(Request $request)
    {
        $fileName = 'test'.date('y-m-d').time();
        $text = $request->text;

        Storage::put('test/'.$fileName.'.txt', $text);
        $url = Storage::url('test/'.$fileName);
         while(1)
         {
             if(Storage::exists('result/'.$fileName.'_summarized.txt'))
                 return Storage::disk('local')->get('result/'.$fileName.'_summarized.txt');
             set_time_limit(30);
         }

    }
    public function upload(Request $request)
    {
        if ($request->hasFile('file'))
        {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $extension = '.'.$file->extension();
            $fileName = Str::of($fileName)->basename($extension);
            $file->storeAs('/uploads',$fileName.date("Y-m-d").time().$extension);
        }
    }
}

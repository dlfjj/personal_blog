<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FileDownloadController extends Controller
{
    public function downloadResume(){
        try {
            return Storage::download('/public/files/jacky_resume.pdf');
        }
        catch (\Exception $e){
            return redirect()->back()->with('flash_error','PDF File is too old, did not store at the database anymore');
        }
//        return Storage::disk('public')->download('pdf_files/'.urldecode($filename));
    }
}

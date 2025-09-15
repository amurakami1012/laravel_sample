<?php

namespace App\Http\Controllers\Register;

//----- フレームワーク参照 -----
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

//----- プロジェクト参照 -----
use App\Http\Controllers\BaseController;
use App\Exceptions\ApplyErrorException; 
use App\Models\Master\UrlMaster;

class UrlMasterContorol extends BaseController
{
    public function index(): View
    {
        try {
            return view('register.url_regster');
        } catch (\Throwable $th) {
            throw new ApplyErrorException($th);
        } 
    }
    
    public function store(Request $request)
    {
        try {
            (new UrlMaster)->store($request);

            return redirect()->route('register.url.register');
        } catch (\Throwable $th) {
            throw new ApplyErrorException($th);
        } 
    }
    
}
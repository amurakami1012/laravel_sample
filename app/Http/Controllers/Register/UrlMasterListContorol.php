<?php

namespace App\Http\Controllers\Register;

//----- フレームワーク参照 -----
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

//----- プロジェクト参照 -----
use App\Http\Controllers\BaseController;
use App\Exceptions\ApplyErrorException; 
use App\Models\Master\UrlMaster;

class UrlMasterListContorol extends BaseController
{
    const PAGE = '管理者マスター';

    public function index(Request $request): View
    {
        try {
            $title = '管理者マスター【一覧】';
            $page = self::PAGE;

            $url_masters = (new UrlMaster)->getListData($request);
            
            return view('register.url_regster_list',
            compact(
                'title', 'request', 'url_masters', 'page')
            );
        } catch (\Throwable $th) {
            throw new ApplyErrorException($th);
        } 
    }
}
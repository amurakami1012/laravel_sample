<?php

namespace App\Models\Master;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Collection;

/**
 * URLマスター
 */
class UrlMaster extends BaseModel {
    /** テーブル名 */
    public const table_id_name = 'url_masters';
    // テーブル名を定義
    protected $table = self::table_id_name;
    /** 登録編集についてはブラックリストタイプで実装 */
    protected $guarded = ['id'];

    protected $fillable = [
        'title',
        'url',
        'remarks',
    ];

    /**
     * 登録処理
     *
     * @param Request $request
     * @return Collection
     */
    public function getListData(Request $request) : Collection 
    {
        $query 
            = UrlMaster::select(["title", "url", "remarks", DB::raw("created_at as created_dt")]);
        if ($request->filled("name_search")) {
            $query->where(function ($query) use ($request) {
                $query
                    ->orWhere("title", "like", "%" . addcslashes($request->name_search, "%_\\") . "%")
                    ->orWhere("remarks", "like", "%" . addcslashes($request->name_search, "%_\\") . "%");
            });
        }

        return $query->get();
    }

    /**
     * 登録処理
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request) : void 
    {
        $urlMaster = new UrlMaster();
        DB::beginTransaction();
        $urlMaster->fill($request->all())->save();
        DB::commit();
    }
}

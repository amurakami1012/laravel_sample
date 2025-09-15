<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUrlMastersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_masters', function(Blueprint $table)
        {
            $table->bigInteger('id', true)->comment('ID');
            $table->string('title', 255)->nullable()->comment('タイトル');
            $table->string('url', 255)->nullable()->comment('URL');
            $table->text('remarks')->nullable()->comment('備考');
            $table->softDeletes()->comment('削除日時');
            $table->timestamp('created_at')->comment('作成日時');
            $table->timestamp('updated_at')->comment('更新日時');
        });
        DB::select("COMMENT ON TABLE url_masters IS 'URLマスター'");
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('url_masters');
    }

}

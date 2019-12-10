<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');

            // Site Info
            $table->string('site_name')->default('默认站点')->comment('网站名称');
            $table->string('site_url')->default('http://localhost/')->comment('网址');
            $table->string('site_slogan')->nullable()->comment('网站口号');
            $table->string('site_logo')->nullable()->comment('网站Logo');
            $table->string('site_keywords')->nullable()->comment('网站关键词');
            $table->string('site_description')->nullable()->comment('网站介绍');
            $table->string('site_icp')->nullable()->comment('网站备案号');
            $table->string('site_copyright')->nullable()->comment('网站版权信息');
            $table->text('site_analytics_code')->nullable()->comment('网站统计代码');

            // Cache 相关
            $table->integer('cache_time')->default(1440)->comment('缓存时间');

            // 文件上传相关
            $table->string('file_allowed_extensions')->default('pdf')->comment('允许上传的文件类型');
            $table->integer('file_allowed_max_size')->default(2)->comment('允许上传的文件类型');
            $table->string('image_allowed_extensions')->nullable('jpeg|jpg|png')->comment('允许上传的文件类型');
            $table->integer('image_allowed_max_size')->nullable(2)->comment('允许上传的文件类型');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}

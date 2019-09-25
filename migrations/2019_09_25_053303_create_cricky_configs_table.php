<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrickyConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cricky_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->default('')->comment('配置名称');
            $table->text('value')->comment('配置值');
            $table->enum('type', [
                'string', 'integer', 'boolean', 'double', 'json'
            ])->default('string')->comment('类型');
            $table->string('description', 255)->default('')->comment('配置描述');
            $table->timestamps();

            $table->unique('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cricky_configs');
    }
}

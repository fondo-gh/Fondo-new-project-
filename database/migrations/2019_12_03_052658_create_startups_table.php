<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('image');
            $table->string('name')->unique();
            $table->text('description');
            $table->string('type');
            $table->string('category');
            $table->text('pitch');
            $table->text('key_resources')->nullable();
            $table->text('value_proposition')->nullable();
            $table->text('revenue_model')->nullable();
            $table->text('cost_structure')->nullable();
            $table->text('financials')->nullable();
            $table->text('customer_target')->nullable();
            $table->text('sale_channels')->nullable();
            $table->text('key_metrics')->nullable();
            $table->text('business_model')->nullable();
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
        Schema::dropIfExists('startups');
    }
}

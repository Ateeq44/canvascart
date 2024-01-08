<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('slug')->nullable();
            $table->foreignId('cat_id')->nullable()->constrained('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->text('short_detail')->nullable();
            $table->longText('long_detail')->nullable();
            $table->enum('admin_approval',[0,1])->nullable();
            $table->string('price')->nullable();
            $table->string('discount_start_date')->nullable();
            $table->string('discount_end_date')->nullable();
            $table->string('featured_img')->nullable();
            $table->enum('is_feature',['0','1'])->default('0');
            $table->enum('status',['0','1'])->nullable()->default('0');
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('')->nullable();
            $table->string('')->nullable();
            $table->string('')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}

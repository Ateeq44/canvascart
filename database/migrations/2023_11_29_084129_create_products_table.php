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
            $table->foreignId('cat_id')
            $table->foreignId('subcat_id')
            $table->string('brand')->nullable();
            $table->string('g_memory')->nullable();
            $table->string('barcode')->nullable();
            $table->string('model')->nullable();
            $table->string('num_cpus')->nullable();
            $table->string('ci_cable_length')->nullable();
            $table->string('system_memory')->nullable();
            $table->string('hard_disk')->nullable();
            $table->string('cpu_speed')->nullable();
            $table->string('soft_offering')->nullable();
            $table->string('touch_pad')->nullable();
            $table->string('processor_type')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('dis_size')->nullable();
            $table->string('g_card')->nullable();
            $table->string('battery_life')->nullable();
            $table->string('processpr')->nullable();
            $table->string('wireless_type')->nullable();
            $table->string('ac_adapter')->nullable();
            $table->string('protection')->nullable();
            $table->string('model_year')->nullable();
            $table->string('no_camera')->nullable();
            $table->string('battert_capacity')->nullable();
            $table->string('camera_pixel')->nullable();
            $table->string('sim_type')->nullable();
            $table->string('cam_front_pixel')->nullable();
            $table->string('ram')->nullable();
            $table->string('body_type')->nullable();
            $table->string('e-warranty')->nullable();
            $table->string('camra_back')->nullable();
            $table->string('number_of_cores')->nullable();
            $table->string('screen_type')->nullable();
            $table->string('sim_slot')->nullable();
            $table->string('resolution')->nullable();
            $table->string('quantity')->nullable();
            $table->string('seller_sku')->nullable();
            $table->string('warranty_policy')->nullable();
            $table->string('warranty_period')->nullable();
            $table->string('wranty_type')->nullable();
            $table->string('pkg_Weight')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('dang_goods')->nullable();
            $table->string('mobile_feature')->nullable();
            $table->string('network_conn')->nullable();
            $table->text('short_detail')->nullable();
            $table->longText('long_detail')->nullable();
            $table->enum('admin_approval',[0,1])->default('0');->nullable();
            $table->string('price')->nullable();
            $table->string('special_price')->nullable();
            $table->string('discount_start_date')->nullable();
            $table->string('discount_end_date')->nullable();
            $table->string('images')->nullable();
            $table->enum('is_feature',['0','1'])->default('0');
            $table->enum('status',['0','1'])->nullable()->default('0');
            $table->string('color')->nullable();
            $table->string('size')->nullable();
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

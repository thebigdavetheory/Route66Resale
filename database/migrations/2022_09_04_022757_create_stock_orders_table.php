<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->default(3)->constrained();
            $table->string('description', 500);
            $table->bigInteger('item_count')->unsigned();
            $table->dateTime('date_ordered');
            $table->decimal('total_cost', 9,  2);
            $table->decimal('shipping_cost', 9,  2);
            $table->decimal('total_msrp', 9,  2);
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
        Schema::dropIfExists('stock_orders');
    }
};

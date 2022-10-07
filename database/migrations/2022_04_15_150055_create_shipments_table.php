<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('consignmentno', 16);
            $table->string('sender_name', 60);
            $table->string('sender_phone', 13);
            $table->string('sender_email', 60)->nullable();
            $table->string('sender_address', 200);
            $table->string('receiver_name', 60);
            $table->string('receiver_phone', 13);
            $table->string('receiver_email', 60)->nullable();
            $table->string('receiver_address', 200);
            $table->unsignedBigInteger('origin_id');
            $table->unsignedBigInteger('destination_id');
            $table->string('delivery_place')->nullable();
            $table->string('weight',20);
            $table->string('quantity',20)->default(1);
            $table->string('amount',20);
            $table->string('value',20);
            $table->string('description',230);
            $table->string('payment_mode',20);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('status_id');
            $table->string('usertype')->nullable();
            $table->string('item_type');
            $table->date('date');
            $table->string('reference_no')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->unsignedBigInteger('rider_id')->nullable();
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
        Schema::dropIfExists('shipments');
    }
}

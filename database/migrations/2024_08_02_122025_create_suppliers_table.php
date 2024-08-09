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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->timestamps();
        });
        DB::table('suppliers')->insert([
            ['name' => 'Red Bull Racing', 'email' => 'info@redbullracing.com', 'phone' => '+44 (0)1908 279761', 'address' => 'Bradbourne Drive, Tilbrook, Milton Keynes, England'],
            ['name' => 'Scuderia Ferrari', 'email' => 'biglietteriamef@ferrari.com', 'phone' => '+39 059 4397979', 'address' => 'Via Paolo Ferrari, 85, 41121 Modena, Italy'],
            ['name' => 'Mercedes-AMG PETRONAS F1', 'email' => 'infof@mercedesamgf1.com ', 'phone' => '+44 1280 844000', 'address' => 'Operations Centre, Brackley NN13 7BD, United Kingdom'],
            ['name' => 'WEVERSE COMPANY Inc.', 'email' => 'account@weverse.io ', 'phone' => '1544-0790', 'address' => '8th floor, Building C, 131 Bundang Naegok-ro, Bundang-gu, Seongnam-si, Gyeonggi-do'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};

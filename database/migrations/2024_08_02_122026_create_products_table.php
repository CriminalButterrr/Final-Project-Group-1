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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('sku')->unique();
            $table->decimal('price', 10,2);
            $table->integer('quantity');
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreignId('supplier_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        DB::table('products')->insert([
            ['name' => 'Red Bull Racing 2024 Team Set Up T-Shirt', 'sku' => '1233341', 'quantity' => 10, 'price' => 4122.00, 'supplier_id' => 1, 'description'=> "Red Bull F1 2024 Team Shirt"],
            ['name' => 'Scuderia Ferrari 2024 Team Polo', 'sku' => '53513512', 'quantity' => 15, 'price' => 5782.25, 'supplier_id' => 2, 'description'=> "Scuderia Ferrari 2024 Team Polo"],
            ['name' => 'Mercedes AMG Petronas F1 2024 Team Softshell Jacket', 'sku' => '1231231231', 'quantity' => 10, 'price' => 10820.25, 'supplier_id' => 3, 'description'=> 'Mercedes AMG Petronas F1 2024 Team Softshell Jacket, Waterproof.'],
            ['name' => 'Red Bull Racing 2024 New Era Max Verstappen 9FORTY Cap', 'sku' => '5551475', 'quantity' => 99, 'price' => 1945.93, 'supplier_id' => 1, 'description'=> 'Red Bull Racing 2024 New Era Max Verstappen 9FORTY Cap. 2024 Champion'],
            ['name' => 'Jung Kook (BTS) "GOLDEN" (Set)', 'sku' => '2312344', 'quantity' => 1, 'price' => 2788.08, 'supplier_id' => 4, 'description' => 'Jung Kook (BTS) "GOLDEN" Album'],
            ['name' => '7th Mini Album [I SWAY] (Set)', 'sku' => '12315511', 'quantity' => 2, 'price' => 2605.45, 'supplier_id' => 4, 'description' => '(G)-IDLE 7th Mini Album [I SWAY]. Album of the Year. Klaxion'],
            ['name' => '2nd Full Album [2] Random', 'sku' => '266799123', 'quantity' => 15, 'price' => 868.48, 'supplier_id' => 4, 'description' => '(G)-IDLE 2nd Full Album [2] Random. Best song of the Year: Fate'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

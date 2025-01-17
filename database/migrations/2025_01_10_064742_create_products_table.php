<?php

use App\Models\Feature;
use App\Models\Order;
use App\Models\Product;
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
            $table->string("title");
            $table->text("description");
            $table->timestamps();
        });
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->string("icon");
            $table->timestamps();
        });
        Schema::create('feature_product', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Feature::class);
            $table->foreignIdFor(Product::class);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('features');
    }
};

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
        // Schema::table('posts', function(Blueprint $table) {
        //     $table->renameColumn('category_id', 'categories_id');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('posts', function(Blueprint $table) {
        //     $table->renameColumn('categories_id', 'category_id');
        // });
    }
};

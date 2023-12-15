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
        Schema::table('service_sub_categories', function (Blueprint $table) {
            $table->dropColumn('icon');
            $table->string('image')->nullable()->after('featured');
            $table->json('name')->change();
            $table->json('slug')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_sub_categories', function (Blueprint $table) {
            //
        });
    }
};

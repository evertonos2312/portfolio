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
        if (Schema::hasColumn('projects', 'skills')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->dropColumn('skills');
            });
            // The "users" table exists and has an "email" column...
        }

        Schema::table('projects', function (Blueprint $table) {
            $table->json('skills')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

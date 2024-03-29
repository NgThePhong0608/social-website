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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 255)->unique()->after('id');
            $table->string('cover_path', 1024)->nullable();
            $table->string('avatar_path', 1024)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username', 255);
            $table->dropColumn('cover_path', 1024);
            $table->dropColumn('avatar_path', 1024);
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('properti', function (Blueprint $table) {
            $table->enum('lokasi', ['kerto', 'gasek', 'sigura-gura', 'kalijaga'])->after('alamat');
        });
    }

    public function down(): void
    {
        Schema::table('properti', function (Blueprint $table) {
            $table->dropColumn('lokasi');
        });
    }
};

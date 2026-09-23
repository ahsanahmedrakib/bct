<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->boolean('seed')->default(false);
            $table->timestamps();
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->after('id');
        });

        $seedCategories = [
            'Textile & Garments',
            'Fashion & Retail',
            'IT & Engineering',
            'Business & Corporate',
            'Healthcare & Hospitality',
        ];

        foreach ($seedCategories as $name) {
            $categoryId = DB::table('categories')->insertGetId([
                'name' => $name,
                'seed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('projects')->where('category', $name)->update(['category_id' => $categoryId]);
        }

        foreach (DB::table('projects')->whereNull('category_id')->get() as $project) {
            $categoryId = DB::table('categories')->insertGetId([
                'name' => $project->category,
                'seed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table('projects')->where('id', $project->id)->update(['category_id' => $categoryId]);
        }

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('category');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable(false)->change();
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
            $table->string('category')->nullable()->after('title');
        });

        Schema::dropIfExists('categories');
    }
};
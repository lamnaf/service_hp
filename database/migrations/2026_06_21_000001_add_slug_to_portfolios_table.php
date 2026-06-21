<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique()->after('title');
        });

        $portfolios = DB::table('portfolios')->whereNull('slug')->get();
        foreach ($portfolios as $portfolio) {
            $slug = Str::slug($portfolio->title);
            $originalSlug = $slug;
            $count = 1;
            while (DB::table('portfolios')->where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }
            DB::table('portfolios')->where('id', $portfolio->id)->update(['slug' => $slug]);
        }
    }

    public function down(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};

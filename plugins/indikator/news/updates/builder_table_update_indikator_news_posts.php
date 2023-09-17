<?php namespace Indikator\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndikatorNewsPosts extends Migration
{
    public function up()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->string('title', 255)->change();
            $table->string('slug', 255)->change();
        });
    }
    
    public function down()
    {
        Schema::table('indikator_news_posts', function($table)
        {
            $table->string('title', 100)->change();
            $table->string('slug', 100)->change();
        });
    }
}

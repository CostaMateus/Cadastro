<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocations', function (Blueprint $table) {
            $table->bigInteger('developer_id')
                    ->unsigned()->index()
                    ->foreign()->references("id")
                    ->on("developers")->onDelete('cascade');
            $table->bigInteger('project_id')
                    ->unsigned()->index()
                    ->foreign()->references("id")
                    ->on("projects")->onDelete('cascade');
            $table->integer('week_hours');
            $table->timestamps();
            $table->primary(['developer_id', 'project_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allocations');
    }
}

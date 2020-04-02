<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_leaves', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('personal_id');
            $table->bigInteger('leave_category_id');
            $table->timestamp('started_at');
            $table->timestamp('finished_at');
            $table->boolean('allowed_by_department')->default(false);
            $table->boolean('allowed_by_hr')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hr_leaves');
    }
}

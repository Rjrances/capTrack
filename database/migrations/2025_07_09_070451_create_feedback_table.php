<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
{
    Schema::create('feedback', function (Blueprint $table) {
        $table->id();
        $table->foreignId('project_id')->constrained()->onDelete('cascade');
        $table->string('reviewer_name');
        $table->text('comments');
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('feedbacks');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demographics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            $table->timestamp('dob');
            $table->integer('age')->nullable();
            $table->text('address')->nullable();
            $table->enum('education', ['illiterate', 'literate', 'school grad.', 'college/university grad.'])->nullable();
            $table->string('occupation')->nullable();
            $table->enum('visit_type', ['First time', 'Follow-up', 'OPD', 'Emergency'])->nullable();
            $table->boolean('exclusively_breastfed')->nullable();
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
        Schema::dropIfExists('demographics');
    }
};

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
        Schema::create('user_verifications', function (Blueprint $table) {
		   $table->id();
		   $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnDelete();
		   $table->longText('token');
		   $table->timestamps();
	   });

	    Schema::table('users', function (Blueprint $table) {
		    $table->boolean('is_email_verified')->default(0);
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_verifications');
    }
};

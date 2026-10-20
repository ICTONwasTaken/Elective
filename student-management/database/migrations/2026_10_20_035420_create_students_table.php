<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
return new class extends Migration 
{ 
    public function up(): void 
    { 
        Schema::create('students', function (Blueprint $table) { //creates a table named 'students'
            $table->id(); //creates an id key
            $table->string('student_number')->unique();  //$table->string() defines a text column
            $table->string('first_name'); 
            $table->string('last_name'); 
            $table->string('email')->unique(); 
            $table->string('course'); 
            $table->timestamps();  //Adds 'created_at' and 'updated_at'
        }); 
    } 
 
    public function down(): void 
    { 
        Schema::dropIfExists('students'); 
    } 
};

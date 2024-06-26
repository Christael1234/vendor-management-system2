

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand_id'); 
            $table->string('category_id'); 
            $table->string('unit_id');
            $table->integer('price');
            $table->integer('qty');
           
            $table->timestamps();

            // Defining foreign key constraint with cascading Update and Deletes
            $table->foreign('brand_id')
            ->references('id')
            ->on('brands')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('unit_id')
            ->references('id')
            ->on('units')
            ->onUpdate('cascade')
            ->onDelete('cascade');

               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
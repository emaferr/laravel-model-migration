<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('title');
            $table->text('desc');
            $table->string('period');
            $table->text('people');
            $table->float('price');
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
        Schema::dropIfExists('travels');
    }
}

// sicilia    https://followthetulip.com/wp-content/uploads/2020/08/mare-cefalu-rocca-case-1024x985.jpg  The overwhelming Sicily  
// sardegna   https://i2.res.24o.it/images2010/Editrice/ILSOLE24ORE/ILSOLE24ORE/2020/05/09/Impresa%20e%20Territori/ImmaginiWeb/Ritagli/SARDEGNA-AdobeStock_319544921-kT4B--1020x533@IlSole24Ore-Web.jpeg  The wild Sardinia
// Puglia     https://keyassets.timeincuk.net/inspirewp/live/wp-content/uploads/sites/34/2019/10/Puglia-travel-guide.gif  The alchemy of Puglia  
// Liguria    https://www.liguria.info/wp-content/uploads/sites/113/liguria-hd.jpg  The enterprising Liguria  
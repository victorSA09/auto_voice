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
         Schema::create('profissionais', function (Blueprint $table) {
         /*
                            $table->id();
                            $table->integer(\App\Models\ProfissionalModel::ID_ENDERECO);
                            $table->integer(\App\Models\ProfissionalModel::CRM);
                            $table->string(\App\Models\ProfissionalModel::NOME);
                            $table->string(\App\Models\ProfissionalModel::DADOS);
                            $table->string(\App\Models\ProfissionalModel::DATA_NASCIMENTO);
                            $table->timestamps();
                           });
           */
                           $table->id();
                           $table->integer('CRM');
                           $table->string('nome');
                           $table->string('email');
                           $table->string('dados');
                           $table->string('data_nascimento');
                           $table->string('senha');
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
        //
    }
};

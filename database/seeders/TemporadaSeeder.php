<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TemporadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("temporadas")->insert([
            ["serie_id"=>1,"temporada"=>1,"nombreTemporada"=>"Primera temporada","capitulos"=>12],
            ["serie_id"=>1,"temporada"=>2,"nombreTemporada"=>"Segunda temporada","capitulos"=>12],
            ["serie_id"=>1,"temporada"=>3,"nombreTemporada"=>"Tercera temporada","capitulos"=>14],
            ["serie_id"=>2,"temporada"=>1,"nombreTemporada"=>"Primera temporada","capitulos"=>20],
            ["serie_id"=>2,"temporada"=>2,"nombreTemporada"=>"Segunda temporada","capitulos"=>21],
            ["serie_id"=>2,"temporada"=>3,"nombreTemporada"=>"Tercera temporada","capitulos"=>20],
            ["serie_id"=>2,"temporada"=>4,"nombreTemporada"=>"Cuarta temporada","capitulos"=>22],
            ["serie_id"=>2,"temporada"=>5,"nombreTemporada"=>"Quinta temporada","capitulos"=>20],
            ["serie_id"=>2,"temporada"=>6,"nombreTemporada"=>"Sexta temporada","capitulos"=>19],
            ["serie_id"=>2,"temporada"=>7,"nombreTemporada"=>"Septima temporada","capitulos"=>18],
            ["serie_id"=>3,"temporada"=>1,"nombreTemporada"=>"Primera temporada","capitulos"=>20],
            ["serie_id"=>3,"temporada"=>2,"nombreTemporada"=>"Segunda temporada","capitulos"=>20],
            ["serie_id"=>3,"temporada"=>3,"nombreTemporada"=>"Tercera temporada","capitulos"=>22],
            ["serie_id"=>3,"temporada"=>4,"nombreTemporada"=>"Cuarta temporada","capitulos"=>25]
        ]);
    }
}

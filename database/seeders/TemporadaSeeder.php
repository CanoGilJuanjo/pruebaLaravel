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
            ["serie"=>"Suite","temporada"=>1,"nombreTemporada"=>"Primera temporada","capitulos"=>12],
            ["serie"=>"Suite","temporada"=>2,"nombreTemporada"=>"Segunda temporada","capitulos"=>12],
            ["serie"=>"Suite","temporada"=>3,"nombreTemporada"=>"Tercera temporada","capitulos"=>14],
            ["serie"=>"La casa de papel","temporada"=>1,"nombreTemporada"=>"Primera temporada","capitulos"=>20],
            ["serie"=>"La casa de papel","temporada"=>2,"nombreTemporada"=>"Segunda temporada","capitulos"=>21],
            ["serie"=>"La casa de papel","temporada"=>3,"nombreTemporada"=>"Tercera temporada","capitulos"=>20],
            ["serie"=>"La casa de papel","temporada"=>4,"nombreTemporada"=>"Cuarta temporada","capitulos"=>22],
            ["serie"=>"La casa de papel","temporada"=>5,"nombreTemporada"=>"Quinta temporada","capitulos"=>20],
            ["serie"=>"La casa de papel","temporada"=>6,"nombreTemporada"=>"Sexta temporada","capitulos"=>19],
            ["serie"=>"La casa de papel","temporada"=>7,"nombreTemporada"=>"Septima temporada","capitulos"=>18],
            ["serie"=>"El plan del diablo","temporada"=>1,"nombreTemporada"=>"Primera temporada","capitulos"=>20],
            ["serie"=>"El plan del diablo","temporada"=>2,"nombreTemporada"=>"Segunda temporada","capitulos"=>20],
            ["serie"=>"El plan del diablo","temporada"=>3,"nombreTemporada"=>"Tercera temporada","capitulos"=>22],
            ["serie"=>"El plan del diablo","temporada"=>4,"nombreTemporada"=>"Cuarta temporada","capitulos"=>25]
        ]);
    }
}

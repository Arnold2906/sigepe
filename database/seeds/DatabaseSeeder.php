<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	DB::table('plantas')->truncate();
    	DB::table('proveedores')->truncate();
    	DB::table('users')->truncate();
        DB::table('trabajadores')->truncate(); 
        DB::table('insumos')->truncate();
        DB::table('categorias')->truncate();        
    	DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->call([
        	UsersTableSeeder::class,
        	ProveedoresTableSeeder::class,
        	PlantasTableSeeder::class,
            InsumosTableSeeder::class,
            CategoriasTableSeeder::class,
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Html', 'CSS', 'Php', 'JavaScript', 'Vue Cli'];

        foreach($categories as $category){
            //Creazione dell'istanza
            $newCategory = new Category();

            //dati
            $newCategory->name = $category;
            $newCategory->slug = Str::slug($category, '-');

            //salvataggio dati
            $newCategory->save();
        }
    }
}

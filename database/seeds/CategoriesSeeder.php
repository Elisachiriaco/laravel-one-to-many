<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorieslist = ['Primi piatti','Secondi piatti','Contorni', ' Antipasti', 'Dolci'];
        foreach($categorieslist as $category){
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->slug = Str::of($newCategory->name)->slug('-');
            
            $newCategory->save();
        }
    }
}

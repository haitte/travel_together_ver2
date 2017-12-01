<?php
// Composer: "fzaninotto/faker": "v1.4.0"
use Illuminate\Database\Seeder;
use App\PostPlan;
use App\location;
use App\User;
class ItemsTableSeeder extends Seeder
{
    public function run(){
        $faker= Faker\Factory::create();

        location::truncate();
        PostPlan::truncate();
        User::truncate();
        foreach(range(1,30) as $index){
            location::create([
                'location_name'=>$faker->city,
                'url'=>$faker->imageUrl(300,200)
            ]);
            PostPlan::create([
                'user_id'=>$faker->numberBetween(1, 30),
                'location_id'=>$faker->numberBetween(1, 30),
                'des' => $faker->text($maxNbChars = 100) 
            ]);
            User::create([
                'name' => $faker->userName,
                'email' => $faker->email,
                'password'=>$faker->password
            ]);
        }
    }
}

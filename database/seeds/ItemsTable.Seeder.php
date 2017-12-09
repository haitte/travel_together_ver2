<?php
// Composer: "fzaninotto/faker": "v1.4.0"
use Illuminate\Database\Seeder;
use App\PostPlan;
use App\location;
use App\User;
use App\Plan;
use App\Survey;
class ItemsTableSeeder extends Seeder
{
    public function run(){
        $faker= Faker\Factory::create();

        location::truncate();
        PostPlan::truncate();
        User::truncate();
        Plan::truncate();
        foreach(range(1,30) as $index){
            location::create([
                'location_name'=>$faker->city,
                'url'=>$faker->imageUrl(300,200)
            ]);
            User::create([
                'name' => $faker->userName,
                'email' => $faker->email,
                'password'=>$faker->password
            ]);
            $dep_date=$faker->dateTimeThisDecade->format('Y-m-d');
            $dep_date=$faker->dateTimeThisDecade->format('Y-m-d');
            Plan::create([
                'user_id'=>$faker->numberBetween(1, 15),
                'plan_name'=>$faker->numerify('Plan ###'),
                'plan_image'=>$faker->imageUrl(300,200),
                'description'=>$faker->text($maxNbChars = 100),
                'departure_time'=>$faker->dateTimeBetween('+0 days', '+1 week')->format('Y-m-d'),
                'arrive_time'=>$faker->dateTimeBetween('+1 week', '+2 week')->format('Y-m-d'),
                'departure_name'=>$faker->randomElement(['Dublin','Paris','Munich']),
                'destination_name'=>$faker->randomElement(['Dublin','Paris','Munich']),
                'group_num'=>$faker->numberBetween(1, 5)
            ]);
            Survey::create([
                'trip_id'=>$faker->unique()->numberBetween(1, 30),
                'first_p'=>$faker->randomElement(['option1','option2','option3','option4','option5']),
                'second_p'=>$faker->randomElement(['option1','option2','option3','option4','option5']),
                'third_p'=>$faker->randomElement(['option1','option2','option3','option4','option5']),
                'created_at' => $faker->dateTimeThisYear($max = '+1 year')->format('Y-m-d H:i:s'),
                'updated_at' => $faker->dateTimeThisYear($max = '+1 year')->format('Y-m-d H:i:s')
            ]);
        }
    }
}

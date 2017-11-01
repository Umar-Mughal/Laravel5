<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\admin_area\Project::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'intro' => $faker->sentence,
        'description'=> $faker->paragraph,
        'category' => $faker->name,
        'client_name' => $faker->name,
        'start_date' => $faker->date,
        'end_date' => $faker->date,

    ];
});

$factory->define(App\admin_area\Product::class, function (Faker $faker) {
    static $password;

    return [
        'price' => $faker->numberBetween(0,1000),
        'image' => 'product_img_17.jpg',
        'code' => $faker->numberBetween(0,100),
        'quantity' => $faker->numberBetween(0,100),
        'category_id' =>19,
        'en' => ['name'=>$faker->sentence, 'description'=>$faker->paragraph],
        'ur' => ['name'=>' شاپ می پراڈکٹ', 'description'=>'ایک طویل عرصے سے قائم حقیقت یہ ہے کہ ایک صفحے کے قابل مطالعہ مواد متن کے بیرونی شکل یا صفحے پر پیراگراف کے فارم پر توجہ مرکوز کرنے سے ریڈر کو مشغول کرے گا. لہذا، Lorem ipsum کے طریقہ کار استعمال کیا جاتا ہے کیونکہ اس کے بجائے "متن وہاں موجود مواد ہے، یہاں متن کے مواد" کے بجائے یہ پڑھنے کے قابل متن کی طرح لگ رہا ہے کا استعمال کرنے کے بجائے قدرتی طور پر کسی حد تک کردار کی تقسیم دیتا ہے. بہت سے ڈیسک ٹاپ پبلشنگ اور ایڈیٹنگ سوفٹ ویئر'],
    ];
});

$factory->define(App\admin_area\Post::class, function (Faker $faker) {
    static $password;

    return [
        'title' => $faker->sentence,
        'sub_title'=> $faker->sentence,
        'slug' => $faker->slug,
        'body' => $faker->Paragraph,
        'status' => $faker->boolean,
        'posted_by' => $faker->numberBetween(0,100),
        'image' => $faker->word,
        'like' => $faker->numberBetween(0,100),
        'dislike' => $faker->numberBetween(0,100),

    ];
});

$factory->define(App\admin_area\Admin::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'status' => $faker->boolean,
        'phone' => $faker->phonenumber,
        'remember_token' => str_random(10),
    ];
});

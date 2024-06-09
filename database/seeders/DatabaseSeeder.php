<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
        ]);
        Listing::factory(6)->create([
            'user_id'=> $user->id,
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Listing::create([
        //     "title"=> "Software Engineer",
        //     "tags"=> "IT, Developer, Full-stack",
        //     "company"=> "Tech Innovators Inc.",
        //     "location"=> "Jakarta, Indonesia",
        //     "email"=> "hr@techinnovators.com",
        //     "website"=> "www.techinnovators.com",
        //     "description"=> "We are looking for a passionate Software Engineer to design, develop, and install software solutions. Responsibilities include gathering user requirements, defining system functionality, and writing code in various languages."
        // ]);
        // Listing::create([
        //     "title"=> "Digital Marketing Specialist",
        //     "tags"=> "Marketing, SEO, Social Media",
        //     "company"=> "Marketing Wizards",
        //     "location"=> "Bandung, Indonesia",
        //     "email"=> "jobs@marketingwizards.com",
        //     "website"=> "www.marketingwizards.com",
        //     "description"=> "Marketing Wizards is seeking a Digital Marketing Specialist to help us promote our products and services through digital channels. The ideal candidate will have experience in SEO, social media marketing, and content creation."
        // ]);
    }
}

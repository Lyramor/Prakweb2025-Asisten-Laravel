<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat 5 Users
        $user1 = User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
        ]);

        $user2 = User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => bcrypt('password'),
        ]);

        $user3 = User::create([
            'name' => 'Mike Johnson',
            'email' => 'mike@example.com',
            'password' => bcrypt('password'),
        ]);

        $user4 = User::create([
            'name' => 'Sarah Williams',
            'email' => 'sarah@example.com',
            'password' => bcrypt('password'),
        ]);

        $user5 = User::create([
            'name' => 'David Brown',
            'email' => 'david@example.com',
            'password' => bcrypt('password'),
        ]);

        // Membuat 1 Category
        $category1 = Category::create([
            'name' => 'Kesehatan',
        ]);

        // Membuat 1 Post
        Post::create([
            'title' => 'Manfaat Olahraga Pagi untuk Kesehatan',
            'slug' => 'manfaat-olahraga-pagi-untuk-kesehatan',
            'excerpt' => 'Olahraga pagi memiliki banyak manfaat untuk kesehatan tubuh dan pikiran.',
            'body' => 'Olahraga pagi adalah salah satu kebiasaan terbaik yang bisa Anda lakukan untuk kesehatan. Dengan berolahraga di pagi hari, tubuh akan lebih segar sepanjang hari. Manfaatnya antara lain meningkatkan metabolisme, memperbaiki kualitas tidur, mengurangi stres, dan meningkatkan mood. Cobalah untuk mulai dengan olahraga ringan seperti jogging, jalan santai, atau yoga selama 30 menit setiap pagi.',
            'user_id' => $user1->id,
            'category_id' => $category1->id,
        ]);
    }
}

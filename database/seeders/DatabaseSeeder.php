<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User 1 (Lauren)
        $user1 = User::create([
            'name' => 'Lauren Anthony Calderon',
            'email' => 'laurenanthonycalderon@gmail.com',
            'password' => Hash::make('lauren_11'),
        ]);

        Book::create([
            'user_id' => $user1->id,
            'title' => 'Clean Code',
            'author' => 'Robert C. Martin',
            'status' => 'reading',
            'rating' => 5,
        ]);

        Book::create([
            'user_id' => $user1->id,
            'title' => 'The Pragmatic Programmer',
            'author' => 'Andrew Hunt and David Thomas',
            'status' => 'to-read',
            'rating' => null,
        ]);

        // User 2 (Mhyco)
        $user2 = User::create([
            'name' => 'Mhyco Faulve',
            'email' => 'mhycofaulve@gmail.com',
            'password' => Hash::make('mhyco_11'),
        ]);

        Book::create([
            'user_id' => $user2->id,
            'title' => 'Refactoring',
            'author' => 'Martin Fowler',
            'status' => 'finished',
            'rating' => 4,
        ]);

        // User 3 (Kurt)
        $user3 = User::create([
            'name' => 'Kurt John Caraig',
            'email' => 'kurtcaraig@gmail.com',
            'password' => Hash::make('kurt_11'),
        ]);

        Book::create([
            'user_id' => $user3->id,
            'title' => 'Design Patterns',
            'author' => 'Erich Gamma',
            'status' => 'reading',
            'rating' => 5,
        ]);
    }
}
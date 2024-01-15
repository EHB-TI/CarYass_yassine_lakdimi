<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Contact;
use App\Models\FaqCategory;
use App\Models\Faq;
use App\Models\Cars;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $adminUser = User::where('email', 'admin@ehb.be')->first();

        if (!$adminUser) {
            User::create([
                'name' => 'admin',
                'email' => 'admin@ehb.be',
                'password' => Hash::make('Password!321'),
                'typeUser' => '1',
            ]);
        }

        $contact = Contact::where('email', 'yassine@example.com')->first();

        if (!$contact) {
            Contact::create([
                'name' => 'yassine',
                'email' => 'yassine@example.com',
                'subject' => 'Message',
                'message' => 'hello world',
            ]);
        }

        $faqCategory = FaqCategory::where('name', 'Default Category')->first();

        if (!$faqCategory) {
            FaqCategory::create([
                'name' => 'Default Category',
            ]);
        }

        // Ajoute une FAQ par défaut
        $faq = Faq::where('question', 'Whats the question?')->first();

        if (!$faq) {
            Faq::create([
                'category_id' => FaqCategory::where('name', 'Default Category')->first()->id,
                'question' => 'Whats the question?',
                'answer' => 'how can rent a car',
            ]);
        }
        $car = Cars::where('brand', 'Default Brand')->first();

if (!$car) {
   
    $imagePath = 'images/car-12.jpg';
    $storagePath = 'cars/' . basename($imagePath);
    Storage::copy($imagePath, $storagePath);

    Cars::create([
        'brand' => 'Audi',
        'price' => 20000.00,
        'mileage' => 50000,
        'transmission' => 'Automatic',
        'seats' => 5,
        'image' => $storagePath, 
        'rented' => false,
    ]);
}

        // Ajoute un utilisateur avec typeUser = 0
        $userType0 = User::where('email', 'yassine@example.com')->first();

        if (!$userType0) {
            User::create([
                'name' => 'yassine',
                'email' => 'yassine@example.com',
                'password' => Hash::make('UserPassword!321'),
                'typeUser' => '0',
            ]);
        }

        // Vous pouvez ajouter d'autres données par défaut si nécessaire

    }
}

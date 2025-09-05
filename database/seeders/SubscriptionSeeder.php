<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscription;
use App\Models\User;

class SubscriptionSeeder extends Seeder
{
    public function run(): void
    {
    \App\Models\Subscription::factory(10)->create();
    }
}

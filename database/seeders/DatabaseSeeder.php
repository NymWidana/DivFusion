<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Feature;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

Role::create(['name' => 'admin']);
Role::create(['name' => 'customer']);

Permission::create(['name' => 'manage users']);
Permission::create(['name' => 'view products']);
Permission::create(['name' => 'purchase products']);

$adminRole = Role::findByName('admin');
$customerRole = Role::findByName('customer');

$adminRole->givePermissionTo('manage users');
$customerRole->givePermissionTo(['view products', 'purchase products']);


$useradmin = User::factory()->create([
    'name' => 'Widi Widiana',
    'email' => 'widan0001@gmail.com',
    'password' => 'widana100%'
]);
$useradmin->assignRole('admin');
$usercustomer = User::factory()->create([
    'name' => 'Widi',
    'email' => 'widan0002@gmail.com',
    'password' => 'widana100%'
]);
$usercustomer->assignRole('customer');

Feature::create([
    'name' => 'static website',
    'description' => 'static',
    'product_id' => 1,
    'icon' => 'fas fa-globe'
]);
Feature::create([
    'name' => 'basic template',
    'description' => 'basic',
    'product_id' => 1,
    'icon' => 'fas fa-file-alt'
]);
Feature::create([
    'name' => 'up to 5 pages',
    'description' => '5 pages',
    'product_id' => 1,
    'icon' => 'fas fa-file'
]);
Feature::create([
    'name' => 'responsive design',
    'description' => 'responsive',
    'product_id' => 1,
    'icon' => 'fas fa-mobile-alt'
]);
Feature::create([
    'name' => 'free training and consultation',
    'description' => 'free training and consultation',
    'product_id' => 1,
    'icon' => 'fas fa-chalkboard-teacher'
]);

Feature::create([
    'name' => 'dynamic website',
    'description' => 'dynamic',
    'product_id' => 2,
    'icon' => 'fas fa-laptop-code'
]);
Feature::create([
    'name' => 'professional template',
    'description' => 'professional',
    'product_id' => 2,
    'icon' => 'fas fa-briefcase'
]);
Feature::create([
    'name' => 'up to 10 pages',
    'description' => '10 pages',
    'product_id' => 2,
    'icon' => 'fas fa-file'
]);
Feature::create([
    'name' => 'responsive design',
    'description' => 'responsive',
    'product_id' => 2,
    'icon' => 'fas fa-mobile-alt'
]);
Feature::create([
    'name' => 'blog setup',
    'description' => 'blog setup',
    'product_id' => 2,
    'icon' => 'fas fa-blog'
]);
Feature::create([
    'name' => 'free training and consultation',
    'description' => 'free training and consultation',
    'product_id' => 2,
    'icon' => 'fas fa-chalkboard-teacher'
]);

Feature::create([
    'name' => 'full custom website',
    'description' => 'full custom',
    'product_id' => 3,
    'icon' => 'fas fa-code'
]);
Feature::create([
    'name' => 'custom design',
    'description' => 'custom',
    'product_id' => 3,
    'icon' => 'fas fa-paint-brush'
]);
Feature::create([
    'name' => 'unlimited pages',
    'description' => 'unlimited pages',
    'product_id' => 3,
    'icon' => 'fas fa-infinity'
]);
Feature::create([
    'name' => 'responsive design',
    'description' => 'responsive',
    'product_id' => 3,
    'icon' => 'fas fa-mobile-alt'
]);
Feature::create([
    'name' => 'content management system',
    'description' => 'content management system',
    'product_id' => 3,
    'icon' => 'fas fa-cogs'
]);
Feature::create([
    'name' => 'ongoing maintenance and support',
    'description' => 'ongoing maintenance and support',
    'product_id' => 3,
    'icon' => 'fas fa-tools'
]);
Feature::create([
    'name' => 'free training and consultation',
    'description' => 'free training and consultation',
    'product_id' => 3,
    'icon' => 'fas fa-chalkboard-teacher'
]);
        

        Product::create([
            'title' => 'Standard Package',
            'description' => 'Perfect for small businesses looking to establish an online presence.',
        ]);
        Product::create([
            'title' => 'Professional Package',
            'description' => 'Ideal for growing businesses needing dynamic features and e-commerce integration.',
        ]);
        Product::create([
            'title' => 'Premium Package',
            'description' => 'Best for established businesses seeking a comprehensive, custom online solution with advanced features.',
        ]);

    }
}

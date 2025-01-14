<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Feature;
use App\Models\Order;
use App\Models\Review;
use App\Models\Status;
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

Feature::create([
    'name' => 'static website',
    'description' => 'static',
    'icon' => 'fas fa-globe'
])->products()->attach(1);
Feature::create([
    'name' => 'basic template',
    'description' => 'basic',
    'icon' => 'fas fa-file-alt'
])->products()->attach(1);
Feature::create([
    'name' => 'up to 5 pages',
    'description' => '5 pages',
    'icon' => 'fas fa-file'
])->products()->attach(1);
Feature::create([
    'name' => 'responsive design',
    'description' => 'responsive',
    'icon' => 'fas fa-mobile-alt'
])->products()->attach(1);
Feature::create([
    'name' => 'free training and consultation',
    'description' => 'free training and consultation',
    'icon' => 'fas fa-chalkboard-teacher'
])->products()->attach(1);

Feature::create([
    'name' => 'dynamic website',
    'description' => 'dynamic',
    'icon' => 'fas fa-laptop-code'
])->products()->attach(2);
Feature::create([
    'name' => 'professional template',
    'description' => 'professional',
    'icon' => 'fas fa-briefcase'
])->products()->attach(2);
Feature::create([
    'name' => 'up to 10 pages',
    'description' => '10 pages',
    'icon' => 'fas fa-file'
])->products()->attach(2);
Feature::create([
    'name' => 'blog setup',
    'description' => 'blog setup',
    'icon' => 'fas fa-blog'
])->products()->attach(2);
Feature::create([
    'name' => 'free training and consultation',
    'description' => 'free training and consultation',
    'icon' => 'fas fa-chalkboard-teacher'
])->products()->attach(2);

Feature::create([
    'name' => 'full custom website',
    'description' => 'full custom',
    'icon' => 'fas fa-code'
])->products()->attach(3);
Feature::create([
    'name' => 'custom design',
    'description' => 'custom',
    'icon' => 'fas fa-paint-brush'
])->products()->attach(3);
Feature::create([
    'name' => 'unlimited pages',
    'description' => 'unlimited pages',
    'icon' => 'fas fa-infinity'
])->products()->attach(3);

Feature::create([
    'name' => 'content management system',
    'description' => 'content management system',
    'icon' => 'fas fa-cogs'
])->products()->attach(3);
Feature::create([
    'name' => 'ongoing maintenance and support',
    'description' => 'ongoing maintenance and support',
    'icon' => 'fas fa-tools'
])->products()->attach(3);
Feature::create([
    'name' => 'free training and consultation',
    'description' => 'free training and consultation',
    'icon' => 'fas fa-chalkboard-teacher'
])->products()->attach(3);

    Order::create([
        "orderer_name" => "widana", 
        "orderer_phone_number" => "087758701901",
        "message" => "hello fellas i want a standard website done in 2 month ",
        "user_id" => 1,
        "status" => "created",
    ])->products()->attach(1);
    Order::create([
        "orderer_name" => "widana", 
        "orderer_phone_number" => "087758701901",
        "message" => "hello fellas i want a professional website done in 2 month ",
        "user_id" => 2,
        "status" => "created",
    ])->products()->attach(2);
    Order::create([
        "orderer_name" => "widana", 
        "orderer_phone_number" => "087758701901",
        "message" => "hello fellas i want a premium website done in 2 month ",
        "user_id" => 2,
        "status" => "created",
    ])->products()->attach(3);

    Review::create([
            "text" => "DivFusion made the entire process of creating our website incredibly smooth and hassle-free. The platform is intuitive, and the customization options allowed us to tailor our site exactly to our needs. The support team was always available to assist us with any questions or issues. Highly recommended!",
            "user_id" => 1
        ]);
            Review::create([
            "text" => "DivFusion made the entire process of creating our website incredibly smooth and hassle-free. The platform is intuitive, and the customization options allowed us to tailor our site exactly to our needs. The support team was always available to assist us with any questions or issues. Highly recommended!",
            "user_id" => 1
        ]);
            Review::create([
            "text" => "DivFusion made the entire process of creating our website incredibly smooth and hassle-free. The platform is intuitive, and the customization options allowed us to tailor our site exactly to our needs. The support team was always available to assist us with any questions or issues. Highly recommended!",
            "user_id" => 1
        ]);
            Review::create([
            "text" => "DivFusion made the entire process of creating our website incredibly smooth and hassle-free. The platform is intuitive, and the customization options allowed us to tailor our site exactly to our needs. The support team was always available to assist us with any questions or issues. Highly recommended!",
            "user_id" => 1
        ]);
    }
}

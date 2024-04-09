<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        // Seed the roles table with initial data
        $this->seedRoles();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }

    /**
     * Seed the roles table with initial data.
     *
     * @return void
     */
    private function seedRoles()
    {
        // Define initial roles data
        $roles = [
            ['name' => 'super_admin'],
            ['name' => 'admin'],
            ['name' => 'affiliate'],
            ['name' => 'social_media_ambassador'],
            // Add more roles as needed
        ];

        // Insert roles into the database
        foreach ($roles as $role) {
            \App\Models\Role::create($role);
        }
    }
};

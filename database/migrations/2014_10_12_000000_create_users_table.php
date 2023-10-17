<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Идентификатор пользователя
            $table->string('first_name'); // Имя
            $table->string('last_name'); // Фамилия
            $table->string('username')->unique(); // Логин
            $table->string('password'); // Пароль (перед сохранением, не забудьте его хешировать)
            $table->string('email')->unique(); // Электронная почта
            $table->timestamp('registration_date')->nullable(); // Дата регистрации
            $table->timestamp('last_login_date')->nullable(); // Дата последнего входа
            $table->string('profile_picture')->nullable(); // Фотография профиля
            $table->text('about')->nullable(); // Описание
            $table->boolean('verified_badge')->default(false); // Значок верифицированного пользователя
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

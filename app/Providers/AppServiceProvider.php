<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function($notifiable,$url){
            return (new MailMessage)->subject('Verificar cuenta')
            ->line('Tu cuenta esta casi lista, solo es necesario que verifiques tu cuenta para que puedas empezar a usarla')
            ->action('Confirmar cuenta', $url)
            ->line('Si no creaste esta cuenta puedes ignorar este correo');
        });
    }
}

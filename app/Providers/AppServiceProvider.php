<?php

namespace App\Providers;

use App\Support\Tenancy\TenantContext;
use Carbon\CarbonImmutable;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;
use Livewire\Livewire;
use Tests\Fixtures\Modules\Probe\Livewire\ProbeCounter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Scoped: satu instance per request/job; tidak bocor ke lifecycle berikutnya.
        $this->app->scoped(
            TenantContext::class,
            fn (): TenantContext => new TenantContext,
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Namespace view untuk setiap modul.
        foreach ([
            'Admin',
            'Catalog',
            'Ordering',
            'Payments',
            'Kitchen',
            'Reporting',
        ] as $module) {
            View::addNamespace(
                strtolower($module),
                app_path("Modules/{$module}/resources/views"),
            );
        }

        // Namespace dan komponen Livewire untuk pengujian.
        View::addNamespace(
            'probe',
            base_path('tests/Fixtures/Modules/Probe/resources/views'),
        );

        Livewire::component('probe::counter', ProbeCounter::class);

        $this->configureDefaults();
        $this->configureRateLimiters();
    }

    /**
     * Rate limiter untuk endpoint publik sensitif.
     */
    protected function configureRateLimiters(): void
    {
        RateLimiter::for(
            'qr-scan',
            fn (Request $request): Limit =>
                Limit::perMinute(30)->by($request->ip() ?? 'unknown'),
        );

        // Webhook pembayaran: deduplikasi dan signature tetap diperlukan.
        RateLimiter::for(
            'qris-webhook',
            fn (Request $request): Limit =>
                Limit::perMinute(120)->by($request->ip() ?? 'unknown'),
        );
    }

    /**
     * Configure default behaviors for production-ready applications.
     */
    protected function configureDefaults(): void
    {
        Date::use(CarbonImmutable::class);

        DB::prohibitDestructiveCommands(
            app()->isProduction(),
        );

        Password::defaults(
            fn (): ?Password => app()->isProduction()
                ? Password::min(12)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
                : null,
        );
    }
}
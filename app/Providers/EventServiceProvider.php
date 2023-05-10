<?php

namespace App\Providers;

use App\Models\Media;
use App\Models\NanniesBackground;
use App\Models\NanniesComment;
use App\Models\Nanny;
use App\Observers\MediaObserver;
use App\Observers\NanniesBackgroundObserver;
use App\Observers\NanniesCommentObserver;
use App\Observers\NannyObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    protected $observers = [
        Nanny::class => [NannyObserver::class],
        NanniesBackground::class => [NanniesBackgroundObserver::class],
        NanniesComment::class => [NanniesCommentObserver::class],
        Media::class => [MediaObserver::class],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}

<?php

namespace App\Observers;

use App\Models\Media;
use Illuminate\Support\Facades\Auth;

class MediaObserver
{
    /**
     * Handle the Nanny "creating" event.
     */
    public function creating(Media $media): void
    {
        $media->added_by = Auth::guard('admin')->user()->id;
    }

    /**
     * Handle the Media "created" event.
     */
    public function created(Media $media): void
    {
        //
    }

    /**
     * Handle the Media "updated" event.
     */
    public function updated(Media $media): void
    {
        //
    }

    /**
     * Handle the Media "deleted" event.
     */
    public function deleted(Media $media): void
    {
        //
    }

    /**
     * Handle the Media "restored" event.
     */
    public function restored(Media $media): void
    {
        //
    }

    /**
     * Handle the Media "force deleted" event.
     */
    public function forceDeleted(Media $media): void
    {
        //
    }
}

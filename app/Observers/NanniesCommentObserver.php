<?php

namespace App\Observers;

use App\Models\NanniesComment;
use Illuminate\Support\Facades\Auth;

class NanniesCommentObserver
{
    /**
     * Handle the Nanny "creating" event.
     */
    public function creating(NanniesComment $nanniesComment): void
    {
        $nanniesComment->added_by = Auth::guard('admin')->user()->id;
    }

    /**
     * Handle the NanniesComment "created" event.
     */
    public function created(NanniesComment $nanniesComment): void
    {
        //
    }

    /**
     * Handle the NanniesComment "updated" event.
     */
    public function updated(NanniesComment $nanniesComment): void
    {
        //
    }

    /**
     * Handle the NanniesComment "deleted" event.
     */
    public function deleted(NanniesComment $nanniesComment): void
    {
        //
    }

    /**
     * Handle the NanniesComment "restored" event.
     */
    public function restored(NanniesComment $nanniesComment): void
    {
        //
    }

    /**
     * Handle the NanniesComment "force deleted" event.
     */
    public function forceDeleted(NanniesComment $nanniesComment): void
    {
        //
    }
}

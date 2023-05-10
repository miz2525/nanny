<?php

namespace App\Observers;

use App\Models\NanniesBackground;
use Illuminate\Support\Facades\Auth;

class NanniesBackgroundObserver
{
    /**
     * Handle the Nanny "creating" event.
     */
    public function creating(NanniesBackground $nanniesBackground): void
    {
        $nanniesBackground->added_by = Auth::guard('admin')->user()->id;
        $nanniesBackground->created_at = date('Y-m-d');
    }

    /**
     * Handle the NanniesBackground "created" event.
     */
    public function created(NanniesBackground $nanniesBackground): void
    {
        //
    }

    /**
     * Handle the NanniesBackground "updated" event.
     */
    public function updated(NanniesBackground $nanniesBackground): void
    {
        $nanniesBackground->added_by = Auth::guard('admin')->user()->id;
        $nanniesBackground->updated_at = date('Y-m-d');
    }

    /**
     * Handle the NanniesBackground "deleted" event.
     */
    public function deleted(NanniesBackground $nanniesBackground): void
    {
        //
    }

    /**
     * Handle the NanniesBackground "restored" event.
     */
    public function restored(NanniesBackground $nanniesBackground): void
    {
        //
    }

    /**
     * Handle the NanniesBackground "force deleted" event.
     */
    public function forceDeleted(NanniesBackground $nanniesBackground): void
    {
        //
    }
}

<?php

namespace App\Observers;

use App\Models\Nanny;
use Illuminate\Support\Facades\Auth;

class NannyObserver
{
    
    /**
     * Handle the Nanny "creating" event.
     */
    public function creating(Nanny $nanny): void
    {
        $nanny->added_by = Auth::guard('admin')->user()->id;
        $nanny->created_at = date('Y-m-d');
    }

    /**
     * Handle the Nanny "created" event.
     */
    public function created(Nanny $nanny): void
    {
        //
    }

    /**
     * Handle the Nanny "updated" event.
     */
    public function updated(Nanny $nanny): void
    {
        $nanny->added_by = Auth::guard('admin')->user()->id;
        $nanny->updated_at = date('Y-m-d');
    }

    /**
     * Handle the Nanny "deleted" event.
     */
    public function deleted(Nanny $nanny): void
    {
        //
    }

    /**
     * Handle the Nanny "restored" event.
     */
    public function restored(Nanny $nanny): void
    {
        //
    }

    /**
     * Handle the Nanny "force deleted" event.
     */
    public function forceDeleted(Nanny $nanny): void
    {
        //
    }
}

<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Historia;
use Illuminate\Auth\Access\HandlesAuthorization;

class HistoriaPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Historia');
    }

    public function view(AuthUser $authUser, Historia $historia): bool
    {
        return $authUser->can('View:Historia');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Historia');
    }

    public function update(AuthUser $authUser, Historia $historia): bool
    {
        return $authUser->can('Update:Historia');
    }

    public function delete(AuthUser $authUser, Historia $historia): bool
    {
        return $authUser->can('Delete:Historia');
    }

    public function restore(AuthUser $authUser, Historia $historia): bool
    {
        return $authUser->can('Restore:Historia');
    }

    public function forceDelete(AuthUser $authUser, Historia $historia): bool
    {
        return $authUser->can('ForceDelete:Historia');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Historia');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Historia');
    }

    public function replicate(AuthUser $authUser, Historia $historia): bool
    {
        return $authUser->can('Replicate:Historia');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Historia');
    }

}
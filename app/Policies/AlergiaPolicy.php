<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Alergia;
use Illuminate\Auth\Access\HandlesAuthorization;

class AlergiaPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Alergia');
    }

    public function view(AuthUser $authUser, Alergia $alergia): bool
    {
        return $authUser->can('View:Alergia');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Alergia');
    }

    public function update(AuthUser $authUser, Alergia $alergia): bool
    {
        return $authUser->can('Update:Alergia');
    }

    public function delete(AuthUser $authUser, Alergia $alergia): bool
    {
        return $authUser->can('Delete:Alergia');
    }

    public function restore(AuthUser $authUser, Alergia $alergia): bool
    {
        return $authUser->can('Restore:Alergia');
    }

    public function forceDelete(AuthUser $authUser, Alergia $alergia): bool
    {
        return $authUser->can('ForceDelete:Alergia');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Alergia');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Alergia');
    }

    public function replicate(AuthUser $authUser, Alergia $alergia): bool
    {
        return $authUser->can('Replicate:Alergia');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Alergia');
    }

}
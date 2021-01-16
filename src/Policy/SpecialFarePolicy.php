<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\SpecialFare;
use Authorization\IdentityInterface;

/**
 * SpecialFares policy
 */
class SpecialFarePolicy
{
    public function canAdd(IdentityInterface $user, SpecialFare $specialFare)
    {
        // All logged in users can create articles.
        return $this->isAdmin($user);
    }

    public function canEdit(IdentityInterface $user, SpecialFare $specialFare)
    {
        // logged in users can edit their own articles.
        return $this->isAdmin($user);
    }

    public function canDelete(IdentityInterface $user, SpecialFare  $specialFare)
    {
        // logged in users can delete their own articles.
        return $this->isAdmin($user);
    }

    protected function isAdmin(IdentityInterface $user)
    {
        return $user->is_admin;
    }

}

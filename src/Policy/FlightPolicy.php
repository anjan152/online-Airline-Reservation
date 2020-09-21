<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Flight;
use Authorization\IdentityInterface;

/**
 * Flight policy
 */
class FlightPolicy
{
    public function canAdd(IdentityInterface $user, Flight $flight)
    {
        // All logged in users can create articles.
        return $this->isAdmin($user);
    }

    public function canEdit(IdentityInterface $user, Flight $flight)
    {
        // logged in users can edit their own articles.
        return $this->isAdmin($user);
    }

    public function canDelete(IdentityInterface $user, Flight $flight)
    {
        // logged in users can delete their own articles.
        return $this->isAdmin($user);
    }

    protected function isAdmin(IdentityInterface $user)
    {
        return $user->is_admin;
    }

}

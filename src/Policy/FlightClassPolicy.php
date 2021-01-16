<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\FlightClass;
use Authorization\IdentityInterface;

/**
 * FlightClass policy
 */
class FlightClassPolicy
{
    public function canAdd(IdentityInterface $user, FlightClass $flightClass)
    {
        // All logged in users can create articles.
        return $this->isAdmin($user);
    }

    public function canEdit(IdentityInterface $user, FlightClass $flightClass)
    {
        // logged in users can edit their own articles.
        return $this->isAdmin($user);
    }

    public function canDelete(IdentityInterface $user, FlightClass $flightClass)
    {
        // logged in users can delete their own articles.
        return $this->isAdmin($user);
    }

    protected function isAdmin(IdentityInterface $user)
    {
        return $user->is_admin;
    }

}

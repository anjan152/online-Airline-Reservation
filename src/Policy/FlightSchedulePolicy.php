<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\FlightSchedule;
use Authorization\IdentityInterface;

/**
 * FlightSchedule policy
 */
class FlightSchedulePolicy

{
    public function canAdd(IdentityInterface $user, FlightSchedule $flightSchedule)
    {
        // All logged in users can create articles.
        return $this->isAdmin($user);
    }

    public function canEdit(IdentityInterface $user, FlightSchedule $flightSchedule)
    {
        // logged in users can edit their own articles.
        return $this->isAdmin($user);
    }

    public function canDelete(IdentityInterface $user, FlightSchedule $flightSchedule)
    {
        // logged in users can delete their own articles.
        return $this->isAdmin($user);
    }

    protected function isAdmin(IdentityInterface $user)
    {
        return $user->is_admin;
    }

}

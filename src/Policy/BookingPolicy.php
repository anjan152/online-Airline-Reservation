<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Booking;
use Authorization\IdentityInterface;

/**
 * Bookings policy
 */
class BookingPolicy
{
    public function canAdd(IdentityInterface $user, Booking $booking)
    {
        // All logged in users can create articles.
        return $this->isAdmin($user);
    }

    public function canEdit(IdentityInterface $user, Booking $booking)
    {
        // logged in users can edit their own articles.
        return $this->isAdmin($user);
    }

    public function canDelete(IdentityInterface $user, Booking $booking)
    {
        // logged in users can delete their own articles.
        return $this->isAdmin($user);
    }

    protected function isAdmin(IdentityInterface $user)
    {
        return $user->is_admin;
    }

}

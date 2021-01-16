<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Bookings;
use Authorization\IdentityInterface;

/**
 * Bookings policy
 */
class BookingsPolicy
{
    public function canAdd(IdentityInterface $user, Bookings $bookings)
    {
        // All logged in users can create articles.
        return $this->isAdmin($user);
    }

    public function canEdit(IdentityInterface $user, Bookings $bookings)
    {
        // logged in users can edit their own articles.
        return $this->isAdmin($user);
    }

    public function canDelete(IdentityInterface $user, Bookings $bookings)
    {
        // logged in users can delete their own articles.
        return $this->isAdmin($user);
    }

    protected function isAdmin(IdentityInterface $user)
    {
        return $user->is_admin;
    }

}

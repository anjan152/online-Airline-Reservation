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
    /**
     * Check if $user can create Bookings
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Bookings $bookings
     * @return bool
     */
    public function canCreate(IdentityInterface $user, Bookings $bookings)
    {
    }

    /**
     * Check if $user can update Bookings
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Bookings $bookings
     * @return bool
     */
    public function canUpdate(IdentityInterface $user, Bookings $bookings)
    {
    }

    /**
     * Check if $user can delete Bookings
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Bookings $bookings
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Bookings $bookings)
    {
    }

    /**
     * Check if $user can view Bookings
     *
     * @param Authorization\IdentityInterface $user The user.
     * @param App\Model\Entity\Bookings $bookings
     * @return bool
     */
    public function canView(IdentityInterface $user, Bookings $bookings)
    {
    }
}

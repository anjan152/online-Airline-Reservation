<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\AircraftType;
use Authorization\IdentityInterface;

/**
 * AircraftTypes policy
 */
class AircraftTypePolicy
{
    
    
        public function canAdd(IdentityInterface $user,  AircraftType $aircraftType)
        {
            // All logged in users can create articles.
            return $this->isAdmin($user);
        }
    
        public function canEdit(IdentityInterface $user,  AircraftType $aircraftType)
        {
            // logged in users can edit their own articles.
            return $this->isAdmin($user);
        }
    
        
        public function canIndex(IdentityInterface $user, AircraftType $aircraftType)
        {
            // logged in users can delete their own articles.
            return $this->isAdmin($user);
        }

        public function canDelete(IdentityInterface $user, AircraftType $aircraftType)
        {
            // logged in users can delete their own articles.
            return $this->isAdmin($user);
        }
    
        protected function isAdmin(IdentityInterface $user)
        {
            return $user->is_admin;
        }
    
    }
    


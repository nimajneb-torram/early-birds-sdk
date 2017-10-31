<?php
/**
 * ProfileInterface.php
 *
 * @author Benjamin MARROT <benjamin.marrot@developpeur-web-tlse.fr>
 * @since 2017-10-23 23:25:48
 * @copyright Copyright (c) 2017, Benjamin MARROT
 */

namespace Nimajneb\EarlyBirdsSdk\Profile;

/**
 * Interface Profile
 * @package Nimajneb\EarlyBirdsSdk\Profile
 */
interface ProfileInterface
{
    /**
     * Identify profile
     *
     * @return ProfileInterface
     */
    public function identify() : ProfileInterface;
}
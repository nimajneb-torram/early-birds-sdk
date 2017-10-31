<?php
/**
 * ProfileResourceInterface.php
 *
 * @author Benjamin MARROT <benjamin.marrot@developpeur-web-tlse.fr>
 * @since 25/10/2017 08:51
 * @copyright Copyright (c) 2017, Benjamin MARROT
 */

namespace Nimajneb\EarlyBirdsSdk\Profile;


/**
 * Interface ProfileResourceInterface
 * @package Nimajneb\EarlyBirdsSdk\Profile
 */
interface ProfileResourceInterface
{
    /**
     * @return ProfileInterface
     */
    public function identifyAnonymousUser() : ProfileInterface;

    /**
     * @param string $profileId
     * @return ProfileInterface
     */
    public function identifyKnwonAnonymousUser(string $profileId) : ProfileInterface;

    /**
     * @param DataSourcesInterface $dataSources
     * @return ProfileInterface
     */
    public function identifyNominativeUser(DataSourcesInterface $dataSources) : ProfileInterface;

    /**
     * @param string $profileId
     * @param DataSourcesInterface $dataSources
     * @return ProfileInterface
     */
    public function identifyKnownNominativeUser(string $profileId, DataSourcesInterface $dataSources) : ProfileInterface;
}
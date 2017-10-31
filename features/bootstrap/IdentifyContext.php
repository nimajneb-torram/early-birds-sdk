<?php
/**
 * IdentifyContext.php
 *
 * @author Benjamin MARROT <benjamin.marrot@developpeur-web-tlse.fr>
 * @since 2017-10-23 23:05:31
 * @copyright Copyright (c) 2017, Benjamin MARROT
 */

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Nimajneb\EarlyBirdsSdk\Profile;


/**
 * Class IdentifyContext
 */
class IdentifyContext implements Context
{
    /** @var Profile\ProfileResourceInterface */
    protected $profileResource;

    /** @var array */
    protected $usersData;


    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

    }

    /**
     * @Given an anonymous user :name
     *
     * @param string $name
     * @return bool
     */
    public function anAnonymousUser(string $name)
    {
        if (isset($this->usersData[$name])) {
            return true;
        }

        $this->usersData[$name] = [];

        return true;
    }

    /**
     * @When I identify the user :name
     * 
     * @param string $name
     */
    public function iIdentifyTheProfile(string $name)
    {

    }

    /**
     * @Then the user profile become an identified profile
     */
    public function theUserProfileBecomeAnIdentifiedProfile()
    {
        \PHPUnit\Framework\Assert::assertInstanceOf(
            Profile\IdentifiedProfile::class,
            $this->profile
        );
    }

    /**
     * @Given a known anonymous user :name on datasource id :datasourceId with original id :originalId
     *
     * @param string $name
     * @param string $datasourceId
     * @param string $originalId
     */
    public function aKnownAnonymousUserOnDatasourceWithEmail(string $name, string $datasourceId, string $originalId)
    {
        if (isset($this->usersData[$name])) {
            throw new InvalidArgumentException(sprintf('User with name "%s" already exists', $name));
        }

        $this->usersData[$name] = [];
    }

    /**
     * @Given a nominative user profile with id :profileId
     */
    public function aNominativeUserProfileWithId($profileId)
    {
        throw new PendingException();
    }
}

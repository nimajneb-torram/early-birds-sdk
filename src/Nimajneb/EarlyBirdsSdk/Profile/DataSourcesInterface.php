<?php
/**
 * DataSourcesInterface.php
 *
 * @author Benjamin MARROT <benjamin.marrot@developpeur-web-tlse.fr>
 * @since 25/10/2017 08:53
 * @copyright Copyright (c) 2017, Benjamin MARROT
 */

namespace Nimajneb\EarlyBirdsSdk\Profile;


/**
 * Interface DataSourcesInterface
 * @package Nimajneb\EarlyBirdsSdk\Profile
 */
interface DataSourcesInterface
{
    /**
     * @param string $dataSourceId
     * @param string $originalId
     * @return DataSourcesInterface
     */
    public function addDataSource(string $dataSourceId, string $originalId) : DataSourcesInterface;

    /**
     * @return array
     */
    public function toArray() : array;
}
<?php
namespace Mrg\Randomquote\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

class QuoteRepository extends Repository
{
    public function createQuery()
    {
        $query = parent::createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);
        return $query;
    }

    /**
     * Finds a random quote from the given UIDs
     *
     * @param array $uids
     * @return \Mrg\Randomquote\Domain\Model\Quote|null
     */
    public function findRandomByUids(array $uids)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->in('uid', $uids)
        );

        $result = $query->execute();
        return $result;
    }
}

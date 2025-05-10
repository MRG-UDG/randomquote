<?php
namespace MRG\Randomquote\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;

class Quote extends AbstractEntity
{
    /**
     * @var string
     */
    protected $quote = '';

    /**
     * @var string
     */
    protected $author = '';

    /**
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image;

    public function getQuote(): string
    {
        return $this->quote;
    }

    public function setQuote(string $quote): void
    {
        $this->quote = $quote;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getImage(): ?FileReference
    {
        return $this->image;
    }

    public function setImage(?FileReference $image): void
    {
        $this->image = $image;
    }
}

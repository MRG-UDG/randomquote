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
    protected $image = null;

    /**
     * @return string
     */
    public function getQuote(): string
    {
        return $this->quote;
    }

    /**
     * @param string $quote
     * @return void
     */
    public function setQuote(string $quote): void
    {
        $this->quote = $quote;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return void
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return FileReference|null
     */
    public function getImage(): ?FileReference
    {
        return $this->image;
    }

    /**
     * @param FileReference|null $image
     * @return void
     */
    public function setImage(?FileReference $image): void
    {
        $this->image = $image;
    }
}

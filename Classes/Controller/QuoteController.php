<?php
namespace MRG\Randomquote\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use MRG\Randomquote\Domain\Repository\QuoteRepository;

class QuoteController extends ActionController
{
    /**
     * @var QuoteRepository
     */
    protected $quoteRepository;

    public function __construct(\MRG\Randomquote\Domain\Repository\QuoteRepository $quoteRepository)
    {
        $this->quoteRepository = $quoteRepository;
    }

    public function showAction(): \Psr\Http\Message\ResponseInterface
    {
        $selectedQuotes = explode(',', (string) $this->settings['quotes']) ?? [];
        if ($selectedQuotes !== []) {
            $randomQuote = $this->quoteRepository->findRandomByUids($selectedQuotes);
            $randomQuote = $randomQuote->toArray();
            if (count($randomQuote) > 1) {
                $randomKey = array_rand($randomQuote);
                $randomQuote = $randomQuote[$randomKey];
            } else {
                $randomQuote = $randomQuote[0];
            }

            $this->view->assign('quote', $randomQuote ?? null);
        }

        return $this->htmlResponse();
    }
}

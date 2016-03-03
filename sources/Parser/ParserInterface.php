<?php

namespace Kolyunya\WikiParser\Parser;

use Kolyunya\WikiParser\Category\CategoryInterface;
use Kolyunya\WikiParser\Filter\FilterInterface;
use Kolyunya\WikiParser\Language\LanguageInterface;
use Kolyunya\WikiParser\Processor\ProcessorInterface;

/**
 * An interface of a generic Wikipedia parser
 * @author Kolyunya
 */
interface ParserInterface
{
    /**
     * Sets a language to parse
     */
    public function setLanguage(LanguageInterface $language);

    /**
     * Sets a category to parse
     * @param $category Category
     */
    public function setCategory(CategoryInterface $category);

    /**
     * Sets category title to parse
     * @param $categoryTitle Category title
     */
    public function setCategoryTitle($categoryTitle);

    /**
     * Adds a filter to the parser
     * @param FilterInterface $filter
     */
    public function addFilter(FilterInterface $filter);

    /**
     * Adds a processor to the parser
     * @param ProcessorInterface $processor
     */
    public function addProcessor(ProcessorInterface $processor);

    /**
     * Perform actual parsing
     */
    public function parse();
}

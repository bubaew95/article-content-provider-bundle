<?php

namespace CarCasCarSkillboxSymfony\ArticleContentProviderBundle;

interface WordDecoratorInterface
{
    /**
     * @param string $word
     * @param bool $isBold
     * @return string
     */
    public function decorator(string $word, bool $isBold = true): string;
}
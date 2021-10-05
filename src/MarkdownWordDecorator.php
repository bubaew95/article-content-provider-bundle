<?php

namespace CarCasCarSkillboxSymfony\ArticleContentProviderBundle;

class MarkdownWordDecorator implements WordDecoratorInterface
{
    public function decorator(string $word, bool $isBold = true) : string
    {
        $marker = $isBold ? '**' : '*';
        return $marker . $word . $marker;
    }
}
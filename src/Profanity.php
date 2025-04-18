<?php

namespace Xavizera\Profanity;

class Profanity
{
    protected array $words = [];

    protected array $languages;

    public function __construct(array $languages = ['en'])
    {
        $this->languages = $languages;
        $this->loadWords();
    }

    public function loadWords()
    {
        foreach ($this->languages as $lang) {
            $words = include __DIR__."/../resources/data/{$lang}.php";
            $this->words = array_flip($words);
        }
    }

    public function check(string $text): bool
    {
        $words = preg_split('/\b/', strtolower($text));
        foreach ($words as $word) {
            if (isset($this->words[$word])) {
                return true;
            }
        }

        return false;
    }
}

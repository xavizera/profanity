<?php

namespace Xavizera\Profanity;

class Profanity
{
    protected array $wordsList = [];

    protected string $language;

    public function __construct(string $language = 'en')
    {
        $this->language = $language;
        $this->load();
    }

    public function load()
    {
        $words = include __DIR__."/../resources/data/{$this->language}.php";
        $this->wordsList = array_flip($words);
    }

    public function check(string $text): bool
    {
        $words = preg_split('/\b/', strtolower($text));
        foreach ($words as $word) {
            if (isset($this->wordsList[$word])) {
                return true;
            }
        }

        return false;
    }

    public function censor(string $text): string
    {
        $words = preg_split('/\b/', $text);
        $new = [];

        foreach ($words as $word) {
            if (isset($this->wordsList[$word])) {
                $word = '****';
            }
            array_push($new, $word);
        }

        return implode('', $new);
    }
}

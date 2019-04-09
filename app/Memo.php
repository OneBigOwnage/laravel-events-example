<?php

namespace App;

class Memo
{
    /**
     * The title of the memo.
     *
     * @var string
     */
    public $title;

    /**
     * The content of the memo.
     *
     * @var string
     */
    public $content;

    public function __construct(string $title, string $content) {
        $this->title = $title;
        $this->content = $content;
    }
}

<?php

namespace BonicApplicantTest\Task;

use BonicApplicantTest\TaskAbstract;

class PhpBlogEntries extends TaskAbstract
{
    public function execute()
    {
        $html = file_get_contents('http://index.hu');
        preg_match_all('/<h1\s*class="cikkcim">\s*<a href="([^"]+)">([^<]+)<\/a>\s*<\/h1>/',$html,$matches);
        var_dump($matches);
    }
}
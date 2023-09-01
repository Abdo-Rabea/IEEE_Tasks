<?php

echo nl2br(
    <<<'now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
now
);

// not valid because you have used html tag pre
echo '<pre>';
echo <<<'now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
now;
echo '<pre>';

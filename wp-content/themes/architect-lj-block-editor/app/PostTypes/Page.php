<?php

namespace App\PostTypes;

use Rareloop\Lumberjack\Page as LumberjackPage;

use App\Traits\Excerpt;
use App\Traits\Title;

class Page extends LumberjackPage
{
    use Excerpt;
    use Title;
}

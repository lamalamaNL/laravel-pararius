<?php

namespace LamaLama\Pararius;

use LamaLama\Pararius\Feed;

class Pararius
{
    /**
     * Feed.
     * @return LamaLama\Pararius\Feed
     */
    public function feed()
    {
        return new Feed();
    }
}

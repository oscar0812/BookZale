<?php

use Base\Book as BaseBook;

/**
 * Skeleton subclass for representing a row from the 'book' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Book extends BaseBook
{
    public function isNew()
    {
        // the book is considered new if its newer than 8 days
        $diff = dateDifference($this->getDatePosted(), getCurrentTime());
        return $diff->format("%a") < 8;
    }

    public function isCheap()
    {
        // book is cheap if less than $20
        return $this->price < 20;
    }
}

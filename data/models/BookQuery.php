<?php

use Base\BookQuery as BaseBookQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'book' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class BookQuery extends BaseBookQuery
{
    public function findByCategory($category)
    {
        // if parent category is clicked, show all the child categories as well
        if ($category->getParent() == 0) {
            return parent::filterByCategory($category->getChildren())->_or()
              ->filterByCategory($category)->find();
        }
        return parent::findByCategory($category);
    }
}

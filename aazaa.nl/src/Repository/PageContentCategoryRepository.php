<?php

namespace App\Repository;

use App\Entity\PageContentCategory;
use Gedmo\Sortable\Entity\Repository\SortableRepository;

class PageContentCategoryRepository extends SortableRepository
{
    /**
     * Get Menu items, cached for 7200 sec
     * @return array
     */
    public function getMenuItems(){
        return $this->getEntityManager()->createQueryBuilder()
            ->select('m')
            ->from(PageContentCategory::class,'m')
            ->where('m.viewPosition IS NOT NULL')
            ->orderBy('m.viewPosition', 'ASC')
            ->addOrderBy('m.position', 'ASC')
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true, 7200)
            ->getResult();
    }


}
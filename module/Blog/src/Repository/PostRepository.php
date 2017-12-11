<?php

namespace Blog\Repository;

use Doctrine\ORM\EntityRepository;
use Blog\Entity\Post;

/**
 * This is the custom repository class for Post entity.
 */
class PostRepository extends EntityRepository
{
    /**
     * Retrieves all published posts in descending date order.
     * @return Query
     */
    public function findPublishedPosts()
    {
        $entityManager = $this->getEntityManager();
        
        $queryBuilder = $entityManager->createQueryBuilder();

        $queryBuilder->select('p')
            ->from(Post::class, 'p');
        
        return $queryBuilder->getQuery();
    }   
}
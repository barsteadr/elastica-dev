<?php

namespace NS\SearchBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use NS\SearchBundle\DataFixtures\ORM\AbstractFixture;
use NS\SearchBundle\Entity\Author;

class LoadAuthorData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $author1 = new Author();
        $author1->setFirstname("Bob");
        $author1->setSurname("Roberts");

        $this->addReference('author_1', $author1);
        $manager->persist($author1);

        $author2 = new Author();
        $author2->setFirstname("Jimmy");
        $author2->setSurname("James");

        $this->addReference('author_2', $author2);
        $manager->persist($author2);

        $author3 = new Author();
        $author3->setFirstname("David");
        $author3->setSurname("Davidson");

        $this->addReference('author_3', $author3);
        $manager->persist($author3);

        $manager->flush();

    }

    public function getOrder()
    {
        return 1;
    }
}
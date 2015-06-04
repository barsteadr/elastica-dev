<?php

namespace NS\SearchBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use NS\SearchBundle\DataFixtures\ORM\AbstractFixture;
use NS\SearchBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setLabel("NLP");

        $this->addReference('category_1', $category1);
        $manager->persist($category1);


        $category2 = new Category();
        $category2->setLabel("Elasticsearch");

        $this->addReference('category_2', $category2);
        $manager->persist($category2);


        $category3 = new Category();
        $category3->setLabel("Symfony2");

        $this->addReference('category_3', $category3);
        $manager->persist($category3);


        $category4 = new Category();
        $category4->setLabel("Language");

        $this->addReference('category_4', $category4);
        $manager->persist($category4);

        $manager->flush();

    }

    public function getOrder()
    {
        return 2;
    }
}
<?php

namespace NS\SearchBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use NS\SearchBundle\Entity\Article;

class LoadArticleData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $article1 = new Article();
        $article1->setTitle('Search in Depth');
        $article1->addAuthor($this->getReference('author_1'));
        $article1->addAuthor($this->getReference('author_2'));
        $article1->setCategory($this->getReference('category_3'));
        $article1->setContent(
            'Understanding how each query contributes to the relevance _score will help you to
            tune your queries: to ensure that the documents you consider to be the best results appear on the
            first page, and to trim the “long tail” of barely relevant results.
        ');
        $article1->setTags(array('Depth','Symfony'));

        $this->addReference('article_1', $article1);
        $manager->persist($article1);


        $article2 = new Article();
        $article2->setPublishedAt(\DateTime::createFromFormat('Y-m-d H:i:s', '2013-09-24 13:53:00'));
        $article2->setTitle('Structured Search');
        $article2->addAuthor($this->getReference('author_3'));
        $article2->addAuthor($this->getReference('author_1'));
        $article2->setCategory($this->getReference('category_1'));
        $article2->setContent(
            'Structured search is about interrogating data that has inherent structure. Dates,
            times, and numbers are all structured: they have a precise format that you can perform
            logical operations on. Common operations include comparing ranges of numbers or dates, or
            determining which of two values is larger.
        ');
        $article2->setTags(array('data','format'));

        $this->addReference('article_2', $article2);
        $manager->persist($article2);


        $article3 = new Article();
        $article3->setPublishedAt(\DateTime::createFromFormat('Y-m-d H:i:s', '2013-09-13 10:57:00'));
        $article3->setTitle('Ranges');
        $article3->addAuthor($this->getReference('author_2'));
        $article3->setCategory($this->getReference('category_3'));
        $article3->setContent(
            'When dealing with numbers in this chapter, we have so far searched for only exact
            numbers. In practice, filtering on ranges is often more useful. For example, you might
            want to find all products with a price greater than $20 and less than $40.
        ');
        $article3->setTags(array('numbers','Symfony'));

        $this->addReference('article_3', $article3);
        $manager->persist($article3);


        $article4 = new Article();
        $article4->setPublishedAt(\DateTime::createFromFormat('Y-m-d H:i:s', '2013-10-17 11:34:00'));
        $article4->setTitle('All About Caching');
        $article4->addAuthor($this->getReference('author_1'));
        $article4->addAuthor($this->getReference('author_2'));
        $article4->setCategory($this->getReference('category_2'));
        $article4->setContent(
            'These cached bitsets are “smart”: they are updated incrementally. As you index new
            documents, only those new documents need to be added to the existing bitsets, rather
            than having to recompute the entire cached filter over and over. Filters are real-time
            like the rest of the system; you don’t need to worry about cache expiry.
        ');
        $article4->setTags(array('Elasticsearch'));

        $this->addReference('article_4', $article4);
        $manager->persist($article4);


        $article5 = new Article();
        $article5->setTitle('Filter Order');
        $article5->addAuthor($this->getReference('author_1'));
        $article5->addAuthor($this->getReference('author_3'));
        $article5->setCategory($this->getReference('category_1'));
        $article5->setContent(
            'If Clause A could match 10 million documents, and Clause B could match only 100 documents,
            then Clause B should be placed before Clause A.
        ');
        $article5->setTags(array('Symfony2','Filters'));

        $this->addReference('article_5', $article5);
        $manager->persist($article5);


        $article6 = new Article();
        $article6->setPublishedAt(\DateTime::createFromFormat('Y-m-d H:i:s', '2013-06-21 16:24:00'));
        $article6->setTitle('Dealing with Human Language');
        $article6->addAuthor($this->getReference('author_2'));
        $article6->setCategory($this->getReference('category_3'));
        $article6->setContent(
            'Full-text search is a battle between precision—returning as few irrelevant documents as
            possible—and recall—returning as many relevant documents as possible. While matching only
            the exact words that the user has queried would be precise, it is not enough. We would miss
            out on many documents that the user would consider to be relevant. Instead, we need to spread
            the net wider, to also search for words that are not exactly the same as the original but are related.
            ');
        $article6->setTags('Language');

        $this->addReference('article_6', $article6);
        $manager->persist($article6);


        $article7 = new Article();
        $article7->setPublishedAt(\DateTime::createFromFormat('Y-m-d H:i:s', '2013-05-31 15:13:00'));
        $article7->setTitle('Using Synonyms');
        $article7->addAuthor($this->getReference('author_1'));
        $article7->setCategory($this->getReference('category_1'));
        $article7->setContent(
            'Synonyms can replace existing tokens or be added to the token stream by using the synonym token filter
            ');
        $article7->setTags(array('Synonyms','Symfony2'));

        $this->addReference('article_7', $article7);
        $manager->persist($article7);


        $article8 = new Article();
        $article8->setPublishedAt(\DateTime::createFromFormat('Y-m-d H:i:s', '2013-04-21 11:44:00'));
        $article8->setTitle('Aggregations');
        $article8->setCategory($this->getReference('category_3'));
        $article8->addAuthor($this->getReference('author_1'));
        $article8->setContent(
            'Until this point, this book has been dedicated to search. With search, we have a query
            and we want to find a subset of documents that match the query. We are looking for the
            proverbial needle(s) in the haystack.
            ');
        $article8->setTags(array('Symfony2','Query'));

        $this->addReference('article_8', $article8);
        $manager->persist($article8);


        $article9 = new Article();
        $article9->setTitle('Geolocation');
        $article9->addAuthor($this->getReference('author_1'));
        $article9->setCategory($this->getReference('category_3'));
        $article9->setContent(
            'Gone are the days when we wander around a city with paper maps. Thanks to smartphones,
            we now know exactly where we are all the time, and we expect websites to use that information.
            I am not interested in restaurants in Greater London—I want to know about restaurants within a
            5-minute walk of my current location.
            ');
        $article9->setTags(array('Symfony2','Geolocation'));

        $this->addReference('article_9', $article9);
        $manager->persist($article9);


        $article10 = new Article();
        $article10->setPublishedAt(\DateTime::createFromFormat('Y-m-d H:i:s', '2012-11-05 11:00:00'));
        $article10->setTitle('Modeling Your Data');
        $article10->addAuthor($this->getReference('author_2'));
        $article10->setCategory($this->getReference('category_3'));
        $article10->setContent(
            'Elasticsearch is a different kind of beast, especially if you come from the world of SQL.
            It comes with many benefits: performance, scale, near real-time search, and analytics across
            massive amounts of data. And it is easy to get going! Just download and start using it.');
        $article10->setTags(array('Symfony2','KnpMenuBundle'));

        $this->addReference('article_10', $article10);
        $manager->persist($article10);


        $article11 = new Article();
        $article11->setPublishedAt(\DateTime::createFromFormat('Y-m-d H:i:s', '2013-05-29 17:39:00'));
        $article11->setTitle('Nested Objects');
        $article11->addAuthor($this->getReference('author_2'));
        $article11->addAuthor($this->getReference('author_3'));
        $article11->setCategory($this->getReference('category_3'));
        $article11->setContent(
            'Given the fact that creating, deleting, and updating a single document in Elasticsearch is atomic,
            it makes sense to store closely related entities within the same document.
            ');
        $article11->setTags(array('Document','Symfony2'));

        $this->addReference('article_11', $article11);
        $manager->persist($article11);


        $article12 = new Article();
        $article12->setTitle('Parent-Child Relationships');
        $article12->addAuthor($this->getReference('author_3'));
        $article12->setCategory($this->getReference('category_4'));
        $article12->setContent(
            'The parent-child functionality allows you to associate one document type
            with another, in a one-to-many relationship—one parent to many children. '
        );
        $article12->setTags(array('Java'));

        $this->addReference('article_12', $article12);
        $manager->persist($article12);

        $manager->flush();

    }

    public function getOrder()
    {
        return 3;
    }
}
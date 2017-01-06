<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 05.01.17
 * Time: 21:52
 */

namespace src\bookLibraryBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use bookLibraryBundle\Entity\Category;

class LoadCategoryData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $sci = new Category();
        $sci->setName('sci-fi');

        $manager->persist($sci);

        $fant = new Category();
        $fant->setName('fantasy');

        $manager->persist($fant);

        $horror = new Category();
        $horror->setName('horror');

        $manager->persist($horror);

        $dramat = new Category();
        $dramat->setName('dramat');

        $manager->persist($dramat);

        $manager->flush();
    }
    /**
     * mozna jeszcze dodac dane do tablicy i wszystko zrobic w petli
     */
}
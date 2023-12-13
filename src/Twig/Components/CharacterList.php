<?php

namespace App\Twig\Components;

use Doctrine\ORM\PersistentCollection;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class CharacterList
{
    public array|PersistentCollection $characters;
}

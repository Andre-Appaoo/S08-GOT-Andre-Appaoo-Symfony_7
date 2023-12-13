<?php

namespace App\Twig\Components;

use App\Entity\Character;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class CharacterCard
{
    public Character $character;
}

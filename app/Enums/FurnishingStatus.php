<?php

namespace App\Enums;

enum FurnishingStatus: string
{
    case Furnished = 'Furnished';
    case SemiFurnished = 'Semi-Furnished';
    case Unfurnished = 'Unfurnished';
}

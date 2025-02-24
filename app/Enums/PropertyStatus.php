<?php

namespace App\Enums;

enum PropertyStatus: string
{
    case Available = 'Available';
    case Rented = 'Rented';
    case UnderMaintenance = 'Under Maintenance';
}

<?php

namespace App\Config;

enum Status: string
{
    case New = "NEW";
    case Validated = "VALIDATED";
    case Proposal = "PROPOSAL";
    case Accepted = "ACCEPTED";
    case Declined = "DECLINED";
}
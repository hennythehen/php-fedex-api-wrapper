<?php
namespace FedEx\LocationsService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ServiceType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class ServiceType
    extends AbstractSimpleType
{
    const _SAME_DAY = 'SAME_DAY';
    const _SAME_DAY_CITY = 'SAME_DAY_CITY';
}
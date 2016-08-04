<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackReturnMovementStatusType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackReturnMovementStatusType
    extends AbstractSimpleType
{
    const _MOVEMENT_OCCURRED = 'MOVEMENT_OCCURRED';
    const _NO_MOVEMENT = 'NO_MOVEMENT';
}
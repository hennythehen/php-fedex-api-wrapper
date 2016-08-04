<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * SpecialInstructionsStatusCode
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class SpecialInstructionsStatusCode
    extends AbstractSimpleType
{
    const _ACCEPTED = 'ACCEPTED';
    const _CANCELLED = 'CANCELLED';
    const _DENIED = 'DENIED';
    const _HELD = 'HELD';
    const _MODIFIED = 'MODIFIED';
    const _RELINQUISHED = 'RELINQUISHED';
    const _REQUESTED = 'REQUESTED';
    const _SET = 'SET';
}
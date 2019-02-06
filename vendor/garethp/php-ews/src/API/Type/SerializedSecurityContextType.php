<?php

namespace garethp\ews\API\Type;

use garethp\ews\API\Type;

/**
 * Class representing SerializedSecurityContextType
 *
 *
 * XSD Type: SerializedSecurityContextType
 *
 * @method string getUserSid()
 * @method SerializedSecurityContextType setUserSid(string $userSid)
 * @method SerializedSecurityContextType addGroupSids(SidAndAttributesType $groupSids)
 * @method SidAndAttributesType[] getGroupSids()
 * @method SerializedSecurityContextType setGroupSids(array $groupSids)
 * @method SerializedSecurityContextType addRestrictedGroupSids(SidAndAttributesType $restrictedGroupSids)
 * @method SidAndAttributesType[] getRestrictedGroupSids()
 * @method SerializedSecurityContextType setRestrictedGroupSids(array $restrictedGroupSids)
 * @method string getPrimarySmtpAddress()
 * @method SerializedSecurityContextType setPrimarySmtpAddress(string $primarySmtpAddress)
 */
class SerializedSecurityContextType extends Type
{

    /**
     * @var string
     */
    protected $userSid = null;

    /**
     * @var \garethp\ews\API\Type\SidAndAttributesType[]
     */
    protected $groupSids = null;

    /**
     * @var \garethp\ews\API\Type\SidAndAttributesType[]
     */
    protected $restrictedGroupSids = null;

    /**
     * @var string
     */
    protected $primarySmtpAddress = null;
}

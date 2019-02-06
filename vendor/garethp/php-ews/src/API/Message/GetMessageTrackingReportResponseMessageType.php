<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: GetMessageTrackingReportResponseMessageType
 *
 * @method \garethp\ews\API\Type\MessageTrackingReportType getMessageTrackingReport()
 * @method GetMessageTrackingReportResponseMessageType setMessageTrackingReport(\garethp\ews\API\Type\MessageTrackingReportType $messageTrackingReport)
 * @method GetMessageTrackingReportResponseMessageType addDiagnostics(string $diagnostics)
 * @method string[] getDiagnostics()
 * @method GetMessageTrackingReportResponseMessageType setDiagnostics(array $diagnostics)
 * @method GetMessageTrackingReportResponseMessageType addErrors(\garethp\ews\API\Type\ArrayOfTrackingPropertiesType $errors)
 * @method \garethp\ews\API\Type\ArrayOfTrackingPropertiesType[] getErrors()
 * @method GetMessageTrackingReportResponseMessageType setErrors(array $errors)
 * @method GetMessageTrackingReportResponseMessageType addProperties(\garethp\ews\API\Type\TrackingPropertyType $properties)
 * @method \garethp\ews\API\Type\TrackingPropertyType[] getProperties()
 * @method GetMessageTrackingReportResponseMessageType setProperties(array $properties)
 */
class GetMessageTrackingReportResponseMessageType extends ResponseMessageType
{

    /**
     * @var \garethp\ews\API\Type\MessageTrackingReportType
     */
    protected $messageTrackingReport = null;

    /**
     * @var string[]
     */
    protected $diagnostics = null;

    /**
     * @var \garethp\ews\API\Type\ArrayOfTrackingPropertiesType[]
     */
    protected $errors = null;

    /**
     * @var \garethp\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;
}

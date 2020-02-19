<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiRequestForm
 *
 * @ORM\Table(name="di_request_form", uniqueConstraints={@ORM\UniqueConstraint(name="sample_code", columns={"sample_code"})}, indexes={@ORM\Index(name="facility_id", columns={"facility_id"}), @ORM\Index(name="sample_id", columns={"sample_type"}), @ORM\Index(name="status", columns={"result_status"}), @ORM\Index(name="art_no", columns={"patient_art_no"}), @ORM\Index(name="created_by", columns={"request_created_by"})})
 * @ORM\Entity
 */
class DiRequestForm
{
    /**
     * @var int
     *
     * @ORM\Column(name="di_sample_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $diSampleId;

    /**
     * @var string
     *
     * @ORM\Column(name="vlsm_instance_id", type="string", length=255, nullable=false)
     */
    private $vlsmInstanceId;

    /**
     * @var int
     *
     * @ORM\Column(name="vlsm_country_id", type="integer", nullable=false, options={"default"="1"})
     */
    private $vlsmCountryId = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="remote_sample_code", type="string", length=255, nullable=true)
     */
    private $remoteSampleCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serial_no", type="string", length=255, nullable=true)
     */
    private $serialNo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facility_id", type="integer", nullable=true)
     */
    private $facilityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_sample_id", type="string", length=255, nullable=true)
     */
    private $facilitySampleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_batch_id", type="string", length=11, nullable=true)
     */
    private $sampleBatchId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_package_id", type="string", length=11, nullable=true)
     */
    private $samplePackageId;

    /**
     * @var string
     *
     * @ORM\Column(name="sample_reordered", type="string", length=45, nullable=false, options={"default"="no"})
     */
    private $sampleReordered = 'no';

    /**
     * @var string|null
     *
     * @ORM\Column(name="remote_sample_code_key", type="string", length=255, nullable=true)
     */
    private $remoteSampleCodeKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_code_key", type="string", length=255, nullable=true)
     */
    private $sampleCodeKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_code_format", type="string", length=255, nullable=true)
     */
    private $sampleCodeFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="sample_code_title", type="string", length=45, nullable=false, options={"default"="auto"})
     */
    private $sampleCodeTitle = 'auto';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_code", type="string", length=255, nullable=true)
     */
    private $sampleCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="test_urgency", type="string", length=255, nullable=true)
     */
    private $testUrgency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_first_name", type="string", length=255, nullable=true)
     */
    private $patientFirstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_middle_name", type="string", length=255, nullable=true)
     */
    private $patientMiddleName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_last_name", type="string", length=255, nullable=true)
     */
    private $patientLastName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_responsible_person", type="string", length=255, nullable=true)
     */
    private $patientResponsiblePerson;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patient_nationality", type="integer", nullable=true)
     */
    private $patientNationality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_province", type="string", length=255, nullable=true)
     */
    private $patientProvince;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_district", type="string", length=255, nullable=true)
     */
    private $patientDistrict;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_group", type="string", length=255, nullable=true)
     */
    private $patientGroup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_art_no", type="string", length=255, nullable=true)
     */
    private $patientArtNo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="patient_dob", type="date", nullable=true)
     */
    private $patientDob;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_gender", type="string", length=255, nullable=true)
     */
    private $patientGender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_mobile_number", type="string", length=255, nullable=true)
     */
    private $patientMobileNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_location", type="string", length=255, nullable=true)
     */
    private $patientLocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_address", type="text", length=65535, nullable=true)
     */
    private $patientAddress;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="patient_art_date", type="date", nullable=true)
     */
    private $patientArtDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_receiving_therapy", type="string", length=255, nullable=true)
     */
    private $patientReceivingTherapy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_drugs_transmission", type="string", length=255, nullable=true)
     */
    private $patientDrugsTransmission;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_tb", type="string", length=255, nullable=true)
     */
    private $patientTb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_tb_yes", type="string", length=255, nullable=true)
     */
    private $patientTbYes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sample_collection_date", type="datetime", nullable=true)
     */
    private $sampleCollectionDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sample_type", type="integer", nullable=true)
     */
    private $sampleType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_patient_new", type="string", length=45, nullable=true)
     */
    private $isPatientNew;

    /**
     * @var string|null
     *
     * @ORM\Column(name="treatment_initiation", type="string", length=255, nullable=true)
     */
    private $treatmentInitiation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="line_of_treatment", type="integer", nullable=true)
     */
    private $lineOfTreatment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="line_of_treatment_ref_type", type="string", length=255, nullable=true)
     */
    private $lineOfTreatmentRefType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="current_regimen", type="string", length=255, nullable=true)
     */
    private $currentRegimen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_of_initiation_of_current_regimen", type="string", length=255, nullable=true)
     */
    private $dateOfInitiationOfCurrentRegimen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_patient_pregnant", type="string", length=255, nullable=true)
     */
    private $isPatientPregnant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_patient_breastfeeding", type="string", length=255, nullable=true)
     */
    private $isPatientBreastfeeding;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pregnancy_trimester", type="integer", nullable=true)
     */
    private $pregnancyTrimester;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arv_adherance_percentage", type="string", length=255, nullable=true)
     */
    private $arvAdherancePercentage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_adherance_poor", type="string", length=255, nullable=true)
     */
    private $isAdherancePoor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="consent_to_receive_sms", type="string", length=45, nullable=true)
     */
    private $consentToReceiveSms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="number_of_enhanced_sessions", type="string", length=255, nullable=true)
     */
    private $numberOfEnhancedSessions;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_vl_date_routine", type="date", nullable=true)
     */
    private $lastVlDateRoutine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_routine", type="string", length=255, nullable=true)
     */
    private $lastVlResultRoutine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_vl_sample_type_routine", type="integer", nullable=true)
     */
    private $lastVlSampleTypeRoutine;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_vl_date_failure_ac", type="date", nullable=true)
     */
    private $lastVlDateFailureAc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_failure_ac", type="string", length=255, nullable=true)
     */
    private $lastVlResultFailureAc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_vl_sample_type_failure_ac", type="integer", nullable=true)
     */
    private $lastVlSampleTypeFailureAc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_vl_date_failure", type="date", nullable=true)
     */
    private $lastVlDateFailure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_failure", type="string", length=255, nullable=true)
     */
    private $lastVlResultFailure;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_vl_sample_type_failure", type="integer", nullable=true)
     */
    private $lastVlSampleTypeFailure;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_vl_date_ecd", type="date", nullable=true)
     */
    private $lastVlDateEcd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_ecd", type="string", length=255, nullable=true)
     */
    private $lastVlResultEcd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_vl_date_cf", type="date", nullable=true)
     */
    private $lastVlDateCf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_cf", type="string", length=255, nullable=true)
     */
    private $lastVlResultCf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_vl_date_if", type="date", nullable=true)
     */
    private $lastVlDateIf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_if", type="string", length=255, nullable=true)
     */
    private $lastVlResultIf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="request_clinician_name", type="string", length=255, nullable=true)
     */
    private $requestClinicianName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="test_requested_on", type="date", nullable=true)
     */
    private $testRequestedOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="request_clinician_phone_number", type="string", length=255, nullable=true)
     */
    private $requestClinicianPhoneNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sample_testing_date", type="datetime", nullable=true)
     */
    private $sampleTestingDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vl_focal_person", type="string", length=255, nullable=true)
     */
    private $vlFocalPerson;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vl_focal_person_phone_number", type="string", length=255, nullable=true)
     */
    private $vlFocalPersonPhoneNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sample_received_at_vl_lab_datetime", type="datetime", nullable=true)
     */
    private $sampleReceivedAtVlLabDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_dispatched_datetime", type="datetime", nullable=true)
     */
    private $resultDispatchedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_sample_rejected", type="string", length=255, nullable=true)
     */
    private $isSampleRejected;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sample_rejection_facility", type="integer", nullable=true)
     */
    private $sampleRejectionFacility;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reason_for_sample_rejection", type="integer", nullable=true)
     */
    private $reasonForSampleRejection;

    /**
     * @var string
     *
     * @ORM\Column(name="request_created_by", type="string", length=255, nullable=false)
     */
    private $requestCreatedBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="request_created_datetime", type="datetime", nullable=true)
     */
    private $requestCreatedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_modified_by", type="string", length=255, nullable=true)
     */
    private $lastModifiedBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_modified_datetime", type="datetime", nullable=true)
     */
    private $lastModifiedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_other_id", type="string", length=255, nullable=true)
     */
    private $patientOtherId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_age_in_years", type="string", length=255, nullable=true)
     */
    private $patientAgeInYears;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_age_in_months", type="string", length=255, nullable=true)
     */
    private $patientAgeInMonths;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="treatment_initiated_date", type="date", nullable=true)
     */
    private $treatmentInitiatedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="patient_anc_no", type="string", length=255, nullable=true)
     */
    private $patientAncNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="treatment_details", type="text", length=65535, nullable=true)
     */
    private $treatmentDetails;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_visit_type", type="string", length=45, nullable=true)
     */
    private $sampleVisitType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vl_sample_suspected_treatment_failure_at", type="string", length=255, nullable=true)
     */
    private $vlSampleSuspectedTreatmentFailureAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lab_name", type="string", length=255, nullable=true)
     */
    private $labName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lab_id", type="integer", nullable=true)
     */
    private $labId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lab_code", type="integer", nullable=true)
     */
    private $labCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lab_contact_person", type="string", length=255, nullable=true)
     */
    private $labContactPerson;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lab_phone_number", type="string", length=255, nullable=true)
     */
    private $labPhoneNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sample_tested_datetime", type="datetime", nullable=true)
     */
    private $sampleTestedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_log", type="string", length=255, nullable=true)
     */
    private $resultValueLog;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_absolute", type="string", length=255, nullable=true)
     */
    private $resultValueAbsolute;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_text", type="string", length=255, nullable=true)
     */
    private $resultValueText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_absolute_decimal", type="string", length=255, nullable=true)
     */
    private $resultValueAbsoluteDecimal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result", type="string", length=255, nullable=true)
     */
    private $result;

    /**
     * @var string|null
     *
     * @ORM\Column(name="approver_comments", type="text", length=65535, nullable=true)
     */
    private $approverComments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reason_for_vl_result_changes", type="text", length=65535, nullable=true)
     */
    private $reasonForVlResultChanges;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lot_number", type="string", length=255, nullable=true)
     */
    private $lotNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lot_expiration_date", type="date", nullable=true)
     */
    private $lotExpirationDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_approved_by", type="string", length=255, nullable=true)
     */
    private $resultApprovedBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_approved_datetime", type="datetime", nullable=true)
     */
    private $resultApprovedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_reviewed_by", type="string", length=255, nullable=true)
     */
    private $resultReviewedBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_reviewed_datetime", type="datetime", nullable=true)
     */
    private $resultReviewedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="test_methods", type="string", length=255, nullable=true)
     */
    private $testMethods;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_complete_status", type="string", length=255, nullable=true)
     */
    private $contactCompleteStatus;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_viral_load_date", type="date", nullable=true)
     */
    private $lastViralLoadDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_viral_load_result", type="string", length=255, nullable=true)
     */
    private $lastViralLoadResult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_vl_result_in_log", type="string", length=255, nullable=true)
     */
    private $lastVlResultInLog;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reason_for_vl_testing", type="string", length=255, nullable=true)
     */
    private $reasonForVlTesting;

    /**
     * @var string|null
     *
     * @ORM\Column(name="drug_substitution", type="string", length=255, nullable=true)
     */
    private $drugSubstitution;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_collected_by", type="string", length=255, nullable=true)
     */
    private $sampleCollectedBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_comments", type="text", length=65535, nullable=true)
     */
    private $facilityComments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vl_test_platform", type="string", length=255, nullable=true)
     */
    private $vlTestPlatform;

    /**
     * @var int|null
     *
     * @ORM\Column(name="import_machine_name", type="integer", nullable=true)
     */
    private $importMachineName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_support_partner", type="string", length=255, nullable=true)
     */
    private $facilitySupportPartner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="has_patient_changed_regimen", type="string", length=45, nullable=true)
     */
    private $hasPatientChangedRegimen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reason_for_regimen_change", type="string", length=255, nullable=true)
     */
    private $reasonForRegimenChange;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="regimen_change_date", type="date", nullable=true)
     */
    private $regimenChangeDate;

    /**
     * @var float|null
     *
     * @ORM\Column(name="plasma_conservation_temperature", type="float", precision=10, scale=0, nullable=true)
     */
    private $plasmaConservationTemperature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plasma_conservation_duration", type="string", length=45, nullable=true)
     */
    private $plasmaConservationDuration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="physician_name", type="string", length=255, nullable=true)
     */
    private $physicianName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_test_ordered_by_physician", type="date", nullable=true)
     */
    private $dateTestOrderedByPhysician;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vl_test_number", type="string", length=45, nullable=true)
     */
    private $vlTestNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_dispatched_from_clinic_to_lab", type="datetime", nullable=true)
     */
    private $dateDispatchedFromClinicToLab;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_printed_datetime", type="datetime", nullable=true)
     */
    private $resultPrintedDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_sms_sent_datetime", type="datetime", nullable=true)
     */
    private $resultSmsSentDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="is_request_mail_sent", type="string", length=45, nullable=false, options={"default"="no"})
     */
    private $isRequestMailSent = 'no';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="request_mail_datetime", type="datetime", nullable=true)
     */
    private $requestMailDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="is_result_mail_sent", type="string", length=45, nullable=false, options={"default"="no"})
     */
    private $isResultMailSent = 'no';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_mail_datetime", type="datetime", nullable=true)
     */
    private $resultMailDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="is_result_sms_sent", type="string", length=45, nullable=false, options={"default"="no"})
     */
    private $isResultSmsSent = 'no';

    /**
     * @var int
     *
     * @ORM\Column(name="test_request_export", type="integer", nullable=false)
     */
    private $testRequestExport;

    /**
     * @var int
     *
     * @ORM\Column(name="test_request_import", type="integer", nullable=false)
     */
    private $testRequestImport;

    /**
     * @var int
     *
     * @ORM\Column(name="test_result_export", type="integer", nullable=false)
     */
    private $testResultExport;

    /**
     * @var int
     *
     * @ORM\Column(name="test_result_import", type="integer", nullable=false)
     */
    private $testResultImport;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="request_exported_datetime", type="datetime", nullable=true)
     */
    private $requestExportedDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="request_imported_datetime", type="datetime", nullable=true)
     */
    private $requestImportedDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_exported_datetime", type="datetime", nullable=true)
     */
    private $resultExportedDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_imported_datetime", type="datetime", nullable=true)
     */
    private $resultImportedDatetime;

    /**
     * @var int
     *
     * @ORM\Column(name="result_status", type="integer", nullable=false)
     */
    private $resultStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_machine_file_name", type="string", length=255, nullable=true)
     */
    private $importMachineFileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="manual_result_entry", type="string", length=255, nullable=true)
     */
    private $manualResultEntry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source", type="string", length=500, nullable=true, options={"default"="manual"})
     */
    private $source = 'manual';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ward", type="string", length=255, nullable=true)
     */
    private $ward;

    /**
     * @var string|null
     *
     * @ORM\Column(name="art_cd_cells", type="string", length=255, nullable=true)
     */
    private $artCdCells;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="art_cd_date", type="date", nullable=true)
     */
    private $artCdDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="who_clinical_stage", type="string", length=255, nullable=true)
     */
    private $whoClinicalStage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reason_testing_png", type="text", length=65535, nullable=true)
     */
    private $reasonTestingPng;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tech_name_png", type="string", length=255, nullable=true)
     */
    private $techNamePng;

    /**
     * @var string|null
     *
     * @ORM\Column(name="qc_tech_name", type="string", length=255, nullable=true)
     */
    private $qcTechName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="qc_tech_sign", type="string", length=255, nullable=true)
     */
    private $qcTechSign;

    /**
     * @var string|null
     *
     * @ORM\Column(name="qc_date", type="string", length=255, nullable=true)
     */
    private $qcDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="whole_blood_ml", type="string", length=50, nullable=true)
     */
    private $wholeBloodMl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="whole_blood_vial", type="string", length=50, nullable=true)
     */
    private $wholeBloodVial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plasma_ml", type="string", length=50, nullable=true)
     */
    private $plasmaMl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plasma_vial", type="string", length=50, nullable=true)
     */
    private $plasmaVial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plasma_process_time", type="string", length=255, nullable=true)
     */
    private $plasmaProcessTime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plasma_process_tech", type="string", length=255, nullable=true)
     */
    private $plasmaProcessTech;

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch_quality", type="string", length=255, nullable=true)
     */
    private $batchQuality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_test_quality", type="string", length=255, nullable=true)
     */
    private $sampleTestQuality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="repeat_sample_collection", type="string", length=45, nullable=true)
     */
    private $repeatSampleCollection;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="failed_test_date", type="datetime", nullable=true)
     */
    private $failedTestDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="failed_test_tech", type="string", length=255, nullable=true)
     */
    private $failedTestTech;

    /**
     * @var string|null
     *
     * @ORM\Column(name="failed_vl_result", type="string", length=255, nullable=true)
     */
    private $failedVlResult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="failed_batch_quality", type="string", length=255, nullable=true)
     */
    private $failedBatchQuality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="failed_sample_test_quality", type="string", length=255, nullable=true)
     */
    private $failedSampleTestQuality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="failed_batch_id", type="string", length=255, nullable=true)
     */
    private $failedBatchId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="clinic_date", type="date", nullable=true)
     */
    private $clinicDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="report_date", type="date", nullable=true)
     */
    private $reportDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_to_transport", type="string", length=255, nullable=true)
     */
    private $sampleToTransport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requesting_professional_number", type="string", length=255, nullable=true)
     */
    private $requestingProfessionalNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requesting_category", type="string", length=255, nullable=true)
     */
    private $requestingCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requesting_vl_service_sector", type="string", length=255, nullable=true)
     */
    private $requestingVlServiceSector;

    /**
     * @var int|null
     *
     * @ORM\Column(name="requesting_facility_id", type="integer", nullable=true)
     */
    private $requestingFacilityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requesting_person", type="string", length=255, nullable=true)
     */
    private $requestingPerson;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requesting_phone", type="string", length=255, nullable=true)
     */
    private $requestingPhone;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="requesting_date", type="date", nullable=true)
     */
    private $requestingDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="collection_site", type="string", length=255, nullable=true)
     */
    private $collectionSite;

    /**
     * @var string
     *
     * @ORM\Column(name="data_sync", type="string", length=10, nullable=false)
     */
    private $dataSync;

    /**
     * @var string
     *
     * @ORM\Column(name="remote_sample", type="string", length=255, nullable=false, options={"default"="no"})
     */
    private $remoteSample = 'no';

    /**
     * @var string|null
     *
     * @ORM\Column(name="labPersonnel", type="string", length=200, nullable=true)
     */
    private $labpersonnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sDistrict", type="string", length=200, nullable=true)
     */
    private $sdistrict;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_type1", type="string", length=255, nullable=true)
     */
    private $sampleType1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ePID", type="string", length=255, nullable=true)
     */
    private $epid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gps", type="string", length=255, nullable=true)
     */
    private $gps;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sendDate", type="datetime", nullable=true)
     */
    private $senddate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="test", type="string", length=255, nullable=true)
     */
    private $test;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updateDate", type="datetime", nullable=true)
     */
    private $updatedate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="disease", type="string", length=255, nullable=true)
     */
    private $disease;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gaurdianName", type="string", length=255, nullable=true)
     */
    private $gaurdianname;

    /**
     * @var int|null
     *
     * @ORM\Column(name="noHouseHold", type="integer", nullable=true)
     */
    private $nohousehold;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="notifyDate", type="datetime", nullable=true)
     */
    private $notifydate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="residentialAdd", type="string", length=255, nullable=true)
     */
    private $residentialadd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="symptoms", type="string", length=255, nullable=true)
     */
    private $symptoms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="region", type="string", length=255, nullable=true)
     */
    private $region;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="labDate", type="datetime", nullable=true)
     */
    private $labdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rCountry", type="string", length=255, nullable=true)
     */
    private $rcountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="outCome", type="string", length=255, nullable=true)
     */
    private $outcome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fClassification", type="string", length=255, nullable=true)
     */
    private $fclassification;

    /**
     * @var string|null
     *
     * @ORM\Column(name="organismTypes", type="string", length=255, nullable=true)
     */
    private $organismtypes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="personSending", type="string", length=255, nullable=true)
     */
    private $personsending;

    /**
     * @var string|null
     *
     * @ORM\Column(name="organismSensitivity", type="string", length=255, nullable=true)
     */
    private $organismsensitivity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="organismResistance", type="string", length=255, nullable=true)
     */
    private $organismresistance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rDistrict", type="string", length=255, nullable=true)
     */
    private $rdistrict;

    /**
     * @var string|null
     *
     * @ORM\Column(name="specimenCondition", type="string", length=255, nullable=true)
     */
    private $specimencondition;

    public function getDiSampleId(): ?int
    {
        return $this->diSampleId;
    }

    public function getVlsmInstanceId(): ?string
    {
        return $this->vlsmInstanceId;
    }

    public function setVlsmInstanceId(string $vlsmInstanceId): self
    {
        $this->vlsmInstanceId = $vlsmInstanceId;

        return $this;
    }

    public function getVlsmCountryId(): ?int
    {
        return $this->vlsmCountryId;
    }

    public function setVlsmCountryId(int $vlsmCountryId): self
    {
        $this->vlsmCountryId = $vlsmCountryId;

        return $this;
    }

    public function getRemoteSampleCode(): ?string
    {
        return $this->remoteSampleCode;
    }

    public function setRemoteSampleCode(?string $remoteSampleCode): self
    {
        $this->remoteSampleCode = $remoteSampleCode;

        return $this;
    }

    public function getSerialNo(): ?string
    {
        return $this->serialNo;
    }

    public function setSerialNo(?string $serialNo): self
    {
        $this->serialNo = $serialNo;

        return $this;
    }

    public function getFacilityId(): ?int
    {
        return $this->facilityId;
    }

    public function setFacilityId(?int $facilityId): self
    {
        $this->facilityId = $facilityId;

        return $this;
    }

    public function getFacilitySampleId(): ?string
    {
        return $this->facilitySampleId;
    }

    public function setFacilitySampleId(?string $facilitySampleId): self
    {
        $this->facilitySampleId = $facilitySampleId;

        return $this;
    }

    public function getSampleBatchId(): ?string
    {
        return $this->sampleBatchId;
    }

    public function setSampleBatchId(?string $sampleBatchId): self
    {
        $this->sampleBatchId = $sampleBatchId;

        return $this;
    }

    public function getSamplePackageId(): ?string
    {
        return $this->samplePackageId;
    }

    public function setSamplePackageId(?string $samplePackageId): self
    {
        $this->samplePackageId = $samplePackageId;

        return $this;
    }

    public function getSampleReordered(): ?string
    {
        return $this->sampleReordered;
    }

    public function setSampleReordered(string $sampleReordered): self
    {
        $this->sampleReordered = $sampleReordered;

        return $this;
    }

    public function getRemoteSampleCodeKey(): ?string
    {
        return $this->remoteSampleCodeKey;
    }

    public function setRemoteSampleCodeKey(?string $remoteSampleCodeKey): self
    {
        $this->remoteSampleCodeKey = $remoteSampleCodeKey;

        return $this;
    }

    public function getSampleCodeKey(): ?string
    {
        return $this->sampleCodeKey;
    }

    public function setSampleCodeKey(?string $sampleCodeKey): self
    {
        $this->sampleCodeKey = $sampleCodeKey;

        return $this;
    }

    public function getSampleCodeFormat(): ?string
    {
        return $this->sampleCodeFormat;
    }

    public function setSampleCodeFormat(?string $sampleCodeFormat): self
    {
        $this->sampleCodeFormat = $sampleCodeFormat;

        return $this;
    }

    public function getSampleCodeTitle(): ?string
    {
        return $this->sampleCodeTitle;
    }

    public function setSampleCodeTitle(string $sampleCodeTitle): self
    {
        $this->sampleCodeTitle = $sampleCodeTitle;

        return $this;
    }

    public function getSampleCode(): ?string
    {
        return $this->sampleCode;
    }

    public function setSampleCode(?string $sampleCode): self
    {
        $this->sampleCode = $sampleCode;

        return $this;
    }

    public function getTestUrgency(): ?string
    {
        return $this->testUrgency;
    }

    public function setTestUrgency(?string $testUrgency): self
    {
        $this->testUrgency = $testUrgency;

        return $this;
    }

    public function getPatientFirstName(): ?string
    {
        return $this->patientFirstName;
    }

    public function setPatientFirstName(?string $patientFirstName): self
    {
        $this->patientFirstName = $patientFirstName;

        return $this;
    }

    public function getPatientMiddleName(): ?string
    {
        return $this->patientMiddleName;
    }

    public function setPatientMiddleName(?string $patientMiddleName): self
    {
        $this->patientMiddleName = $patientMiddleName;

        return $this;
    }

    public function getPatientLastName(): ?string
    {
        return $this->patientLastName;
    }

    public function setPatientLastName(?string $patientLastName): self
    {
        $this->patientLastName = $patientLastName;

        return $this;
    }

    public function getPatientResponsiblePerson(): ?string
    {
        return $this->patientResponsiblePerson;
    }

    public function setPatientResponsiblePerson(?string $patientResponsiblePerson): self
    {
        $this->patientResponsiblePerson = $patientResponsiblePerson;

        return $this;
    }

    public function getPatientNationality(): ?int
    {
        return $this->patientNationality;
    }

    public function setPatientNationality(?int $patientNationality): self
    {
        $this->patientNationality = $patientNationality;

        return $this;
    }

    public function getPatientProvince(): ?string
    {
        return $this->patientProvince;
    }

    public function setPatientProvince(?string $patientProvince): self
    {
        $this->patientProvince = $patientProvince;

        return $this;
    }

    public function getPatientDistrict(): ?string
    {
        return $this->patientDistrict;
    }

    public function setPatientDistrict(?string $patientDistrict): self
    {
        $this->patientDistrict = $patientDistrict;

        return $this;
    }

    public function getPatientGroup(): ?string
    {
        return $this->patientGroup;
    }

    public function setPatientGroup(?string $patientGroup): self
    {
        $this->patientGroup = $patientGroup;

        return $this;
    }

    public function getPatientArtNo(): ?string
    {
        return $this->patientArtNo;
    }

    public function setPatientArtNo(?string $patientArtNo): self
    {
        $this->patientArtNo = $patientArtNo;

        return $this;
    }

    public function getPatientDob(): ?\DateTimeInterface
    {
        return $this->patientDob;
    }

    public function setPatientDob(?\DateTimeInterface $patientDob): self
    {
        $this->patientDob = $patientDob;

        return $this;
    }

    public function getPatientGender(): ?string
    {
        return $this->patientGender;
    }

    public function setPatientGender(?string $patientGender): self
    {
        $this->patientGender = $patientGender;

        return $this;
    }

    public function getPatientMobileNumber(): ?string
    {
        return $this->patientMobileNumber;
    }

    public function setPatientMobileNumber(?string $patientMobileNumber): self
    {
        $this->patientMobileNumber = $patientMobileNumber;

        return $this;
    }

    public function getPatientLocation(): ?string
    {
        return $this->patientLocation;
    }

    public function setPatientLocation(?string $patientLocation): self
    {
        $this->patientLocation = $patientLocation;

        return $this;
    }

    public function getPatientAddress(): ?string
    {
        return $this->patientAddress;
    }

    public function setPatientAddress(?string $patientAddress): self
    {
        $this->patientAddress = $patientAddress;

        return $this;
    }

    public function getPatientArtDate(): ?\DateTimeInterface
    {
        return $this->patientArtDate;
    }

    public function setPatientArtDate(?\DateTimeInterface $patientArtDate): self
    {
        $this->patientArtDate = $patientArtDate;

        return $this;
    }

    public function getPatientReceivingTherapy(): ?string
    {
        return $this->patientReceivingTherapy;
    }

    public function setPatientReceivingTherapy(?string $patientReceivingTherapy): self
    {
        $this->patientReceivingTherapy = $patientReceivingTherapy;

        return $this;
    }

    public function getPatientDrugsTransmission(): ?string
    {
        return $this->patientDrugsTransmission;
    }

    public function setPatientDrugsTransmission(?string $patientDrugsTransmission): self
    {
        $this->patientDrugsTransmission = $patientDrugsTransmission;

        return $this;
    }

    public function getPatientTb(): ?string
    {
        return $this->patientTb;
    }

    public function setPatientTb(?string $patientTb): self
    {
        $this->patientTb = $patientTb;

        return $this;
    }

    public function getPatientTbYes(): ?string
    {
        return $this->patientTbYes;
    }

    public function setPatientTbYes(?string $patientTbYes): self
    {
        $this->patientTbYes = $patientTbYes;

        return $this;
    }

    public function getSampleCollectionDate(): ?\DateTimeInterface
    {
        return $this->sampleCollectionDate;
    }

    public function setSampleCollectionDate(?\DateTimeInterface $sampleCollectionDate): self
    {
        $this->sampleCollectionDate = $sampleCollectionDate;

        return $this;
    }

    public function getSampleType(): ?int
    {
        return $this->sampleType;
    }

    public function setSampleType(?int $sampleType): self
    {
        $this->sampleType = $sampleType;

        return $this;
    }

    public function getIsPatientNew(): ?string
    {
        return $this->isPatientNew;
    }

    public function setIsPatientNew(?string $isPatientNew): self
    {
        $this->isPatientNew = $isPatientNew;

        return $this;
    }

    public function getTreatmentInitiation(): ?string
    {
        return $this->treatmentInitiation;
    }

    public function setTreatmentInitiation(?string $treatmentInitiation): self
    {
        $this->treatmentInitiation = $treatmentInitiation;

        return $this;
    }

    public function getLineOfTreatment(): ?int
    {
        return $this->lineOfTreatment;
    }

    public function setLineOfTreatment(?int $lineOfTreatment): self
    {
        $this->lineOfTreatment = $lineOfTreatment;

        return $this;
    }

    public function getLineOfTreatmentRefType(): ?string
    {
        return $this->lineOfTreatmentRefType;
    }

    public function setLineOfTreatmentRefType(?string $lineOfTreatmentRefType): self
    {
        $this->lineOfTreatmentRefType = $lineOfTreatmentRefType;

        return $this;
    }

    public function getCurrentRegimen(): ?string
    {
        return $this->currentRegimen;
    }

    public function setCurrentRegimen(?string $currentRegimen): self
    {
        $this->currentRegimen = $currentRegimen;

        return $this;
    }

    public function getDateOfInitiationOfCurrentRegimen(): ?string
    {
        return $this->dateOfInitiationOfCurrentRegimen;
    }

    public function setDateOfInitiationOfCurrentRegimen(?string $dateOfInitiationOfCurrentRegimen): self
    {
        $this->dateOfInitiationOfCurrentRegimen = $dateOfInitiationOfCurrentRegimen;

        return $this;
    }

    public function getIsPatientPregnant(): ?string
    {
        return $this->isPatientPregnant;
    }

    public function setIsPatientPregnant(?string $isPatientPregnant): self
    {
        $this->isPatientPregnant = $isPatientPregnant;

        return $this;
    }

    public function getIsPatientBreastfeeding(): ?string
    {
        return $this->isPatientBreastfeeding;
    }

    public function setIsPatientBreastfeeding(?string $isPatientBreastfeeding): self
    {
        $this->isPatientBreastfeeding = $isPatientBreastfeeding;

        return $this;
    }

    public function getPregnancyTrimester(): ?int
    {
        return $this->pregnancyTrimester;
    }

    public function setPregnancyTrimester(?int $pregnancyTrimester): self
    {
        $this->pregnancyTrimester = $pregnancyTrimester;

        return $this;
    }

    public function getArvAdherancePercentage(): ?string
    {
        return $this->arvAdherancePercentage;
    }

    public function setArvAdherancePercentage(?string $arvAdherancePercentage): self
    {
        $this->arvAdherancePercentage = $arvAdherancePercentage;

        return $this;
    }

    public function getIsAdherancePoor(): ?string
    {
        return $this->isAdherancePoor;
    }

    public function setIsAdherancePoor(?string $isAdherancePoor): self
    {
        $this->isAdherancePoor = $isAdherancePoor;

        return $this;
    }

    public function getConsentToReceiveSms(): ?string
    {
        return $this->consentToReceiveSms;
    }

    public function setConsentToReceiveSms(?string $consentToReceiveSms): self
    {
        $this->consentToReceiveSms = $consentToReceiveSms;

        return $this;
    }

    public function getNumberOfEnhancedSessions(): ?string
    {
        return $this->numberOfEnhancedSessions;
    }

    public function setNumberOfEnhancedSessions(?string $numberOfEnhancedSessions): self
    {
        $this->numberOfEnhancedSessions = $numberOfEnhancedSessions;

        return $this;
    }

    public function getLastVlDateRoutine(): ?\DateTimeInterface
    {
        return $this->lastVlDateRoutine;
    }

    public function setLastVlDateRoutine(?\DateTimeInterface $lastVlDateRoutine): self
    {
        $this->lastVlDateRoutine = $lastVlDateRoutine;

        return $this;
    }

    public function getLastVlResultRoutine(): ?string
    {
        return $this->lastVlResultRoutine;
    }

    public function setLastVlResultRoutine(?string $lastVlResultRoutine): self
    {
        $this->lastVlResultRoutine = $lastVlResultRoutine;

        return $this;
    }

    public function getLastVlSampleTypeRoutine(): ?int
    {
        return $this->lastVlSampleTypeRoutine;
    }

    public function setLastVlSampleTypeRoutine(?int $lastVlSampleTypeRoutine): self
    {
        $this->lastVlSampleTypeRoutine = $lastVlSampleTypeRoutine;

        return $this;
    }

    public function getLastVlDateFailureAc(): ?\DateTimeInterface
    {
        return $this->lastVlDateFailureAc;
    }

    public function setLastVlDateFailureAc(?\DateTimeInterface $lastVlDateFailureAc): self
    {
        $this->lastVlDateFailureAc = $lastVlDateFailureAc;

        return $this;
    }

    public function getLastVlResultFailureAc(): ?string
    {
        return $this->lastVlResultFailureAc;
    }

    public function setLastVlResultFailureAc(?string $lastVlResultFailureAc): self
    {
        $this->lastVlResultFailureAc = $lastVlResultFailureAc;

        return $this;
    }

    public function getLastVlSampleTypeFailureAc(): ?int
    {
        return $this->lastVlSampleTypeFailureAc;
    }

    public function setLastVlSampleTypeFailureAc(?int $lastVlSampleTypeFailureAc): self
    {
        $this->lastVlSampleTypeFailureAc = $lastVlSampleTypeFailureAc;

        return $this;
    }

    public function getLastVlDateFailure(): ?\DateTimeInterface
    {
        return $this->lastVlDateFailure;
    }

    public function setLastVlDateFailure(?\DateTimeInterface $lastVlDateFailure): self
    {
        $this->lastVlDateFailure = $lastVlDateFailure;

        return $this;
    }

    public function getLastVlResultFailure(): ?string
    {
        return $this->lastVlResultFailure;
    }

    public function setLastVlResultFailure(?string $lastVlResultFailure): self
    {
        $this->lastVlResultFailure = $lastVlResultFailure;

        return $this;
    }

    public function getLastVlSampleTypeFailure(): ?int
    {
        return $this->lastVlSampleTypeFailure;
    }

    public function setLastVlSampleTypeFailure(?int $lastVlSampleTypeFailure): self
    {
        $this->lastVlSampleTypeFailure = $lastVlSampleTypeFailure;

        return $this;
    }

    public function getLastVlDateEcd(): ?\DateTimeInterface
    {
        return $this->lastVlDateEcd;
    }

    public function setLastVlDateEcd(?\DateTimeInterface $lastVlDateEcd): self
    {
        $this->lastVlDateEcd = $lastVlDateEcd;

        return $this;
    }

    public function getLastVlResultEcd(): ?string
    {
        return $this->lastVlResultEcd;
    }

    public function setLastVlResultEcd(?string $lastVlResultEcd): self
    {
        $this->lastVlResultEcd = $lastVlResultEcd;

        return $this;
    }

    public function getLastVlDateCf(): ?\DateTimeInterface
    {
        return $this->lastVlDateCf;
    }

    public function setLastVlDateCf(?\DateTimeInterface $lastVlDateCf): self
    {
        $this->lastVlDateCf = $lastVlDateCf;

        return $this;
    }

    public function getLastVlResultCf(): ?string
    {
        return $this->lastVlResultCf;
    }

    public function setLastVlResultCf(?string $lastVlResultCf): self
    {
        $this->lastVlResultCf = $lastVlResultCf;

        return $this;
    }

    public function getLastVlDateIf(): ?\DateTimeInterface
    {
        return $this->lastVlDateIf;
    }

    public function setLastVlDateIf(?\DateTimeInterface $lastVlDateIf): self
    {
        $this->lastVlDateIf = $lastVlDateIf;

        return $this;
    }

    public function getLastVlResultIf(): ?string
    {
        return $this->lastVlResultIf;
    }

    public function setLastVlResultIf(?string $lastVlResultIf): self
    {
        $this->lastVlResultIf = $lastVlResultIf;

        return $this;
    }

    public function getRequestClinicianName(): ?string
    {
        return $this->requestClinicianName;
    }

    public function setRequestClinicianName(?string $requestClinicianName): self
    {
        $this->requestClinicianName = $requestClinicianName;

        return $this;
    }

    public function getTestRequestedOn(): ?\DateTimeInterface
    {
        return $this->testRequestedOn;
    }

    public function setTestRequestedOn(?\DateTimeInterface $testRequestedOn): self
    {
        $this->testRequestedOn = $testRequestedOn;

        return $this;
    }

    public function getRequestClinicianPhoneNumber(): ?string
    {
        return $this->requestClinicianPhoneNumber;
    }

    public function setRequestClinicianPhoneNumber(?string $requestClinicianPhoneNumber): self
    {
        $this->requestClinicianPhoneNumber = $requestClinicianPhoneNumber;

        return $this;
    }

    public function getSampleTestingDate(): ?\DateTimeInterface
    {
        return $this->sampleTestingDate;
    }

    public function setSampleTestingDate(?\DateTimeInterface $sampleTestingDate): self
    {
        $this->sampleTestingDate = $sampleTestingDate;

        return $this;
    }

    public function getVlFocalPerson(): ?string
    {
        return $this->vlFocalPerson;
    }

    public function setVlFocalPerson(?string $vlFocalPerson): self
    {
        $this->vlFocalPerson = $vlFocalPerson;

        return $this;
    }

    public function getVlFocalPersonPhoneNumber(): ?string
    {
        return $this->vlFocalPersonPhoneNumber;
    }

    public function setVlFocalPersonPhoneNumber(?string $vlFocalPersonPhoneNumber): self
    {
        $this->vlFocalPersonPhoneNumber = $vlFocalPersonPhoneNumber;

        return $this;
    }

    public function getSampleReceivedAtVlLabDatetime(): ?\DateTimeInterface
    {
        return $this->sampleReceivedAtVlLabDatetime;
    }

    public function setSampleReceivedAtVlLabDatetime(?\DateTimeInterface $sampleReceivedAtVlLabDatetime): self
    {
        $this->sampleReceivedAtVlLabDatetime = $sampleReceivedAtVlLabDatetime;

        return $this;
    }

    public function getResultDispatchedDatetime(): ?\DateTimeInterface
    {
        return $this->resultDispatchedDatetime;
    }

    public function setResultDispatchedDatetime(?\DateTimeInterface $resultDispatchedDatetime): self
    {
        $this->resultDispatchedDatetime = $resultDispatchedDatetime;

        return $this;
    }

    public function getIsSampleRejected(): ?string
    {
        return $this->isSampleRejected;
    }

    public function setIsSampleRejected(?string $isSampleRejected): self
    {
        $this->isSampleRejected = $isSampleRejected;

        return $this;
    }

    public function getSampleRejectionFacility(): ?int
    {
        return $this->sampleRejectionFacility;
    }

    public function setSampleRejectionFacility(?int $sampleRejectionFacility): self
    {
        $this->sampleRejectionFacility = $sampleRejectionFacility;

        return $this;
    }

    public function getReasonForSampleRejection(): ?int
    {
        return $this->reasonForSampleRejection;
    }

    public function setReasonForSampleRejection(?int $reasonForSampleRejection): self
    {
        $this->reasonForSampleRejection = $reasonForSampleRejection;

        return $this;
    }

    public function getRequestCreatedBy(): ?string
    {
        return $this->requestCreatedBy;
    }

    public function setRequestCreatedBy(string $requestCreatedBy): self
    {
        $this->requestCreatedBy = $requestCreatedBy;

        return $this;
    }

    public function getRequestCreatedDatetime(): ?\DateTimeInterface
    {
        return $this->requestCreatedDatetime;
    }

    public function setRequestCreatedDatetime(?\DateTimeInterface $requestCreatedDatetime): self
    {
        $this->requestCreatedDatetime = $requestCreatedDatetime;

        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;

        return $this;
    }

    public function getLastModifiedDatetime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDatetime;
    }

    public function setLastModifiedDatetime(?\DateTimeInterface $lastModifiedDatetime): self
    {
        $this->lastModifiedDatetime = $lastModifiedDatetime;

        return $this;
    }

    public function getPatientOtherId(): ?string
    {
        return $this->patientOtherId;
    }

    public function setPatientOtherId(?string $patientOtherId): self
    {
        $this->patientOtherId = $patientOtherId;

        return $this;
    }

    public function getPatientAgeInYears(): ?string
    {
        return $this->patientAgeInYears;
    }

    public function setPatientAgeInYears(?string $patientAgeInYears): self
    {
        $this->patientAgeInYears = $patientAgeInYears;

        return $this;
    }

    public function getPatientAgeInMonths(): ?string
    {
        return $this->patientAgeInMonths;
    }

    public function setPatientAgeInMonths(?string $patientAgeInMonths): self
    {
        $this->patientAgeInMonths = $patientAgeInMonths;

        return $this;
    }

    public function getTreatmentInitiatedDate(): ?\DateTimeInterface
    {
        return $this->treatmentInitiatedDate;
    }

    public function setTreatmentInitiatedDate(?\DateTimeInterface $treatmentInitiatedDate): self
    {
        $this->treatmentInitiatedDate = $treatmentInitiatedDate;

        return $this;
    }

    public function getPatientAncNo(): ?string
    {
        return $this->patientAncNo;
    }

    public function setPatientAncNo(?string $patientAncNo): self
    {
        $this->patientAncNo = $patientAncNo;

        return $this;
    }

    public function getTreatmentDetails(): ?string
    {
        return $this->treatmentDetails;
    }

    public function setTreatmentDetails(?string $treatmentDetails): self
    {
        $this->treatmentDetails = $treatmentDetails;

        return $this;
    }

    public function getSampleVisitType(): ?string
    {
        return $this->sampleVisitType;
    }

    public function setSampleVisitType(?string $sampleVisitType): self
    {
        $this->sampleVisitType = $sampleVisitType;

        return $this;
    }

    public function getVlSampleSuspectedTreatmentFailureAt(): ?string
    {
        return $this->vlSampleSuspectedTreatmentFailureAt;
    }

    public function setVlSampleSuspectedTreatmentFailureAt(?string $vlSampleSuspectedTreatmentFailureAt): self
    {
        $this->vlSampleSuspectedTreatmentFailureAt = $vlSampleSuspectedTreatmentFailureAt;

        return $this;
    }

    public function getLabName(): ?string
    {
        return $this->labName;
    }

    public function setLabName(?string $labName): self
    {
        $this->labName = $labName;

        return $this;
    }

    public function getLabId(): ?int
    {
        return $this->labId;
    }

    public function setLabId(?int $labId): self
    {
        $this->labId = $labId;

        return $this;
    }

    public function getLabCode(): ?int
    {
        return $this->labCode;
    }

    public function setLabCode(?int $labCode): self
    {
        $this->labCode = $labCode;

        return $this;
    }

    public function getLabContactPerson(): ?string
    {
        return $this->labContactPerson;
    }

    public function setLabContactPerson(?string $labContactPerson): self
    {
        $this->labContactPerson = $labContactPerson;

        return $this;
    }

    public function getLabPhoneNumber(): ?string
    {
        return $this->labPhoneNumber;
    }

    public function setLabPhoneNumber(?string $labPhoneNumber): self
    {
        $this->labPhoneNumber = $labPhoneNumber;

        return $this;
    }

    public function getSampleTestedDatetime(): ?\DateTimeInterface
    {
        return $this->sampleTestedDatetime;
    }

    public function setSampleTestedDatetime(?\DateTimeInterface $sampleTestedDatetime): self
    {
        $this->sampleTestedDatetime = $sampleTestedDatetime;

        return $this;
    }

    public function getResultValueLog(): ?string
    {
        return $this->resultValueLog;
    }

    public function setResultValueLog(?string $resultValueLog): self
    {
        $this->resultValueLog = $resultValueLog;

        return $this;
    }

    public function getResultValueAbsolute(): ?string
    {
        return $this->resultValueAbsolute;
    }

    public function setResultValueAbsolute(?string $resultValueAbsolute): self
    {
        $this->resultValueAbsolute = $resultValueAbsolute;

        return $this;
    }

    public function getResultValueText(): ?string
    {
        return $this->resultValueText;
    }

    public function setResultValueText(?string $resultValueText): self
    {
        $this->resultValueText = $resultValueText;

        return $this;
    }

    public function getResultValueAbsoluteDecimal(): ?string
    {
        return $this->resultValueAbsoluteDecimal;
    }

    public function setResultValueAbsoluteDecimal(?string $resultValueAbsoluteDecimal): self
    {
        $this->resultValueAbsoluteDecimal = $resultValueAbsoluteDecimal;

        return $this;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(?string $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getApproverComments(): ?string
    {
        return $this->approverComments;
    }

    public function setApproverComments(?string $approverComments): self
    {
        $this->approverComments = $approverComments;

        return $this;
    }

    public function getReasonForVlResultChanges(): ?string
    {
        return $this->reasonForVlResultChanges;
    }

    public function setReasonForVlResultChanges(?string $reasonForVlResultChanges): self
    {
        $this->reasonForVlResultChanges = $reasonForVlResultChanges;

        return $this;
    }

    public function getLotNumber(): ?string
    {
        return $this->lotNumber;
    }

    public function setLotNumber(?string $lotNumber): self
    {
        $this->lotNumber = $lotNumber;

        return $this;
    }

    public function getLotExpirationDate(): ?\DateTimeInterface
    {
        return $this->lotExpirationDate;
    }

    public function setLotExpirationDate(?\DateTimeInterface $lotExpirationDate): self
    {
        $this->lotExpirationDate = $lotExpirationDate;

        return $this;
    }

    public function getResultApprovedBy(): ?string
    {
        return $this->resultApprovedBy;
    }

    public function setResultApprovedBy(?string $resultApprovedBy): self
    {
        $this->resultApprovedBy = $resultApprovedBy;

        return $this;
    }

    public function getResultApprovedDatetime(): ?\DateTimeInterface
    {
        return $this->resultApprovedDatetime;
    }

    public function setResultApprovedDatetime(?\DateTimeInterface $resultApprovedDatetime): self
    {
        $this->resultApprovedDatetime = $resultApprovedDatetime;

        return $this;
    }

    public function getResultReviewedBy(): ?string
    {
        return $this->resultReviewedBy;
    }

    public function setResultReviewedBy(?string $resultReviewedBy): self
    {
        $this->resultReviewedBy = $resultReviewedBy;

        return $this;
    }

    public function getResultReviewedDatetime(): ?\DateTimeInterface
    {
        return $this->resultReviewedDatetime;
    }

    public function setResultReviewedDatetime(?\DateTimeInterface $resultReviewedDatetime): self
    {
        $this->resultReviewedDatetime = $resultReviewedDatetime;

        return $this;
    }

    public function getTestMethods(): ?string
    {
        return $this->testMethods;
    }

    public function setTestMethods(?string $testMethods): self
    {
        $this->testMethods = $testMethods;

        return $this;
    }

    public function getContactCompleteStatus(): ?string
    {
        return $this->contactCompleteStatus;
    }

    public function setContactCompleteStatus(?string $contactCompleteStatus): self
    {
        $this->contactCompleteStatus = $contactCompleteStatus;

        return $this;
    }

    public function getLastViralLoadDate(): ?\DateTimeInterface
    {
        return $this->lastViralLoadDate;
    }

    public function setLastViralLoadDate(?\DateTimeInterface $lastViralLoadDate): self
    {
        $this->lastViralLoadDate = $lastViralLoadDate;

        return $this;
    }

    public function getLastViralLoadResult(): ?string
    {
        return $this->lastViralLoadResult;
    }

    public function setLastViralLoadResult(?string $lastViralLoadResult): self
    {
        $this->lastViralLoadResult = $lastViralLoadResult;

        return $this;
    }

    public function getLastVlResultInLog(): ?string
    {
        return $this->lastVlResultInLog;
    }

    public function setLastVlResultInLog(?string $lastVlResultInLog): self
    {
        $this->lastVlResultInLog = $lastVlResultInLog;

        return $this;
    }

    public function getReasonForVlTesting(): ?string
    {
        return $this->reasonForVlTesting;
    }

    public function setReasonForVlTesting(?string $reasonForVlTesting): self
    {
        $this->reasonForVlTesting = $reasonForVlTesting;

        return $this;
    }

    public function getDrugSubstitution(): ?string
    {
        return $this->drugSubstitution;
    }

    public function setDrugSubstitution(?string $drugSubstitution): self
    {
        $this->drugSubstitution = $drugSubstitution;

        return $this;
    }

    public function getSampleCollectedBy(): ?string
    {
        return $this->sampleCollectedBy;
    }

    public function setSampleCollectedBy(?string $sampleCollectedBy): self
    {
        $this->sampleCollectedBy = $sampleCollectedBy;

        return $this;
    }

    public function getFacilityComments(): ?string
    {
        return $this->facilityComments;
    }

    public function setFacilityComments(?string $facilityComments): self
    {
        $this->facilityComments = $facilityComments;

        return $this;
    }

    public function getVlTestPlatform(): ?string
    {
        return $this->vlTestPlatform;
    }

    public function setVlTestPlatform(?string $vlTestPlatform): self
    {
        $this->vlTestPlatform = $vlTestPlatform;

        return $this;
    }

    public function getImportMachineName(): ?int
    {
        return $this->importMachineName;
    }

    public function setImportMachineName(?int $importMachineName): self
    {
        $this->importMachineName = $importMachineName;

        return $this;
    }

    public function getFacilitySupportPartner(): ?string
    {
        return $this->facilitySupportPartner;
    }

    public function setFacilitySupportPartner(?string $facilitySupportPartner): self
    {
        $this->facilitySupportPartner = $facilitySupportPartner;

        return $this;
    }

    public function getHasPatientChangedRegimen(): ?string
    {
        return $this->hasPatientChangedRegimen;
    }

    public function setHasPatientChangedRegimen(?string $hasPatientChangedRegimen): self
    {
        $this->hasPatientChangedRegimen = $hasPatientChangedRegimen;

        return $this;
    }

    public function getReasonForRegimenChange(): ?string
    {
        return $this->reasonForRegimenChange;
    }

    public function setReasonForRegimenChange(?string $reasonForRegimenChange): self
    {
        $this->reasonForRegimenChange = $reasonForRegimenChange;

        return $this;
    }

    public function getRegimenChangeDate(): ?\DateTimeInterface
    {
        return $this->regimenChangeDate;
    }

    public function setRegimenChangeDate(?\DateTimeInterface $regimenChangeDate): self
    {
        $this->regimenChangeDate = $regimenChangeDate;

        return $this;
    }

    public function getPlasmaConservationTemperature(): ?float
    {
        return $this->plasmaConservationTemperature;
    }

    public function setPlasmaConservationTemperature(?float $plasmaConservationTemperature): self
    {
        $this->plasmaConservationTemperature = $plasmaConservationTemperature;

        return $this;
    }

    public function getPlasmaConservationDuration(): ?string
    {
        return $this->plasmaConservationDuration;
    }

    public function setPlasmaConservationDuration(?string $plasmaConservationDuration): self
    {
        $this->plasmaConservationDuration = $plasmaConservationDuration;

        return $this;
    }

    public function getPhysicianName(): ?string
    {
        return $this->physicianName;
    }

    public function setPhysicianName(?string $physicianName): self
    {
        $this->physicianName = $physicianName;

        return $this;
    }

    public function getDateTestOrderedByPhysician(): ?\DateTimeInterface
    {
        return $this->dateTestOrderedByPhysician;
    }

    public function setDateTestOrderedByPhysician(?\DateTimeInterface $dateTestOrderedByPhysician): self
    {
        $this->dateTestOrderedByPhysician = $dateTestOrderedByPhysician;

        return $this;
    }

    public function getVlTestNumber(): ?string
    {
        return $this->vlTestNumber;
    }

    public function setVlTestNumber(?string $vlTestNumber): self
    {
        $this->vlTestNumber = $vlTestNumber;

        return $this;
    }

    public function getDateDispatchedFromClinicToLab(): ?\DateTimeInterface
    {
        return $this->dateDispatchedFromClinicToLab;
    }

    public function setDateDispatchedFromClinicToLab(?\DateTimeInterface $dateDispatchedFromClinicToLab): self
    {
        $this->dateDispatchedFromClinicToLab = $dateDispatchedFromClinicToLab;

        return $this;
    }

    public function getResultPrintedDatetime(): ?\DateTimeInterface
    {
        return $this->resultPrintedDatetime;
    }

    public function setResultPrintedDatetime(?\DateTimeInterface $resultPrintedDatetime): self
    {
        $this->resultPrintedDatetime = $resultPrintedDatetime;

        return $this;
    }

    public function getResultSmsSentDatetime(): ?\DateTimeInterface
    {
        return $this->resultSmsSentDatetime;
    }

    public function setResultSmsSentDatetime(?\DateTimeInterface $resultSmsSentDatetime): self
    {
        $this->resultSmsSentDatetime = $resultSmsSentDatetime;

        return $this;
    }

    public function getIsRequestMailSent(): ?string
    {
        return $this->isRequestMailSent;
    }

    public function setIsRequestMailSent(string $isRequestMailSent): self
    {
        $this->isRequestMailSent = $isRequestMailSent;

        return $this;
    }

    public function getRequestMailDatetime(): ?\DateTimeInterface
    {
        return $this->requestMailDatetime;
    }

    public function setRequestMailDatetime(?\DateTimeInterface $requestMailDatetime): self
    {
        $this->requestMailDatetime = $requestMailDatetime;

        return $this;
    }

    public function getIsResultMailSent(): ?string
    {
        return $this->isResultMailSent;
    }

    public function setIsResultMailSent(string $isResultMailSent): self
    {
        $this->isResultMailSent = $isResultMailSent;

        return $this;
    }

    public function getResultMailDatetime(): ?\DateTimeInterface
    {
        return $this->resultMailDatetime;
    }

    public function setResultMailDatetime(?\DateTimeInterface $resultMailDatetime): self
    {
        $this->resultMailDatetime = $resultMailDatetime;

        return $this;
    }

    public function getIsResultSmsSent(): ?string
    {
        return $this->isResultSmsSent;
    }

    public function setIsResultSmsSent(string $isResultSmsSent): self
    {
        $this->isResultSmsSent = $isResultSmsSent;

        return $this;
    }

    public function getTestRequestExport(): ?int
    {
        return $this->testRequestExport;
    }

    public function setTestRequestExport(int $testRequestExport): self
    {
        $this->testRequestExport = $testRequestExport;

        return $this;
    }

    public function getTestRequestImport(): ?int
    {
        return $this->testRequestImport;
    }

    public function setTestRequestImport(int $testRequestImport): self
    {
        $this->testRequestImport = $testRequestImport;

        return $this;
    }

    public function getTestResultExport(): ?int
    {
        return $this->testResultExport;
    }

    public function setTestResultExport(int $testResultExport): self
    {
        $this->testResultExport = $testResultExport;

        return $this;
    }

    public function getTestResultImport(): ?int
    {
        return $this->testResultImport;
    }

    public function setTestResultImport(int $testResultImport): self
    {
        $this->testResultImport = $testResultImport;

        return $this;
    }

    public function getRequestExportedDatetime(): ?\DateTimeInterface
    {
        return $this->requestExportedDatetime;
    }

    public function setRequestExportedDatetime(?\DateTimeInterface $requestExportedDatetime): self
    {
        $this->requestExportedDatetime = $requestExportedDatetime;

        return $this;
    }

    public function getRequestImportedDatetime(): ?\DateTimeInterface
    {
        return $this->requestImportedDatetime;
    }

    public function setRequestImportedDatetime(?\DateTimeInterface $requestImportedDatetime): self
    {
        $this->requestImportedDatetime = $requestImportedDatetime;

        return $this;
    }

    public function getResultExportedDatetime(): ?\DateTimeInterface
    {
        return $this->resultExportedDatetime;
    }

    public function setResultExportedDatetime(?\DateTimeInterface $resultExportedDatetime): self
    {
        $this->resultExportedDatetime = $resultExportedDatetime;

        return $this;
    }

    public function getResultImportedDatetime(): ?\DateTimeInterface
    {
        return $this->resultImportedDatetime;
    }

    public function setResultImportedDatetime(?\DateTimeInterface $resultImportedDatetime): self
    {
        $this->resultImportedDatetime = $resultImportedDatetime;

        return $this;
    }

    public function getResultStatus(): ?int
    {
        return $this->resultStatus;
    }

    public function setResultStatus(int $resultStatus): self
    {
        $this->resultStatus = $resultStatus;

        return $this;
    }

    public function getImportMachineFileName(): ?string
    {
        return $this->importMachineFileName;
    }

    public function setImportMachineFileName(?string $importMachineFileName): self
    {
        $this->importMachineFileName = $importMachineFileName;

        return $this;
    }

    public function getManualResultEntry(): ?string
    {
        return $this->manualResultEntry;
    }

    public function setManualResultEntry(?string $manualResultEntry): self
    {
        $this->manualResultEntry = $manualResultEntry;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getWard(): ?string
    {
        return $this->ward;
    }

    public function setWard(?string $ward): self
    {
        $this->ward = $ward;

        return $this;
    }

    public function getArtCdCells(): ?string
    {
        return $this->artCdCells;
    }

    public function setArtCdCells(?string $artCdCells): self
    {
        $this->artCdCells = $artCdCells;

        return $this;
    }

    public function getArtCdDate(): ?\DateTimeInterface
    {
        return $this->artCdDate;
    }

    public function setArtCdDate(?\DateTimeInterface $artCdDate): self
    {
        $this->artCdDate = $artCdDate;

        return $this;
    }

    public function getWhoClinicalStage(): ?string
    {
        return $this->whoClinicalStage;
    }

    public function setWhoClinicalStage(?string $whoClinicalStage): self
    {
        $this->whoClinicalStage = $whoClinicalStage;

        return $this;
    }

    public function getReasonTestingPng(): ?string
    {
        return $this->reasonTestingPng;
    }

    public function setReasonTestingPng(?string $reasonTestingPng): self
    {
        $this->reasonTestingPng = $reasonTestingPng;

        return $this;
    }

    public function getTechNamePng(): ?string
    {
        return $this->techNamePng;
    }

    public function setTechNamePng(?string $techNamePng): self
    {
        $this->techNamePng = $techNamePng;

        return $this;
    }

    public function getQcTechName(): ?string
    {
        return $this->qcTechName;
    }

    public function setQcTechName(?string $qcTechName): self
    {
        $this->qcTechName = $qcTechName;

        return $this;
    }

    public function getQcTechSign(): ?string
    {
        return $this->qcTechSign;
    }

    public function setQcTechSign(?string $qcTechSign): self
    {
        $this->qcTechSign = $qcTechSign;

        return $this;
    }

    public function getQcDate(): ?string
    {
        return $this->qcDate;
    }

    public function setQcDate(?string $qcDate): self
    {
        $this->qcDate = $qcDate;

        return $this;
    }

    public function getWholeBloodMl(): ?string
    {
        return $this->wholeBloodMl;
    }

    public function setWholeBloodMl(?string $wholeBloodMl): self
    {
        $this->wholeBloodMl = $wholeBloodMl;

        return $this;
    }

    public function getWholeBloodVial(): ?string
    {
        return $this->wholeBloodVial;
    }

    public function setWholeBloodVial(?string $wholeBloodVial): self
    {
        $this->wholeBloodVial = $wholeBloodVial;

        return $this;
    }

    public function getPlasmaMl(): ?string
    {
        return $this->plasmaMl;
    }

    public function setPlasmaMl(?string $plasmaMl): self
    {
        $this->plasmaMl = $plasmaMl;

        return $this;
    }

    public function getPlasmaVial(): ?string
    {
        return $this->plasmaVial;
    }

    public function setPlasmaVial(?string $plasmaVial): self
    {
        $this->plasmaVial = $plasmaVial;

        return $this;
    }

    public function getPlasmaProcessTime(): ?string
    {
        return $this->plasmaProcessTime;
    }

    public function setPlasmaProcessTime(?string $plasmaProcessTime): self
    {
        $this->plasmaProcessTime = $plasmaProcessTime;

        return $this;
    }

    public function getPlasmaProcessTech(): ?string
    {
        return $this->plasmaProcessTech;
    }

    public function setPlasmaProcessTech(?string $plasmaProcessTech): self
    {
        $this->plasmaProcessTech = $plasmaProcessTech;

        return $this;
    }

    public function getBatchQuality(): ?string
    {
        return $this->batchQuality;
    }

    public function setBatchQuality(?string $batchQuality): self
    {
        $this->batchQuality = $batchQuality;

        return $this;
    }

    public function getSampleTestQuality(): ?string
    {
        return $this->sampleTestQuality;
    }

    public function setSampleTestQuality(?string $sampleTestQuality): self
    {
        $this->sampleTestQuality = $sampleTestQuality;

        return $this;
    }

    public function getRepeatSampleCollection(): ?string
    {
        return $this->repeatSampleCollection;
    }

    public function setRepeatSampleCollection(?string $repeatSampleCollection): self
    {
        $this->repeatSampleCollection = $repeatSampleCollection;

        return $this;
    }

    public function getFailedTestDate(): ?\DateTimeInterface
    {
        return $this->failedTestDate;
    }

    public function setFailedTestDate(?\DateTimeInterface $failedTestDate): self
    {
        $this->failedTestDate = $failedTestDate;

        return $this;
    }

    public function getFailedTestTech(): ?string
    {
        return $this->failedTestTech;
    }

    public function setFailedTestTech(?string $failedTestTech): self
    {
        $this->failedTestTech = $failedTestTech;

        return $this;
    }

    public function getFailedVlResult(): ?string
    {
        return $this->failedVlResult;
    }

    public function setFailedVlResult(?string $failedVlResult): self
    {
        $this->failedVlResult = $failedVlResult;

        return $this;
    }

    public function getFailedBatchQuality(): ?string
    {
        return $this->failedBatchQuality;
    }

    public function setFailedBatchQuality(?string $failedBatchQuality): self
    {
        $this->failedBatchQuality = $failedBatchQuality;

        return $this;
    }

    public function getFailedSampleTestQuality(): ?string
    {
        return $this->failedSampleTestQuality;
    }

    public function setFailedSampleTestQuality(?string $failedSampleTestQuality): self
    {
        $this->failedSampleTestQuality = $failedSampleTestQuality;

        return $this;
    }

    public function getFailedBatchId(): ?string
    {
        return $this->failedBatchId;
    }

    public function setFailedBatchId(?string $failedBatchId): self
    {
        $this->failedBatchId = $failedBatchId;

        return $this;
    }

    public function getClinicDate(): ?\DateTimeInterface
    {
        return $this->clinicDate;
    }

    public function setClinicDate(?\DateTimeInterface $clinicDate): self
    {
        $this->clinicDate = $clinicDate;

        return $this;
    }

    public function getReportDate(): ?\DateTimeInterface
    {
        return $this->reportDate;
    }

    public function setReportDate(?\DateTimeInterface $reportDate): self
    {
        $this->reportDate = $reportDate;

        return $this;
    }

    public function getSampleToTransport(): ?string
    {
        return $this->sampleToTransport;
    }

    public function setSampleToTransport(?string $sampleToTransport): self
    {
        $this->sampleToTransport = $sampleToTransport;

        return $this;
    }

    public function getRequestingProfessionalNumber(): ?string
    {
        return $this->requestingProfessionalNumber;
    }

    public function setRequestingProfessionalNumber(?string $requestingProfessionalNumber): self
    {
        $this->requestingProfessionalNumber = $requestingProfessionalNumber;

        return $this;
    }

    public function getRequestingCategory(): ?string
    {
        return $this->requestingCategory;
    }

    public function setRequestingCategory(?string $requestingCategory): self
    {
        $this->requestingCategory = $requestingCategory;

        return $this;
    }

    public function getRequestingVlServiceSector(): ?string
    {
        return $this->requestingVlServiceSector;
    }

    public function setRequestingVlServiceSector(?string $requestingVlServiceSector): self
    {
        $this->requestingVlServiceSector = $requestingVlServiceSector;

        return $this;
    }

    public function getRequestingFacilityId(): ?int
    {
        return $this->requestingFacilityId;
    }

    public function setRequestingFacilityId(?int $requestingFacilityId): self
    {
        $this->requestingFacilityId = $requestingFacilityId;

        return $this;
    }

    public function getRequestingPerson(): ?string
    {
        return $this->requestingPerson;
    }

    public function setRequestingPerson(?string $requestingPerson): self
    {
        $this->requestingPerson = $requestingPerson;

        return $this;
    }

    public function getRequestingPhone(): ?string
    {
        return $this->requestingPhone;
    }

    public function setRequestingPhone(?string $requestingPhone): self
    {
        $this->requestingPhone = $requestingPhone;

        return $this;
    }

    public function getRequestingDate(): ?\DateTimeInterface
    {
        return $this->requestingDate;
    }

    public function setRequestingDate(?\DateTimeInterface $requestingDate): self
    {
        $this->requestingDate = $requestingDate;

        return $this;
    }

    public function getCollectionSite(): ?string
    {
        return $this->collectionSite;
    }

    public function setCollectionSite(?string $collectionSite): self
    {
        $this->collectionSite = $collectionSite;

        return $this;
    }

    public function getDataSync(): ?string
    {
        return $this->dataSync;
    }

    public function setDataSync(string $dataSync): self
    {
        $this->dataSync = $dataSync;

        return $this;
    }

    public function getRemoteSample(): ?string
    {
        return $this->remoteSample;
    }

    public function setRemoteSample(string $remoteSample): self
    {
        $this->remoteSample = $remoteSample;

        return $this;
    }

    public function getLabpersonnel(): ?string
    {
        return $this->labpersonnel;
    }

    public function setLabpersonnel(?string $labpersonnel): self
    {
        $this->labpersonnel = $labpersonnel;

        return $this;
    }

    public function getSdistrict(): ?string
    {
        return $this->sdistrict;
    }

    public function setSdistrict(?string $sdistrict): self
    {
        $this->sdistrict = $sdistrict;

        return $this;
    }

    public function getSampleType1(): ?string
    {
        return $this->sampleType1;
    }

    public function setSampleType1(?string $sampleType1): self
    {
        $this->sampleType1 = $sampleType1;

        return $this;
    }

    public function getEpid(): ?string
    {
        return $this->epid;
    }

    public function setEpid(?string $epid): self
    {
        $this->epid = $epid;

        return $this;
    }

    public function getGps(): ?string
    {
        return $this->gps;
    }

    public function setGps(?string $gps): self
    {
        $this->gps = $gps;

        return $this;
    }

    public function getSenddate(): ?\DateTimeInterface
    {
        return $this->senddate;
    }

    public function setSenddate(?\DateTimeInterface $senddate): self
    {
        $this->senddate = $senddate;

        return $this;
    }

    public function getTest(): ?string
    {
        return $this->test;
    }

    public function setTest(?string $test): self
    {
        $this->test = $test;

        return $this;
    }

    public function getUpdatedate(): ?\DateTimeInterface
    {
        return $this->updatedate;
    }

    public function setUpdatedate(?\DateTimeInterface $updatedate): self
    {
        $this->updatedate = $updatedate;

        return $this;
    }

    public function getDisease(): ?string
    {
        return $this->disease;
    }

    public function setDisease(?string $disease): self
    {
        $this->disease = $disease;

        return $this;
    }

    public function getGaurdianname(): ?string
    {
        return $this->gaurdianname;
    }

    public function setGaurdianname(?string $gaurdianname): self
    {
        $this->gaurdianname = $gaurdianname;

        return $this;
    }

    public function getNohousehold(): ?int
    {
        return $this->nohousehold;
    }

    public function setNohousehold(?int $nohousehold): self
    {
        $this->nohousehold = $nohousehold;

        return $this;
    }

    public function getNotifydate(): ?\DateTimeInterface
    {
        return $this->notifydate;
    }

    public function setNotifydate(?\DateTimeInterface $notifydate): self
    {
        $this->notifydate = $notifydate;

        return $this;
    }

    public function getResidentialadd(): ?string
    {
        return $this->residentialadd;
    }

    public function setResidentialadd(?string $residentialadd): self
    {
        $this->residentialadd = $residentialadd;

        return $this;
    }

    public function getSymptoms(): ?string
    {
        return $this->symptoms;
    }

    public function setSymptoms(?string $symptoms): self
    {
        $this->symptoms = $symptoms;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getLabdate(): ?\DateTimeInterface
    {
        return $this->labdate;
    }

    public function setLabdate(?\DateTimeInterface $labdate): self
    {
        $this->labdate = $labdate;

        return $this;
    }

    public function getRcountry(): ?string
    {
        return $this->rcountry;
    }

    public function setRcountry(?string $rcountry): self
    {
        $this->rcountry = $rcountry;

        return $this;
    }

    public function getOutcome(): ?string
    {
        return $this->outcome;
    }

    public function setOutcome(?string $outcome): self
    {
        $this->outcome = $outcome;

        return $this;
    }

    public function getFclassification(): ?string
    {
        return $this->fclassification;
    }

    public function setFclassification(?string $fclassification): self
    {
        $this->fclassification = $fclassification;

        return $this;
    }

    public function getOrganismtypes(): ?string
    {
        return $this->organismtypes;
    }

    public function setOrganismtypes(?string $organismtypes): self
    {
        $this->organismtypes = $organismtypes;

        return $this;
    }

    public function getPersonsending(): ?string
    {
        return $this->personsending;
    }

    public function setPersonsending(?string $personsending): self
    {
        $this->personsending = $personsending;

        return $this;
    }

    public function getOrganismsensitivity(): ?string
    {
        return $this->organismsensitivity;
    }

    public function setOrganismsensitivity(?string $organismsensitivity): self
    {
        $this->organismsensitivity = $organismsensitivity;

        return $this;
    }

    public function getOrganismresistance(): ?string
    {
        return $this->organismresistance;
    }

    public function setOrganismresistance(?string $organismresistance): self
    {
        $this->organismresistance = $organismresistance;

        return $this;
    }

    public function getRdistrict(): ?string
    {
        return $this->rdistrict;
    }

    public function setRdistrict(?string $rdistrict): self
    {
        $this->rdistrict = $rdistrict;

        return $this;
    }

    public function getSpecimencondition(): ?string
    {
        return $this->specimencondition;
    }

    public function setSpecimencondition(?string $specimencondition): self
    {
        $this->specimencondition = $specimencondition;

        return $this;
    }


}

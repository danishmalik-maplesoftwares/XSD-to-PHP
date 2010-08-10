<?php
namespace oasis\names\specification\ubl\schema\xsd\CommonAggregateComponents_2;

/**
 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2
 * @xmlType 
 * @xmlName FinancialInstitutionType
 * @xmlComponentType ABIE
 * @xmlDictionaryEntryName Financial Institution. Details
 * @xmlDefinition Information about a Financial Institution.
 * @xmlObjectClass Financial Institution
 */
class FinancialInstitutionType
	{

	
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Financial Institution. Identifier
	 * @Definition The identifier for the Financial Institution expressed as a code; ISO 9362 BIC (Bank Identification Code) is recommended.
	 * @Cardinality 0..1
	 * @ObjectClass Financial Institution
	 * @PropertyTerm Identifier
	 * @RepresentationTerm Identifier
	 * @DataType Identifier. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName ID
	 * @var ID
	 */
	public $ID;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Financial Institution. Name
	 * @Definition The name of the Financial Institution.
	 * @Cardinality 0..1
	 * @ObjectClass Financial Institution
	 * @PropertyTerm Name
	 * @RepresentationTerm Name
	 * @DataType Name. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName Name
	 * @var Name
	 */
	public $Name;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Financial Institution. Address
	 * @Definition An association to Address.
	 * @Cardinality 0..1
	 * @ObjectClass Financial Institution
	 * @PropertyTerm Address
	 * @AssociatedObjectClass Address
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName Address
	 * @var Address
	 */
	public $Address;


} // end class FinancialInstitutionType
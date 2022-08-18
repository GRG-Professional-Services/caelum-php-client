<?php
/**
 * DocumentResponse200Data
 *
 * PHP version 5
 *
 * @category Class
 * @package  CaelumPhpClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Client Public API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2022-06-10T08:58:29Z
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CaelumPhpClient\Model;

use \ArrayAccess;
use \CaelumPhpClient\ObjectSerializer;

/**
 * DocumentResponse200Data Class Doc Comment
 *
 * @category Class
 * @package  CaelumPhpClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentResponse200Data implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentResponse200_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'userId' => 'string',
'queueId' => 'string',
'organizationId' => 'string',
'fileName' => 'string',
'originalEmailFileName' => 'string',
'filePath' => 'string',
'pages' => '\CaelumPhpClient\Model\DocumentResponse200DataPages[]',
'thumb' => 'string',
'fileSize' => 'float',
'modified' => 'string',
'created' => 'string',
'modifiedBy' => 'string',
'status' => 'string',
'state' => 'string',
'stateHolder' => 'string',
'workflow' => 'null[]',
'workflowStepId' => 'string',
'fieldValues' => 'null[]',
'docErrors' => '\CaelumPhpClient\Model\DocumentResponse200DataDocErrors[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'userId' => null,
'queueId' => null,
'organizationId' => null,
'fileName' => null,
'originalEmailFileName' => null,
'filePath' => null,
'pages' => null,
'thumb' => null,
'fileSize' => null,
'modified' => null,
'created' => null,
'modifiedBy' => null,
'status' => null,
'state' => null,
'stateHolder' => null,
'workflow' => null,
'workflowStepId' => null,
'fieldValues' => null,
'docErrors' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => '_id',
'userId' => 'userId',
'queueId' => 'queueId',
'organizationId' => 'organizationId',
'fileName' => 'fileName',
'originalEmailFileName' => 'originalEmailFileName',
'filePath' => 'filePath',
'pages' => 'pages',
'thumb' => 'thumb',
'fileSize' => 'fileSize',
'modified' => 'modified',
'created' => 'created',
'modifiedBy' => 'modifiedBy',
'status' => 'status',
'state' => 'state',
'stateHolder' => 'stateHolder',
'workflow' => 'workflow',
'workflowStepId' => 'workflowStepId',
'fieldValues' => 'fieldValues',
'docErrors' => 'docErrors'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'userId' => 'setUserId',
'queueId' => 'setQueueId',
'organizationId' => 'setOrganizationId',
'fileName' => 'setFileName',
'originalEmailFileName' => 'setOriginalEmailFileName',
'filePath' => 'setFilePath',
'pages' => 'setPages',
'thumb' => 'setThumb',
'fileSize' => 'setFileSize',
'modified' => 'setModified',
'created' => 'setCreated',
'modifiedBy' => 'setModifiedBy',
'status' => 'setStatus',
'state' => 'setState',
'stateHolder' => 'setStateHolder',
'workflow' => 'setWorkflow',
'workflowStepId' => 'setWorkflowStepId',
'fieldValues' => 'setFieldValues',
'docErrors' => 'setDocErrors'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'userId' => 'getUserId',
'queueId' => 'getQueueId',
'organizationId' => 'getOrganizationId',
'fileName' => 'getFileName',
'originalEmailFileName' => 'getOriginalEmailFileName',
'filePath' => 'getFilePath',
'pages' => 'getPages',
'thumb' => 'getThumb',
'fileSize' => 'getFileSize',
'modified' => 'getModified',
'created' => 'getCreated',
'modifiedBy' => 'getModifiedBy',
'status' => 'getStatus',
'state' => 'getState',
'stateHolder' => 'getStateHolder',
'workflow' => 'getWorkflow',
'workflowStepId' => 'getWorkflowStepId',
'fieldValues' => 'getFieldValues',
'docErrors' => 'getDocErrors'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['queueId'] = isset($data['queueId']) ? $data['queueId'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['originalEmailFileName'] = isset($data['originalEmailFileName']) ? $data['originalEmailFileName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
        $this->container['thumb'] = isset($data['thumb']) ? $data['thumb'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['stateHolder'] = isset($data['stateHolder']) ? $data['stateHolder'] : null;
        $this->container['workflow'] = isset($data['workflow']) ? $data['workflow'] : null;
        $this->container['workflowStepId'] = isset($data['workflowStepId']) ? $data['workflowStepId'] : null;
        $this->container['fieldValues'] = isset($data['fieldValues']) ? $data['fieldValues'] : null;
        $this->container['docErrors'] = isset($data['docErrors']) ? $data['docErrors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string $userId userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets queueId
     *
     * @return string
     */
    public function getQueueId()
    {
        return $this->container['queueId'];
    }

    /**
     * Sets queueId
     *
     * @param string $queueId queueId
     *
     * @return $this
     */
    public function setQueueId($queueId)
    {
        $this->container['queueId'] = $queueId;

        return $this;
    }

    /**
     * Gets organizationId
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     *
     * @param string $organizationId organizationId
     *
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
     * Sets fileName
     *
     * @param string $fileName fileName
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;

        return $this;
    }

    /**
     * Gets originalEmailFileName
     *
     * @return string
     */
    public function getOriginalEmailFileName()
    {
        return $this->container['originalEmailFileName'];
    }

    /**
     * Sets originalEmailFileName
     *
     * @param string $originalEmailFileName originalEmailFileName
     *
     * @return $this
     */
    public function setOriginalEmailFileName($originalEmailFileName)
    {
        $this->container['originalEmailFileName'] = $originalEmailFileName;

        return $this;
    }

    /**
     * Gets filePath
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
     * Sets filePath
     *
     * @param string $filePath filePath
     *
     * @return $this
     */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;

        return $this;
    }

    /**
     * Gets pages
     *
     * @return \CaelumPhpClient\Model\DocumentResponse200DataPages[]
     */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
     * Sets pages
     *
     * @param \CaelumPhpClient\Model\DocumentResponse200DataPages[] $pages pages
     *
     * @return $this
     */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;

        return $this;
    }

    /**
     * Gets thumb
     *
     * @return string
     */
    public function getThumb()
    {
        return $this->container['thumb'];
    }

    /**
     * Sets thumb
     *
     * @param string $thumb thumb
     *
     * @return $this
     */
    public function setThumb($thumb)
    {
        $this->container['thumb'] = $thumb;

        return $this;
    }

    /**
     * Gets fileSize
     *
     * @return float
     */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
     * Sets fileSize
     *
     * @param float $fileSize fileSize
     *
     * @return $this
     */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return string
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param string $modified modified
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modifiedBy
     *
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
     * Sets modifiedBy
     *
     * @param string $modifiedBy modifiedBy
     *
     * @return $this
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets stateHolder
     *
     * @return string
     */
    public function getStateHolder()
    {
        return $this->container['stateHolder'];
    }

    /**
     * Sets stateHolder
     *
     * @param string $stateHolder stateHolder
     *
     * @return $this
     */
    public function setStateHolder($stateHolder)
    {
        $this->container['stateHolder'] = $stateHolder;

        return $this;
    }

    /**
     * Gets workflow
     *
     * @return null[]
     */
    public function getWorkflow()
    {
        return $this->container['workflow'];
    }

    /**
     * Sets workflow
     *
     * @param null[] $workflow workflow
     *
     * @return $this
     */
    public function setWorkflow($workflow)
    {
        $this->container['workflow'] = $workflow;

        return $this;
    }

    /**
     * Gets workflowStepId
     *
     * @return string
     */
    public function getWorkflowStepId()
    {
        return $this->container['workflowStepId'];
    }

    /**
     * Sets workflowStepId
     *
     * @param string $workflowStepId workflowStepId
     *
     * @return $this
     */
    public function setWorkflowStepId($workflowStepId)
    {
        $this->container['workflowStepId'] = $workflowStepId;

        return $this;
    }

    /**
     * Gets fieldValues
     *
     * @return null[]
     */
    public function getFieldValues()
    {
        return $this->container['fieldValues'];
    }

    /**
     * Sets fieldValues
     *
     * @param null[] $fieldValues fieldValues
     *
     * @return $this
     */
    public function setFieldValues($fieldValues)
    {
        $this->container['fieldValues'] = $fieldValues;

        return $this;
    }

    /**
     * Gets docErrors
     *
     * @return \CaelumPhpClient\Model\DocumentResponse200DataDocErrors[]
     */
    public function getDocErrors()
    {
        return $this->container['docErrors'];
    }

    /**
     * Sets docErrors
     *
     * @param \CaelumPhpClient\Model\DocumentResponse200DataDocErrors[] $docErrors docErrors
     *
     * @return $this
     */
    public function setDocErrors($docErrors)
    {
        $this->container['docErrors'] = $docErrors;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
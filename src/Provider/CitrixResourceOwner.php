<?php

namespace Tutor2u\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class CitrixResourceOwner implements ResourceOwnerInterface
{
    /**
     * Raw response
     *
     * @var array
     */
    protected $response;

    /**
     * Creates new resource owner.
     *
     * @param array  $response
     */
    public function __construct(array $response = array())
    {
        $this->response = $response;
    }

    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }

    /**
     * Get user id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->response['key'] ?: null;
    }

    /**
     * Get user account key
     *
     * @return string|null
     */
    public function getAccountKey()
    {
        return $this->response['accountKey'] ?: null;
    }

    /**
     * Get user email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->response['email'] ?: null;
    }

    /**
     * Get user first name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->response['firstName'] ?: null;
    }

    /**
     * Get user last name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->response['lastName'] ?: null;
    }
}

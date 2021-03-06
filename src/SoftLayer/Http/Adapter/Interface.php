<?php

namespace SoftLayer\Http\Adapter;

use SoftLayer\Http\SoftLayer_Http_Request;
use SoftLayer\Http\SoftLayer_Http_Response;

interface SoftLayer_Http_Adapter_Interface
{
    public function call(SoftLayer_Http_Request &$request, SoftLayer_Http_Response &$response);
}
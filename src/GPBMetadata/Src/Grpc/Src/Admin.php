<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/grpc/src/admin.proto

namespace GPBMetadata\Src\Grpc\Src;

class Admin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
src/grpc/src/admin.protoadmin"�
UnlockEventAwardsRequest:
operator (2(.admin.UnlockEventAwardsRequest.Operator6
member (2&.admin.UnlockEventAwardsRequest.Member
event_wallet_code (	,
Member
account (	
	vip_level (	*
Operator
code (	
timezone (	"
EmptyResponse2Y
AdminServiceI
UnlockEventAward.admin.UnlockEventAwardsRequest.admin.EmptyResponseBZ./admin�Grpc\\Build\\Adminbproto3'
        , true);

        static::$is_initialized = true;
    }
}


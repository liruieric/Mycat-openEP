<?php
// **********************************************************************
//
// Copyright (c) 2003-2013 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.5.1
//
// <auto-generated>
//
// Generated from file `Instrumentation.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Ice/EndpointF.php';
    require_once 'Ice/ConnectionF.php';
    require_once 'Ice/Current.php';
}

namespace Ice\Instrumentation
{
    if(!interface_exists('\\Ice\\Instrumentation\\Observer'))
    {
        interface Observer
        {
            public function attach();
            public function detach();
            public function failed($exceptionName);
        }

        $Ice_Instrumentation__t_Observer = IcePHP_defineClass('::Ice::Instrumentation::Observer', '\\Ice\\Instrumentation\\Observer', -1, true, false, $Ice__t_Object, null, null);
    }
}

namespace Ice\Instrumentation
{
    if(!class_exists('\\Ice\\Instrumentation\\ThreadState'))
    {
        class ThreadState
        {
            const ThreadStateIdle = 0;
            const ThreadStateInUseForIO = 1;
            const ThreadStateInUseForUser = 2;
            const ThreadStateInUseForOther = 3;
        }

        $Ice_Instrumentation__t_ThreadState = IcePHP_defineEnum('::Ice::Instrumentation::ThreadState', array('ThreadStateIdle', 0, 'ThreadStateInUseForIO', 1, 'ThreadStateInUseForUser', 2, 'ThreadStateInUseForOther', 3));
    }
}

namespace Ice\Instrumentation
{
    if(!interface_exists('\\Ice\\Instrumentation\\ThreadObserver'))
    {
        interface ThreadObserver extends \Ice\Instrumentation\Observer
        {
            public function stateChanged($oldState, $newState);
        }

        $Ice_Instrumentation__t_ThreadObserver = IcePHP_defineClass('::Ice::Instrumentation::ThreadObserver', '\\Ice\\Instrumentation\\ThreadObserver', -1, true, false, $Ice__t_Object, array($Ice_Instrumentation__t_Observer), null);
    }
}

namespace Ice\Instrumentation
{
    if(!class_exists('\\Ice\\Instrumentation\\ConnectionState'))
    {
        class ConnectionState
        {
            const ConnectionStateValidating = 0;
            const ConnectionStateHolding = 1;
            const ConnectionStateActive = 2;
            const ConnectionStateClosing = 3;
            const ConnectionStateClosed = 4;
        }

        $Ice_Instrumentation__t_ConnectionState = IcePHP_defineEnum('::Ice::Instrumentation::ConnectionState', array('ConnectionStateValidating', 0, 'ConnectionStateHolding', 1, 'ConnectionStateActive', 2, 'ConnectionStateClosing', 3, 'ConnectionStateClosed', 4));
    }
}

namespace Ice\Instrumentation
{
    if(!interface_exists('\\Ice\\Instrumentation\\ConnectionObserver'))
    {
        interface ConnectionObserver extends \Ice\Instrumentation\Observer
        {
            public function sentBytes($num);
            public function receivedBytes($num);
        }

        $Ice_Instrumentation__t_ConnectionObserver = IcePHP_defineClass('::Ice::Instrumentation::ConnectionObserver', '\\Ice\\Instrumentation\\ConnectionObserver', -1, true, false, $Ice__t_Object, array($Ice_Instrumentation__t_Observer), null);
    }
}

namespace Ice\Instrumentation
{
    if(!interface_exists('\\Ice\\Instrumentation\\DispatchObserver'))
    {
        interface DispatchObserver extends \Ice\Instrumentation\Observer
        {
            public function userException();
            public function reply($size);
        }

        $Ice_Instrumentation__t_DispatchObserver = IcePHP_defineClass('::Ice::Instrumentation::DispatchObserver', '\\Ice\\Instrumentation\\DispatchObserver', -1, true, false, $Ice__t_Object, array($Ice_Instrumentation__t_Observer), null);
    }
}

namespace Ice\Instrumentation
{
    if(!interface_exists('\\Ice\\Instrumentation\\RemoteObserver'))
    {
        interface RemoteObserver extends \Ice\Instrumentation\Observer
        {
            public function reply($size);
        }

        $Ice_Instrumentation__t_RemoteObserver = IcePHP_defineClass('::Ice::Instrumentation::RemoteObserver', '\\Ice\\Instrumentation\\RemoteObserver', -1, true, false, $Ice__t_Object, array($Ice_Instrumentation__t_Observer), null);
    }
}

namespace Ice\Instrumentation
{
    if(!interface_exists('\\Ice\\Instrumentation\\InvocationObserver'))
    {
        interface InvocationObserver extends \Ice\Instrumentation\Observer
        {
            public function retried();
            public function userException();
            public function getRemoteObserver($con, $endpt, $requestId, $size);
        }

        $Ice_Instrumentation__t_InvocationObserver = IcePHP_defineClass('::Ice::Instrumentation::InvocationObserver', '\\Ice\\Instrumentation\\InvocationObserver', -1, true, false, $Ice__t_Object, array($Ice_Instrumentation__t_Observer), null);
    }
}

namespace Ice\Instrumentation
{
    if(!interface_exists('\\Ice\\Instrumentation\\ObserverUpdater'))
    {
        interface ObserverUpdater
        {
            public function updateConnectionObservers();
            public function updateThreadObservers();
        }

        $Ice_Instrumentation__t_ObserverUpdater = IcePHP_defineClass('::Ice::Instrumentation::ObserverUpdater', '\\Ice\\Instrumentation\\ObserverUpdater', -1, true, false, $Ice__t_Object, null, null);
    }
}

namespace Ice\Instrumentation
{
    if(!interface_exists('\\Ice\\Instrumentation\\CommunicatorObserver'))
    {
        interface CommunicatorObserver
        {
            public function getConnectionEstablishmentObserver($endpt, $connector);
            public function getEndpointLookupObserver($endpt);
            public function getConnectionObserver($c, $e, $s, $o);
            public function getThreadObserver($parent, $id, $s, $o);
            public function getInvocationObserver($prx, $operation, $ctx);
            public function getDispatchObserver($c, $size);
            public function setObserverUpdater($updater);
        }

        $Ice_Instrumentation__t_CommunicatorObserver = IcePHP_defineClass('::Ice::Instrumentation::CommunicatorObserver', '\\Ice\\Instrumentation\\CommunicatorObserver', -1, true, false, $Ice__t_Object, null, null);
    }
}
?>

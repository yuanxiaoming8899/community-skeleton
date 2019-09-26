<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.mailer.mailer_7709.transport' shared service.

include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SmtpAgent.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpTransport.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/InputByteStream.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Filterable.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/AbstractFilterableInputStream.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/OutputByteStream.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/IoBuffer.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpHandler.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/AuthHandler.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php';
include_once $this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/DependencyInjection/SmtpTransportConfigurator.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/ReplacementFilterFactory.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilterFactory.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Authenticator.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/CramMd5Authenticator.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/LoginAuthenticator.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/PlainAuthenticator.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/NTLMAuthenticator.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventListener.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendListener.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php';

$a = new \Swift_Transport_Esmtp_AuthHandler([0 => ($this->privates['.1_Swift_Transport_Esmtp_Auth_CramMd5Authenticator~sv.Hcbb'] ?? ($this->privates['.1_Swift_Transport_Esmtp_Auth_CramMd5Authenticator~sv.Hcbb'] = new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator())), 1 => ($this->privates['.2_Swift_Transport_Esmtp_Auth_LoginAuthenticator~sv.Hcbb'] ?? ($this->privates['.2_Swift_Transport_Esmtp_Auth_LoginAuthenticator~sv.Hcbb'] = new \Swift_Transport_Esmtp_Auth_LoginAuthenticator())), 2 => ($this->privates['.3_Swift_Transport_Esmtp_Auth_PlainAuthenticator~sv.Hcbb'] ?? ($this->privates['.3_Swift_Transport_Esmtp_Auth_PlainAuthenticator~sv.Hcbb'] = new \Swift_Transport_Esmtp_Auth_PlainAuthenticator())), 3 => ($this->privates['.4_Swift_Transport_Esmtp_Auth_NTLMAuthenticator~sv.Hcbb'] ?? ($this->privates['.4_Swift_Transport_Esmtp_Auth_NTLMAuthenticator~sv.Hcbb'] = new \Swift_Transport_Esmtp_Auth_NTLMAuthenticator()))]);
$a->setUsername('bansalvaish@gmail.com');
$a->setPassword('password');
$a->setAuthMode('login');

$this->services['swiftmailer.mailer.mailer_7709.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(($this->privates['swiftmailer.transport.replacementfactory'] ?? ($this->privates['swiftmailer.transport.replacementfactory'] = new \Swift_StreamFilters_StringReplacementFilterFactory()))), [0 => $a], new \Swift_Events_SimpleEventDispatcher());

$instance->setHost('smtp.gmail.com');
$instance->setPort(465);
$instance->setEncryption('ssl');
$instance->setTimeout(30);
$instance->setSourceIp(NULL);
$instance->registerPlugin(($this->services['swiftmailer.mailer.mailer_7709.plugin.messagelogger'] ?? ($this->services['swiftmailer.mailer.mailer_7709.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger())));
(new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())))->configure($instance);

return $instance;

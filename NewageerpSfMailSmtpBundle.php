<?php
namespace Newageerp\SfMailSmtp;

use Newageerp\SfMailSmtp\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;


class NewageerpSfMailSmtpBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new Extension();
    }
}

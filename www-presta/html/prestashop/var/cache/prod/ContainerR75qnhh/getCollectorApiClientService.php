<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Api\CollectorApiClient' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient'] = new \PrestaShop\Module\PsEventbus\Api\CollectorApiClient('https://eventbus-proxy.psessentials.net', ${($_ = isset($this->services['ps_eventbus']) ? $this->services['ps_eventbus'] : $this->load('getPsEventbusService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] : $this->load('getPsAccountsAdapterServiceService.php')) && false ?: '_'});

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Api\LiveSyncApiClient' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\LiveSyncApiClient'] = new \PrestaShop\Module\PsEventbus\Api\LiveSyncApiClient('https://api.cloudsync.prestashop.com/live-sync/v1', ${($_ = isset($this->services['ps_eventbus']) ? $this->services['ps_eventbus'] : $this->load('getPsEventbusService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PsAccountsAdapterService'] : $this->load('getPsAccountsAdapterServiceService.php')) && false ?: '_'});
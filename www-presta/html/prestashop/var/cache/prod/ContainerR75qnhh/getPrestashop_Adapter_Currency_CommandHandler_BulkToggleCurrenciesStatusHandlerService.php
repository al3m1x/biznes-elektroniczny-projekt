<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.currency.command_handler.bulk_toggle_currencies_status_handler' shared service.

return $this->services['prestashop.adapter.currency.command_handler.bulk_toggle_currencies_status_handler'] = new \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\BulkToggleCurrenciesStatusHandler(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->get("PS_CURRENCY_DEFAULT"));

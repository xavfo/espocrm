<?php
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2023 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

namespace Espo\Core\Api;

class Route
{
    private string $method;

    /**
     * @param array<string, string> $params
     */
    public function __construct(
        string $method,
        private string $route,
        private string $adjustedRoute,
        private array $params,
        private bool $noAuth
    ) {
        $this->method = strtoupper($method);
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Get a route.
     */
    public function getRoute(): string
    {
        return $this->route;
    }

    /**
     * Get an adjusted route for FastRoute.
     */
    public function getAdjustedRoute(): string
    {
        return $this->adjustedRoute;
    }

    /**
     * @return array<string, string>
     */
    public function getParams(): array
    {
        return $this->params;
    }

    public function noAuth(): bool
    {
        return $this->noAuth;
    }
}

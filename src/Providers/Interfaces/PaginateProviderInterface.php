<?php

/**
 * This file is part of Laravel Database by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at http://bit.ly/UWsjkb.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GrahamCampbell\Database\Providers\Interfaces;

/**
 * This is the paginate provider interface.
 *
 * @author    Graham Campbell <graham@mineuk.com>
 * @copyright 2014 Graham Campbell
 * @license   <https://github.com/GrahamCampbell/Laravel-Database/blob/master/LICENSE.md> Apache 2.0
 */
interface PaginateProviderInterface
{
    /**
     * Get a paginated list of the models.
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function paginate();

    /**
     * Get the paginated links.
     *
     * @return string
     */
    public function links();
}

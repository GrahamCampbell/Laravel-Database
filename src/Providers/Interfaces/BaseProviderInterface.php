<?php

/**
 * This file is part of Laravel Database by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GrahamCampbell\Database\Providers\Interfaces;

/**
 * This is the base provider interface.
 *
 * @author    Graham Campbell <graham@mineuk.com>
 * @copyright 2014 Graham Campbell
 * @license   <https://github.com/GrahamCampbell/Laravel-Database/blob/master/LICENSE.md> Apache 2.0
 */
interface BaseProviderInterface
{
    /**
     * Create a new model.
     *
     * @param array $input
     *
     * @return mixed
     */
    public function create(array $input);

    /**
     * Find an existing model.
     *
     * @param int      $id
     * @param string[] $columns
     *
     * @return mixed
     */
    public function find($id, array $columns = array('*'));

    /**
     * Find all models.
     *
     * @param string[] $columns
     *
     * @return mixed
     */
    public function all(array $columns = array('*'));

    /**
     * Get a list of the models.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index();

    /**
     * Get the number of rows.
     *
     * @return int
     */
    public function count();

    /**
     * Register an observer.
     *
     * @param object $class
     *
     * @return $this
     */
    public function observe($class);

    /**
     * Return the rules.
     *
     * @param string|string[] $query
     *
     * @return string[]
     */
    public function rules($query = null);

    /**
     * Validate the data.
     *
     * @param array           $data
     * @param string|string[] $rules
     * @param bool            $custom
     *
     * @return \Illuminate\Validation\Validator
     */
    public function validate(array $data, $rules = null, $custom = false);
}

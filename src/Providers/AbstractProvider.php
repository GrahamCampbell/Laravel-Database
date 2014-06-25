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

namespace GrahamCampbell\Database\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Factory;
use GrahamCampbell\Database\Providers\Interfaces\BaseProviderInterface;
use GrahamCampbell\Database\Providers\Common\BaseProviderTrait;

/**
 * This is the abstract provider class.
 *
 * @package    Laravel-Database
 * @author     Graham Campbell
 * @copyright  Copyright 2014 Graham Campbell
 * @license    https://github.com/GrahamCampbell/Laravel-Database/blob/master/LICENSE.md
 * @link       https://github.com/GrahamCampbell/Laravel-Database
 */
abstract class AbstractProvider implements BaseProviderInterface
{
    use BaseProviderTrait;

    /**
     * The model to provide.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * The validator factory instance.
     *
     * @var \Illuminate\Validation\Factory
     */
    protected $validator;

    /**
     * Create a new instance.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  \Illuminate\Validation\Factory  $validator
     * @return void
     */
    public function __construct(Model $model, Factory $validator)
    {
        $this->model = $model;
        $this->validator = $validator;
    }

    /**
     * Return the model instance.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Return the validator factory instance.
     *
     * @return \Illuminate\Validation\Factory
     */
    public function getValidator()
    {
        return $this->validator;
    }
}

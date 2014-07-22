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

namespace GrahamCampbell\Database\Models;

use GrahamCampbell\Database\Models\Common\BaseModelTrait;
use GrahamCampbell\Database\Models\Interfaces\BaseModelInterface;
use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * This is the abstract model class.
 *
 * @package    Laravel-Database
 * @author     Graham Campbell
 * @copyright  Copyright 2014 Graham Campbell
 * @license    https://github.com/GrahamCampbell/Laravel-Database/blob/master/LICENSE.md
 * @link       https://github.com/GrahamCampbell/Laravel-Database
 */
abstract class AbstractModel extends Eloquent implements BaseModelInterface
{
    use BaseModelTrait;

    /**
     * A list of methods protected from mass assignment.
     *
     * @var array
     */
    protected $guarded = array('_token', '_method', 'id');
}

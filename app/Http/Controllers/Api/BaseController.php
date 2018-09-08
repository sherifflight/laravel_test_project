<?php
/**
 * Created by PhpStorm.
 * User: kion
 * Date: 08.09.2018
 * Time: 3:58
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

/**
 * @SWG\Swagger(
 *   host=SWAGGER_HOST,
 *   schemes={"http","https"},
 *   produces={"application/json"},
 *   consumes={"multipart/form-data", "application/x-www-form-urlencoded"},
 *   @SWG\Info(
 *     version="v1",
 *     title="Eugene API",
 *     description="API documentation for my project.",
 *     @SWG\Contact(
 *       name="Test",
 *       email="eugene.dyakonov@gmail.com"
 *     ),
 *   )
 * )
 *
 * Class BaseController
 * @package App\Http\Controllers\Api
 */
abstract class BaseController extends Controller
{
    protected $user = null;

    protected function setUser(Request $request)
    {
        $user = $request->user('api');
        if ($user instanceof User) {
            $this->user = $user;
        }
    }
}

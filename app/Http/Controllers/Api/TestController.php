<?php
/**
 * Created by PhpStorm.
 * User: ifanatic
 * Date: 2020/11/28
 * Time: 22:07
 */

namespace App\Http\Controllers\Api;

use App\Models\Notes;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test(Request $request)
    {
//        return Notes::find(1)->toarray();
        return Notes::get();
    }
}
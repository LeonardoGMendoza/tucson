<?php

use Illuminate\Support\Facades\Route;
use app\http\controller\admin\homeController;

route::get('admin',[homeController::class,'index']);








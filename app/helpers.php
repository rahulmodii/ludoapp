<?php

use App\Models\Support;

function logo(){
    $support = Support::first();
    return $support->logo ? asset('/storage/'.$support->logo) : '';
}

function loginImage(){
    $support = Support::first();
    return $support->logo ? asset('/storage/'.$support->login_image) : '';
}

function supportData(){
    $support = Support::first();
    return $support;
}
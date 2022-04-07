<?php
require_once('Member.php');

/**************** Reflection Class *******************/
// $member = new App\Member();
// $rc = new ReflectionClass('App\Member');
// echo $rc->getName() . "<br/>";
// echo "<hr/>";
// showData(get_class_methods($rc));

/****************** Reflection Method **************************/
// $rm = new ReflectionMethod('App\Member', 'getDetailInfo');
// echo $rm->isPublic() ? "It is a public" : "It is not public";
// echo "<hr/>";
// showData(get_class_methods($rm));

/*********************** Reflection Property ******************/
// $rp = new ReflectionProperty('App\Member', 'detailInfo');
// $mem = new App\Member();
// $rp->setAccessible(true);
// showData($rp->getValue($mem));
// showData(get_class_methods($rp));


/******************** Reflection Property ************************/
// $rp = new ReflectionParameter(['App\Member', 'getDetailInfo'], 0);
// echo $rp->isOptional();
// echo "<br/>";
// showData(get_class_methods($rp));

/******************** Reflection Object ***********************/
$member = new App\Member();
$ro = new ReflectionObject($member);
echo $ro->isUserDefined();
echo "<hr/>";
showData(get_class_methods($ro));

function showData($ary){
    echo "<pre>" . print_r($ary,true) . "</pre>";
} 
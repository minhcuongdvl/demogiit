<?php

namespace Foostart\Sample\Controllers;

use App\Http\Controllers\Controller;

class SampleController extends Controller{
    
    public function index(){
        
        //var_dump(resource_path('views'));
        
       $dir    = resource_path('views');
//$files1 = scandir($dir);
$files2 = scandir($dir, 1);

//print_r($files1);

foreach ($files2 as $files){
    $path = $dir.'/'.$files;
    if(is_dir($path)){
     
    }else{
       $fp = @fopen($path, "r");
  
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else{
  $link = $path;
   
}
    }
}

        
        return view('demo::index',  compact('link'));
    }
    
}



<?php

namespace Fawzi\NftWalletIntegration;
use Illuminate\Support\ServiceProvider;

class IntegrationServiceProvider extends ServiceProvider{

public function boot(){
$this->loadRoutesFrom(__DIR__.'/routes/web.php');
$this->loadViewsFrom(__DIR__.'/views','integration');
}

public function register(){

}


}

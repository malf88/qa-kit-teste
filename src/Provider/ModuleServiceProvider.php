<?php

namespace Malf88\QakitTeste\Provider;

use App\Application\Abstracts\ServiceProviderAbstract;
use App\Domain\Projects\Business\ProjectBusiness;
use App\Domain\Projects\Contracts\ProjectBusinessInterface;
use App\Domain\Projects\Contracts\ProjectRepositoryInterface;
use App\Domain\Projects\Repository\ProjectRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider
    extends ServiceProviderAbstract
    implements DeferrableProvider
{
    public array $bindings = [

    ];




}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if(auth()->user()->role == 'admin')
    <div class="py-12">
        <div class="main-content">
            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">
                                                    Agriculteurs</h5>
                                                <span
                                                    class="h2 font-weight-bold mb-0">{{\App\Models\Agriculteur::all()->count()}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                    <i class="fas fa-chart-bar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Viewer</h5>
                                                <span
                                                    class="h2 font-weight-bold mb-0">{{\App\Models\User::where('role','Viewer')->count()}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                    <i class="fas fa-chart-pie"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-danger mr-2"><i
                                                    class="fas fa-arrow-down"></i> 3.48%</span>
                                            <span class="text-nowrap">Since last week</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Utilisateur</h5>
                                                <span
                                                    class="h2 font-weight-bold mb-0">{{\App\Models\User::all()->count()}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-warning mr-2"><i
                                                    class="fas fa-arrow-down"></i> 1.10%</span>
                                            <span class="text-nowrap">Since yesterday</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">
                                                    Employer dernier mois</h5>
                                                <span class="h2 font-weight-bold mb-0">{{\App\Models\Employe::whereMonth('created_at', '=', \Carbon\Carbon::now()->subMonth()->month)->count()}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                    <i class="fas fa-percent"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 mt-2">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">
                                                    Superficie Totale</h5>
                                                <span
                                                    class="h2 font-weight-bold mb-0">{{\App\Models\Parcelle::all()->sum('Par_Superfecie')}}</span>
                                            </div>
                                            <div class="col-auto">
                                                <div
                                                    class="icon icon-shape bg-success text-white rounded-circle shadow">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @else
        <div class="card text-center">
            Welcome {{auth()->user()->name}}
        </div>
    @endif
</x-app-layout>

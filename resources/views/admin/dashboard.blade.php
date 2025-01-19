<x-admin-layout>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Dashboard Overview</h4>
                    
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h5 class="mb-4">Total Users</h5>
                                    <h2>{{$stats['users']}}</h2>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h5 class="mb-4">Portfolio Items</h5>
                                    <h2>{{$stats['portfolio_items']}}</h2>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <h5 class="mb-4">Services</h5>
                                    <h2>{{$stats['users']}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

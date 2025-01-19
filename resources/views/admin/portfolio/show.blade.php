<x-admin-layout>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="card-title mb-0">Project Details</h4>
                <a href="{{ route('admin.portfolio.edit', $portfolio) }}" class="btn btn-primary">
                    <i class="fas fa-edit"></i> Edit Project
                </a>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <img src="{{ Storage::url($portfolio->image) }}" 
                         alt="{{ $portfolio->title }}" 
                         class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <h5>{{ $portfolio->title }}</h5>
                    <p class="text-muted">{{ $portfolio->description }}</p>
                    
                    <div class="mt-4">
                        <h6>Project Details</h6>
                        <ul class="list-unstyled">
                            <li><strong>Client:</strong> {{ $portfolio->client }}</li>
                            <li><strong>Category:</strong> {{ ucfirst($portfolio->category) }}</li>
                            <li><strong>Completion Date:</strong> {{ $portfolio->completion_date->format('M d, Y') }}</li>
                            <li><strong>Project URL:</strong> <a href="{{ $portfolio->project_url }}" target="_blank">Visit Site</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

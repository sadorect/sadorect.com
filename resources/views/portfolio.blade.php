<x-layout>
    <!-- Page Header -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Our Portfolio</h1>
                <p class="text-white">Explore our innovative solutions and successful implementations</p>
            </div>
        </div>
    </div>

    <!-- Portfolio Grid -->
    <div class="container-fluid py-6 px-5">
        <!-- Portfolio Filter -->
        <div class="text-center mb-5">
            <ul class="list-inline portfolio-filter">
                <li class="list-inline-item active" data-filter="*">All</li>
                <li class="list-inline-item" data-filter=".web">Web Development</li>
                <li class="list-inline-item" data-filter=".app">Mobile Apps</li>
                <li class="list-inline-item" data-filter=".network">Network Solutions</li>
            </ul>
        </div>
@php
    $portfolios = App\Models\Portfolio::all();
@endphp
        <div class="row g-5 portfolio-container">
            @foreach($portfolios as $portfolio)
                <div class="col-lg-4 col-md-6 portfolio-item {{ $portfolio->category }}">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" 
                             src="{{ Storage::url($portfolio->image) }}" 
                             alt="{{ $portfolio->title }}">
                        <div class="portfolio-overlay">
                            <div class="d-flex h-100 align-items-center justify-content-center">
                                <div class="p-4 text-center">
                                    <h4 class="text-white">{{ $portfolio->title }}</h4>
                                    <p class="text-white mb-3">{{ Str::limit($portfolio->description, 100) }}</p>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ $portfolio->project_url }}" 
                                           class="btn btn-primary mx-1" 
                                           target="_blank">
                                            <i class="bi bi-link-45deg"></i> Visit Site
                                        </a>
                                        <a href="#" 
                                           class="btn btn-light mx-1" 
                                           data-bs-toggle="modal" 
                                           data-bs-target="#portfolio-{{ $portfolio->id }}">
                                            <i class="bi bi-info-circle"></i> Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Modal -->
                <div class="modal fade" id="portfolio-{{ $portfolio->id }}" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{ $portfolio->title }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ Storage::url($portfolio->image) }}" 
                                             class="img-fluid" 
                                             alt="{{ $portfolio->title }}">
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Project Details</h6>
                                        <p>{{ $portfolio->description }}</p>
                                        <ul class="list-unstyled">
                                            <li><strong>Client:</strong> {{ $portfolio->client }}</li>
                                            <li><strong>Category:</strong> {{ $portfolio->category }}</li>
                                            <li><strong>Completed:</strong> {{ \Carbon\Carbon::parse($portfolio->completion_date)->format('M Y') }}</li>
                                        </ul>
                                        <a href="{{ $portfolio->project_url }}" 
                                           class="btn btn-primary" 
                                           target="_blank">
                                            Visit Project
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Add this CSS to your style.css -->
    <style>
        .portfolio-filter li {
            cursor: pointer;
            padding: 10px 20px;
            transition: all 0.3s;
        }

        .portfolio-filter li.active {
            background: var(--primary);
            color: white;
            border-radius: 30px;
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8);
            opacity: 0;
            transition: all 0.5s;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }
    </style>

    <!-- Add this JavaScript for filtering -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filters = document.querySelectorAll('.portfolio-filter li');
            const items = document.querySelectorAll('.portfolio-item');

            filters.forEach(filter => {
                filter.addEventListener('click', function() {
                    const category = this.getAttribute('data-filter');
                    
                    filters.forEach(f => f.classList.remove('active'));
                    this.classList.add('active');

                    items.forEach(item => {
                        if (category === '*' || item.classList.contains(category.substring(1))) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</x-layout>

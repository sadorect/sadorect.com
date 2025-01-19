<x-admin-layout>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="card-title mb-0">Portfolio Projects</h4>
                <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Project
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Client</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($portfolios as $portfolio)
                            <tr>
                                <td>
                                    <img src="{{ Storage::url($portfolio->image) }}" 
                                         alt="{{ $portfolio->title }}" 
                                         class="img-thumbnail" 
                                         width="100">
                                </td>
                                <td>{{ $portfolio->title }}</td>
                                <td>
                                    <span class="badge bg-{{ $portfolio->category === 'web' ? 'primary' : ($portfolio->category === 'app' ? 'success' : 'info') }}">
                                        {{ ucfirst($portfolio->category) }}
                                    </span>
                                </td>
                                <td>{{ $portfolio->client }}</td>
                                <td>
                                    <span class="badge bg-{{ $portfolio->is_active ? 'success' : 'danger' }}">
                                        {{ $portfolio->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                      <a href="{{ route('admin.portfolio.refresh-thumbnail', $portfolio) }}" 
                                        class="btn btn-sm btn-warning" 
                                        title="Refresh Thumbnail">
                                          <i class="fas fa-sync"></i>
                                      </a>

                                        <a href="{{ route('admin.portfolio.edit', $portfolio) }}" 
                                           class="btn btn-sm btn-info" title="Edit Portfolio">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.portfolio.destroy', $portfolio) }}" 
                                              method="POST" 
                                              class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn btn-sm btn-danger" title="Before deleting, please make sure this project is not used in any other pages or sections."
                                                    onclick="return confirm('Are you sure you want to delete this project?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No projects found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $portfolios->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>

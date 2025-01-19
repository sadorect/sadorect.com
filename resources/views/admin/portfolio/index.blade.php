<x-admin-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="card-title">Portfolio Management</h4>
                        <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">Add New Project</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Client</th>
                                    <th>Completion Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($portfolios as $portfolio)
                                    <tr>
                                        <td>
                                            <img src="{{ Storage::url($portfolio->image) }}" 
                                                 alt="{{ $portfolio->title }}" 
                                                 class="img-thumbnail" 
                                                 width="100">
                                        </td>
                                        <td>{{ $portfolio->title }}</td>
                                        <td>{{ $portfolio->category }}</td>
                                        <td>{{ $portfolio->client }}</td>
                                        <td>{{ $portfolio->completion_date->format('M d, Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.portfolio.edit', $portfolio) }}" 
                                               class="btn btn-sm btn-info">Edit</a>
                                            <form action="{{ route('admin.portfolio.destroy', $portfolio) }}" 
                                                  method="POST" 
                                                  class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" 
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $portfolios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

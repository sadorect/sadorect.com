<x-admin-layout>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add New Project</h4>
            
            <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.portfolio.form')
                
                <button type="submit" class="btn btn-primary">Create Project</button>
            </form>
        </div>
    </div>
</x-admin-layout>

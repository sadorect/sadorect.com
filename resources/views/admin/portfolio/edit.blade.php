<x-admin-layout>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Project</h4>
            
            <form action="{{ route('admin.portfolio.update', $portfolio) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.portfolio.form')
                
                <button type="submit" class="btn btn-primary">Update Project</button>
                <a href="{{ route('admin.portfolio.index') }}" class="btn btn-secondary">Back to Portfolio</a>
            </form>
        </div>
    </div></x-admin-layout>

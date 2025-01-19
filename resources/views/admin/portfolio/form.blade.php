<div class="mb-3">
    <label for="title" class="form-label">Project Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" 
           id="title" name="title" value="{{ old('title', $portfolio->title ?? '') }}">
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control @error('description') is-invalid @enderror" 
              id="description" name="description" rows="4">{{ old('description', $portfolio->description ?? '') }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="project_url" class="form-label">Project URL</label>
    <input type="url" class="form-control @error('project_url') is-invalid @enderror" 
           id="project_url" name="project_url" value="{{ old('project_url', $portfolio->project_url ?? '') }}">
    @error('project_url')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select @error('category') is-invalid @enderror" id="category" name="category">
        <option value="">Select Category</option>
        <option value="web" {{ (old('category', $portfolio->category ?? '') == 'web') ? 'selected' : '' }}>Web Development</option>
        <option value="app" {{ (old('category', $portfolio->category ?? '') == 'app') ? 'selected' : '' }}>Mobile Apps</option>
        <option value="network" {{ (old('category', $portfolio->category ?? '') == 'network') ? 'selected' : '' }}>Network Solutions</option>
    </select>
    @error('category')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="client" class="form-label">Client Name</label>
    <input type="text" class="form-control @error('client') is-invalid @enderror" 
           id="client" name="client" value="{{ old('client', $portfolio->client ?? '') }}">
    @error('client')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="completion_date" class="form-label">Completion Date</label>
    <input type="date" class="form-control @error('completion_date') is-invalid @enderror" 
           id="completion_date" name="completion_date" 
           value="{{ old('completion_date', optional($portfolio->completion_date ?? null)->format('Y-m-d')) }}">
    @error('completion_date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="image" class="form-label">Project Image</label>
    <input type="file" class="form-control @error('image') is-invalid @enderror" 
           id="image" name="image">
    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    @if(isset($portfolio) && $portfolio->image)
        <div class="mt-2">
            <img src="{{ Storage::url($portfolio->image) }}" alt="Current Image" class="img-thumbnail" width="200">
        </div>
    @endif
</div>

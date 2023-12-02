<form action="{{ route('rechercher') }}" class="d-flex">
    <div class="form-group">
        <input type="text" name="q" class="form-control" placeholder="Recherchez un hôtel..." value="{{ request()->q ?? ''}}">
    </div>
    <button type="submit" class="btn btn-info">
        <i class="fas fa-search" aria-hidden="true"></i>
    </button>
</form>
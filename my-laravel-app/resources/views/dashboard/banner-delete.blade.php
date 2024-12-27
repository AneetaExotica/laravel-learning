<form action="{{ route('admin.bannerdelete', $bannerdata->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this banner?');">
    @csrf
    @method('DELETE')  <!-- Spoof the DELETE request -->
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>

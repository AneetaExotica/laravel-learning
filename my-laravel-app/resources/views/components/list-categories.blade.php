<select class="form-control" name="category">
@foreach($listcategories as $category)
    <option>{{ $category->name }}</option>
@endforeach
</select>

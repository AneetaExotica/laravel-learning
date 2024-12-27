<select>
@foreach($ShowCtaegoery as $category)
    <option>{{ $category->name }}</option>
@endforeach
</select>

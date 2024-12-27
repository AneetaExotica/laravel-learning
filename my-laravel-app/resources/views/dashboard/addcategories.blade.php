@include('dashboard.layouts.header')
@include('dashboard.layouts.sidebar')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">Add Blogs</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.createcategories') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Categoery Title</label>
                                <input type="text" name="name" class="form-control"  />
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><strong>Categoery Description :</strong></label>
                                <textarea class="summernote" name="description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="avatar">Categoery Image</label>
                                <input type="file" id="avatar" name="image" accept="image/png, image/jpeg" />
                            </div>                         
                            
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-success btn-sm btnS-save" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
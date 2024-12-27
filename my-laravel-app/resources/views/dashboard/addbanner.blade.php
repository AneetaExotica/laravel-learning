@include('dashboard.layouts.header')
@include('dashboard.layouts.sidebar')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">Add Banners</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.create-banner') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control"  />
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><strong>Description :</strong></label>
                                <textarea class="summernote" name="description" ></textarea>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="avatar">Image</label>
                                <input type="file" id="avatar" name="image" accept="image/png, image/jpeg" />
                            </div>
                            <div class="form-group">
                                <label for="category">Buttontext</label>
                                <input type="text" name="buttontext" class="form-control" />
                                @error('buttontext')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror                            
                            </div>
                            <div class="form-group">
                                <label for="category">Button Link</label>
                                <input type="text" name="buttonlink" class="form-control" /> 
                                @error('buttonlink')
                                 <div class="alert alert-danger">{{ $message }}</div>
                                @enderror                           
                            </div>
                            <div class="form-group">
                                <label for="mil_people">Mil People</label>
                                <input type="text" name="mil_people" class="form-control"  />
                                @error('mil_people')
                                 <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kilometers">Kilometers</label>
                                <input type="text" name="kilometers" class="form-control"   />
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" class="form-control" />
                                @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Buttontext</label>
                                <input type="text" name="buttontext2" class="form-control" /> 
                                @error('buttontext2')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror                           
                            </div>
                            <div class="form-group">
                                <label for="category">Button Link</label>
                                <input type="text" name="buttonlink2" class="form-control" />  
                                @error('buttonlink2')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror                          
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
    
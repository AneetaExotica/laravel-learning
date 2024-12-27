
@include('dashboard.layouts.header')
@include('dashboard.layouts.sidebar')
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Show all post list
            </div>
            <!-- <a class="btn-primary add_new_post" href="{{Route('admin.add-banners')}}">Add New blog</a> -->
            <div class="panel-body">
                <div class=edit"table-responsive">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="dataTables-example_length">
                                    <label>
                                        <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                         records per page
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div id="dataTables-example_filter" class="dataTables_filter">
                                        <label>Search:
                                            <input type="search" class="form-control input-sm" aria-controls="dataTables-example">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 165px;" aria-sort="ascending">Title engine
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 256px;">Description
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 231px;">Image
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 231px;">Button Text</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 231px;">Button Link</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 231px;">Mil People</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 231px;">Kilometers</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 231px;">Price</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 231px;">Button Text</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 231px;">Button Link</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 138px;">Actions
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 97px;">Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($getBanners as $banner)
                                    
                                    <tr class="gradeA odd">
                                            <td class="sorting_1">{{$banner->title}}</td>
                                            <td class=" ">{{$banner->description}}</td>
                                            <td><img src="{{ asset('storage/' . $banner->image) }}" style="width:200px" alt="Blog Image"></td>                                            
                                            <td class=" ">{{$banner->buttontext}}</td>
                                            <td class=" ">{{$banner->buttonlink}}</td>
                                            <td class=" ">{{$banner->mil_people}}</td>
                                            <td class=" ">{{$banner->kilometers}}</td>
                                            <td class=" ">{{$banner->price}}</td>
                                            <td class=" ">{{$banner->buttontext2}}</td>
                                            <td class=" ">{{$banner->buttonlink2}}</td>
                                            <td class=" "><a href="{{ route('admin.edit', ['id' => $banner->id]) }}">Edit</a></td>
                                            <td class=" "><a href="/admin/edit/?id={{$banner->id}}">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table><div class="row">
                                    <div class="col-sm-6">
                                        <div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Showing 51 to 57 of 57 entries</div>
                                    </div><div class="col-sm-6">
                                        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous">
                                                    <a href="#">Previous</a></li>
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                                        <a href="#">1</a>
                                                    </li>
                                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                                            <a href="#">2</a>
                                                        </li>
                                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                                                <a href="#">3</a>
                                                            </li>
                                                                <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                                                    <a href="#">4</a>
                                                                </li>
                                                                <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                                                    <a href="#">5</a>
                                                                </li>
                                                                <li class="paginate_button active" aria-controls="dataTables-example" tabindex="0">
                                                                    <a href="#">6</a>
                                                                </li>
                                                                <li class="paginate_button next disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next">
                                                                    <a href="#">Next</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
</div>
</div>
@include('dashboard.layouts.footer')
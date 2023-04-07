<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Blog</h4>
                <div class="mt-4">
                    <div class="table-responsive">
                        <table id="blogTable" class="table table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID </th>
                                    <th>User Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($blog as $key=>$blogList)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        
                                        <td>{{$blogList->user->name}}</td>
                                        <td>{{$blogList->title}}</td>
                                        <td>{{substr($blogList->description,0,50)}}</td>
                                        <td>
                                            @if($blogList->status == 0)
                                                <button class="badge rounded-pill bg-warning changeStatus" data-id="{{$blogList->id}}">Pending</button>
                                            @elseif($blogList->status == 1)
                                                <button class="badge rounded-pill bg-success changeStatus" data-id="{{$blogList->id}}">Accepect</button>
                                            @endif

                                        </td>
                                        <td>
                                            <img src="{{asset('storage/app/public/AdminAssets/uploads/blog/').'/'.$blogList->image}}" height="50px" width="50px" style="border-radius:50%"/>
                                        </td>
                                    </tr>
                                @endforeach
                               
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
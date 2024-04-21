<x-layouts.admin>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <h2 class="section-title">Create Options</h2>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Create Category</h4>
              </div>
              <div class="card-body" style="text-align: center;">
                <form action="{{Route('create_category')}}" method="post">
                @csrf
                  <input type="text" class="form-control" name="category_name" id="" placeholder="Category"><br>
                  <input type="submit" class="btn btn-primary" value="Create">
                </form>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-secondary">
              <div class="card-header">
                <h4>Create Size</h4>
              </div>
              <div class="card-body" style="text-align: center;">
                <form action="{{Route('create_size')}}" method="post">
                @csrf
                  <input type="text" name="size" id="" class="form-control" placeholder="Size"><br>
                  <input type="submit" value="Create" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-danger">
              <div class="card-header">
                <h4>Create Color</h4>
              </div>
              <div class="card-body" style="text-align: center;">
                <form action="{{Route('create_color')}}" method="post">
                @csrf
                  <input type="text" name="color" id="" class="form-control" placeholder="Color"><br>
                  <input type="submit" value="Create" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Categories</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Edit</th>
                        </tr>
                        @foreach($categories as $category)
                        <tr>
                          <td>{{$c++}}</td>
                          @if($single_category != null)
                          <td>
                          <form action="{{Route('edit_category', [$category->id])}}" method="post">
                          @csrf
                            <input type="text" name="single_category" class="form-control" value="{{$single_category}}">
                            <input type="submit" value="Update" class="btn btn-primary">
                          </form>
                          </td>
                          @endif
                          <td>{{$category->name}}</td>
                          <td><a href="{{Route('single_category', [$category->id])}}" class="btn btn-primary">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                  {{$categories->links()}}
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Sizes</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Edit</th>
                        </tr>
                        @foreach($sizes as $size)
                        <tr>
                          <td>{{$s++}}</td>
                          <td>{{$size->size}}</td>
                          <td><a href="#" class="btn btn-primary">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                    {{$sizes->links()}}
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Colors</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Action</th>
                        </tr>
                        @foreach($colors as $color)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$color->color}}</td>
                          <td><a href="#" class="btn btn-primary">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                  {{$colors->links()}}
                </div>
              </div>
          </div>
      </div>
</div>
</x-layouts.admin>
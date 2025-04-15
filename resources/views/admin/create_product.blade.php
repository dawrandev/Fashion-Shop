<x-layouts.admin>
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card">
              <div class="card-header">
                <h4>Create Product</h4>
              </div>
              <form action="{{Route('create_product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Select Category</label>
                    <select class="form-control" name="category_id">
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name" value="{{old('product_name')}}">
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price">
                  </div>
                  @error('price')
                  <li style="color:red">{{$message}}</li>
                  @enderror
                  <div class="form-group">
                    <label class="form-label">Sizes</label>
                    <div class="selectgroup selectgroup-pills">
                      @foreach ($sizes as $size)
                      <label class="selectgroup-item">
                        <input type="checkbox" name="sizes[]" value="{{$size->id}}" class="selectgroup-input">
                        <span class="selectgroup-button">{{$size->size}}</span>
                      </label>
                      @endforeach
                    </div>
                  </div>
                  @error('sizes')
                  <li style="color:red">{{$message}}</li>
                  @enderror
                  <div class="form-group">
                    <label class="form-label">Color Input</label>
                    <div class="selectgroup w-100">
                      @foreach($colors as $color)
                      <label class="selectgroup-item">
                        <div style="accent-color: {{$color->color}}">
                          <input type="checkbox" name="colors[]" value="{{$color->id}}">
                          <span>{{$color->color}}</span>
                      </label>
                      @endforeach

                    </div>
                  </div>
                  @error('colors')
                  <li style="color:red">{{$message}}</li>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Text 1</label>
                  <textarea class="form-control" name="text_1" value="{{old('text_1')}}"></textarea>
                  @error('text_1')
                  <li style="color:red">{{$message}}</li>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Text 2</label>
                  <textarea class="form-control" name="text_2" value="{{old('text_2')}}"></textarea>
                  @error('text_2')
                  <li style="color:red">{{$message}}</li>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" name="image" value="{{old('image')}}">
                  @error('image')
                  <li style="color:red">{{$message}}</li>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Image 1</label>
                  <input type="file" class="form-control" name="image_1" value="{{old('image_1')}}">
                  @error('image_1')
                  <li style="color:red">{{$message}}</li>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Image 2</label>
                  <input type="file" class="form-control" name="image_2" value="{{old('image_2')}}">
                  @error('image_2')
                  <li style="color:red">{{$message}}</li>
                  @enderror
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary mr-1" type="submit">Submit</button>
                  <button class="btn btn-secondary" type="reset">Reset</button>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</x-layouts.admin>
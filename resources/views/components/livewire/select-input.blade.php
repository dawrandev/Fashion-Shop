<div>
    <form action="{{Route('create_pieces')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Select Multiple</label>
            <select name="category_id" class="form-control" wire:model="selectedCategory"
                wire:change="CategoryProducts">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select name="product_id" class="form-control" wire:model="selectedProduct" wire:change="ProductOptions">
                @foreach ($category_products as $product)
                    <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Sizes</label>
            <div class="selectgroup selectgroup-pills">
                @foreach ($product_options as $option)
                    <label class="selectgroup-item">
                        <input type="radio" name="size_id" value="{{$option->size_id}}" class="selectgroup-input">
                        <span class="selectgroup-button">{{$option->size}}</span>
                    </label>
                @endforeach
            </div>
            @error('size_id')
                <li style="color:red">{{$message}}</li>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label">Color Input</label>
            <div class="selectgroup w-100">
                @foreach($product_options as $option)
                    <label class="selectgroup-item">
                        <div style="accent-color: {{$option->color}}">
                            <input type="radio" name="color_id" value="{{$option->color_id}}">
                            <span>{{$option->color}}</span>
                    </label>
                @endforeach
            </div>
        </div>
        @error('color_id')
            <li style="color:red">{{$message}}</li>
        @enderror
        <div class="form-group">
            <label class="form-label">Input Piece</label>
            <input type="number" name="piece" class="form-control">
            @error('piece')
                <li style="color:red">{{$message}}</li>
            @enderror
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
    </form>

</div>
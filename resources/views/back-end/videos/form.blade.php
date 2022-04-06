{{csrf_field()}}
<div class="row">

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Video name</label>
            <input type="text" name="name" value="{{isset($rows) ? $rows->name :''}}" class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta keyword</label>
            <input type="text" name="meta_keywords" value="{{isset($rows) ? $rows->meta_keywords :''}}" class="form-control @error('meta_keywords') is-invalid @enderror">
            @error('meta_keywords')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Youtube URL</label>
            <input type="url" name="youtube" value="{{isset($rows) ? $rows->youtube :''}}" class="form-control @error('youtube') is-invalid @enderror">
            @error('youtube')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Published</label>

            <select name="published" class="form-control @error('published') is-invalid @enderror">
                <option value="1" {{isset($rows) && $rows->published =='1' ? "selected":''}}>published</option>
                <option value="0" {{isset($rows) && $rows->published =='0' ? "selected":''}}>hidden</option>
            </select>
            @error('published')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Category</label>

            <select name="cat_id" class="form-control @error('cat_id') is-invalid @enderror">
                @foreach($categories as $category)

                    <option value="{{$category -> id}}" {{isset($rows) && $rows->cat_id =='$category -> id' ? "selected":''}}>{{$category -> name}}</option>
                @endforeach
            </select>
            @error('cat_id')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta des</label>
            <textarea name="meta_des" cols="15" rows="5" class="form-control @error('meta_des') is-invalid @enderror">{{isset($rows) ? $rows->meta_des :''}}</textarea>
            @error('meta_des')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">des</label>
            <textarea name="des" cols="15" rows="5" class="form-control @error('meta_des') is-invalid @enderror">{{isset($rows) ? $rows->des :''}}</textarea>
            @error('des')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>


    <div class="col-md-6">
        <div >
            <label >image</label>
            <input type="file" name="image" >
            @error('image')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">skills</label>

            <select name="skills[]" class="form-control @error('skills[]') is-invalid @enderror" multiple style="hight:100px">
                @foreach($skills as $skill)

                    <option value="{{$skill -> id}}" >{{$skill -> name}}</option>
                @endforeach
            </select>
            @error('skills[]')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
</div>
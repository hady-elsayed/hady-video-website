{{csrf_field()}}
<div class="row">

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Category name</label>
            <input type="text" name="name" value="{{isset($rows) ? $rows->name :''}}" class="form-control @error('name') is-invalid @enderror">
            @error('email')
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
            <label class="bmd-label-floating">Meta des</label>
            <textarea name="meta_des" cols="30" rows="10" class="form-control @error('meta_des') is-invalid @enderror">{{isset($rows) ? $rows->meta_keywords :''}}</textarea>
            @error('meta_des')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>


</div>
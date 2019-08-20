<!-- Header search -->
<div class="header-search text-center">
    <form action="{{ route('front.courses.category') }}" class="form-inline">
        <div class="form-group">
            <input type="text" name="name_en" class="form-control"  placeholder="@lang('home.search')">
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
    </form>
</div>
<!-- Header search -->
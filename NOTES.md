php artisan db:seed --class=GeneralSettingSeeder
php artisan db:seed --class=SessionListSeeder
php artisan db:seed --class=ActiveSessionSeeder



Create Val:
@if ($errors->any())
    <div class="alert alert-primary">
        <ul class="text-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<button type="submit" class="btn btn-primary mt-3"><i class="fa-regular fa-floppy-disk"></i> Submit</button>
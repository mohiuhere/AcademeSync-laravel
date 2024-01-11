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



INSERT INTO "public"."mark_grades" ("id", "mark_grade_name", "point", "percent_from", "percent_upto", "remark", "status", "created_at", "updated_at") VALUES
(1, 'Grade', 4.00, 80, 100, 'A+', 't', '2024-01-11 08:00:13', '2024-01-11 08:00:13');
INSERT INTO "public"."mark_grades" ("id", "mark_grade_name", "point", "percent_from", "percent_upto", "remark", "status", "created_at", "updated_at") VALUES
(2, 'Grade', 3.75, 75, 79, 'A', 't', '2024-01-11 08:56:08', '2024-01-11 08:56:08');
INSERT INTO "public"."mark_grades" ("id", "mark_grade_name", "point", "percent_from", "percent_upto", "remark", "status", "created_at", "updated_at") VALUES
(3, 'Grade', 3.50, 70, 74, 'A-', 't', '2024-01-11 08:57:35', '2024-01-11 08:57:35');
INSERT INTO "public"."mark_grades" ("id", "mark_grade_name", "point", "percent_from", "percent_upto", "remark", "status", "created_at", "updated_at") VALUES
(4, 'Grade', 3.25, 65, 69, 'B+', 't', '2024-01-11 08:58:10', '2024-01-11 08:58:10'),
(5, 'Grade', 3.00, 60, 64, 'B', 't', '2024-01-11 09:00:30', '2024-01-11 09:00:30'),
(6, 'Grade', 2.75, 55, 59, 'B-', 't', '2024-01-11 09:00:51', '2024-01-11 09:00:51'),
(7, 'Grade', 2.50, 50, 54, 'C+', 't', '2024-01-11 09:01:23', '2024-01-11 09:01:23'),
(8, 'Grade', 2.25, 45, 49, 'C', 't', '2024-01-11 09:02:06', '2024-01-11 09:02:06'),
(9, 'Grade', 2.00, 40, 44, 'D', 't', '2024-01-11 09:02:29', '2024-01-11 09:02:29'),
(10, 'Grade', 0.00, 0, 39, 'F', 't', '2024-01-11 09:02:52', '2024-01-11 09:02:52');
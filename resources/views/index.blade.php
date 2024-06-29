<!DOCTYPE html>
<html>
<head>
    <title>Laravel Application</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name of Student</th>
                    <th>Parent Name</th>
                    <th>Opted Courses</th>
                    <th>Enable or Disable</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->parent->name }}</td>
                    <td>
                        @foreach ($student->courses as $course)
                            {{ $course->course_name }}<br>
                        @endforeach
                    </td>
                    <td>
                        <button class="btn btn-primary toggle-status" data-id="{{ $student->id }}">
                            {{ $student->is_active ? 'Disable' : 'Enable' }}
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function () {
            $('.toggle-status').click(function () {
                var studentId = $(this).data('id');
                var button = $(this);
              

                $.ajax({
                    url: '{{ route('toggle.status') }}',
                    method: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        id: studentId
                    },
                    success: function (response) {
                        if (response.is_active) {
                            button.text('Disable');
                        } else {
                            button.text('Enable');
                        }
                    },
                    error: function (xhr) {
                        console.error('Error:', xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>
</html>

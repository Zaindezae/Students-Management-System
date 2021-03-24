<form class="ajax-update" action="{{ route('marks.update', [$exam_id, $my_class_id, $section_id, $subject_id]) }}"
    method="post">
    @csrf @method('put')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>ADM_NO</th>
                @if ($class_type->code == 'BCA' || 'BBA' || 'BCom')
                    <th>HALF YR EXAM (50)</th>
                    <th>FINAL EXAM (50)</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($marks->sortBy('user.name') as $mk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->user->name }} </td>
                    <td>{{ $mk->user->student_record->adm_no }}</td>

                    @if ($class_type->code == 'BCA' || 'BBA' || 'BCom')
                        <td><input min="1" max="50" class="w-50 text-center" name="t1_{{ $mk->id }}"
                                value="{{ rand(1, 50) }}" type="number"></td>
                        <td><input min="1" max="50" class="w-50 text-center" name="exm_{{ $mk->id }}"
                                value="{{ rand(1, 50) }}" type="number"></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center mt-2">
        <button type="submit" class="btn btn-primary">Update Marks <i class="icon-paperplane ml-2"></i></button>
    </div>
</form>
